<?php
class Controller_Login extends Controller {
	
	protected $_layout = 'layout/default';
	
	public function action_index() {
		$this->response->body(View::factory($this->_layout)->set('content', View::factory('login/index')));
	}
	
	public function action_land() {
		$username = Arr::get($_POST, 'username', '');
		$password = Arr::get($_POST, 'password', '');
		
		try {
			Lander::instance()->username($username)->password($password)->execute();
		} catch(Exception $e) {
			echo $e->getMessage();
			exit();
		}
		Controller::redirect('main/guide');
	}
}