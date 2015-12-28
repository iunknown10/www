<?php
return array(
	//?callback=jQuery19108214361197315156_1435914246409&service=Movescount&emailAddress=Sundj%40live.com&password=gogo0906&_=1435914246410',
	'signin_url' => 'https://servicegate.suunto.com/UserAuthorityService/',

	//{"token":"6935a07b-568c-43bb-a7d5-fc26fdbc5416","utcOffset":"480","redirectUri":"/scoreboard"}
	'authenticated_url' => 'http://www.movescount.com/zh/services/UserAuthenticated',
	//'authenticated_url' => 'http://www.suunto.com/services/ServiceGate.asmx/UserAuthenticated',
	
	//用户信息
	'userDetail_url' => 'http://my.suunto.com/MySuuntoFrame.aspx/UserDetailsService',
	
	//http://www.movescount.com/Move/MoveList?username=Sundj
	'summary_url' => 'http://www.movescount.com/Move/MoveList',
	
	//?id=68120834&format=kml
	'export_url' => 'http://www.movescount.com/move/export',
	
	'coordinate_offset' => array(
		'longitude' => 0.00595,
		'latitude' => 0.00115,
	),
);