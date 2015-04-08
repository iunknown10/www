<?php
class Task_Catcher_Info extends Minion_Task {

	protected $_options = array(
			'nikePlusId' => '',
			'screenName' => '',
			'cookieFile' => ''
	);
	
	protected $_infoURL = 'https://secure-nikeplus.nike.com/plus/profile/%s/';
	
	public function _execute(array $params) {
		$nikePlusId = Arr::get($params, 'nikePlusId', '');
		$screenName = Arr::get($params, 'screenName', '');
		$cookieFile = Arr::get($params, 'cookieFile', '');
		
		$infoURL = sprintf($this->_infoURL, $screenName);
		
		$handler = curl_init();
		curl_setopt($handler, CURLOPT_URL, $infoURL);
		curl_setopt($handler, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($handler, CURLOPT_COOKIEFILE, $cookieFile);
		curl_setopt($handler, CURLOPT_COOKIEJAR, $cookieFile);
		
		$response = curl_exec($handler);
		curl_close($handler);
		
		preg_match('@window\.np\.settings\.user\.records = (.*?);@si', $response, $matches);
		
		if(!isset($matches[1])) {
			return FALSE;
		}
		$data = json_decode($matches[1], TRUE);
		
		$fuelActiveDate = time() - $data['activeDays'] * 86400;
		$fuelActiveDate = strtotime(date('Y-m-d', $fuelActiveDate - 86400));
		
		$profile = Dao::factory('Profile')->getProfileByNikePlusId($nikePlusId);
		if(!$profile) {
			return FALSE;
		}
		
		$values = array();
		if($profile->getFuelActivationDate() == '') {
			$values['fuelActivationDate'] = $fuelActiveDate;
		}
		$values['fuel_data'] = json_encode($data, TRUE);
		$values['update_time'] = time();
		
		Dao::factory('Profile')->updateByNikePlusId($nikePlusId, $values);
		
		return TRUE;
	}
}