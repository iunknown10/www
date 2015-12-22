<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-29 04:07:11 --- EMERGENCY: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] Connection refused ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/PDO.php:242
2015-10-29 04:07:11 --- DEBUG: #0 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/PDO.php(242): Kohana_Database_PDO->connect()
#1 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php(478): Kohana_Database_PDO->escape('aabccd')
#2 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query/Builder.php(116): Kohana_Database->quote('aabccd')
#3 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query/Builder/Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_PDO), Array)
#4 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_PDO))
#5 /workspace/irunning.com/www/application/classes/Dao/Invitation.php(15): Kohana_Database_Query->execute(Object(Database_PDO))
#6 /workspace/irunning.com/www/application/classes/Controller/Register.php(8): Dao_Invitation->getInvitationByCode('aabccd')
#7 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Register->action_index()
#8 [internal function]: Controller_Render->execute()
#9 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#10 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#13 {main} in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/PDO.php:242
2015-10-29 21:21:01 --- EMERGENCY: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] Connection refused ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/PDO.php:242
2015-10-29 21:21:01 --- DEBUG: #0 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/PDO.php(242): Kohana_Database_PDO->connect()
#1 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php(478): Kohana_Database_PDO->escape('aabccd')
#2 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query/Builder.php(116): Kohana_Database->quote('aabccd')
#3 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query/Builder/Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_PDO), Array)
#4 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_PDO))
#5 /workspace/irunning.com/www/application/classes/Dao/Invitation.php(15): Kohana_Database_Query->execute(Object(Database_PDO))
#6 /workspace/irunning.com/www/application/classes/Controller/Register.php(8): Dao_Invitation->getInvitationByCode('aabccd')
#7 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Register->action_index()
#8 [internal function]: Controller_Render->execute()
#9 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#10 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#13 {main} in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/PDO.php:242