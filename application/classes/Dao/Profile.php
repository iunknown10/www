<?php
class Dao_Profile extends Dao {
	
	protected $_db = 'default';
	
	protected $_tableName = 'profile';
	
	protected $_primaryKey = 'profile';
	
	
	public function getProfileByNikePlusId($nikePlusId) {
		return DB::select('*')
			->from($this->_tableName)
			->where('nikePlusId', '=', $nikePlusId)
			->as_object('Model_Profile')
			->execute($this->_db)
			->current();
	}
	
	public function insert(array $values = array()) {
		$columns = array_keys($values);
		$values = array_values($values);
		return DB::insert($this->_tableName)
			->columns($columns)
			->values($values)
			->execute($this->_db);
	}
	
	public function updateByNikePlusId($nikePlusId, $values) {
		return DB::update($this->_tableName)
			->set($values)
			->where('nikePlusId', '=', $nikePlusId)
			->execute($this->_db);
	}
	
	public function getProfiles() {
		return DB::select('*')
			->from($this->_tableName)
			->as_object('Model_Profile')
			->execute($this->_db);
	}
}