<?php
class Model_Activity extends Model {
	
	public function getLongitudeOffset() {
		return Kohana::$config->load($this->appname.'.coordinate_offset.longitude');
	}
	
	public function getLatitudeOffset() {
		return Kohana::$config->load($this->appname.'.coordinate_offset.latitude');
	}
}