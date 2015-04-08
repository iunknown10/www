<?php
class Controller_Index extends Controller_Layout {
	
	public function action_index() {
		
		$this->_layout->content = View::factory('index/index');
	}
}