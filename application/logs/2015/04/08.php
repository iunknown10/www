<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-08 03:11:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Layout' not found ~ APPPATH/classes/Controller/Index.php [ 2 ] in file:line
2015-04-08 03:11:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-08 03:11:40 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Author::isLogin() ~ APPPATH/classes/Controller/Render.php [ 36 ] in file:line
2015-04-08 03:11:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-08 03:26:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: jsonp ~ APPPATH/classes/Controller/Register.php [ 13 ] in /workspace/irunning.club/www/application/classes/Controller/Register.php:13
2015-04-08 03:26:00 --- DEBUG: #0 /workspace/irunning.club/www/application/classes/Controller/Register.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/workspace/irun...', 13, Array)
#1 /workspace/irunning.club/www/application/classes/Controller/Render.php(54): Controller_Register->action_save()
#2 [internal function]: Controller_Render->execute()
#3 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#4 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/irunning.club/www/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/irunning.club/www/application/classes/Controller/Register.php:13
2015-04-08 04:07:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: values ~ APPPATH/classes/Controller/Register.php [ 28 ] in /workspace/irunning.club/www/application/classes/Controller/Register.php:28
2015-04-08 04:07:28 --- DEBUG: #0 /workspace/irunning.club/www/application/classes/Controller/Register.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/irun...', 28, Array)
#1 /workspace/irunning.club/www/application/classes/Controller/Render.php(54): Controller_Register->action_save()
#2 [internal function]: Controller_Render->execute()
#3 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#4 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/irunning.club/www/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/irunning.club/www/application/classes/Controller/Register.php:28
2015-04-08 04:07:48 --- EMERGENCY: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] Connection refused ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/PDO.php:242
2015-04-08 04:07:48 --- DEBUG: #0 /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/PDO.php(242): Kohana_Database_PDO->connect()
#1 /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database.php(478): Kohana_Database_PDO->escape('\xE5\xAD\x99\xE4\xB8\x9C\xE6\x9D\xB0')
#2 /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/Query/Builder/Insert.php(146): Kohana_Database->quote('\xE5\xAD\x99\xE4\xB8\x9C\xE6\x9D\xB0')
#3 /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Insert->compile(Object(Database_PDO))
#4 /workspace/irunning.club/www/application/classes/Dao/user.php(18): Kohana_Database_Query->execute(Object(Database_PDO))
#5 /workspace/irunning.club/www/application/classes/Controller/Register.php(28): Dao_User->insert(Array)
#6 /workspace/irunning.club/www/application/classes/Controller/Render.php(54): Controller_Register->action_save()
#7 [internal function]: Controller_Render->execute()
#8 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#9 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /workspace/irunning.club/www/public/index.php(47): Kohana_Request->execute()
#12 {main} in /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/PDO.php:242
2015-04-08 04:09:26 --- EMERGENCY: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] Connection refused ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/PDO.php:242
2015-04-08 04:09:26 --- DEBUG: #0 /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/PDO.php(242): Kohana_Database_PDO->connect()
#1 /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database.php(478): Kohana_Database_PDO->escape('\xE5\xAD\x99\xE4\xB8\x9C\xE6\x9D\xB0')
#2 /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/Query/Builder/Insert.php(146): Kohana_Database->quote('\xE5\xAD\x99\xE4\xB8\x9C\xE6\x9D\xB0')
#3 /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Insert->compile(Object(Database_PDO))
#4 /workspace/irunning.club/www/application/classes/Dao/user.php(18): Kohana_Database_Query->execute(Object(Database_PDO))
#5 /workspace/irunning.club/www/application/classes/Controller/Register.php(28): Dao_User->insert(Array)
#6 /workspace/irunning.club/www/application/classes/Controller/Render.php(54): Controller_Register->action_save()
#7 [internal function]: Controller_Render->execute()
#8 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#9 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /workspace/irunning.club/www/public/index.php(47): Kohana_Request->execute()
#12 {main} in /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/PDO.php:242
2015-04-08 04:09:51 --- EMERGENCY: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] Connection refused ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/PDO.php:242
2015-04-08 04:09:51 --- DEBUG: #0 /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/PDO.php(242): Kohana_Database_PDO->connect()
#1 /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database.php(478): Kohana_Database_PDO->escape('\xE5\xAD\x99\xE4\xB8\x9C\xE6\x9D\xB0')
#2 /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/Query/Builder/Insert.php(146): Kohana_Database->quote('\xE5\xAD\x99\xE4\xB8\x9C\xE6\x9D\xB0')
#3 /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Insert->compile(Object(Database_PDO))
#4 /workspace/irunning.club/www/application/classes/Dao/user.php(18): Kohana_Database_Query->execute(Object(Database_PDO))
#5 /workspace/irunning.club/www/application/classes/Controller/Register.php(28): Dao_User->insert(Array)
#6 /workspace/irunning.club/www/application/classes/Controller/Render.php(54): Controller_Register->action_save()
#7 [internal function]: Controller_Render->execute()
#8 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#9 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /workspace/irunning.club/www/public/index.php(47): Kohana_Request->execute()
#12 {main} in /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/PDO.php:242
2015-04-08 04:15:04 --- EMERGENCY: ErrorException [ 8192 ]: Function ereg() is deprecated ~ MODPATH/misc/classes/Misc.php [ 23 ] in file:line
2015-04-08 04:15:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8192, 'Function ereg()...', '/workspace/irun...', 23, Array)
#1 /workspace/irunning.club/www/kohana/modules/misc/classes/Misc.php(23): ereg()
#2 /workspace/irunning.club/www/application/classes/Controller/Register.php(28): Misc::isEmail('Sundj@live.com')
#3 /workspace/irunning.club/www/application/classes/Controller/Render.php(54): Controller_Register->action_save()
#4 [internal function]: Controller_Render->execute()
#5 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/irunning.club/www/public/index.php(47): Kohana_Request->execute()
#9 {main} in file:line
2015-04-08 05:20:48 --- EMERGENCY: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] Connection refused ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/PDO.php:242
2015-04-08 05:20:48 --- DEBUG: #0 /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/PDO.php(242): Kohana_Database_PDO->connect()
#1 /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database.php(478): Kohana_Database_PDO->escape('\xE5\xAD\x99\xE4\xB8\x9C\xE6\x9D\xB0')
#2 /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/Query/Builder/Insert.php(146): Kohana_Database->quote('\xE5\xAD\x99\xE4\xB8\x9C\xE6\x9D\xB0')
#3 /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Insert->compile(Object(Database_PDO))
#4 /workspace/irunning.club/www/application/classes/Dao/user.php(18): Kohana_Database_Query->execute(Object(Database_PDO))
#5 /workspace/irunning.club/www/application/classes/Controller/Register.php(41): Dao_User->insert(Array)
#6 /workspace/irunning.club/www/application/classes/Controller/Render.php(54): Controller_Register->action_save()
#7 [internal function]: Controller_Render->execute()
#8 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#9 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /workspace/irunning.club/www/public/index.php(47): Kohana_Request->execute()
#12 {main} in /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/PDO.php:242
2015-04-08 05:21:08 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'birth_place' in 'field list' [ INSERT INTO ir_user (name, nickname, email, mobile, wechat, qq, id_card, birth_place, live_place, introducer) VALUES ('孙东杰', 'Sundj', 'Sundj@live.com', '13001010719', 'iSundj', '77739265', '220581198207193376', '吉林', '北京', '') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-04-08 05:21:08 --- DEBUG: #0 /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO ir_...', false, Array)
#1 /workspace/irunning.club/www/application/classes/Dao/user.php(18): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /workspace/irunning.club/www/application/classes/Controller/Register.php(41): Dao_User->insert(Array)
#3 /workspace/irunning.club/www/application/classes/Controller/Render.php(54): Controller_Register->action_save()
#4 [internal function]: Controller_Render->execute()
#5 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/irunning.club/www/public/index.php(47): Kohana_Request->execute()
#9 {main} in /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-04-08 05:27:18 --- EMERGENCY: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry 'Sundj' for key 'nickname' [ INSERT INTO ir_user (name, nickname, email, mobile, wechat, qq, id_card, birth_place, live_place, introducer) VALUES ('孙东杰', 'Sundj', 'Sundj@live.com', '13001010719', 'iSundj', '77739265', '220581198207193376', '吉林', '北京', '') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-04-08 05:27:18 --- DEBUG: #0 /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO ir_...', false, Array)
#1 /workspace/irunning.club/www/application/classes/Dao/user.php(18): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /workspace/irunning.club/www/application/classes/Controller/Register.php(41): Dao_User->insert(Array)
#3 /workspace/irunning.club/www/application/classes/Controller/Render.php(54): Controller_Register->action_save()
#4 [internal function]: Controller_Render->execute()
#5 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/irunning.club/www/public/index.php(47): Kohana_Request->execute()
#9 {main} in /workspace/irunning.club/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-04-08 05:31:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/user.php [ 26 ] in file:line
2015-04-08 05:31:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-08 05:37:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: IDCard ~ APPPATH/classes/Controller/Register.php [ 45 ] in /workspace/irunning.club/www/application/classes/Controller/Register.php:45
2015-04-08 05:37:06 --- DEBUG: #0 /workspace/irunning.club/www/application/classes/Controller/Register.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/irun...', 45, Array)
#1 /workspace/irunning.club/www/application/classes/Controller/Render.php(54): Controller_Register->action_save()
#2 [internal function]: Controller_Render->execute()
#3 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#4 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/irunning.club/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/irunning.club/www/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/irunning.club/www/application/classes/Controller/Register.php:45
2015-04-08 06:29:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Dao_invitation' not found ~ MODPATH/misc/classes/Dao.php [ 35 ] in file:line
2015-04-08 06:29:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line