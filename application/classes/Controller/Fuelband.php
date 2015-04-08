<?php
class Controller_Fuelband extends Controller_Layout {
	
	protected $_layout = 'layout/default';
	

	public function action_catcher() {
		$nikePlusId = Author::instance()->getNikePlusId();
		$profile = Dao::factory('Profile')->getProfileByNikePlusId($nikePlusId);
		
		$startDate = $profile->getFuelActivationDate();
		$overDate = strtotime(date('Y-m-d', time()));
		
		$years = array();
		$months = array();
		$days = array();
		
		for($date = $startDate; $date <= $overDate; $date += 86400) {
			$year = date('Y', $date);
				
			if(!in_array($year, $years)) {
				array_push($years, $year);
			}
				
			$month = date('Y-m', $date);
			if(!in_array($month, $months)) {
				array_push($months, $month);
			}
				
			$days[] = date('Y-m-d', $date);
		}
		
		$this->_layout->content = View::factory('fuelband/catcher')
			->set('years', $years)
			->set('months', $months)
			->set('days', $days);
	}
	
	public function action_fetch() {
		$year = Arr::get($_GET, 'year', NULL);
		$month = Arr::get($_GET, 'month', NULL);
		$day = Arr::get($_GET, 'day', NULL);
		
		$nikePlusId = Author::instance()->getNikePlusId();
		$screenName = Author::instance()->getScreenName();
		$cookieFile = Author::instance()->getCookieFile();
		
// 		$profile = Dao::factory('Profile')->getProfileByNikePlusId($nikePlusId);
		
		if($year === NULL) {
			return FALSE;
		}
		
		if($day && $month === NULL) {
			return FALSE;
		}
		
		$days = array();
		
		if($day) {
			$days[] = strtotime("{$year}-{$month}-{$day}");
		} elseif($month) {
			$day = strtotime("{$year}-{$month}-01");
				
			$thisMonth = $month;
			while(TRUE) {
				$month = date('m', $day);
				if($month != $thisMonth) {
					break;
				}
				$days[] = $day;
				$day += 86400;
			}
		} else {
			$day = strtotime("{$year}-01-01");
				
			$thisYear = $year;
			while(TRUE) {
				$year = date('Y', $day);
				if($year != $thisYear) {
					break;
				}
				$days[] = $day;
				$day += 86400;
			}
		}
		
		foreach($days as $day) {
			$year = date('Y', $day);
			$month = date('m', $day);
			$day = date('d', $day);
			
			$handler = popen("php index.php --task=Catcher_Fuelband --nikePlusId={$nikePlusId} --screenName={$screenName} --cookieFile={$cookieFile} --year={$year} --month={$month} --day={$day} &", 'r');
			pclose($handler);
		}
		
		Controller::redirect('fuelband/list');
	}
	
	public function action_list() {
		$folder = Arr::get($_GET, 'folder', '');
		$screenName = Author::instance()->getScreenName();
		
		$directory = "/tmp/fuelband/$screenName";
		
		$items = array();
		$pairs = explode('/', $folder);
		foreach($pairs as $index => $pair) {
			if($pair == '..') {
				if(isset($items[$index - 1])) {
					unset($items[$index - 1]);
					$items = array_values($items);
				}
			} else {
				$items[] = $pair;
			}
		}
		$folder = implode('/', $items);

		if($folder && !is_dir($directory.'/'.$folder)) {
			return Controller::redirect('fuelband/list');
		}
		
		$files = array();
		$handler = opendir($directory.'/'.$folder);
		while(FALSE !== ($file = readdir($handler))) {
			if($file == '.') {
				continue;
			}
			$files[] = $file;
		}
		
		$this->_layout->content = View::factory('fuelband/list')
			->set('directory', $directory)
			->set('folder', $folder)
			->set('files', $files);
	}
	
	public function action_detail() {
		$file = Arr::get($_GET, 'file', '');
		
		$screenName = Author::instance()->getScreenName();
		
		$directory = "/tmp/fuelband/$screenName";
		
		$file = $directory.'/'.$file;
		if(!is_file($file)) {
			return Controller::redirect('fuelband/list');
		}
		
		$json = file_get_contents($file);
		$data = json_decode($json, TRUE);
		
		$this->_layout->content = View::factory('fuelband/detail')
			->set('json', $json)
			->set('data', $data);
	}
}