<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-26 00:37:16 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects at least 2 parameters, 1 given ~ APPPATH/classes/Controller/Fuel.php [ 19 ] in file:line
2014-12-26 00:37:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/workspace/nike...', 19, Array)
#1 /workspace/nikeplus/application/classes/Controller/Fuel.php(19): in_array(Array)
#2 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Fuel->action_detail()
#3 [internal function]: Kohana_Controller->execute()
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fuel))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#8 {main} in file:line
2014-12-26 00:37:39 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, string given ~ APPPATH/classes/Controller/Fuel.php [ 19 ] in file:line
2014-12-26 00:37:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/workspace/nike...', 19, Array)
#1 /workspace/nikeplus/application/classes/Controller/Fuel.php(19): in_array(Array, '2013')
#2 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Fuel->action_detail()
#3 [internal function]: Kohana_Controller->execute()
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fuel))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#8 {main} in file:line
2014-12-26 00:37:59 --- EMERGENCY: ErrorException [ 2 ]: date() expects parameter 2 to be long, array given ~ APPPATH/classes/Controller/Fuel.php [ 24 ] in file:line
2014-12-26 00:37:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'date() expects ...', '/workspace/nike...', 24, Array)
#1 /workspace/nikeplus/application/classes/Controller/Fuel.php(24): date('Ymd', Array)
#2 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Fuel->action_detail()
#3 [internal function]: Kohana_Controller->execute()
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fuel))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#8 {main} in file:line
2014-12-26 00:38:12 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, integer given ~ APPPATH/classes/Controller/Fuel.php [ 19 ] in file:line
2014-12-26 00:38:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/workspace/nike...', 19, Array)
#1 /workspace/nikeplus/application/classes/Controller/Fuel.php(19): in_array('2013', 1)
#2 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Fuel->action_detail()
#3 [internal function]: Kohana_Controller->execute()
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fuel))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#8 {main} in file:line
2014-12-26 00:38:58 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, integer given ~ APPPATH/classes/Controller/Fuel.php [ 20 ] in file:line
2014-12-26 00:38:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/workspace/nike...', 20, Array)
#1 /workspace/nikeplus/application/classes/Controller/Fuel.php(20): in_array('2013', 1)
#2 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Fuel->action_detail()
#3 [internal function]: Kohana_Controller->execute()
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fuel))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#8 {main} in file:line
2014-12-26 00:39:13 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, integer given ~ APPPATH/classes/Controller/Fuel.php [ 20 ] in file:line
2014-12-26 00:39:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/workspace/nike...', 20, Array)
#1 /workspace/nikeplus/application/classes/Controller/Fuel.php(20): in_array('2013', 1)
#2 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Fuel->action_detail()
#3 [internal function]: Kohana_Controller->execute()
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fuel))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#8 {main} in file:line
2014-12-26 00:39:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'var_dump' (T_STRING) ~ APPPATH/classes/Controller/Fuel.php [ 20 ] in file:line
2014-12-26 00:39:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-26 00:39:52 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, integer given ~ APPPATH/classes/Controller/Fuel.php [ 24 ] in file:line
2014-12-26 00:39:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/workspace/nike...', 24, Array)
#1 /workspace/nikeplus/application/classes/Controller/Fuel.php(24): in_array('201311', 1)
#2 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Fuel->action_detail()
#3 [internal function]: Kohana_Controller->execute()
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fuel))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#8 {main} in file:line
2014-12-26 00:40:57 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, integer given ~ APPPATH/classes/Controller/Fuel.php [ 19 ] in file:line
2014-12-26 00:40:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/workspace/nike...', 19, Array)
#1 /workspace/nikeplus/application/classes/Controller/Fuel.php(19): in_array('2013', 1)
#2 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Fuel->action_detail()
#3 [internal function]: Kohana_Controller->execute()
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fuel))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#8 {main} in file:line
2014-12-26 00:41:18 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, integer given ~ APPPATH/classes/Controller/Fuel.php [ 19 ] in file:line
2014-12-26 00:41:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/workspace/nike...', 19, Array)
#1 /workspace/nikeplus/application/classes/Controller/Fuel.php(19): in_array('2013', 1)
#2 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Fuel->action_detail()
#3 [internal function]: Kohana_Controller->execute()
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fuel))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#8 {main} in file:line
2014-12-26 00:41:34 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, integer given ~ APPPATH/classes/Controller/Fuel.php [ 21 ] in file:line
2014-12-26 00:41:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/workspace/nike...', 21, Array)
#1 /workspace/nikeplus/application/classes/Controller/Fuel.php(21): in_array('2013', 1)
#2 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Fuel->action_detail()
#3 [internal function]: Kohana_Controller->execute()
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fuel))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#8 {main} in file:line
2014-12-26 00:41:46 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, integer given ~ APPPATH/classes/Controller/Fuel.php [ 20 ] in file:line
2014-12-26 00:41:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/workspace/nike...', 20, Array)
#1 /workspace/nikeplus/application/classes/Controller/Fuel.php(20): in_array('2013', 1)
#2 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Fuel->action_detail()
#3 [internal function]: Kohana_Controller->execute()
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fuel))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#8 {main} in file:line
2014-12-26 00:44:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: 20131126 ~ APPPATH/views/fuel/detail.php [ 31 ] in /workspace/nikeplus/application/views/fuel/detail.php:31
2014-12-26 00:44:21 --- DEBUG: #0 /workspace/nikeplus/application/views/fuel/detail.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/nike...', 31, Array)
#1 /workspace/nikeplus/kohana/system/classes/Kohana/View.php(61): include('/workspace/nike...')
#2 /workspace/nikeplus/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/workspace/nike...', Array)
#3 /workspace/nikeplus/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /workspace/nikeplus/application/views/layout/default.php(2): Kohana_View->__toString()
#5 /workspace/nikeplus/kohana/system/classes/Kohana/View.php(61): include('/workspace/nike...')
#6 /workspace/nikeplus/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/workspace/nike...', Array)
#7 /workspace/nikeplus/application/classes/Controller/Layout.php(36): Kohana_View->render()
#8 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fuel))
#11 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#14 {main} in /workspace/nikeplus/application/views/fuel/detail.php:31
2014-12-26 01:03:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: subDay ~ APPPATH/views/fuel/detail.php [ 32 ] in /workspace/nikeplus/application/views/fuel/detail.php:32
2014-12-26 01:03:20 --- DEBUG: #0 /workspace/nikeplus/application/views/fuel/detail.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/nike...', 32, Array)
#1 /workspace/nikeplus/kohana/system/classes/Kohana/View.php(61): include('/workspace/nike...')
#2 /workspace/nikeplus/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/workspace/nike...', Array)
#3 /workspace/nikeplus/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /workspace/nikeplus/application/views/layout/default.php(2): Kohana_View->__toString()
#5 /workspace/nikeplus/kohana/system/classes/Kohana/View.php(61): include('/workspace/nike...')
#6 /workspace/nikeplus/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/workspace/nike...', Array)
#7 /workspace/nikeplus/application/classes/Controller/Layout.php(36): Kohana_View->render()
#8 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fuel))
#11 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#14 {main} in /workspace/nikeplus/application/views/fuel/detail.php:32
2014-12-26 01:16:49 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Fuel.php [ 51 ] in file:line
2014-12-26 01:16:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-26 03:14:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: cookieFile ~ APPPATH/classes/Author.php [ 43 ] in /workspace/nikeplus/application/classes/Author.php:43
2014-12-26 03:14:05 --- DEBUG: #0 /workspace/nikeplus/application/classes/Author.php(43): Kohana_Core::error_handler(8, 'Undefined index...', '/workspace/nike...', 43, Array)
#1 /workspace/nikeplus/application/classes/Author.php(23): Author->__construct()
#2 /workspace/nikeplus/application/classes/Controller/Layout.php(25): Author::instance()
#3 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(69): Controller_Layout->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fuelband))
#6 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#9 {main} in /workspace/nikeplus/application/classes/Author.php:43
2014-12-26 03:24:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Author::$cookieFile ~ APPPATH/classes/Author.php [ 76 ] in /workspace/nikeplus/application/classes/Author.php:76
2014-12-26 03:24:02 --- DEBUG: #0 /workspace/nikeplus/application/classes/Author.php(76): Kohana_Core::error_handler(8, 'Undefined prope...', '/workspace/nike...', 76, Array)
#1 /workspace/nikeplus/application/classes/Controller/Fuelband.php(46): Author->getCookieFile()
#2 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Fuelband->action_fetch()
#3 [internal function]: Kohana_Controller->execute()
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fuelband))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#8 {main} in /workspace/nikeplus/application/classes/Author.php:76
2014-12-26 03:46:24 --- EMERGENCY: ErrorException [ 2 ]: opendir() expects parameter 2 to be resource, string given ~ APPPATH/classes/Controller/Fuelband.php [ 105 ] in file:line
2014-12-26 03:46:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'opendir() expec...', '/workspace/nike...', 105, Array)
#1 /workspace/nikeplus/application/classes/Controller/Fuelband.php(105): opendir('/tmp/fuelband/i...', 'r')
#2 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Fuelband->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fuelband))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#8 {main} in file:line
2014-12-26 03:50:26 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant folder - assumed 'folder' ~ APPPATH/views/fuelband/list.php [ 4 ] in /workspace/nikeplus/application/views/fuelband/list.php:4
2014-12-26 03:50:26 --- DEBUG: #0 /workspace/nikeplus/application/views/fuelband/list.php(4): Kohana_Core::error_handler(8, 'Use of undefine...', '/workspace/nike...', 4, Array)
#1 /workspace/nikeplus/kohana/system/classes/Kohana/View.php(61): include('/workspace/nike...')
#2 /workspace/nikeplus/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/workspace/nike...', Array)
#3 /workspace/nikeplus/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /workspace/nikeplus/application/views/layout/default.php(2): Kohana_View->__toString()
#5 /workspace/nikeplus/kohana/system/classes/Kohana/View.php(61): include('/workspace/nike...')
#6 /workspace/nikeplus/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/workspace/nike...', Array)
#7 /workspace/nikeplus/application/classes/Controller/Layout.php(36): Kohana_View->render()
#8 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fuelband))
#11 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#14 {main} in /workspace/nikeplus/application/views/fuelband/list.php:4
2014-12-26 03:53:24 --- EMERGENCY: ErrorException [ 2 ]: opendir(/tmp/fuelband/iSundj//private): failed to open dir: No such file or directory ~ APPPATH/classes/Controller/Fuelband.php [ 108 ] in file:line
2014-12-26 03:53:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'opendir(/tmp/fu...', '/workspace/nike...', 108, Array)
#1 /workspace/nikeplus/application/classes/Controller/Fuelband.php(108): opendir('/tmp/fuelband/i...')
#2 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Fuelband->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fuelband))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#8 {main} in file:line
2014-12-26 04:26:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: path ~ APPPATH/views/fuelband/list.php [ 9 ] in /workspace/nikeplus/application/views/fuelband/list.php:9
2014-12-26 04:26:35 --- DEBUG: #0 /workspace/nikeplus/application/views/fuelband/list.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/nike...', 9, Array)
#1 /workspace/nikeplus/kohana/system/classes/Kohana/View.php(61): include('/workspace/nike...')
#2 /workspace/nikeplus/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/workspace/nike...', Array)
#3 /workspace/nikeplus/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /workspace/nikeplus/application/views/layout/default.php(2): Kohana_View->__toString()
#5 /workspace/nikeplus/kohana/system/classes/Kohana/View.php(61): include('/workspace/nike...')
#6 /workspace/nikeplus/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/workspace/nike...', Array)
#7 /workspace/nikeplus/application/classes/Controller/Layout.php(36): Kohana_View->render()
#8 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fuelband))
#11 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#14 {main} in /workspace/nikeplus/application/views/fuelband/list.php:9
2014-12-26 04:35:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/Controller/Fuelband.php [ 146 ] in /workspace/nikeplus/application/classes/Controller/Fuelband.php:146
2014-12-26 04:35:48 --- DEBUG: #0 /workspace/nikeplus/application/classes/Controller/Fuelband.php(146): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/nike...', 146, Array)
#1 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Fuelband->action_detail()
#2 [internal function]: Kohana_Controller->execute()
#3 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fuelband))
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/nikeplus/application/classes/Controller/Fuelband.php:146
2014-12-26 04:36:39 --- EMERGENCY: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ APPPATH/classes/Controller/Fuelband.php [ 151 ] in /workspace/nikeplus/application/classes/Controller/Fuelband.php:151
2014-12-26 04:36:39 --- DEBUG: #0 /workspace/nikeplus/application/classes/Controller/Fuelband.php(151): Kohana_Core::error_handler(4096, 'Object of class...', '/workspace/nike...', 151, Array)
#1 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Fuelband->action_detail()
#2 [internal function]: Kohana_Controller->execute()
#3 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fuelband))
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/nikeplus/application/classes/Controller/Fuelband.php:151
2014-12-26 04:36:53 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Fuelband.php [ 151 ] in /workspace/nikeplus/application/classes/Controller/Fuelband.php:151
2014-12-26 04:36:53 --- DEBUG: #0 /workspace/nikeplus/application/classes/Controller/Fuelband.php(151): Kohana_Core::error_handler(8, 'Array to string...', '/workspace/nike...', 151, Array)
#1 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Fuelband->action_detail()
#2 [internal function]: Kohana_Controller->execute()
#3 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fuelband))
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/nikeplus/application/classes/Controller/Fuelband.php:151
2014-12-26 04:52:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: thisMonth ~ APPPATH/classes/Controller/Fuelband.php [ 68 ] in /workspace/nikeplus/application/classes/Controller/Fuelband.php:68
2014-12-26 04:52:01 --- DEBUG: #0 /workspace/nikeplus/application/classes/Controller/Fuelband.php(68): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/nike...', 68, Array)
#1 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Fuelband->action_fetch()
#2 [internal function]: Kohana_Controller->execute()
#3 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fuelband))
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/nikeplus/application/classes/Controller/Fuelband.php:68