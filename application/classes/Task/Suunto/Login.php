<?php
class Task_Suunto_Login {
	
	protected $_userId = 0;
	
	protected $_name = '';
	
	protected $_password = '';
	
	protected $_expired = 1200;
	
	protected $_cookieFile = NULL;
	
	protected $_logined = FALSE;
	
	protected $_retry = 3;
	
	
	static protected $_instance = NULL;
	
	static public function instance() {
		if(self::$_instance === NULL) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}
	
	public function userId($userId) {
		$this->_userId = $userId;
		return $this;
	}
	
	public function name($name) {
		$this->_name = $name;
		return $this;
	}
	
	public function password($password) {
		$this->_password = $password;
		return $this;
	}
	
	public function getUserId() {
		return $this->_userId;
	}
	
	public function getCookieFile() {
		return $this->_cookieFile;
	}
	
	public function execute() {

		$this->_cookieFile = '/tmp/'.md5($this->_name);
		
		$mtime = is_file($this->_cookieFile) ? filemtime($this->_cookieFile) : 0;
		if(time() - $mtime > $this->_expired) {
			$try = 0;
			while($try < $this->_retry) {
				$landed = $this->_login();
				if($landed) {
					break;
				}
			}

			if(!$landed) {
				throw new Task_Suunto_Exception('登陆失败');
			}
		}
		
		return $this->_logined = TRUE;
	}
	
	protected function _login() {

		$signinURL = Kohana::$config->load('suunto.signin_url');
		$authenticatedURL = Kohana::$config->load('suunto.authenticated_url');
		
		$emailAddress = $this->_name;
		$password = $this->_password;
		
		$handler = curl_init();
		curl_setopt($handler, CURLOPT_URL, $signinURL.'?service=Movescount&emailAddress='.$emailAddress.'&password='.$password);
		curl_setopt($handler, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($handler, CURLOPT_CONNECTTIMEOUT, 5);
		$response = curl_exec($handler);
		curl_close($handler);
		
		$token = $response;
		
		//{"token":"6935a07b-568c-43bb-a7d5-fc26fdbc5416","utcOffset":"480","redirectUri":"/scoreboard"}
		$token = str_replace('"', '', $token);
		$authenticated = array(
			'token' => $token,
			'utcOffset' => "480",
			'redirectUri' => "/"
		);
		$data = json_encode($authenticated);
		
		$handler = curl_init();
		curl_setopt($handler, CURLOPT_URL, $authenticatedURL);
		curl_setopt($handler, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($handler, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($handler, CURLOPT_COOKIEFILE, $this->_cookieFile);
		curl_setopt($handler, CURLOPT_COOKIEJAR, $this->_cookieFile);
		curl_setopt($handler, CURLOPT_POST, TRUE);
		curl_setopt($handler, CURLOPT_POSTFIELDS, $data);
		curl_setopt($handler, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json',
			'Content-Length: ' . strlen($data),
		));
		
		$response = curl_exec($handler);
		curl_close($handler);
		if(!$response) {
			return FALSE;
		}
		
		$result = json_decode($response, TRUE);
		if(json_last_error() != JSON_ERROR_NONE || !$result) {
			return FALSE;
		}
		
		return TRUE;
	}
}