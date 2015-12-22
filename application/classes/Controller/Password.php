<?php
class Controller_Password extends Controller_Render {
	
	protected $_layout = 'layout/password';
	
	public function action_forgot() {
		$this->_layout->content = View::factory('password/forgot');
	}
	
	public function action_change() {
		$this->_layout->content = View::factory('password/change');
	}
	
	public function action_retrieve() {
		$message = 'An email has been sent.';
		$this->_layout->content = View::factory('password/message')
			->set('message', $message);
	}
}