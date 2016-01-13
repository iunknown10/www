<?php
class Model_Photo extends Model {
	
	public function getCreateTime($format = '') {
		return $format ? date($format, $this->create_time) : $this->create_time;
	}
	
	public function getFullPath() {
		return '/attachments'.$this->path;
	}
	
	public function getFullSmallPath() {
		$pathinfo = pathinfo($this->path);
		$extension = $pathinfo['extension'];
		return '/attachments'.str_replace($extension, 'small.'.$extension, $this->path);
	}
}