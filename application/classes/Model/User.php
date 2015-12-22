<?php
class Model_User extends Model {
	
	public function getTimezoneOffset() {
		return $this->timezone * 3600;
	}
}