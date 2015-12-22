<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-12-01 06:59:13 --- EMERGENCY: View_Exception [ 0 ]: The requested view 



爱跑步 - iRunning.com














	
		登录
		注册
	
	
		爱跑步
		
		锻造心智，跑出意境
		
	


	
		首页
		分享
		线路
	

	
			


	
		创建iRunningID ｜ iRunning和媒体 | 使用条款 ｜ 服务条款 | 免责声明 ｜ 帮助
		
		Copyright &copy; 2015 iRunning.com All rights reserved.
	 

 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php:137
2015-12-01 06:59:13 --- DEBUG: #0 /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#1 /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /workspace/irunning.com/www/application/classes/Controller/Login.php(7): Kohana_View::factory(Object(View))
#3 /workspace/irunning.com/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#9 {main} in /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php:137
2015-12-01 06:59:34 --- EMERGENCY: View_Exception [ 0 ]: The requested view 



爱跑步 - iRunning.com














	
		登录
		注册
	
	
		爱跑步
		
		锻造心智，跑出意境
		
	


	
		首页
		分享
		线路
	

	
			


	
		创建iRunningID ｜ iRunning和媒体 | 使用条款 ｜ 服务条款 | 免责声明 ｜ 帮助
		
		Copyright &copy; 2015 iRunning.com All rights reserved.
	 

 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php:137
2015-12-01 06:59:34 --- DEBUG: #0 /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#1 /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /workspace/irunning.com/www/application/classes/Controller/Login.php(7): Kohana_View::factory(Object(View))
#3 /workspace/irunning.com/www/kohana/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#9 {main} in /workspace/irunning.com/www/kohana/system/classes/Kohana/View.php:137
2015-12-01 10:26:11 --- EMERGENCY: Login_Exception [ 0 ]: Not logged in. ~ APPPATH/classes/Controller/Render.php [ 38 ] in file:line
2015-12-01 10:26:11 --- DEBUG: #0 [internal function]: Controller_Render->execute()
#1 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Article))
#2 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#3 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#4 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#5 {main} in file:line
2015-12-01 10:41:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'Dao_Artitle' not found ~ MODPATH/misc/classes/Dao.php [ 35 ] in file:line
2015-12-01 10:41:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-01 10:44:33 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH/classes/Kohana/Response.php [ 160 ] in /workspace/irunning.com/www/kohana/system/classes/Kohana/Response.php:160
2015-12-01 10:44:33 --- DEBUG: #0 /workspace/irunning.com/www/kohana/system/classes/Kohana/Response.php(160): Kohana_Core::error_handler(8, 'Array to string...', '/workspace/irun...', 160, Array)
#1 /workspace/irunning.com/www/application/classes/Controller/Render.php(92): Kohana_Response->body(Array)
#2 /workspace/irunning.com/www/application/classes/Controller/Render.php(59): Controller_Render->after()
#3 [internal function]: Controller_Render->execute()
#4 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Article))
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#8 {main} in /workspace/irunning.com/www/kohana/system/classes/Kohana/Response.php:160
2015-12-01 10:44:33 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH/classes/Kohana/Response.php [ 160 ] in /workspace/irunning.com/www/kohana/system/classes/Kohana/Response.php:160
2015-12-01 10:44:33 --- DEBUG: #0 /workspace/irunning.com/www/kohana/system/classes/Kohana/Response.php(160): Kohana_Core::error_handler(8, 'Array to string...', '/workspace/irun...', 160, Array)
#1 /workspace/irunning.com/www/application/classes/Controller/Render.php(92): Kohana_Response->body(Array)
#2 /workspace/irunning.com/www/application/classes/Controller/Render.php(59): Controller_Render->after()
#3 [internal function]: Controller_Render->execute()
#4 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Article))
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#8 {main} in /workspace/irunning.com/www/kohana/system/classes/Kohana/Response.php:160
2015-12-01 11:24:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: article ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php:65
2015-12-01 11:24:41 --- DEBUG: #0 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/workspace/irun...', 65, Array)
#1 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance('article')
#2 /workspace/irunning.com/www/application/classes/Dao/Article.php(44): Kohana_Database_Query->execute('article')
#3 /workspace/irunning.com/www/application/classes/Controller/Profile.php(112): Dao_Article->countByUserId('10034')
#4 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Profile->action_numbers()
#5 [internal function]: Controller_Render->execute()
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#10 {main} in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php:65
2015-12-01 11:25:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: article ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php:65
2015-12-01 11:25:38 --- DEBUG: #0 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/workspace/irun...', 65, Array)
#1 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance('article')
#2 /workspace/irunning.com/www/application/classes/Dao/Article.php(44): Kohana_Database_Query->execute('article')
#3 /workspace/irunning.com/www/application/classes/Controller/Profile.php(112): Dao_Article->countByUserId('10034')
#4 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Profile->action_numbers()
#5 [internal function]: Controller_Render->execute()
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#10 {main} in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php:65
2015-12-01 11:26:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: article ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php:65
2015-12-01 11:26:26 --- DEBUG: #0 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/workspace/irun...', 65, Array)
#1 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance('article')
#2 /workspace/irunning.com/www/application/classes/Dao/Article.php(44): Kohana_Database_Query->execute('article')
#3 /workspace/irunning.com/www/application/classes/Controller/Profile.php(112): Dao_Article->countByUserId('10034')
#4 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Profile->action_numbers()
#5 [internal function]: Controller_Render->execute()
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#10 {main} in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php:65
2015-12-01 11:26:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: article ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php:65
2015-12-01 11:26:26 --- DEBUG: #0 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/workspace/irun...', 65, Array)
#1 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance('article')
#2 /workspace/irunning.com/www/application/classes/Dao/Article.php(44): Kohana_Database_Query->execute('article')
#3 /workspace/irunning.com/www/application/classes/Controller/Profile.php(112): Dao_Article->countByUserId('10034')
#4 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Profile->action_numbers()
#5 [internal function]: Controller_Render->execute()
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#10 {main} in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php:65
2015-12-01 11:27:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: article ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php:65
2015-12-01 11:27:39 --- DEBUG: #0 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/workspace/irun...', 65, Array)
#1 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance('article')
#2 /workspace/irunning.com/www/application/classes/Dao/Article.php(44): Kohana_Database_Query->execute('article')
#3 /workspace/irunning.com/www/application/classes/Controller/Profile.php(112): Dao_Article->countByUserId('10034')
#4 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Profile->action_numbers()
#5 [internal function]: Controller_Render->execute()
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#10 {main} in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php:65
2015-12-01 11:27:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: article ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php:65
2015-12-01 11:27:39 --- DEBUG: #0 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/workspace/irun...', 65, Array)
#1 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance('article')
#2 /workspace/irunning.com/www/application/classes/Dao/Article.php(44): Kohana_Database_Query->execute('article')
#3 /workspace/irunning.com/www/application/classes/Controller/Profile.php(112): Dao_Article->countByUserId('10034')
#4 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Profile->action_numbers()
#5 [internal function]: Controller_Render->execute()
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#10 {main} in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php:65
2015-12-01 11:27:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: article ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php:65
2015-12-01 11:27:40 --- DEBUG: #0 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/workspace/irun...', 65, Array)
#1 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance('article')
#2 /workspace/irunning.com/www/application/classes/Dao/Article.php(44): Kohana_Database_Query->execute('article')
#3 /workspace/irunning.com/www/application/classes/Controller/Profile.php(112): Dao_Article->countByUserId('10034')
#4 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Profile->action_numbers()
#5 [internal function]: Controller_Render->execute()
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#10 {main} in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php:65
2015-12-01 11:27:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: article ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php:65
2015-12-01 11:27:40 --- DEBUG: #0 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/workspace/irun...', 65, Array)
#1 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance('article')
#2 /workspace/irunning.com/www/application/classes/Dao/Article.php(44): Kohana_Database_Query->execute('article')
#3 /workspace/irunning.com/www/application/classes/Controller/Profile.php(112): Dao_Article->countByUserId('10034')
#4 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Profile->action_numbers()
#5 [internal function]: Controller_Render->execute()
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#10 {main} in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php:65
2015-12-01 11:27:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: article ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php:65
2015-12-01 11:27:40 --- DEBUG: #0 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/workspace/irun...', 65, Array)
#1 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance('article')
#2 /workspace/irunning.com/www/application/classes/Dao/Article.php(44): Kohana_Database_Query->execute('article')
#3 /workspace/irunning.com/www/application/classes/Controller/Profile.php(112): Dao_Article->countByUserId('10034')
#4 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Profile->action_numbers()
#5 [internal function]: Controller_Render->execute()
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#10 {main} in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php:65
2015-12-01 11:27:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: article ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php:65
2015-12-01 11:27:40 --- DEBUG: #0 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/workspace/irun...', 65, Array)
#1 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance('article')
#2 /workspace/irunning.com/www/application/classes/Dao/Article.php(44): Kohana_Database_Query->execute('article')
#3 /workspace/irunning.com/www/application/classes/Controller/Profile.php(112): Dao_Article->countByUserId('10034')
#4 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Profile->action_numbers()
#5 [internal function]: Controller_Render->execute()
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#10 {main} in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php:65
2015-12-01 11:28:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: article ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php:65
2015-12-01 11:28:35 --- DEBUG: #0 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/workspace/irun...', 65, Array)
#1 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance('article')
#2 /workspace/irunning.com/www/application/classes/Dao/Article.php(44): Kohana_Database_Query->execute('article')
#3 /workspace/irunning.com/www/application/classes/Controller/Profile.php(112): Dao_Article->countByUserId('10034')
#4 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Profile->action_numbers()
#5 [internal function]: Controller_Render->execute()
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#10 {main} in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php:65
2015-12-01 11:28:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: article ~ MODPATH/database/classes/Kohana/Database.php [ 65 ] in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php:65
2015-12-01 11:28:35 --- DEBUG: #0 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/workspace/irun...', 65, Array)
#1 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance('article')
#2 /workspace/irunning.com/www/application/classes/Dao/Article.php(44): Kohana_Database_Query->execute('article')
#3 /workspace/irunning.com/www/application/classes/Controller/Profile.php(112): Dao_Article->countByUserId('10034')
#4 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Profile->action_numbers()
#5 [internal function]: Controller_Render->execute()
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#10 {main} in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database.php:65
2015-12-01 11:29:31 --- EMERGENCY: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'irunning.ir_photo' doesn't exist [ SELECT COUNT(*) AS number FROM ir_photo WHERE user_id = '10034' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-12-01 11:29:31 --- DEBUG: #0 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /workspace/irunning.com/www/application/classes/Dao/Photo.php(14): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /workspace/irunning.com/www/application/classes/Controller/Profile.php(113): Dao_Photo->countByUserId('10034')
#3 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Profile->action_numbers()
#4 [internal function]: Controller_Render->execute()
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#9 {main} in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-12-01 11:29:32 --- EMERGENCY: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'irunning.ir_photo' doesn't exist [ SELECT COUNT(*) AS number FROM ir_photo WHERE user_id = '10034' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-12-01 11:29:32 --- DEBUG: #0 /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /workspace/irunning.com/www/application/classes/Dao/Photo.php(14): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /workspace/irunning.com/www/application/classes/Controller/Profile.php(113): Dao_Photo->countByUserId('10034')
#3 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Profile->action_numbers()
#4 [internal function]: Controller_Render->execute()
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#9 {main} in /workspace/irunning.com/www/kohana/modules/database/classes/Kohana/Database/Query.php:251