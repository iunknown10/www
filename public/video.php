<?php
/**
 * 点播视频分享接口
 * @author shaoyu3@staff.sina.com.cn
 */
error_reporting(0);

ob_start();
$location = 'http://p.you.video.sina.com.cn/swf/opPlayer20150413_V5_1_1_11.swf';

/**
 * 处理用户级错误函数
 */
function errorHandler($code, $message, $file = NULL, $line = NULL) {
	ob_end_clean();
	
	global $location;
	header("Location: $location");
	
	exit(0);
}

set_error_handler('errorHandler');

$videoId = isset($_GET['video_id']) ? $_GET['video_id'] : 0;
$isExternal = 1;//外部引用标识
$logo = 1;		//显示logo标识

$location = "$location?video_id=$videoId&is_external=$isExternal&logo=$logo";
header("Location: $location");