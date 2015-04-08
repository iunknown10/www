<?php
class Running_Lander {
	
	protected $_loginURL = 'https://www.nike.com/profile/login';
	
	protected $_username = '';
	
	protected $_password = '';
	
	
	static protected $_instance = NULL;
	
	static public function instance() {
		if(self::$_instance === NULL) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}
	
	public function __construct($username = '', $password = '') {
		if($username) {
			$this->_username = $username;
		}
		
		if($password) {
			$this->_password = $password;
		}
		return $this;
	}
	
	public function username($username = '') {
		$this->_username = $username;
		return $this;
	}
	
	public function password($password = '') {
		$this->_password = $password;
		return $this;
	}
	
	public function execute() {
		$post = array(
			'login' => $this->_username,
			'password' => $this->_password,
			'rememberMe' => 'TRUE',
		);
		

		$author = array(
			'id' => 0,
			'nikePlusId' => '',
			'email' => '',
			'screenName' => '',
			'avatar' => '',
			'fuelActivationDate' => '',
		);
		
		session_start();
		
		$cookieFile = '/tmp/cookies/'. session_id();
		
		$handler = curl_init();
		curl_setopt($handler, CURLOPT_URL, $this->_loginURL);
		curl_setopt($handler, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
		curl_setopt($handler, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($handler, CURLOPT_POST, TRUE);
		curl_setopt($handler, CURLOPT_POSTFIELDS, http_build_query($post));
		curl_setopt($handler, CURLOPT_COOKIEFILE, $cookieFile);
		curl_setopt($handler, CURLOPT_COOKIEJAR, $cookieFile);
		
		$response = curl_exec($handler);
		curl_close($handler);
		
		$response = json_decode($response, TRUE);
		
		if(!is_array($response)) {
			throw new Exception('登陆失败');
		}
		$entity = $response['entity'];
		$links = $response['links'][0];
		
		$nikePlusId = $entity['nikePlusId'];
		$screenName = $entity['screenName'];
		
		$author['id'] = $entity['id'];
		$author['nikePlusId'] = $entity['nikePlusId'];
		$author['email'] = $entity['email'];
		$author['screenName'] = $entity['screenName'];

		$detailURL = 'https://www.nike.com'. $links['uri'];
		
		$handler = curl_init();
		curl_setopt($handler, CURLOPT_URL, $detailURL);
		curl_setopt($handler, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
		curl_setopt($handler, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($handler, CURLOPT_COOKIEFILE, $cookieFile);
		curl_setopt($handler, CURLOPT_COOKIEJAR, $cookieFile);
		
		$response = curl_exec($handler);
		curl_close($handler);
		
		$data = $response;
		
		$response = json_decode($response, TRUE);
		
		$entity = $response['entity'];
		$author['avatar'] = $entity['avatar']['fullUrl'];
		
		$values = $author;
		$values['profile_data'] = $data;
		$values['create_time'] = time();
		$values['update_time'] = time();

		$profile = Dao::factory('Profile')->getProfileByNikePlusId($nikePlusId);
		if(!$profile) {
			Dao::factory('Profile')->insert($values);
		} else {
			unset($values['create_time']);
			
			$author['fuelActivationDate'] = $profile->getFuelActivationDate();
			$values['fuelActivationDate'] = $profile->getFuelActivationDate();
			Dao::factory('Profile')->updateByNikePlusId($nikePlusId, $values);
		}
		
		$author['cookieFile'] = $cookieFile;
		$_SESSION['author'] = json_encode($author);
		unset($values);
		
// 		$handler = popen("php index.php --task=Catcher_Info --nikePlusId={$nikePlusId} --screenName={$screenName} --cookieFile={$cookieFile} &", 'r');
// 		pclose($handler);
		
		return TRUE;
	}
}
