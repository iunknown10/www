<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-11-19 05:09:03 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Author::login() ~ APPPATH/classes/Controller/Login.php [ 15 ] in file:line
2015-11-19 05:09:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-19 05:10:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'Author' not found ~ APPPATH/classes/Controller/Login.php [ 15 ] in file:line
2015-11-19 05:10:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-19 05:25:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: lander ~ APPPATH/classes/Controller/Profile.php [ 7 ] in /workspace/irunning.com/www/application/classes/Controller/Profile.php:7
2015-11-19 05:25:13 --- DEBUG: #0 /workspace/irunning.com/www/application/classes/Controller/Profile.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/irun...', 7, Array)
#1 /workspace/irunning.com/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/irunning.com/www/application/classes/Controller/Profile.php:7
2015-11-19 05:25:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: lander ~ APPPATH/classes/Controller/Profile.php [ 7 ] in /workspace/irunning.com/www/application/classes/Controller/Profile.php:7
2015-11-19 05:25:13 --- DEBUG: #0 /workspace/irunning.com/www/application/classes/Controller/Profile.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/irun...', 7, Array)
#1 /workspace/irunning.com/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/irunning.com/www/application/classes/Controller/Profile.php:7
2015-11-19 05:44:23 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ MODPATH/author/classes/Author.php [ 57 ] in file:line
2015-11-19 05:44:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line