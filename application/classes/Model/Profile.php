<?php
class Model_Profile extends Model {
	
	public function getFuelActivationDate($format = NULL) {
		return $format ? date($format, $this->fuelActivationDate) : $this->fuelActivationDate;
	}
	
	public function getScreenName() {
		return $this->screenName;
	}
	
	public function getNikePlusId() {
		return $this->nikePlusId;
	}
}