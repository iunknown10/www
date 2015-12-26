<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-12-25 02:20:11 --- EMERGENCY: View_Exception [ 0 ]: The requested view layout/home/photo could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php:137
2015-12-25 02:20:11 --- DEBUG: #0 /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('layout/home/pho...')
#1 /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('layout/home/pho...', NULL)
#2 /workspace/irunning.com/www/application/classes/Controller/Render.php(27): Kohana_View::factory('layout/home/pho...')
#3 /workspace/irunning.com/www/application/classes/Controller/Render.php(34): Controller_Render->before()
#4 [internal function]: Controller_Render->execute()
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home_Photo))
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#9 {main} in /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php:137
2015-12-25 02:22:58 --- EMERGENCY: View_Exception [ 0 ]: The requested view layout/home/photo could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php:137
2015-12-25 02:22:58 --- DEBUG: #0 /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('layout/home/pho...')
#1 /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('layout/home/pho...', NULL)
#2 /workspace/irunning.com/www/application/classes/Controller/Render.php(27): Kohana_View::factory('layout/home/pho...')
#3 /workspace/irunning.com/www/application/classes/Controller/Render.php(34): Controller_Render->before()
#4 [internal function]: Controller_Render->execute()
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home_Photo))
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#9 {main} in /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php:137
2015-12-25 02:27:57 --- EMERGENCY: View_Exception [ 0 ]: The requested view layout/home/photo could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php:137
2015-12-25 02:27:57 --- DEBUG: #0 /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('layout/home/pho...')
#1 /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('layout/home/pho...', NULL)
#2 /workspace/irunning.com/www/application/classes/Controller/Render.php(27): Kohana_View::factory('layout/home/pho...')
#3 /workspace/irunning.com/www/application/classes/Controller/Render.php(34): Controller_Render->before()
#4 [internal function]: Controller_Render->execute()
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home_Photo))
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#9 {main} in /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php:137
2015-12-25 02:41:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Photo' not found ~ APPPATH/classes/Model/Photo.php [ 2 ] in file:line
2015-12-25 02:41:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-25 02:42:09 --- EMERGENCY: View_Exception [ 0 ]: The requested view home/photo/list could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php:137
2015-12-25 02:42:09 --- DEBUG: #0 /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('home/photo/list')
#1 /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('home/photo/list', NULL)
#2 /workspace/irunning.com/www/application/classes/Controller/Home/Photo.php(15): Kohana_View::factory('home/photo/list')
#3 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Home_Photo->action_list()
#4 [internal function]: Controller_Render->execute()
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home_Photo))
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#9 {main} in /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php:137
2015-12-25 05:11:27 --- EMERGENCY: ErrorException [ 4 ]: parse error, expecting `','' or `';'' ~ APPPATH/views/global/home/navigator.php [ 41 ] in file:line
2015-12-25 05:11:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-25 09:53:46 --- EMERGENCY: ErrorException [ 2 ]: file_put_contents(a.jpg): failed to open stream: Permission denied ~ APPPATH/classes/Controller/Home/Photo.php [ 17 ] in file:line
2015-12-25 09:53:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/workspace/irun...', 17, Array)
#1 /workspace/irunning.com/www/application/classes/Controller/Home/Photo.php(17): file_put_contents('a.jpg', '\xFF\xD8\xFF\xE0\x00\x10JFIF\x00\x01\x01\x00\x00...')
#2 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Home_Photo->action_accept()
#3 [internal function]: Controller_Render->execute()
#4 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home_Photo))
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#8 {main} in file:line
2015-12-25 10:16:56 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH/classes/Controller/Home/Photo.php [ 17 ] in file:line
2015-12-25 10:16:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-25 10:24:13 --- EMERGENCY: ErrorException [ 2 ]: mkdir(): No such file or directory ~ APPPATH/classes/Controller/Home/Photo.php [ 22 ] in file:line
2015-12-25 10:24:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): No suc...', '/workspace/irun...', 22, Array)
#1 /workspace/irunning.com/www/application/classes/Controller/Home/Photo.php(22): mkdir('2015/12/25', 511)
#2 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Home_Photo->action_accept()
#3 [internal function]: Controller_Render->execute()
#4 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home_Photo))
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#8 {main} in file:line
2015-12-25 10:33:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: extsion ~ APPPATH/classes/Controller/Home/Photo.php [ 19 ] in /workspace/irunning.com/www/application/classes/Controller/Home/Photo.php:19
2015-12-25 10:33:27 --- DEBUG: #0 /workspace/irunning.com/www/application/classes/Controller/Home/Photo.php(19): Kohana_Core::error_handler(8, 'Undefined index...', '/workspace/irun...', 19, Array)
#1 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Home_Photo->action_accept()
#2 [internal function]: Controller_Render->execute()
#3 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home_Photo))
#4 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/irunning.com/www/application/classes/Controller/Home/Photo.php:19
2015-12-25 10:36:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: extension ~ APPPATH/classes/Controller/Home/Photo.php [ 35 ] in /workspace/irunning.com/www/application/classes/Controller/Home/Photo.php:35
2015-12-25 10:36:28 --- DEBUG: #0 /workspace/irunning.com/www/application/classes/Controller/Home/Photo.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/irun...', 35, Array)
#1 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Home_Photo->action_accept()
#2 [internal function]: Controller_Render->execute()
#3 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home_Photo))
#4 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/irunning.com/www/application/classes/Controller/Home/Photo.php:35
2015-12-25 10:36:56 --- EMERGENCY: ErrorException [ 2 ]: finfo::file(): Invalid path ~ APPPATH/classes/Controller/Home/Photo.php [ 45 ] in file:line
2015-12-25 10:36:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'finfo::file(): ...', '/workspace/irun...', 45, Array)
#1 /workspace/irunning.com/www/application/classes/Controller/Home/Photo.php(45): finfo->file('\xFF\xD8\xFF\xE0\x00\x10JFIF\x00\x01\x01\x00\x00...')
#2 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Home_Photo->action_accept()
#3 [internal function]: Controller_Render->execute()
#4 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home_Photo))
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#8 {main} in file:line
2015-12-25 10:51:26 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, string given ~ APPPATH/classes/Controller/Home/Photo.php [ 54 ] in file:line
2015-12-25 10:51:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/workspace/irun...', 54, Array)
#1 /workspace/irunning.com/www/application/classes/Controller/Home/Photo.php(54): in_array(Array, 'image/jpeg')
#2 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Home_Photo->action_accept()
#3 [internal function]: Controller_Render->execute()
#4 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home_Photo))
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#8 {main} in file:line
2015-12-25 10:51:41 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, string given ~ APPPATH/classes/Controller/Home/Photo.php [ 53 ] in file:line
2015-12-25 10:51:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/workspace/irun...', 53, Array)
#1 /workspace/irunning.com/www/application/classes/Controller/Home/Photo.php(53): in_array(Array, 'image/jpeg')
#2 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Home_Photo->action_accept()
#3 [internal function]: Controller_Render->execute()
#4 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home_Photo))
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#8 {main} in file:line