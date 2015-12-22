<?php
class Controller_Register extends Controller_Render {
	
	protected $_layout = 'layout/default';
	
	public function action_index() {

		$user = Dao::factory('user')->getUserByUserId(10000);
		var_export($user);
		
		$this->_layout->content = View::factory('register/index');
	}
	
	public function action_save() {
		$this->_contentType = 'application/json';
		
		$code = Arr::get($_GET, 'code', '');
		$raw = array(
			'name' => Arr::get($_POST, 'name', ''),
			'nickname' => Arr::get($_POST, 'nickname', ''),
			'email' => Arr::get($_POST, 'email', ''),
			'mobile' => Arr::get($_POST, 'mobile', ''),
			'wechat' => Arr::get($_POST, 'wechat', ''),
			'qq' => Arr::get($_POST, 'qq', ''),
			'id_card' => Arr::get($_POST, 'id_card', ''),
			'birth_place' => Arr::get($_POST, 'birth_place', ''),
			'live_place' => Arr::get($_POST, 'live_place', ''),
			'introducer' => Arr::get($_POST, 'introducer', 0)
		);
		
		$errors = array();
		
		$result = Dao::factory('invitation')->getInvitationByCode($code);
		if(!$result->count()) {
			return $this->failed('对不起，您需要iRunning邀请码，才能完成注册！');
		}
		
		$invitation = $result->current();
		$raw['introducer'] = $invitation->getUserId();
		
		if(!Misc::isIDCard($raw['id_card'])) {
			$errors['id_card'] = '身份证号错误';
		}
		if(!Misc::isEmail($raw['email'])) {
			$errors['email'] = '邮箱错误';
		}
		
		$email = $raw['email'];
		$user = Dao::factory('user')->getUserByEmail($email);
		if($user->count()) {
			$errors['email'] = '邮箱已存在';
		}
		
		$nickname = $raw['nickname'];
		$user = Dao::factory('user')->getUserByNickname($nickname);
		if($user->count()) {
			$errors['nickname'] = '昵称已被使用';
		}
		
		if($errors) {
			$this->_errors = $errors;
			return $this->failed('数据有误');
		}
		
		$IDCard = $raw['id_card'];
		$raw['birth_year'] = $IDCard[6].$IDCard[7].$IDCard[8].$IDCard[9];
		$raw['birth_month'] = $IDCard[10].$IDCard[11];
		$raw['birth_day'] = $IDCard[12].$IDCard[13];
		
		$result = Dao::factory('user')->insert($raw);
		if(!$result) {
			return $this->failed('注册失败');
		}
		
		return $this->success('注册成功');
	}
	
}