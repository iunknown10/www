<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-30 03:01:45 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Register.php [ 8 ] in /workspace/irunning.club/application/classes/Controller/Register.php:8
2015-03-30 03:01:45 --- DEBUG: #0 /workspace/irunning.club/application/classes/Controller/Register.php(8): Kohana_Core::error_handler(2, 'Attempt to assi...', '/workspace/irun...', 8, Array)
#1 /workspace/irunning.club/kohana/system/classes/Kohana/Controller.php(84): Controller_Register->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /workspace/irunning.club/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#4 /workspace/irunning.club/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/irunning.club/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/irunning.club/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/irunning.club/application/classes/Controller/Register.php:8
2015-03-30 03:02:45 --- EMERGENCY: View_Exception [ 0 ]: The requested view layouts/default could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /workspace/irunning.club/kohana/system/classes/Kohana/View.php:137
2015-03-30 03:02:45 --- DEBUG: #0 /workspace/irunning.club/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('layouts/default')
#1 /workspace/irunning.club/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('layouts/default', NULL)
#2 /workspace/irunning.club/application/classes/Controller/Register.php(8): Kohana_View::factory('layouts/default')
#3 /workspace/irunning.club/kohana/system/classes/Kohana/Controller.php(84): Controller_Register->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /workspace/irunning.club/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 /workspace/irunning.club/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/irunning.club/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/irunning.club/public/index.php(47): Kohana_Request->execute()
#9 {main} in /workspace/irunning.club/kohana/system/classes/Kohana/View.php:137