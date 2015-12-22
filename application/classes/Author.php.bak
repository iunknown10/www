<?php
class Author {

	protected $_id = 0;
	
	protected $_nikePlusId = '';
	
	protected $_email = '';
	
	protected $_screenName = '';
	
	protected $_fuelActivationDate = '';
	
	protected $_cookieFile = '';
	
	protected $_isLogined = FALSE;
	
	
	static protected $_instance = NULL;
	
	static public function instance() {
		if(self::$_instance === NULL) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}
	
	
	public function __construct() {
		session_start();
		
		if(isset($_SESSION['author'])) {
			$this->_isLogined = TRUE;
			
			$author = json_decode($_SESSION['author'], TRUE);
			
			$this->_id = $author['id'];
			$this->_nikePlusId = $author['nikePlusId'];
			$this->_email = $author['email'];
			$this->_screenName = $author['screenName'];
			$this->_avatar = $author['avatar'];
			$this->_fuelActivationDate = $author['fuelActivationDate'];
			$this->_cookieFile = $author['cookieFile'];
		}
	}
	
	public function isLogined() {
		return $this->_isLogined;
	}
	
	public function getId() {
		return $this->_id;
	}
	
	public function getNikePlusId() {
		return $this->_nikePlusId;
	}
	
	public function getEmail() {
		return $this->_email;
	}
	
	public function getScreenName() {
		return $this->_screenName;
	}
	
	public function getAvatar() {
		return $this->_avatar();
	}
	
	public function getFuelActivationDate() {
		return $this->_fuelActivationDate;
	}
	
	public function getCookieFile() {
		return $this->_cookieFile;
	}
}