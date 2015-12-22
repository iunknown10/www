<?php
class Model_Coord extends Model {
	
	protected $_longitudeOffset = 0;
	
	protected $_latitudeOffset = 0;
	
	public function setLongitudeOffset($offset = 0) {
		$this->_longitudeOffset = $offset;
		return $this;
	}
	
	public function setLatitudeOffset($offset = 0) {
		$this->_latitudeOffset = $offset;
		return $this;
	}
	
	public function getLongitude() {
		return ($this->longitude + $this->_longitudeOffset);
	}
	
	public function getLatitude($offset = 0) {
		return ($this->latitude + $this->_latitudeOffset);
	}
}