<?php
class Controller_Login extends Controller {
	
	protected $_layout = 'layout/login';
	
	public function action_index() {
		$this->response->body(View::factory($this->_layout)->set('content', View::factory('login/form')));
	}
	
	public function action_land() {
		$name = Arr::get($_POST, 'name', '');
		$password = Arr::get($_POST, 'password', '');
		
		$code = 0;
		$message = 'OK';
		$data = NULL;
		
		try {
			$landed = Author::instance()->login($name, $password);
			if($landed) {
				$code = 1;
				$data = '/profile';
			}
			$message = '登录失败';
		} catch(Exception $e) {
			$code = 0;
			$message = $e->getMessage();
		}
		
		$response = array(
			'code' => $code,
			'message' => $message,
			'data' => $data,
		);
		echo json_encode($response);
		exit();
	}
}