<?php
class Task_Suunto_Catcher_Activity_Detail {
	
	static protected $_instance = NULL;
	
	protected $_activityId = 0;
	
	protected $_result = '';
	
	static public function instance() {
		if(self::$_instance === NULL) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}
	
	public function activityId($activityId) {
		$this->_activityId = $activityId;
		return $this;
	}
	
	
	public function execute() {
		$schemas = Dao::factory('Schema')->getSchemasByAppname('suunto');
		$activity = Dao::factory('Activity')->getActivityByActivityId($this->_activityId);
		
		if(!$activity instanceof Model_Activity) {
			throw new Task_Suunto_Exception('不存在的活动'.$this->_activityId);
		}
		
		$cookieFile = Task_Suunto_Login::instance()->getCookieFile();
		$exportURL = Kohana::$config->load('suunto.export_url');
		
		$handler = curl_init();
		curl_setopt($handler, CURLOPT_URL, $exportURL.'?id='.$activity->getExtraId().'&format=kml');
		curl_setopt($handler, CURLOPT_RETURNTRANSFER, TRUE);
// 		curl_setopt($handler, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($handler, CURLOPT_COOKIEFILE, $cookieFile);
		curl_setopt($handler, CURLOPT_COOKIEJAR, $cookieFile);
		
		$response = curl_exec($handler);
		
		if($response == FALSE) {
			throw new Task_Suunto_Exception(curl_error($handler));
		}
		
		curl_close($handler);
		
		$this->_result = $response;
		return $this;
	}
	
	public function save() {
		try {
			$xml = new SimpleXMLElement($this->_result);
		} catch(Exception $e) {
			throw new Task_Suunto_Exception($e->getMessage().':'. $this->_result);
		}
		
		$namespace = $xml->getNamespaces(TRUE);

		$nodes = $xml->xpath('//gx:Track');
		$times = isset($nodes[0]) ? $nodes[0]->when : array();
		
		$nodes = $xml->xpath('//gx:Track');
		$coordinates = isset($nodes[0]) ? $nodes[0]->children($namespace['gx'])->coord : array();
		
		$nodes = $xml->xpath('//gx:SimpleArrayData[@name="Distance"]');
		$distances = isset($nodes[0]) ? $nodes[0]->children($namespace['gx']) : array();
		
		$nodes = $xml->xpath('//gx:SimpleArrayData[@name="Speed"]');
		$speeds = isset($nodes[0]) ? $nodes[0]->children($namespace['gx']) : array();
		
		$nodes = $xml->xpath('//gx:SimpleArrayData[@name="Heartrate"]');
		$heartrates = isset($nodes[0]) ? $nodes[0]->children($namespace['gx']) : array();
		
		$rowCount = count($times);
		
		Dao::begin();
		for($i = 0; $i < $rowCount; $i++) {
			$coordinate = explode(' ', $coordinates[$i]);
			$longitude = $coordinate[0];
			$latitude = $coordinate[1];
			$altitude = $coordinate[2];
			$distance = isset($distances[$i]) ? (Float)$distances[$i] : 0;
			$speed = isset($speeds[$i]) ? (Float)$speeds[$i] : 0;
			$heartrate = isset($heartrates[$i]) ? (Float)$heartrates[$i] : 0;
			$time = strtotime($times[$i]);
			
			$row = array(
				'activity_id' => $this->_activityId,
				'latitude' => $latitude,
				'longitude' => $longitude,
				'altitude' => $altitude,
				'distance' => $distance,
				'speed' => $speed,
				'heartrate' => $heartrate,
				'time' => $time,
				'create_time' => time(),
			);
			
			$result = Dao::factory('Coord')->create($row);
			if(!$result) {
				Dao::rollback();
				throw new Task_Suunto_Exception('插入路线数据失败');
			}
		}
		Dao::commit();
	}
}