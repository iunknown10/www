<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-02 03:42:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Layout' not found ~ APPPATH/classes/Controller/Main.php [ 2 ] in file:line
2015-07-02 03:42:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-02 03:42:56 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Main.php [ 6 ] in /workspace/irunning.com/www/application/classes/Controller/Main.php:6
2015-07-02 03:42:56 --- DEBUG: #0 /workspace/irunning.com/www/application/classes/Controller/Main.php(6): Kohana_Core::error_handler(2, 'Attempt to assi...', '/workspace/irun...', 6, Array)
#1 /workspace/irunning.com/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Main->action_guide()
#2 [internal function]: Kohana_Controller->execute()
#3 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/irunning.com/www/application/classes/Controller/Main.php:6
2015-07-02 03:43:47 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Author::isLogin() ~ APPPATH/classes/Controller/Layout.php [ 18 ] in file:line
2015-07-02 03:43:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-02 03:44:36 --- EMERGENCY: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'irunning.ir_profile' doesn't exist [ SELECT * FROM ir_profile ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-07-02 03:44:36 --- DEBUG: #0 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM i...', 'Model_Profile', Array)
#1 /workspace/irunning.com/www/application/classes/Dao/Profile.php(40): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /workspace/irunning.com/www/application/classes/Controller/Profile.php(7): Dao_Profile->getProfiles()
#3 /workspace/irunning.com/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#9 {main} in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php:251