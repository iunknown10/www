<?php
class Controller_Main extends Controller_Layout {
	protected $_layout = 'layout/default';
	
	public function action_guide() {
		$this->_layout->content = View::factory('main/guide');
	}
	
}