<?php
class Model_Photo extends Model {
	
	public function getCreateTime($format = '') {
		return $format ? date($format, $this->create_time) : $this->create_time;
	}
	
	public function getFullPath($size = '') {
		if(!$size) {
			return '/attachments'.$this->path;
		}
		$pathinfo = pathinfo($this->path);
		$extension = $pathinfo['extension'];
		return '/attachments'.str_replace($extension, $size.'.'.$extension, $this->path);
	}
	
	public function getFullTinyPath() {
		return $this->getFullPath('tiny');
	}

	public function getFullSmallPath() {
		return $this->getFullPath('small');
	}

	public function getFullLargePath() {
		return $this->getFullPath('large');
	}
	
	
}