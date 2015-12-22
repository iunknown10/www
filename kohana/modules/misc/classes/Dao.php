<?php
abstract class Dao {
	
	/**
	 * 数据库配置名
	 * @var string
	 */
	protected $_db = NULL;
	
	/**
	 * 表名
	 * @var string
	 */
	protected $_tableName = '';
	
	/**
	 * 主键
	 * @var string
	 */
	protected $_primaryKey = '';
	
	
	/**
	 * Create a new dao instance.
	 *
	 *     $dao = Dao::factory($name);
	 *
	 * @param   string  $name   dao name
	 * @return  Dao
	 */
	public static function factory($name, $db = NULL) {
		// Add the dao prefix
		$class = 'Dao_'.$name;

		return new $class($db);
	}
	
	/**
	 * Begin Transaction
	 * @param string $db
	 * @return Ambigous <object, mixed, number, Database_Result_Cached, multitype:>
	 */
	public static function begin($db = NULL) {
		if($db = NULL) {
			$db = 'default';
		}
		return DB::query(NULL, "BEGIN WORK")->execute($db);
	}
	
	/**
	 * Commit Transaction
	 * @param string $db
	 * @return Ambigous <object, mixed, number, Database_Result_Cached, multitype:>
	 */
	public static function commit($db = NULL) {
		if($db = NULL) {
			$db = 'default';
		}
		return DB::query(NULL, "COMMIT")->execute($db);
	}
	
	/**
	 * Rollback Transction
	 * @param string $db
	 * @return Ambigous <object, mixed, number, Database_Result_Cached, multitype:>
	 */
	public static function rollback($db = NULL) {
		if($db = NULL) {
			$db = 'default';
		}
		return DB::query(NULL, "ROLLBACK")->execute($db);
	}
	
	public function __construct($db = NULL) {
		if($db) {
			$this->_db = $db;
		}
		
		if(is_string($this->_db)) {
			$this->_db = Database::instance($this->_db);
		}
	}

}
