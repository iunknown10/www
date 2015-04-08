<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-29 04:02:07 --- EMERGENCY: ErrorException [ 2 ]: date() expects parameter 2 to be long, string given ~ APPPATH/classes/Controller/Fuelband.php [ 19 ] in file:line
2014-12-29 04:02:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'date() expects ...', '/workspace/nike...', 19, Array)
#1 /workspace/nikeplus/application/classes/Controller/Fuelband.php(19): date('Y', '')
#2 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Fuelband->action_catcher()
#3 [internal function]: Kohana_Controller->execute()
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fuelband))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#8 {main} in file:line
2014-12-29 04:02:14 --- EMERGENCY: ErrorException [ 2 ]: date() expects parameter 2 to be long, string given ~ APPPATH/classes/Model/Profile.php [ 5 ] in file:line
2014-12-29 04:02:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'date() expects ...', '/workspace/nike...', 5, Array)
#1 /workspace/nikeplus/application/classes/Model/Profile.php(5): date('Y-m-d', '')
#2 /workspace/nikeplus/application/views/profile/list.php(9): Model_Profile->getFuelActivationDate('Y-m-d')
#3 /workspace/nikeplus/kohana/system/classes/Kohana/View.php(61): include('/workspace/nike...')
#4 /workspace/nikeplus/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/workspace/nike...', Array)
#5 /workspace/nikeplus/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /workspace/nikeplus/application/views/layout/default.php(2): Kohana_View->__toString()
#7 /workspace/nikeplus/kohana/system/classes/Kohana/View.php(61): include('/workspace/nike...')
#8 /workspace/nikeplus/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/workspace/nike...', Array)
#9 /workspace/nikeplus/application/classes/Controller/Layout.php(36): Kohana_View->render()
#10 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#13 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#16 {main} in file:line
2014-12-29 04:07:26 --- EMERGENCY: ErrorException [ 2 ]: opendir(/tmp/fuelband/Edmondsong/): failed to open dir: No such file or directory ~ APPPATH/classes/Controller/Fuelband.php [ 125 ] in file:line
2014-12-29 04:07:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'opendir(/tmp/fu...', '/workspace/nike...', 125, Array)
#1 /workspace/nikeplus/application/classes/Controller/Fuelband.php(125): opendir('/tmp/fuelband/E...')
#2 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Fuelband->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fuelband))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#8 {main} in file:line