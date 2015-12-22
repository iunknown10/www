<?php
class Dao_Coord extends Dao {
	
	protected $_db = 'default';
	
	protected $_tableName = 'coord';
	
	protected $_primaryKey = 'coord_id';
	
	public function create(array $row = array()) {
		$columns = array_keys($row);
		$values = array_values($row);
		$result = DB::insert($this->_tableName)
			->columns($columns)
			->values($values)
			->execute($this->_db);
		return $result[0];
	}
	
	public function getCoordsByActivityId($activityId) {
		return DB::select('*')
			->from($this->_tableName)
			->where('activity_id', '=', $activityId)
			->as_object('Model_Coord')
			->execute($this->_db);
	}
	
	public function deleteByActivityId($activityId) {
		return DB::delete($this->_tableName)
			->where('activity_id', '=', $activityId)
			->execute($this->_db);
	}
}