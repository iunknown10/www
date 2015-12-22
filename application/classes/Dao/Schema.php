<?php
class Dao_Schema extends Dao {
	
	protected $_db = 'default';
	
	protected $_tableName = 'schema';
	
	protected $_primaryKey = 'schema_id';
	
	public function getSchemasByAppname($appname) {
		return DB::select('*')
			->from($this->_tableName)
			->where('appname', '=', $appname)
			->as_object('Model_Schema')
			->execute($this->_db);
	}
	
}