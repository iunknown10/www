<?php
class Task_Catcher_Fuelband extends Minion_Task {
	
	protected $_options = array(
		'nikePlusId' => '',
		'screenName' => '',
		'year' => '',
		'month' => '',
		'day' => '',
		'cookieFile' => ''
	);
	
	protected $_fuelbandURL = 'https://secure-nikeplus.nike.com/plus/api/activity/fuelband/%s/detail/%s/%s/%s?np=true&_=%s';
	
	public function _execute(array $params) {
		$nikePlusId = Arr::get($params, 'nikePlusId', '');
		$screenName = Arr::get($params, 'screenName', '');
		$year = Arr::get($params, 'year', NULL);
		$month = Arr::get($params, 'month', NULL);
		$day = Arr::get($params, 'day', NULL);
		$cookieFile = Arr::get($params, 'cookieFile', '');
			
		$fuelbandURL = sprintf($this->_fuelbandURL, $screenName, $year, $month, $day, time());
		
		$handler = curl_init();
		curl_setopt($handler, CURLOPT_URL, $fuelbandURL);
		curl_setopt($handler, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($handler, CURLOPT_COOKIEFILE, $cookieFile);
		curl_setopt($handler, CURLOPT_COOKIEJAR, $cookieFile);
			
		$response = curl_exec($handler);
		curl_close($handler);
		
		$directory = "/tmp/fuelband/$screenName/$year/$month";
		$file = "$day.json";
		$path = $directory.'/'.$file;
		
		if(!is_dir($directory)) {
			$check = mkdir($directory, 0777, TRUE);
			if(!$check) {
				echo '创建目录失败';
				exit();
			}
		}
		
		$data = json_decode($response, TRUE);
		if($data['lastDayFuelValue'] == 0) {
			return FALSE;
		}

		file_put_contents($path, $response);
	}
}