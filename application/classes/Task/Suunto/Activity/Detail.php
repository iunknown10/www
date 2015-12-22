<?php
class Task_Suunto_Activity_Detail extends Minion_Task {
	
	protected $_options = array(
			'userId' => 0,
			'name' => '',
			'password' => '',
			'action' => '',
			'year' => '',
			'month' => '',
			'day' => '',
			'activityId' => 0
	);
	
	public function _execute($params) {
		$userId = isset($params['userId']) ? $params['userId'] : '0';
		$name = isset($params['name']) ? $params['name'] : '';
		$password = isset($params['password']) ? $params['password'] : '';
		$activityId = isset($params['activityId']) ? $params['activityId'] : 0;
		
		if(!$activityId) {
			exit('activityId不能为空！');
		}
		
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
			Task_Suunto_Activity_Detail::instance()
				->activityId($activityId)
				->execute()
				->save();
		} catch(Task_Suunto_Exception $e) {
			echo $e->getMessage()."\n";
		} catch(Kohana_Exception $e) {
			echo $e->getMessage()."\n";
		}
	}
}