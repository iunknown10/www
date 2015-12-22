<?php
class Dao_Photo extends Dao {
	
	protected $_db = 'default';
	
	protected $_tableName = 'photo';
	
	protected $_primaryKey = 'photo_id';

	public function countByUserId($userId) {
		return DB::select('COUNT(*) AS number')
			->from($this->_tableName)
			->where('user_id', '=', $userId)
			->execute($this->_db)
			->get('number');
	}
}