<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-28 21:43:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: folder ~ APPPATH/classes/Controller/Fuelband.php [ 156 ] in /workspace/nikeplus/application/classes/Controller/Fuelband.php:156
2014-12-28 21:43:58 --- DEBUG: #0 /workspace/nikeplus/application/classes/Controller/Fuelband.php(156): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/nike...', 156, Array)
#1 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Fuelband->action_detail()
#2 [internal function]: Kohana_Controller->execute()
#3 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fuelband))
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/nikeplus/application/classes/Controller/Fuelband.php:156
2014-12-28 21:44:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: folder ~ APPPATH/classes/Controller/Fuelband.php [ 156 ] in /workspace/nikeplus/application/classes/Controller/Fuelband.php:156
2014-12-28 21:44:08 --- DEBUG: #0 /workspace/nikeplus/application/classes/Controller/Fuelband.php(156): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/nike...', 156, Array)
#1 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Fuelband->action_detail()
#2 [internal function]: Kohana_Controller->execute()
#3 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Fuelband))
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/nikeplus/application/classes/Controller/Fuelband.php:156
2014-12-28 21:52:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: activity ~ APPPATH/views/fuelband/detail.php [ 2 ] in /workspace/nikeplus/application/views/fuelband/detail.php:2
2014-12-28 21:52:43 --- DEBUG: #0 /workspace/nikeplus/application/views/fuelband/detail.php(2): Kohana_Core::error_handler(8, 'Undefined index...', '/workspace/nike...', 2, Array)
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
#14 {main} in /workspace/nikeplus/application/views/fuelband/detail.php:2
2014-12-28 21:53:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: activity ~ APPPATH/views/fuelband/detail.php [ 4 ] in /workspace/nikeplus/application/views/fuelband/detail.php:4
2014-12-28 21:53:18 --- DEBUG: #0 /workspace/nikeplus/application/views/fuelband/detail.php(4): Kohana_Core::error_handler(8, 'Undefined index...', '/workspace/nike...', 4, Array)
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
#14 {main} in /workspace/nikeplus/application/views/fuelband/detail.php:4