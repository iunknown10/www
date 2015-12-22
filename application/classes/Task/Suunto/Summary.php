<?php
class Task_Suunto_Summary extends Minion_Task {
	
	protected $_options = array(
		'userId' => 0,
		'name' => '',
		'password' => '',
		'year' => '',
		'month' => '',
		'day' => ''
	);
	
	public function _execute(array $params) {
		$userId = isset($params['userId']) ? $params['userId'] : '0';
		$name = isset($params['name']) ? $params['name'] : '';
		$password = isset($params['password']) ? $params['password'] : '';
		$year = isset($params['year']) ? $params['year'] : '';
		$month = isset($params['month']) ? $params['month'] : '';
		$day = isset($params['day']) ? $params['day'] : '';
		
		try {
			Task_Suunto_Login::instance()
				->userId($userId)
				->name($name)
				->password($password)
				->execute();
		} catch(Task_Suunto_Exception $e) {
			echo $e->getMessage();
			exit("\n");
		} catch(Kohana_Exception $e) {
			echo $e->getMessage();
			exit("\n");
		}
		
		try {
			Task_Suunto_Catcher_Summary::instance()
				->year($year)
				->month($month)
				->day($day)
				->execute()
				->save();
		} catch(Task_Suunto_Exception $e) {
			echo $e->getMessage()."\n";
		} catch(Kohana_Exception $e) {
			echo $e->getMessage()."\n";
		}
	}
}