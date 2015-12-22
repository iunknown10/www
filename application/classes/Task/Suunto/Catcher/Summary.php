<?php
class Task_Suunto_Catcher_Summary {
	
	static protected $_instance = NULL;
	
	protected $_year = '';
	
	protected $_month = '';
	
	protected $_day = '';
	
	
	static public function instance() {
		if(self::$_instance === NULL) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}
	
	public function year($year) {
		$this->_year = $year;
		return $this;
	}
	
	public function month($month) {
		$this->_month = $month;
		return $this;
	}
	
	public function day($day) {
		$this->_day = $day;
		return $this;
	}
	
	public function execute() {
		$cookieFile = Task_Suunto_Login::instance()->getCookieFile();
		$summaryURL = Kohana::$config->load('suunto.summary_url');
	
		$handler = curl_init();
		curl_setopt($handler, CURLOPT_URL, $summaryURL);
		curl_setopt($handler, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($handler, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($handler, CURLOPT_COOKIEFILE, $cookieFile);
		curl_setopt($handler, CURLOPT_COOKIEJAR, $cookieFile);
	
		$response = curl_exec($handler);
		
		if($response == FALSE) {
			throw new Task_Suunto_Exception(curl_error($handler));
		}
	
		curl_close($handler);
		
		$result = json_decode($response, TRUE);
		if(json_last_error()) {
			throw new Task_Suunto_Exception($response);
		}
		
		$this->_result = $result;
	
		return $this;
	}
	
	public function save() {
		if(!isset($this->_result['Data']) || !is_array($this->_result['Data'])) {
			throw new Task_Suunto_Exception('摘要未获取成功');
		}
		
		$data = $this->_result['Data'];
		
		$year = date('Y');
		$month = date('m');
		$day = date('d');
		
		$userId = Task_Suunto_Login::instance()->getUserId();
		$lastActivity = Dao::factory('Activity')->getLastActivity();
		$user = Dao::factory('User')->getUserByUserId($userId);
		$schemas = Dao::factory('Schema')->getSchemasByAppname('suunto');
		$timezoneOffset = 0;
		
		if($user instanceof Model_User) {
			$timezoneOffset = $user->getTimezoneOffset();
		}
		
		$keys = array();
		foreach($schemas as $key => $schema) {
			$index = $schema->getAppSchemaId();
			$key = $schema->getSchema();
			$keys[$index] = $key;
		}
		
		$values = array();
		foreach($data as $n => $row) {
			$values[$n]['user_id'] = Task_Suunto_Login::instance()->getUserId();
			$values[$n]['appname'] = 'suunto';
			$values[$n]['timezone_offset'] = -$timezoneOffset;
			foreach($row as $index => $value) {
				if(!isset($keys[$index])) {
					continue;
				}
				if(is_null($value)) {
					continue;
				}
				
				$key = $keys[$index];
				
				//patch
				if($key == 'start_time') {
					$value = $value / 1000;
				}

				$values[$n][$key] = $value;
			}
		}
		
		//如果没有指定日期，则从数据库中最后一天开始获取到当前日期
		if($this->_year && $this->_month && $this->_day) {
			$year = $this->_year;
			$month = $this->_month;
			$day = $this->_day;
		} else {
			if($lastActivity) {
				$year = $lastActivity->getYear();
				$month = $lastActivity->getMonth();
				$day = $lastActivity->getDay();
			}
		}
		
		foreach($values as $row) {
			if($row['year'] < $this->_year
				&& $row['month'] < $this->_month
				&& $row['day'] < $this->_day) {
				continue;
			}
			try {
				Dao::factory('Activity')->addActivity($row);
			} catch(Exception $e) {
				echo $e->getMessage()."\n";
			}
		}
	}
}