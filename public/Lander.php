<?php
$loginURL = 'https://www.nike.com/profile/login';
$login = 'Sundj@live.com';
$password = 'Gogo0906';
$rememberMe = true;

$data = array(
	'login' => $login,
	'password' => $password,
	'rememberMe' => $rememberMe
);

$handler = curl_init();
curl_setopt($handler, CURLOPT_URL, $loginURL);
//curl_setopt($handler, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($handler, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($handler, CURLOPT_POST, TRUE);
curl_setopt($handler, CURLOPT_POSTFIELDS, http_build_query($data));

$response = curl_exec($handler);
curl_close($handler);

echo $response;


https://secure-nikeplus.nike.com/plus/api/activity/detail/16b6af8d-4040-4385-be2a-157f0df42362?np=true&_=1418974241162
https://secure-nikeplus.nike.com/plus/api/activity/detail/dcb05197-5316-456f-84a8-66199b21f00d?np=true&_=1418974270544