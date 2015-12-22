<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-10 02:40:25 --- EMERGENCY: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] Connection refused ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/PDO.php:242
2015-04-10 02:40:25 --- DEBUG: #0 /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/PDO.php(242): Kohana_Database_PDO->connect()
#1 /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database.php(478): Kohana_Database_PDO->escape('')
#2 /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/Query/Builder.php(116): Kohana_Database->quote('')
#3 /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/Query/Builder/Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_PDO), Array)
#4 /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_PDO))
#5 /workspace/irunning.club/www/application/classes/Dao/invitation.php(15): Kohana_Database_Query->execute(Object(Database_PDO))
#6 /workspace/irunning.club/www/application/classes/Controller/Register.php(33): Dao_Invitation->getInvitationByCode('')
#7 /workspace/irunning.club/www/application/classes/Controller/Render.php(56): Controller_Register->action_save()
#8 [internal function]: Controller_Render->execute()
#9 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#10 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /workspace/irunning.club/www/public/index.php(47): Kohana_Request->execute()
#13 {main} in /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/PDO.php:242
2015-04-10 02:40:50 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::getUserId() ~ APPPATH/classes/Controller/Register.php [ 38 ] in file:line
2015-04-10 02:40:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line