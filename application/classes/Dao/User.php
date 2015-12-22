<?php
class Dao_User extends Dao {
	
	protected $_db = 'default';
	
	protected $_tableName = 'user';
	
	protected $_primaryKey = 'user_id';
	
	
	public function insert(array $raw = array()) {
		$columns = array_keys($raw);
		$values = array_values($raw);
		
		return DB::insert($this->_tableName)
			->columns($columns)
			->values($values)
			->execute($this->_db);
	}
	
	public function getUserByUserId($userId) {
		return DB::select('*')
			->from($this->_tableName)
			->where('user_id', '=', $userId)
			->as_object('Model_User')
			->execute($this->_db);
	}
	
	public function getUserByEmail($email) {
		return DB::select('*')
			->from($this->_tableName)
			->where('email', '=', $email)
			->as_object('Model_User')
			->execute($this->_db);
	}
	
	public function getUserByNickname($nickname) {
		return DB::select('*')
			->from($this->_tableName)
			->where('nickname', '=', $nickname)
			->as_object('Model_User')
			->execute($this->_db);
	}
	
}