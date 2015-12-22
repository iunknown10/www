<?php
class Controller_Notfound extends Controller_Render {
	
	public function action_index() {
		$this->_layout->content = View::factory('global/notfound');
	}
	
}