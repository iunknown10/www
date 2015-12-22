<?php
class Task_Suunto_Activity extends Minion_Task {
	
	protected $_options = array(
		'userId' => 0,
		'name' => '',
		'password' => '',
		'activityId' => 0,
	);
	
	private $_nickname = '';
	
	public function _execute(array $params) {
		$userId = isset($params['userId']) ? $params['userId'] : '0';
		$name = isset($params['name']) ? $params['name'] : '';
		$password = isset($params['password']) ? $params['password'] : '';
		$activityId = isset($params['activityId']) ? $params['activityId'] : 0;
		
		try {
			Task_Suunto_Login::instance()
				->userId($userId)
				->name($name)
				->password($password)
				->execute();
		} catch(Task_Suunto_Exception $e) {
			echo 'Suunto Exception: '.$e->getMessage();
			exit("\n");
		} catch(Kohana_Exception $e) {
			echo 'Exception: '.$e->getMessage();
			exit("\n");
		}
		
		$activities = array();
		if($activityId) {
			$activities[] = Dao::factory('activity')->getActivityByActivityId($activityId);
		} else {
			$activities = Dao::factory('activity')
				->getUncatchedActivities();
		}
		
		foreach($activities as $activity) {
			try {
				Task_Suunto_Catcher_Activity::instance()
					->activityId($activity->getActivityId())
					->execute()
					->save();
			} catch(Task_Suunto_Exception $e) {
				echo 'Suunto Exception: '.$e->getMessage()."\n";
			} catch(Kohana_Exception $e) {
				echo 'Exception: '.$e->getMessage()."\n";
			}
		}
	}
}
