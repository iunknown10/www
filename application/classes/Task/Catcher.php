<?php
class Task_Catcher extends Minion_Task {
	
	protected $_options = array(
		'cookieFile' => '',
		'url' => '',
	);
	
	public function _execute(array $params) {
		$cookieFile = Arr::get($params, 'cookieFile', '');
		$url = Arr::get($params, 'url', '');
		
		echo $cookieFile;
		echo $url;
	}
	
}