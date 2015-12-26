<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-12-22 21:30:49 --- EMERGENCY: View_Exception [ 0 ]: The requested view layout/route could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php:137
2015-12-22 21:30:49 --- DEBUG: #0 /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('layout/route')
#1 /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('layout/route', NULL)
#2 /workspace/irunning.com/www/application/classes/Controller/Render.php(27): Kohana_View::factory('layout/route')
#3 /workspace/irunning.com/www/application/classes/Controller/Render.php(34): Controller_Render->before()
#4 [internal function]: Controller_Render->execute()
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Route))
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#9 {main} in /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php:137