<?php
class Dao_User extends Dao {
	
	protected $_db = 'default';
	
	protected $_tableName = 'user';
	
	protected $_primaryKey = 'user_id';
	

	public function insert(array $raw = array()) {
		$raw['create_time'] = time();
		$raw['update_time'] = time();
		$columns = array_keys($raw);
		$values = array_values($raw);
	
		return DB::insert($this->_tableName)
			->columns($columns)
			->values($values)
			->execute($this->_db);
	}

	public function update($userId = 0, array $raw = array()) {
		$raw['update_time'] = time();
	
		return DB::update($this->_tableName)
			->set($raw)
			->where('user_id', '=', $userId)
			->execute($this->_db);
	}
	
	public function getUserByUserId($userId) {
		return DB::select('*')
			->from($this->_tableName)
			->where('user_id', '=', $userId)
			->as_object('Model_User')
			->execute($this->_db)
			->current();
	}
	
	public function getUsersByEmail($email, $excludeIds = array()) {
		$select = DB::select('*')
			->from($this->_tableName)
			->where('email', '=', $email);
		if($excludeIds) {
			$select->where('user_id', 'NOT IN', $excludeIds);
		}
		return $select->as_object('Model_User')
			->execute($this->_db);
	}

	public function getUsersByNickname($nickname, $excludeIds = array()) {
		$select = DB::select('*')
			->from($this->_tableName)
			->where('nickname', '=', $nickname);
		if($excludeIds) {
			$select->where('user_id', 'NOT IN', $excludeIds);
		}
		return $select->as_object('Model_User')
			->execute($this->_db);
	}

	public function getUsersByMobile($mobile, $excludeIds = array()) {
		$select = DB::select('*')
			->from($this->_tableName)
			->where('mobile', '=', $mobile);
		if($excludeIds) {
			$select->where('user_id', 'NOT IN', $excludeIds);
		}
		return $select->as_object('Model_User')
			->execute($this->_db);
	}
	
	public function getUsersByLoginKey($key) {
		return DB::select('*')
			->from($this->_tableName)
			->where('email', '=', $key)
			->or_where('nickname', '=', $key)
			->or_where('mobile', '=', $key)
			->as_object('Model_User')
			->execute($this->_db);
	}
	
}