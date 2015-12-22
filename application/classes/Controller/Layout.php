<?php
class Controller_Layout extends Controller {

	protected $_layout = 'layout/default';
	
	protected $_autoRender = TRUE;
	
	public function before() {
		parent::before();
	
		if($this->_autoRender === TRUE) {
			$this->_layout = View::factory($this->_layout);
		}
	}
	
	public function after() {
		if($this->_autoRender === TRUE) {
			$this->response->body($this->_layout->render());
		}
	
		parent::after();
	}
}