<?php
class Misc {
	
	static public function isIDCard($IDCard) {
		if(18 !== strlen($IDCard)) {
			return FALSE;
		}
		
		//加权因子
		$wi = array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2);
		//校验码
		$ai = array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2');
		
		$sigma = 0;
		for ($i = 0; $i < 17; $i++) {
			$sigma += ((int) $IDCard{$i}) * $wi[$i];
		}
		
		return strtoupper($IDCard[17]) == $ai[($sigma % 11)];
	}
	
	static public function isEmail($email) {
		return preg_match('#.*?\@.*?\..*$#si', $email);
	}
	
	static public function isMobile($mobile) {
		return preg_match('#^[\d]{11}$#', $mobile);
	}
	
	static public function isQQ($qq) {
		return preg_match('#^[\d]+$#', $qq);
	}
}