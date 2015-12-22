<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-17 01:11:11 --- EMERGENCY: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] Connection refused ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/PDO.php:242
2015-08-17 01:11:11 --- DEBUG: #0 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/PDO.php(242): Kohana_Database_PDO->connect()
#1 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php(478): Kohana_Database_PDO->escape('8')
#2 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query/Builder.php(116): Kohana_Database->quote('8')
#3 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query/Builder/Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_PDO), Array)
#4 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_PDO))
#5 /workspace/irunning.com/www/application/classes/Dao/Activity.php(28): Kohana_Database_Query->execute(Object(Database_PDO))
#6 /workspace/irunning.com/www/application/classes/Controller/Route.php(8): Dao_Activity->getActivityByActivityId('8')
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Route->action_run()
#8 [internal function]: Kohana_Controller->execute()
#9 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Route))
#10 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#13 {main} in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/PDO.php:242
2015-08-17 03:17:46 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Dao_Coord::deleteByActivityId() ~ APPPATH/classes/Task/Suunto/Catcher/Activity.php [ 80 ] in file:line
2015-08-17 03:17:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-17 03:41:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: route ~ APPPATH/classes/Controller/Route.php [ 16 ] in /workspace/irunning.com/www/application/classes/Controller/Route.php:16
2015-08-17 03:41:13 --- DEBUG: #0 /workspace/irunning.com/www/application/classes/Controller/Route.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/irun...', 16, Array)
#1 /workspace/irunning.com/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Route->action_run()
#2 [internal function]: Kohana_Controller->execute()
#3 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Route))
#4 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/irunning.com/www/application/classes/Controller/Route.php:16