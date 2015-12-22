<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-12-11 00:29:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Dao_Article::delete() ~ APPPATH/classes/Controller/Article.php [ 90 ] in file:line
2015-12-11 00:29:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-11 00:29:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Dao_Article::delete() ~ APPPATH/classes/Controller/Article.php [ 90 ] in file:line
2015-12-11 00:29:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-11 00:30:41 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Dao_Article::delete() ~ APPPATH/classes/Controller/Article.php [ 90 ] in file:line
2015-12-11 00:30:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-12-11 01:45:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: userId ~ APPPATH/classes/Controller/Article.php [ 56 ] in /workspace/irunning.com/www/application/classes/Controller/Article.php:56
2015-12-11 01:45:50 --- DEBUG: #0 /workspace/irunning.com/www/application/classes/Controller/Article.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/irun...', 56, Array)
#1 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Article->action_list()
#2 [internal function]: Controller_Render->execute()
#3 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Article))
#4 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/irunning.com/www/application/classes/Controller/Article.php:56
2015-12-11 01:45:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: userId ~ APPPATH/classes/Controller/Article.php [ 56 ] in /workspace/irunning.com/www/application/classes/Controller/Article.php:56
2015-12-11 01:45:50 --- DEBUG: #0 /workspace/irunning.com/www/application/classes/Controller/Article.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/irun...', 56, Array)
#1 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Article->action_list()
#2 [internal function]: Controller_Render->execute()
#3 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Article))
#4 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/irunning.com/www/application/classes/Controller/Article.php:56
2015-12-11 01:46:07 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Pagination::URL(), called in /workspace/irunning.com/www/application/classes/Controller/Article.php on line 62 and defined ~ MODPATH/misc/classes/Pagination.php [ 200 ] in /workspace/irunning.com/www/kohana/modules/misc/classes/Pagination.php:200
2015-12-11 01:46:07 --- DEBUG: #0 /workspace/irunning.com/www/kohana/modules/misc/classes/Pagination.php(200): Kohana_Core::error_handler(2, 'Missing argumen...', '/workspace/irun...', 200, Array)
#1 /workspace/irunning.com/www/application/classes/Controller/Article.php(62): Pagination->URL()
#2 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Article->action_list()
#3 [internal function]: Controller_Render->execute()
#4 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Article))
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#8 {main} in /workspace/irunning.com/www/kohana/modules/misc/classes/Pagination.php:200
2015-12-11 01:46:07 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Pagination::URL(), called in /workspace/irunning.com/www/application/classes/Controller/Article.php on line 62 and defined ~ MODPATH/misc/classes/Pagination.php [ 200 ] in /workspace/irunning.com/www/kohana/modules/misc/classes/Pagination.php:200
2015-12-11 01:46:07 --- DEBUG: #0 /workspace/irunning.com/www/kohana/modules/misc/classes/Pagination.php(200): Kohana_Core::error_handler(2, 'Missing argumen...', '/workspace/irun...', 200, Array)
#1 /workspace/irunning.com/www/application/classes/Controller/Article.php(62): Pagination->URL()
#2 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Article->action_list()
#3 [internal function]: Controller_Render->execute()
#4 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Article))
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#8 {main} in /workspace/irunning.com/www/kohana/modules/misc/classes/Pagination.php:200