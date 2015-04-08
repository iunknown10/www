<?php
class Controller_Layout extends Controller {

	protected $_layout = 'layout/default';
	
	protected $_autoRender = TRUE;
	
	public function before() {
// 		try {
// 			$logined = Author::instance()->isLogin();
// 			if(!$logined) {
// 				return Controller::redirect($this->_loginURL);
// 			}
// 		} catch(Exception $e) {
// 			return Controller::redirect($this->_loginURL);
// 		}
	
// 		if(!ACL::access($this->request->controller(), $this->request->action())) {
// 			return Controller::redirect($this->_deniedURL);
// 		}

		parent::before();
		

// 		if(!Author::instance()->isLogined()) {
// 			Controller::redirect('login/index');		
// 		}
		
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