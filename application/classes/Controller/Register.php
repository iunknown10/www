<?php
class Controller_Register extends Controller {
	
	protected $_layout = 'layout/default';
	
	public function action_index() {
		
		$this->_layout = View::factory($this->_layout);
		$this->_layout->content = View::factory('register/index');
		$this->response->body($this->_layout->render());
	}
	
	public function action_save() {
		$values = array(
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
		
		
	}
}