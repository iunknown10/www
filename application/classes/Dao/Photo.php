<?php
class Dao_Photo extends Dao {
	
	protected $_db = 'default';
	
	protected $_tableName = 'photo';
	
	protected $_primaryKey = 'photo_id';

	public function countByUserId($userId) {
		return DB::select('COUNT(*) AS number')
			->from($this->_tableName)
			->where('user_id', '=', $userId)
			->where('status', '!=', -1)
			->execute($this->_db)
			->get('number');
	}
	
	public function getPhotoByPhotoId($photoId) {
		return DB::select('*')
			->from($this->_tableName)
			->where('photo_id', '=', $photoId)
			->where('status', '!=', -1)
			->as_object('Model_Photo')
			->execute($this->_db)
			->current();
	}
	
	public function getPhotosByUserId($userId, $number = 0, $offset = 0) {
		$select = DB::select('*')
			->from($this->_tableName)
			->where('user_id', '=', $userId)
			->where('status', '!=', -1)
			->order_by('photo_id', 'DESC');
		if($number) {
			$select->limit($number);
		}
		if($offset) {
			$select->offset($offset);
		}
		return $select->as_object('Model_Photo')
			->execute($this->_db);
	}
	
	public function delete($photoId, $userId) {
		return DB::update($this->_tableName)
			->where('user_id', '=', $userId)
			->where('photo_id', '=', $photoId)
			->set(array('status' => -1))
			->execute($this->_db);
	}
	
	public function insert($raw) {
		$raw['create_time'] = time();
		$raw['update_time'] = time();
		$columns = array_keys($raw);
		$values = array_values($raw);
		return DB::insert($this->_tableName)
			->columns($columns)
			->values($values)
			->execute($this->_db);
	}
	
	public function update($userId, $raw) {
		$photoId = $raw['photo_id'];
		$raw['update_time'] = time();
		return DB::update($this->_tableName)
			->set($raw)
			->where('user_id', '=', $userId)
			->where('photo_id', '=', $photoId)
			->execute($this->_db);
	}
}