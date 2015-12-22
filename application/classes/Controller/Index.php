<?php
class Controller_Index extends Controller_Render {
	
	protected $_layout = 'layout/index';
	
	public function action_index() {
		$this->_layout->content = View::factory('index/index');
	}
	
	public function action_page() {
		$html = Arr::get($_GET, 'html', '');
		if(!$html) {
			exit('0');
		}
		$this->_layout = View::factory('html/'.$html);
	}
}