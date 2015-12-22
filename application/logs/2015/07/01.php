<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-01 22:22:56 --- EMERGENCY: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] Connection refused ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/PDO.php:130
2015-07-01 22:22:56 --- DEBUG: #0 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/PDO.php(130): Kohana_Database_PDO->connect()
#1 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM i...', 'Model_User', Array)
#2 /workspace/irunning.com/www/application/classes/Dao/user.php(26): Kohana_Database_Query->execute(Object(Database_PDO))
#3 /workspace/irunning.com/www/application/classes/Controller/Register.php(8): Dao_User->getUserByUserId(10000)
#4 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Register->action_index()
#5 [internal function]: Controller_Render->execute()
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#10 {main} in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/PDO.php:130