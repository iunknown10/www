<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-20 01:01:34 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /workspace/irunning.club/kohana/system/classes/Kohana/View.php:137
2015-03-20 01:01:34 --- DEBUG: #0 /workspace/irunning.club/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /workspace/irunning.club/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /workspace/irunning.club/kohana/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /workspace/irunning.club/kohana/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /workspace/irunning.club/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /workspace/irunning.club/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/irunning.club/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/irunning.club/public/index.php(47): Kohana_Request->execute()
#9 {main} in /workspace/irunning.club/kohana/system/classes/Kohana/View.php:137