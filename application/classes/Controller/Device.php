<?php
class Controller_Device extends Controller_Layout {
	
	public function action_index() {
		
		$this->_layout->content = View::factory('device/running');
	}
	
	public function action_setting() {
		
	}
	
	public function action_save_setting() {
		var_dump($_POST);
	}
}