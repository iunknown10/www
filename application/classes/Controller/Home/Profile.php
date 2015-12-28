<?php
class Controller_Home_Profile extends Controller_Render {
	
	protected $_checkLogin = TRUE;
	
	protected $_layout = 'layout/home/profile';

	public function action_index() {
		$lander = Session::instance()->get('user');
		$userId = $lander['user_id'];
		$nickname = $lander['nickname'];

		$user = Dao::factory('User')->getUserByUserId($userId);
		if(!$user) {
			return Controller::redirect('/login');
		}
		
		$this->_layout->content = View::factory('home/profile/form')
			->set('user', $user);
	}
	
	public function action_save() {
		$this->_contentType = 'application/json';
		
		$raw = array(
			'email' => Arr::get($_POST, 'email', ''),
			'mobile' => Arr::get($_POST, 'mobile', ''),
			'gender' => Arr::get($_POST, 'gender', -1),
			'name' => Arr::get($_POST, 'name', ''),
			'wechat' => Arr::get($_POST, 'wechat', ''),
			'qq' => Arr::get($_POST, 'qq', ''),
			'id_card' => Arr::get($_POST, 'id_card', ''),
			'birth_place' => Arr::get($_POST, 'birth_place', ''),
			'live_place' => Arr::get($_POST, 'live_place', ''),
		);
		
		$errors = array();
		if(!$raw['name']) {
			$errors['name'] = '姓名不能为空';
		}
		if($raw['id_card'] && !Misc::isIDCard($raw['id_card'])) {
			$errors['id_card'] = '身份证号错误';
		}
		if(!Misc::isEmail($raw['email'])) {
			$errors['email'] = '邮箱格式不正确';
		}
		if(!Misc::isMobile($raw['mobile'])) {
			$errors['mobile'] = '手机号必须是11位数字';
		}
		if($raw['qq'] && !Misc::isQQ($raw['qq'])) {
			$errors['qq'] = 'QQ号必须是数字';
		}
		
		$users = Dao::factory('User')->getUsersByEmail($raw['email'], array(Author::userId()));
		if($users->count()) {
			$errors['email'] = '邮箱已被使用';
		}
		$users = Dao::factory('User')->getUsersByMobile($raw['mobile'], array(Author::userId()));
		if($users->count()) {
			$errors['mobile'] = '手机号已被使用';
		}
		if($errors) {
			$this->_errors = $errors;
			return $this->failed('数据有误');
		}
		
		if(isset($raw['id_card'])) {
			$IDCard = $raw['id_card'];
			$raw['birth_year'] = $IDCard[6].$IDCard[7].$IDCard[8].$IDCard[9];
			$raw['birth_month'] = $IDCard[10].$IDCard[11];
			$raw['birth_day'] = $IDCard[12].$IDCard[13];
		}
		
		$result = Dao::factory('User')->update(Author::userId(), $raw);
		if(!$result) {
			return $this->failed('更新失败');
		}
		
	}
	

	/**
	 * 校验字段
	 */
	public function action_verify() {
		$this->_contentType = 'application/json';
	
		$email = Arr::get($_POST, 'email', NULL);
		$mobile = Arr::get($_POST, 'mobile', NULL);
	
		$result = FALSE;
		$users = NULL;
		if($email) {
			$users = Dao::factory('User')->getUsersByEmail($email, array(Author::userId()));
			if($users->count() > 0) {
				$result = TRUE;
			}
		}
		if($mobile) {
			$users = Dao::factory('User')->getUsersByMobile($mobile, array(Author::userId()));
			if($users->count() > 0) {
				$result = TRUE;
			}
		}
	
		$this->_data = $result;
	}
	
	public function action_numbers() {
		$this->_contentType = 'application/json';
		
		$userId = Author::userId();
		
		$articleNumber = Dao::factory('Article')->countByUserId($userId);
		$photoNumber = Dao::factory('Photo')->countByUserId($userId);
		$routeNumber = Dao::factory('Activity')->countByUserId($userId);
		
		$this->_data = array(
			'article' => $articleNumber,
			'photo' => $photoNumber,
			'route' => $routeNumber
		);
		return $this->success();
	}
}