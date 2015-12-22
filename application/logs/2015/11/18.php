<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-11-18 02:16:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Controller/Register.php [ 52 ] in /workspace/irunning.com/www/application/classes/Controller/Register.php:52
2015-11-18 02:16:47 --- DEBUG: #0 /workspace/irunning.com/www/application/classes/Controller/Register.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/workspace/irun...', 52, Array)
#1 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Register->action_save()
#2 [internal function]: Controller_Render->execute()
#3 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#4 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/irunning.com/www/application/classes/Controller/Register.php:52
2015-11-18 02:25:43 --- EMERGENCY: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'irunning.ir_profile' doesn't exist [ SELECT * FROM ir_profile ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-11-18 02:25:43 --- DEBUG: #0 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM i...', 'Model_Profile', Array)
#1 /workspace/irunning.com/www/application/classes/Dao/Profile.php(40): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /workspace/irunning.com/www/application/classes/Controller/Profile.php(7): Dao_Profile->getProfiles()
#3 /workspace/irunning.com/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#9 {main} in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-11-18 03:07:40 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Dao_User::getUserByUserId(), called in /workspace/irunning.com/www/application/classes/Controller/Profile.php on line 7 and defined ~ APPPATH/classes/Dao/User.php [ 23 ] in /workspace/irunning.com/www/application/classes/Dao/User.php:23
2015-11-18 03:07:40 --- DEBUG: #0 /workspace/irunning.com/www/application/classes/Dao/User.php(23): Kohana_Core::error_handler(2, 'Missing argumen...', '/workspace/irun...', 23, Array)
#1 /workspace/irunning.com/www/application/classes/Controller/Profile.php(7): Dao_User->getUserByUserId()
#2 /workspace/irunning.com/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#8 {main} in /workspace/irunning.com/www/application/classes/Dao/User.php:23
2015-11-18 03:14:05 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Dao_User::getUserByUserId(), called in /workspace/irunning.com/www/application/classes/Controller/Profile.php on line 9 and defined ~ APPPATH/classes/Dao/User.php [ 23 ] in /workspace/irunning.com/www/application/classes/Dao/User.php:23
2015-11-18 03:14:05 --- DEBUG: #0 /workspace/irunning.com/www/application/classes/Dao/User.php(23): Kohana_Core::error_handler(2, 'Missing argumen...', '/workspace/irun...', 23, Array)
#1 /workspace/irunning.com/www/application/classes/Controller/Profile.php(9): Dao_User->getUserByUserId()
#2 /workspace/irunning.com/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#8 {main} in /workspace/irunning.com/www/application/classes/Dao/User.php:23
2015-11-18 03:26:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: nickname ~ APPPATH/classes/Controller/Profile.php [ 9 ] in /workspace/irunning.com/www/application/classes/Controller/Profile.php:9
2015-11-18 03:26:18 --- DEBUG: #0 /workspace/irunning.com/www/application/classes/Controller/Profile.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/irun...', 9, Array)
#1 /workspace/irunning.com/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/irunning.com/www/application/classes/Controller/Profile.php:9
2015-11-18 03:29:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: invitation ~ APPPATH/views/profile/form.php [ 4 ] in /workspace/irunning.com/www/application/views/profile/form.php:4
2015-11-18 03:29:26 --- DEBUG: #0 /workspace/irunning.com/www/application/views/profile/form.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/irun...', 4, Array)
#1 /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php(61): include('/workspace/irun...')
#2 /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/workspace/irun...', Array)
#3 /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /workspace/irunning.com/www/application/views/layout/profile.php(14): Kohana_View->__toString()
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php(61): include('/workspace/irun...')
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/workspace/irun...', Array)
#7 /workspace/irunning.com/www/application/classes/Controller/Layout.php(18): Kohana_View->render()
#8 /workspace/irunning.com/www/kohana/system/classes/Kohana/Controller.php(87): Controller_Layout->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#11 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#14 {main} in /workspace/irunning.com/www/application/views/profile/form.php:4