<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-18 21:12:59 --- EMERGENCY: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] Connection refused ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/PDO.php:130
2015-10-18 21:12:59 --- DEBUG: #0 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/PDO.php(130): Kohana_Database_PDO->connect()
#1 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM i...', 'Model_Profile', Array)
#2 /workspace/irunning.com/www/application/classes/Dao/Profile.php(40): Kohana_Database_Query->execute(Object(Database_PDO))
#3 /workspace/irunning.com/www/application/classes/Controller/Profile.php(7): Dao_Profile->getProfiles()
#4 /workspace/irunning.com/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#10 {main} in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/PDO.php:130
2015-10-18 21:14:51 --- EMERGENCY: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'irunning.ir_profile' doesn't exist [ SELECT * FROM ir_profile ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-10-18 21:14:51 --- DEBUG: #0 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM i...', 'Model_Profile', Array)
#1 /workspace/irunning.com/www/application/classes/Dao/Profile.php(40): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /workspace/irunning.com/www/application/classes/Controller/Profile.php(7): Dao_Profile->getProfiles()
#3 /workspace/irunning.com/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#9 {main} in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-10-18 21:15:33 --- EMERGENCY: View_Exception [ 0 ]: The requested view profile/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php:137
2015-10-18 21:15:33 --- DEBUG: #0 /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('profile/index')
#1 /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('profile/index', NULL)
#2 /workspace/irunning.com/www/application/classes/Controller/Profile.php(9): Kohana_View::factory('profile/index')
#3 /workspace/irunning.com/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#9 {main} in /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php:137
2015-10-18 21:15:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: profiles ~ APPPATH/classes/Controller/Profile.php [ 10 ] in /workspace/irunning.com/www/application/classes/Controller/Profile.php:10
2015-10-18 21:15:49 --- DEBUG: #0 /workspace/irunning.com/www/application/classes/Controller/Profile.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/irun...', 10, Array)
#1 /workspace/irunning.com/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/irunning.com/www/application/classes/Controller/Profile.php:10