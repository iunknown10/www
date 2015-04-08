<?php
/**
 * 用户登录管理类
 */
class Author {
	
	static public $default = 'author';

	protected static $_instance = NULL;
	
	public static function instance() {
		if(self::$_instance === NULL) {
			$config = Kohana::$config->load(self::$default)->as_array();
			self::$_instance = new self($config);
		}
		return self::$_instance;
	}
	
	public static function accountId() {
		return Author::instance()->getAccountId();
	}
	
	public static function name() {
		return Author::instance()->getName();
	}
	
	public static function givenName() {
		return Author::instance()->getGivenName();
	}
	
	public static function departments() {
		return Author::instance()->getDepartments();
	}
	
	public static function roles() {
		return Author::instance()->getRoles();
	}
	
	public static function privileges() {
		return Author::instance()->getPrivileges();
	}

	protected $_accountId = 0;
	
	protected $_name = '';
	
	protected $_given_name = '';

	protected $_departments = NULL;

	protected $_roles = NULL;

	protected $_privileges = NULL;
	
	protected $_config = array();

	protected $_host = 'http://ivms.video.sina.com.cn';

	public function __construct(array $config = NULL) {
		if($config === NULL) {
			throw new Author_Exception('缺少配置文件');
		}
		$this->_config = $config;
		$this->_host = Kohana::$config->load('default.host');
		$author = Session::instance()->get('author', array());
		if(isset($author['account_id'])) {
			$this->_accountId = $author['account_id'];
		}
		if(isset($author['name'])) {
			$this->_name = $author['name'];
		}
		if(isset($author['given_name'])) {
			$this->_given_name = $author['given_name'];
		}
	}
	
	/**
	 * 判断是否已经登录
	 * 
	 * $encrypt = new Encrypt($key, $mode, $cipher);
	 * $passport = $encrypt->encode(name@md5(ua.ip.password));
	 * 
	 * @return boolean
	 */
	public function isLogin() {
		$passport = Cookie::get($this->_config['passport'], NULL);

		if($passport === NULL) {
			return FALSE;
		}
		
		$encrypt = new Encrypt($this->_config['key'], $this->_config['mode'], $this->_config['cipher']);
		$text = $encrypt->decode($passport);
		$pairs = explode('@', $text);
		
		$name = $pairs[0];
		$identifier = $pairs[1];

		$author = Session::instance()->get('author', array());

		if(!isset($author['name']) || $name !== $author['name']) {
			$author = BLL::Account()->getAccountByName($name)->getObject('Model_Account');
			if(!$author) {
				throw new Author_Exception('获取账户信息失败！');
			}
			$author = $author->current();
			if($identifier != md5(Request::$user_agent.Request::$client_ip.$author->getPassword())) { 
				throw new Author_Exception('登录失效！');
			}
			
			$this->_accountId = $author->getAccountId();
			$this->_name = $author->getName();
			$this->_given_name = $author->getGivenName();
			Session::instance()->set('author', $author->asArray());
		}
		
		return TRUE;
	}

	/**
	 * 本地登录
	 * @param $name string
	 * @param $password string
	 * 
	 * @return boolean
	 */
	public function localLogin($name, $password) {
		$result = BLL::Account()->getAccountByName($name)->getObject('Model_Account');
		if(!$result->count()) {
			return FALSE;
		}
		$author = $result->current();
		if($author->getPassword() != md5($password)) {
			return FALSE;
		}
		
		if($author->getStatus() == -1) {
			throw new Author_Exception('登录失败，帐号已被屏蔽');
		}
		
		$this->_accountId = $author->getAccountId();
		$this->_name = $author->getName();
		$this->_given_name = $author->getGivenName();
		Session::instance()->set('author', $author->asArray());
		
		$encrypt = new Encrypt($this->_config['key'], $this->_config['mode'], $this->_config['cipher']);
		$identifier = md5(Request::$user_agent.Request::$client_ip.$author->getPassword());
		$passport = $encrypt->encode($name.'@'.$identifier);

		Cookie::set($this->_config['passport'], $passport);
		return TRUE;
	}

	/**
	 * cas登录
	 * @param $ticket string
	 * @throws Author_Exception
	 * @throws Exception
	 * @return boolean
	 */
	public function casLogin($ticket) {

		$casValidate = $this->_config['cas']['validate'];
		$loginUrl = $this->_host."/author/caslogin";
		$url = $casValidate."?ticket=".$ticket."&service=".urlencode($loginUrl);
		$validate = file_get_contents($url);
		$xml = simplexml_load_string($validate);
		$info = $xml->info;

		$employeeId = (string)$info->username;
		$name = (string)$info->email;
		$email = (string)$info->fullemail;
		$givenName = (string)$info->erpname;
		$phone = (string)$info->telephone;
		$departments = (string)$info->organization;

		if(!$employeeId) {
			throw new Author_Exception('ticket错误！');
		}

		$departmentNames = explode('_', $departments);
		$departmentIds = array();
		$parentId = 0;
		foreach($departmentNames as $departmentName) {
			$department = BLL::Department()->getDepartmentByName($departmentName)->getArray();
			if(!$department) {
				$department = array (
					'parent_id' => $parentId,
					'path' => implode(',', $departmentIds),
					'name' => $departmentName,
				);
				
				try {
					$result = BLL::Department()->create($department)->getArray();
					if(!$result[0]) {
						throw new Author_Exception('保存部门信息失败');
					}
					$parentId = $result[0];
					$departmentIds[] = $parentId;
				} catch(Exception $e) {
					throw $e;
				}
			} else {
				$department = $department[0];
				$parentId = $department['parent_id'];
				$departmentIds[] = $department['department_id'];
			}
		}
		
		$accountInput = array (
			'employee_id' => $employeeId,
			'name' => $name,
			'email' => $email,
			'given_name' => $givenName,
			'phone' => $phone,
		);

		$result = BLL::Account()->getAccountByName($name)->getObject('Model_Account');
		if(!$result->count()) {
			$accountInput['department_ids'] = $departmentIds;
			$accountInput['role_ids'] = array(Account::ROLE_NORMAL_USER);
			try {
				$result = BLL::Account()->create($accountInput)->getArray();
			} catch(Exception $e) {
				throw new Author_Exception('添加帐号异常');
			}
		} else {
			$account = $result->current()->asArray();
			$accountId = $account['account_id'];

			if($account['status'] == -1) {
				throw new Author_Exception('登录失败，帐号已被屏蔽');
			}

			//比对帐号信息
			unset($account['account_id'], $account['mobile'], $account['status'], $account['create_time'], $account['update_time']);
			$differences = array_diff($account, $accountInput);

			if($differences) {
				$accountInput['account_id'] = $accountId;
				try {
					$result = BLL::Account()->update($accountInput)->getArray();
				} catch(Exception $e) {
					throw new Author_Exception('更新帐号异常');
				}
			}

			//比对部门信息
			$oldDepartments = BLL::Account()->getAccountDepartments($accountId)->getArray();
			$oldDepartmentIds = array();
			foreach($oldDepartments as $oldDepartment) {
				$oldDepartmentIds[] = $oldDepartment['department_id'];
			}
			if(array_diff($departmentIds, $oldDepartmentIds) || array_diff($oldDepartmentIds, $departmentIds)) {
				try {
					$result = BLL::Account()->updateDepartments($accountId, $departmentIds)->getArray();
				} catch(Exception $e) {
					throw new Author_Exception('更新帐号部门异常');
				}
			}

			//判断角色是否存在
			$roles = BLL::Account()->getAccountRoles($accountId)->getArray();

			if(empty($roles)) {
				$roleIds = array(Account::ROLE_NORMAL_USER);
				try {
					$result = BLL::Account()->updateRoles($accountId, $roleIds)->getArray();
				} catch(Exception $e) {
					throw new Author_Exception('更新帐号角色异常');
				}
			}
		}

		$author = BLL::Account()->getAccountByName($name)->getObject('Model_Account');
		if(!$author) {
			throw new Author_Exception('登录异常');
		}
		$author = $author->current();

		$this->_accountId = $author->getAccountId();
		$this->_name = $author->getName();
		$this->_given_name = $author->getGivenName();
		Session::instance()->set('author', $author->asArray());
		
		$encrypt = new Encrypt($this->_config['key'], $this->_config['mode'], $this->_config['cipher']);
		$identifier = md5(Request::$user_agent.Request::$client_ip.$author->getPassword());
		$passport = $encrypt->encode($name.'@'.$identifier);
		
		Cookie::set($this->_config['passport'], $passport);

		return TRUE;
	}
	
	/**
	 * 登出
	 * 
	 * @return boolean
	 */
	public function logout() {
		Cookie::delete($this->_config['passport']);
		Session::instance()->delete('author');
		return Cookie::get($this->_config['passport']) ? FALSE : TRUE;
	}

	/**
	 * 获取cas登录url
	 *
	 * @return string
	 */
	public function casLoginUrl() {
		$casLogin = $this->_config['cas']['login'];
		$loginUrl = $this->_host."/author/caslogin";
		$casLogin .= '?service='.urlencode($loginUrl);

		return $casLogin;
	}

	/**
	 * cas退出登录时判断
	 */
	public function casChecklogin() {

		$casChecklogin = $this->_config['cas']['checklogin'];
		$casLogoutUrl = $this->_host."/author/caslogout";
		$unloginUrl = $this->_host."/author";
		$casChecklogin .= "?service=".urlencode($casLogoutUrl)."&unlogin=".urlencode($unloginUrl);

		HTTP::redirect($casChecklogin);
	}

	/**
	 * cas退出登录
	 */
	public function casLogout() {

		$casChecklogout = $this->_config['cas']['logout'];
		$unloginUrl = $this->_host.'/author';
		$casChecklogout .= "?service=".urlencode($unloginUrl);

		HTTP::redirect($casChecklogout);
	}
	
	/**
	 * 账户id
	 * @return integer
	 */
	public function getAccountId() {
		return $this->_accountId;
	}
	
	/**
	 * 账户名
	 * @return string
	 */
	public function getName() {
		return $this->_name;
	}
	
	/**
	 * 返回账户姓名
	 * @return string
	 */
	public function getGivenName() {
		return $this->_given_name;
	}

	/**
	 * 返回账户部门
	 * @return object
	 */
	public function getDepartments() {
		if($this->_departments === NULL) {
			$this->_departments = BLL::Account()->getAccountDepartments($this->_accountId)->getObject('Model_Department');
		}
		return $this->_departments;
	}
	
	/**
	 * 返回账户角色
	 * @return object
	 */
	public function getRoles() {
		if($this->_roles === NULL) {
			$this->_roles = BLL::Account()->getAccountRoles($this->_accountId)->getObject('Model_Role');
		}
		return $this->_roles;
	}
	
	/**
	 * 返回账户权限
	 * @return object
	 */
	public function getPrivileges() {
		if($this->_privileges === NULL) {
			$this->_privileges = BLL::Account()->getPrivilegesByAccountId($this->_accountId)->getObject('Model_Privilege');
		}
		return $this->_privileges;
	}
}
