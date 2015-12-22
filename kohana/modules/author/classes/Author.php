<?php
/**
 * 用户登录管理类
 */
class Author {
	
	static public $sessionKey = 'user';

	protected static $_instance = NULL;
	
	public static function instance() {
		if(self::$_instance === NULL) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}
	
	public static function userId() {
		return Author::instance()->getUserId();
	}
	
	public static function name() {
		return Author::instance()->getName();
	}
	
	public static function nickname() {
		return Author::instance()->getNickname();
	}
	
	protected $_userId = 0;
	
	protected $_name = '';
	
	protected $_nickname = '';


	public function __construct() {
		$author = Session::instance()->get(Author::$sessionKey, array());
		if(isset($author['user_id'])) {
			$this->_userId = $author['user_id'];
		}
		if(isset($author['name'])) {
			$this->_name = $author['name'];
		}
		if(isset($author['nickname'])) {
			$this->_nickname = $author['nickname'];
		}
	}
	
	/**
	 * 判断是否已经登录
	 * 
	 * @return boolean
	 */
	public function isLogin() {
		return Session::instance()->get(Author::$sessionKey);
	}

	/**
	 * 本地登录
	 * @param $name string
	 * @param $password string
	 * 
	 * @return boolean
	 */
	public function login($key, $password) {
		$result = Dao::factory('User')->getUsersByLoginKey($key);
		
		if(!$result->count()) {
			throw new Author_Exception('没有这个账号');
		}
		
		$user = $result->current();
		if($user->getPassword() != md5($password.$user->getSalt())) {
			throw new Author_Exception('密码不正确');
		}
		
		if($user->getStatus() == -1) {
			throw new Author_Exception('登录失败，账号被禁用了');
		}
		
		$this->_userId = $user->getUserId();
		$this->_name = $user->getName();
		$this->_nickname = $user->getNickname();
		Session::instance()->set(Author::$sessionKey, $user->asArray());
		
		return TRUE;
	}
	
	/**
	 * 登出
	 * 
	 * @return boolean
	 */
	public function logout() {
		Session::instance()->delete(Author::$sessionKey);
		return TRUE;
	}
	
	/**
	 * 账户id
	 * @return integer
	 */
	public function getUserId() {
		return $this->_userId;
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
	public function getNickname() {
		return $this->_nickname;
	}
}
