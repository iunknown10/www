<?php
class Dao_Article extends Dao {
	
	protected $_db = 'default';
	
	protected $_tableName = 'article';
	
	protected $_primaryKey = 'article_id';
	
	public function getArticleByArticleId($articleId) {
		return DB::select('*')
			->from($this->_tableName)
			->where('article_id', '=', $articleId)
			->as_object('Model_Article')
			->execute($this->_db)
			->current();
	}
	
	public function updateByArticleId($articleId, $raw) {
		$raw['update_time'] = time();

		return DB::update($this->_tableName)
			->set($raw)
			->where('article_id', '=', $articleId)
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
	
	public function delete($articleId) {
		return DB::update($this->_tableName)
			->set(array('status' => '-1'))
			->where('article_id', '=', $articleId)
			->execute($this->_db);
	}

	public function countByUserId($userId) {
		return DB::select('COUNT(*) AS number')
			->from($this->_tableName)
			->where('user_id', '=', $userId)
			->where('status', '!=', -1)
			->execute($this->_db)
			->get('number');
	}
	
	public function getArticlesByUserId($userId, $number = 0, $offset = 0) {
		$select = DB::select('*')
			->from($this->_tableName)
			->where('user_id', '=', $userId)
			->where('status', '!=', -1)
			->order_by('article_id', 'DESC');
		if($number) {
			$select->limit($number);
		}
		if($offset) {
			$select->offset($offset);
		}
		return $select->as_object('Model_Article')
			->execute($this->_db);
	}
}