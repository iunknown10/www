<?php
class Controller_Index extends Controller_Render {
	
	public function action_index() {
		
		$this->_layout->content = View::factory('index/index');
	}
}