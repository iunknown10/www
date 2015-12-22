<?php
class Dao_Activity extends Dao {
	
	protected $_db = 'default';
	
	protected $_tableName = 'activity';
	
	protected $_primaryKey = 'activity_id';
	
	const STATUS_UNDOWNLOAD = 0;
	const STATUS_DOWNLOADED = 1;
	
	public function getActivitiesByDate($year, $month, $day) {
		return DB::select('*')
			->from($this->_tableName)
			->where('year', '=', $year)
			->where('month', '=', $month)
			->where('day', '=', $day)
			->as_object('Model_Activity')
			->execute($this->_db);
	}
	
	public function getActivityByActivityId($activityId) {
		return DB::select('*')
			->from($this->_tableName)
			->where('activity_id', '=', $activityId)
			->as_object('Model_Activity')
			->execute($this->_db)
			->current();
	}
	
	public function addActivity($row) {
		$found = DB::select('*')
			->from($this->_tableName)
			->where('appname', '=', $row['appname'])
			->where('extra_id', '=', $row['extra_id'])
			->execute($this->_db);
		if($found->count() > 0) {
			$row['update_time'] = time();
			$result = DB::update($this->_tableName)
				->set($row)
				->where('appname', '=', $row['appname'])
				->where('extra_id', '=', $row['extra_id'])
				->execute($this->_db);
		} else {
			$row['create_time'] = time();
			$row['update_time'] = time();
			$columns = array_keys($row);
			$values = array_values($row);
			$result = DB::insert($this->_tableName)
				->columns($columns)
				->values($values)
				->execute($this->_db);
			$result = $result[0];
		}
		return $result;
	}
	
	public function getLastActivity() {
		return DB::select('*')
			->from($this->_tableName)
			->order_by('year', 'desc')
			->order_by('month', 'desc')
			->order_by('day', 'desc')
			->limit(1)
			->as_object('Model_Activity')
			->execute($this->_db)
			->current();
	}
	
	public function getUncatchedActivities() {
		return DB::select('*')
			->from($this->_tableName)
			->where('status', '=', Dao_Activity::STATUS_UNDOWNLOAD)
			->as_object('Model_Activity')
			->execute($this->_db);
	}
	
	public function updateStatusByActivityId($activityId, $status) {
		return DB::update($this->_tableName)
			->set(array('status' => $status))
			->where('activity_id', '=', $activityId)
			->execute($this->_db);
	}
	
	public function countByUserId($userId) {
		return DB::select('COUNT(*) AS number')
			->from($this->_tableName)
			->where('user_id', '=', $userId)
			->execute($this->_db)
			->get('number');
	}
}
