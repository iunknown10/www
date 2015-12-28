<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'default' => array(
		'type'       => 'PDO',
		'connection' => array(
			'dsn'        => 'mysql:host=127.0.0.1;dbname=irunning',
			'username'   => 'irunning',
			'password'   => 'irunning.2014-2015',
			'persistent' => FALSE,
		),
		/**
		 * The following extra options are available for PDO:
		 *
		 * string   identifier  set the escaping identifier
		 */
		'table_prefix' => 'ir_',
		'charset'      => 'utf8',
		'caching'      => FALSE,
	),
);
