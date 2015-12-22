<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-27 04:07:40 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Route as array ~ APPPATH/views/route/run.php [ 63 ] in file:line
2015-07-27 04:07:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-27 04:07:58 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Route as array ~ APPPATH/views/route/run.php [ 63 ] in file:line
2015-07-27 04:07:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-27 04:15:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: coordinateOffset ~ APPPATH/views/route/run.php [ 63 ] in /workspace/irunning.com/www/application/views/route/run.php:63
2015-07-27 04:15:17 --- DEBUG: #0 /workspace/irunning.com/www/application/views/route/run.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/irun...', 63, Array)
#1 /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php(61): include('/workspace/irun...')
#2 /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/workspace/irun...', Array)
#3 /workspace/irunning.com/www/application/classes/Controller/Route.php(25): Kohana_View->render()
#4 /workspace/irunning.com/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Route->action_run()
#5 [internal function]: Kohana_Controller->execute()
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Route))
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#10 {main} in /workspace/irunning.com/www/application/views/route/run.php:63
2015-07-27 04:15:37 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getLongitude() on a non-object ~ APPPATH/views/route/run.php [ 66 ] in file:line
2015-07-27 04:15:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-27 22:40:00 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::last() ~ APPPATH/classes/Controller/Route.php [ 24 ] in file:line
2015-07-27 22:40:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line