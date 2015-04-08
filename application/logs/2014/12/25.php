<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-25 22:19:01 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Profile.php [ 26 ] in /workspace/nikeplus/application/classes/Controller/Profile.php:26
2014-12-25 22:19:01 --- DEBUG: #0 /workspace/nikeplus/application/classes/Controller/Profile.php(26): Kohana_Core::error_handler(2, 'Attempt to assi...', '/workspace/nike...', 26, Array)
#1 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/nikeplus/application/classes/Controller/Profile.php:26
2014-12-25 22:24:56 --- EMERGENCY: View_Exception [ 0 ]: The requested view profile/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /workspace/nikeplus/kohana/system/classes/Kohana/View.php:137
2014-12-25 22:24:56 --- DEBUG: #0 /workspace/nikeplus/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('profile/index')
#1 /workspace/nikeplus/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('profile/index', NULL)
#2 /workspace/nikeplus/application/classes/Controller/Login.php(7): Kohana_View::factory('profile/index')
#3 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#9 {main} in /workspace/nikeplus/kohana/system/classes/Kohana/View.php:137
2014-12-25 23:07:35 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Dao_Profile::update() ~ APPPATH/classes/Task/Catcher/Info.php [ 50 ] in file:line
2014-12-25 23:07:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-25 23:08:40 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Dao_Profile::update() ~ APPPATH/classes/Task/Catcher/Info.php [ 50 ] in file:line
2014-12-25 23:08:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-25 23:17:34 --- EMERGENCY: View_Exception [ 0 ]: The requested view default/layout could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /workspace/nikeplus/kohana/system/classes/Kohana/View.php:137
2014-12-25 23:17:34 --- DEBUG: #0 /workspace/nikeplus/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('default/layout')
#1 /workspace/nikeplus/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('default/layout', NULL)
#2 /workspace/nikeplus/application/classes/Controller/Layout.php(30): Kohana_View::factory('default/layout')
#3 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(69): Controller_Layout->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#9 {main} in /workspace/nikeplus/kohana/system/classes/Kohana/View.php:137