<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-06 01:43:29 --- EMERGENCY: View_Exception [ 0 ]: The requested view index.html could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php:137
2015-09-06 01:43:29 --- DEBUG: #0 /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('index.html')
#1 /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('index.html', NULL)
#2 /workspace/irunning.com/www/application/classes/Controller/Index.php(13): Kohana_View::factory('index.html')
#3 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Index->action_page()
#4 [internal function]: Controller_Render->execute()
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#9 {main} in /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php:137
2015-09-06 01:44:11 --- EMERGENCY: View_Exception [ 0 ]: The requested view page/index.html could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php:137
2015-09-06 01:44:11 --- DEBUG: #0 /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('page/index.html')
#1 /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('page/index.html', NULL)
#2 /workspace/irunning.com/www/application/classes/Controller/Index.php(13): Kohana_View::factory('page/index.html')
#3 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Index->action_page()
#4 [internal function]: Controller_Render->execute()
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#9 {main} in /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php:137
2015-09-06 01:44:29 --- EMERGENCY: View_Exception [ 0 ]: The requested view html/index.html could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php:137
2015-09-06 01:44:29 --- DEBUG: #0 /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('html/index.html')
#1 /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('html/index.html', NULL)
#2 /workspace/irunning.com/www/application/classes/Controller/Index.php(13): Kohana_View::factory('html/index.html')
#3 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Index->action_page()
#4 [internal function]: Controller_Render->execute()
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#9 {main} in /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php:137