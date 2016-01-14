<?php
class Controller_Home_Photo extends Controller_Render {
	
	protected $_checkLogin = TRUE;
	
	protected $_layout = 'layout/home/photo';
	
	public function action_upload() {
		
		$this->_layout->content = View::factory('home/photo/form');
		
	}
	
	public function action_accept() {
		$this->_contentType = 'application/json';
		
		$basedir = realpath('./attachments');
		$dir = $basedir.DIRECTORY_SEPARATOR.date('Y');
		if(!is_dir($dir)) {
			mkdir($dir, 0777);
		}
		$dir .= DIRECTORY_SEPARATOR.date('m');
		if(!is_dir($dir)) {
			mkdir($dir, 0777);
		}
		$dir .= DIRECTORY_SEPARATOR.date('d');
		if(!is_dir($dir)) {
			mkdir($dir, 0777);
		}
		
		$json = Request::$initial->headers('data');
		$data = json_decode($json, TRUE);
		
		$pathinfo = pathinfo($data['name']);
		$extension = $pathinfo['extension'];
		$extension = strtolower($extension);
		
		$identifier = $data['identifier'];
		$name = $data['name'];
		$size = $data['size'];
		
		$fileName = md5($name.time());
		$filePath = $dir.DIRECTORY_SEPARATOR.$fileName;
		
		$binary = file_get_contents('php://input');
		
		file_put_contents($filePath, $binary);
		
		$finfo = new finfo(FILEINFO_MIME_TYPE);
		$mime = $finfo->file($filePath);
		
		$mimes = Kohana::$config->load('mimes');
		foreach($mimes as $key => $item) {
			if(in_array($mime, $item)) {
				$extension = $key;
			}
		}
		
		$newFilePath = $filePath.'.'.$extension;
		rename($filePath, $newFilePath);
		
		$path = str_replace($basedir, '', $newFilePath);

		$raw = array(
			'title' => $name,
			'path' => $path,
			'mime' => $mime,
			'size' => $size,
			'user_id' => Author::userId()
		);
		$result = Dao::factory('Photo')->insert($raw);
		$photoId = $result[0];
		if(!$photoId) {
			return $this->failed('数据操作失败');
		}
		
		//缩略图
		$tiny = Kohana::$config->load('photo.size.tiny');
		$small = Kohana::$config->load('photo.size.small');
		$large = Kohana::$config->load('photo.size.large');
		
		$image = new Imagick($newFilePath);
		$width = $image->getimagewidth();
		$height = $image->getimageheight();
		
		function calculate($w, $h, $length) {
			if($w >= $length) {
				$h = floor($length * $h / $w );
				$w = $length;
			}
			return array(
				'width' => $w,
				'height' => $h
			);
		}
		
		$size = calculate($width, $height, $tiny);
		$image->scaleimage($size['width'], $size['height']);
		$image->writeimage($filePath.'.tiny.'.$extension);
		
		$size = calculate($width, $height, $small);
		$image->scaleimage($size['width'], $size['height']);
		$image->writeimage($filePath.'.small.'.$extension);
		
		$size = calculate($width, $height, $large);
		$image->scaleimage($size['width'], $size['height']);
		$image->writeimage($filePath.'.large.'.$extension);
		
		
		$this->_data = array(
			'identifier' => $identifier,
			'photo_id' => $photoId,
			'directory' => 'attachments',
			'path' => $path,
			'tiny' => str_replace($extension, 'tiny.'.$extension, $path),
			'small' => str_replace($extension, 'small.'.$extension, $path),
			'large' => str_replace($extension, 'large.'.$extension, $path)
		);
		return $this->success('上传成功');
	}
	
	public function action_list() {
		$number = 16;
		$userId = Author::userId();
		
		$page = Arr::get($_GET, 'page', 1);
		$total = Dao::factory('Photo')->countByUserId($userId);
		
		$pagination = Pagination::factory()
			->total($total)
			->number($number)
			->execute();
		
		
		$photos = Dao::factory('Photo')->getPhotosByUserId($userId, $pagination->number, $pagination->offset);
		
		$this->_layout->content = View::factory('home/photo/list')
			->set('photos', $photos)
			->set('pagination', $pagination);
	}
	
	public function action_delete() {
		$this->_contentType = 'application/json';
		
		$photoId = Arr::get($_POST, 'photo_id', 0);
		$userId = Author::userId();
		
		$photo = Dao::factory('Photo')->getPhotoByPhotoId($photoId);
		if(!$photo) {
			return $this->success('删除成功');
		}
		
		$result = Dao::factory('Photo')->delete($photoId, $userId);
		if(!$result) {
			return $this->failed('删除失败');
		}
		
		@unlink('/attachments'. $photo->getPath());
		return $this->success('删除成功');
	}
	
	public function action_update() {
		$this->_contentType = 'application/json';
		
		$photoId = Arr::get($_POST, 'photo_id', 0);
		$title = Arr::get($_POST, 'title', '');
		$userId = Author::userId();
		
		$raw = array(
			'photo_id' => $photoId,
			'title' => $title,
		);
		
		$result = Dao::factory('Photo')->update($userId, $raw);
		if(!$result) {
			return $this->failed('更新失败');
		}
		return $this->success('更新成功');
	}
}