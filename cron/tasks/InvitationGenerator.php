<?php
class InvitationGenerator extends Task {

	/**
	 * 标题描述
	 * @var string
	 */
	public $subject = '邮件发送类';
	
	/**
	 * 联系人
	 * @var string
	 */
	public $author = 'dongjie@staff.sina.com.cn';
	
	/**
	 * 进程互斥（同一时间，本进程只能有一个执行）
	 * @var boolean
	 */
	public $mutex = FALSE;
	
	/**
	 * 分
	 * @var string
	 */
	public $minute = '*/1';
	
	/**
	 * 时
	 * @var string
	 */
	public $hour = '*';
	
	/**
	 * 日
	 * @var string
	 */
	public $day = '*';
	
	/**
	 * 月
	 * @var string
	 */
	public $month = '*';
	
	/**
	 * 周
	 * @var string
	 */
	public $week = '*';
	
	static protected $_DB = NULL;
	
	
	public function before() {
		
		self::$_DB = new PDO('mysql:host=127.0.0.1;dbname=irunning', 'root', 'root');
		
	}
	
	public function execute() {
		$temp = LOGDIR.__CLASS__.'.io';
		$userId = is_file($temp) ? file_get_contents($temp) : 0;
		$query = "SELECT user_id FROM ir_user WHERE user_id>$userId ORDER BY user_id ASC LIMIT 1";
		$result = self::$_DB->query($query);
		$row = $result->fetch();
		$userId = isset($row['user_id']) ? $row['user_id'] : 0;
		file_put_contents($temp, $userId);
		
	}
	
	public function after() {
		
	}
}