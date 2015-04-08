<?php
return array(
	'passport' => 'vmspassport',
	'lander' => 'database',
	'key' => ')&GY*^',
	'cipher' => MCRYPT_RIJNDAEL_128,
	'mode'   => MCRYPT_MODE_NOFB,
	
	'ldap' => array(
		'server' => '10.210.97.21',
		'port' => '389',
		'baseDN' => 'ou=sina, dc=staff, dc=sina, dc=com, dc=cn', //DC (Domain Component) CN (Common Name) OU (Organizational Unit)
		'bindRDN' => 'CN=adsearch, OU=sina, DC=staff, DC=sina, DC=com, DC=cn',
		'password' => 'q2fGed3G`yC&ax',
	),
		
	'database' => array(
		'group' => 'default',
	),
		
	'redis' => array(
		'server' => '127.0.0.1',
		'port' => '6379',
		'timeout' => 30,
		'persistent' => FALSE,
		'password' => 'foobared',
	),

	'cas' => array (
		'login' => 'http://cas.erp.sina.com.cn/cas/login',
		'logout' => 'http://cas.erp.sina.com.cn/cas/logout',
		'validate' => 'http://cas.erp.sina.com.cn/cas/validate',
		'checklogin' => 'http://cas.erp.sina.com.cn/cas/checklogin',
	),
);