<?php
abstract class Email {

	public static function factory($type = '') {
		if($type == '') {
			$type = 'smtp';
		}
		if($type == 'smtp') {
			$config = array(
				'server' => 'mail.staff.sina.com.cn',
				'domain' => 'mail.staff.sina.com.cn',
				'port' => 25,
				'user' => 'vms',
				'from' => 'vms@staff.sina.com.cn',
				'password' => '8888.sina.com',
				'timeout' => 30,
			);
			return Email_Smtp::instance($config);
		}
		throw new Email_Exception("没有实现的邮件发送方式：{$type}");
	}

	abstract public function from($from = '');

	abstract public function to($to = array());

	abstract public function cc($cc = array());

	abstract public function bcc($bcc = array());

	abstract public function subject($subject = '');

	abstract public function content($content = '');

	abstract public function debug();

	abstract public function attachements($attachments = array());

	abstract public function type($type = 1);

	abstract public function execute();
}
