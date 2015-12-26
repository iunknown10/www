<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-12-26 11:30:31 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Dao_Photo::update(), called in /workspace/irunning.com/www/application/classes/Controller/Home/Photo.php on line 120 and defined ~ APPPATH/classes/Dao/Photo.php [ 44 ] in /workspace/irunning.com/www/application/classes/Dao/Photo.php:44
2015-12-26 11:30:31 --- DEBUG: #0 /workspace/irunning.com/www/application/classes/Dao/Photo.php(44): Kohana_Core::error_handler(2, 'Missing argumen...', '/workspace/irun...', 44, Array)
#1 /workspace/irunning.com/www/application/classes/Controller/Home/Photo.php(120): Dao_Photo->update(Array)
#2 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Home_Photo->action_update()
#3 [internal function]: Controller_Render->execute()
#4 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home_Photo))
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#8 {main} in /workspace/irunning.com/www/application/classes/Dao/Photo.php:44
2015-12-26 11:30:31 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Dao_Photo::update(), called in /workspace/irunning.com/www/application/classes/Controller/Home/Photo.php on line 120 and defined ~ APPPATH/classes/Dao/Photo.php [ 44 ] in /workspace/irunning.com/www/application/classes/Dao/Photo.php:44
2015-12-26 11:30:31 --- DEBUG: #0 /workspace/irunning.com/www/application/classes/Dao/Photo.php(44): Kohana_Core::error_handler(2, 'Missing argumen...', '/workspace/irun...', 44, Array)
#1 /workspace/irunning.com/www/application/classes/Controller/Home/Photo.php(120): Dao_Photo->update(Array)
#2 /workspace/irunning.com/www/application/classes/Controller/Render.php(56): Controller_Home_Photo->action_update()
#3 [internal function]: Controller_Render->execute()
#4 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home_Photo))
#5 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/irunning.com/www/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/irunning.com/www/public/index.php(47): Kohana_Request->execute()
#8 {main} in /workspace/irunning.com/www/application/classes/Dao/Photo.php:44