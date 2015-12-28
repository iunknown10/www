<?php
class Controller_Register extends Controller_Render {
	
	protected $_layout = 'layout/register';
	
	public function action_index() {
		$code = Arr::get($_GET, 'code', NULL);
		
		$userId = Author::userId();
		$user = Dao::factory('User')->getUserByUserId($userId);
		
		$invitation = Dao::factory('Invitation')->getInvitationByCode($code);
		if(!$invitation instanceof Model_Invitation) {
			$content = View::factory('register/noinvitation');
		} else {
			$content = View::factory('register/form')
				->set('invitation', $invitation);
		}
		$this->_layout->content = $content;
	}
	
	/**
	 * 保存账号
	 */
	public function action_save() {
		$this->_contentType = 'application/json';
		
		$code = Arr::get($_POST, 'code', '');
		$agreement = Arr::get($_POST, 'agreement', 0);
		$raw = array(
			'nickname' => Arr::get($_POST, 'nickname', ''),
			'password' => Arr::get($_POST, 'password', ''),
			'email' => Arr::get($_POST, 'email', ''),
			'mobile' => Arr::get($_POST, 'mobile', ''),
			'gender' => Arr::get($_POST, 'gender', -1),
		);
		
		$errors = array();
		
		
		if(!$code) {
			return $this->failed('对不起，您需要iRunning邀请码，才能完成注册！');
		}
		if(!$agreement) {
			return $this->failed('您必须同意《iRunning用户协议》，才能完成注册！');
		}
		if(!$raw['password']) {
			$errors['password'] = '密码不能为空';
		}
		$invitation = Dao::factory('invitation')->getInvitationByCode($code);
		if(!$invitation) {
			return $this->failed('对不起，邀请码无效！');
		}
		
		$raw['introducer'] = $invitation->getUserId();
		
		if(!Misc::isEmail($raw['email'])) {
			$errors['email'] = '邮箱错误';
		}
		
		$email = $raw['email'];
		$users = Dao::factory('User')->getUsersByEmail($email);
		if($users->count()) {
			$errors['email'] = '邮箱已存在';
		}
		
		$nickname = $raw['nickname'];
		$users = Dao::factory('User')->getUsersByNickname($nickname);
		if($users->count()) {
			$errors['nickname'] = '昵称已被使用';
		}
		
		if($errors) {
			$this->_errors = $errors;
			return $this->failed('数据有误');
		}
		
		$salt = chr(mt_rand(33, 126))
			.chr(mt_rand(33, 126))
			.chr(mt_rand(33, 126))
			.chr(mt_rand(33, 126))
			.chr(mt_rand(33, 126))
			.chr(mt_rand(33, 126));
		$raw['password'] = md5($raw['password'].$salt);
		$raw['salt'] = $salt;
		
		$result = Dao::factory('User')->insert($raw);
		if(!$result) {
			return $this->failed('注册失败');
		}
		
		$data = array('user_id' => $result[0], 'nickname' => $nickname);
		Session::instance()->set('user', $data);
		
		return $this->success('注册成功');
	}
	
	/**
	 * 校验字段
	 */
	public function action_verify() {
		$this->_contentType = 'application/json';
		
		$nickname = Arr::get($_POST, 'nickname', NULL);
		$email = Arr::get($_POST, 'email', NULL);
		$mobile = Arr::get($_POST, 'mobile', NULL);
		
		$result = FALSE;
		$users = NULL;
		if($nickname) {
			$users = Dao::factory('User')->getUsersByNickname($nickname);
			if($users->count() > 0) {
				$result = TRUE;
			}
		}
		if($email) {
			$users = Dao::factory('User')->getUsersByEmail($email);
			if($users->count() > 0) {
				$result = TRUE;
			}
		}
		if($mobile) {
			$users = Dao::factory('User')->getUsersByMobile($mobile);
			if($users->count() > 0) {
				$result = TRUE;
			}
		}
		
		$this->_data = $result;
	}
}