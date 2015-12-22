<?php
/**
 * 后台脚本运行框架
 * @name 初始化运行环境
 * @copyright SINA VIDEO 2014
 *
 */
define('TASKDIR', ROOTDIR.'tasks'.DIRECTORY_SEPARATOR);
define('FILEDIR', '/var/tmp/');

define('LOGFORMAT', "[%s]\t[%s]\t%s %s: %s\n");	//日志格式 [时间]\t[错误类型]\t文件 行号: 描述\n
define('LOGDIR', ROOTDIR.'logs'.DIRECTORY_SEPARATOR);
define('MONTHDIR', LOGDIR.date('Y').DIRECTORY_SEPARATOR.date('m').DIRECTORY_SEPARATOR);
define('ERRORLOG', MONTHDIR.date('d').'-error.log');
define('SUCCESSLOG', MONTHDIR.date('d').'-success.log');

error_reporting(E_ALL);

ob_start();

if(!is_dir(LOGDIR)) {
	mkdir(LOGDIR, 0777, TRUE);
}
if(!is_dir(MONTHDIR)) {
	mkdir(MONTHDIR, 0777, TRUE);
}

function autoLoad($class) {
	$file = TASKDIR . $class .'.php';

	if(is_file($file)) {
		include $file;
		return TRUE;
	}

	return FALSE;
}

function errorHandler($code, $message, $file = NULL, $line = NULL) {
	file_put_contents(ERRORLOG, sprintf(LOGFORMAT, date('Y-m-d H:i:s', time()), 'Error', $file, $line, $message), FILE_APPEND);
	ob_end_clean();
	exit(1);
}

function shutdownHandler() {
	
	$error = error_get_last();
	
	if(!$error) {
		return TRUE;
	}
	
	$code = $error['type'];
	$message = $error['message'];
	$file = $error['file'];
	$line = $error['line'];
	
	file_put_contents(ERRORLOG, sprintf(LOGFORMAT, date('Y-m-d H:i:s', time()), 'Shutdown Error', $file, $line, $message), FILE_APPEND);
	ob_end_clean();
	exit(1);
}

spl_autoload_register('autoLoad');

set_error_handler('errorHandler');
register_shutdown_function('shutdownHandler');
