<?php
class Dao_Invitation extends Dao {
	
	protected $_db = 'default';
	
	protected $_tableName = 'invitation';
	
	protected $_primaryKey = 'invitation_id';
	
	public function getInvitationByCode($code) {
		return DB::select('*')
			->from($this->_tableName)
			->where('code', '=', $code)
			->as_object('Mode_Invitation')
			->execute($this->_db);
	}
}