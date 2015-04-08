<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-23 00:27:44 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Result_Cached::__construct() must be of the type array, object given, called in /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php on line 186 and defined ~ MODPATH/database/classes/Kohana/Database/Result/Cached.php [ 13 ] in /workspace/coast/kohana/modules/database/classes/Kohana/Database/Result/Cached.php:13
2014-12-23 00:27:44 --- DEBUG: #0 /workspace/coast/kohana/modules/database/classes/Kohana/Database/Result/Cached.php(13): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/workspace/coas...', 13, Array)
#1 /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php(186): Kohana_Database_Result_Cached->__construct(Object(Model_Product), 'SELECT * FROM c...', 'Model_Product', Array)
#2 /workspace/coast/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM c...', 'Model_Product', Array)
#3 /workspace/coast/application/classes/Dao/Product.php(21): Kohana_Database_Query->execute(Object(Database_PDO))
#4 /workspace/coast/application/classes/Controller/Product.php(16): Dao_Product->getProducts(10, 0)
#5 /workspace/coast/kohana/system/classes/Kohana/Controller.php(84): Controller_Product->action_list()
#6 [internal function]: Kohana_Controller->execute()
#7 /workspace/coast/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#8 /workspace/coast/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /workspace/coast/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /workspace/coast/public/index.php(47): Kohana_Request->execute()
#11 {main} in /workspace/coast/kohana/modules/database/classes/Kohana/Database/Result/Cached.php:13
2014-12-23 00:30:36 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getName() on a non-object ~ APPPATH/views/product/list.php [ 3 ] in file:line
2014-12-23 00:30:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-23 00:43:42 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getName() on a non-object ~ APPPATH/views/product/list.php [ 3 ] in file:line
2014-12-23 00:43:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-23 00:43:44 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getName() on a non-object ~ APPPATH/views/product/list.php [ 3 ] in file:line
2014-12-23 00:43:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-23 00:43:45 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getName() on a non-object ~ APPPATH/views/product/list.php [ 3 ] in file:line
2014-12-23 00:43:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-23 00:43:45 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getName() on a non-object ~ APPPATH/views/product/list.php [ 3 ] in file:line
2014-12-23 00:43:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-23 00:43:45 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getName() on a non-object ~ APPPATH/views/product/list.php [ 3 ] in file:line
2014-12-23 00:43:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-23 00:43:46 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getName() on a non-object ~ APPPATH/views/product/list.php [ 3 ] in file:line
2014-12-23 00:43:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-23 00:43:56 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getName() on a non-object ~ APPPATH/views/product/list.php [ 3 ] in file:line
2014-12-23 00:43:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-23 00:48:25 --- EMERGENCY: ErrorException [ 2 ]: PDO::__construct() expects parameter 4 to be array, string given ~ APPPATH/classes/Controller/Product.php [ 15 ] in file:line
2014-12-23 00:48:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'PDO::__construc...', '/workspace/coas...', 15, Array)
#1 /workspace/coast/application/classes/Controller/Product.php(15): PDO->__construct('mysql:l27.0.0.1', 'root', 'root', 'coast')
#2 /workspace/coast/kohana/system/classes/Kohana/Controller.php(84): Controller_Product->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 /workspace/coast/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 /workspace/coast/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/coast/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/coast/public/index.php(47): Kohana_Request->execute()
#8 {main} in file:line
2014-12-23 00:50:41 --- EMERGENCY: ErrorException [ 2 ]: PDO::__construct() expects parameter 4 to be array, boolean given ~ APPPATH/classes/Controller/Product.php [ 15 ] in file:line
2014-12-23 00:50:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'PDO::__construc...', '/workspace/coas...', 15, Array)
#1 /workspace/coast/application/classes/Controller/Product.php(15): PDO->__construct('mysql:host=l27....', 'root', 'root', false)
#2 /workspace/coast/kohana/system/classes/Kohana/Controller.php(84): Controller_Product->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 /workspace/coast/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 /workspace/coast/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/coast/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/coast/public/index.php(47): Kohana_Request->execute()
#8 {main} in file:line
2014-12-23 00:51:20 --- EMERGENCY: PDOException [ 2002 ]: SQLSTATE[HY000] [2002] php_network_getaddresses: getaddrinfo failed: nodename nor servname provided, or not known ~ APPPATH/classes/Controller/Product.php [ 15 ] in /workspace/coast/application/classes/Controller/Product.php:0
2014-12-23 00:51:20 --- DEBUG: #0 /workspace/coast/application/classes/Controller/Product.php(0): PDO->__construct()
#1 /workspace/coast/kohana/system/classes/Kohana/Controller.php(84): Controller_Product->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 /workspace/coast/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 /workspace/coast/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/coast/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/coast/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/coast/application/classes/Controller/Product.php:0
2014-12-23 00:51:47 --- EMERGENCY: PDOException [ 2002 ]: SQLSTATE[HY000] [2002] php_network_getaddresses: getaddrinfo failed: nodename nor servname provided, or not known ~ APPPATH/classes/Controller/Product.php [ 15 ] in /workspace/coast/application/classes/Controller/Product.php:0
2014-12-23 00:51:47 --- DEBUG: #0 /workspace/coast/application/classes/Controller/Product.php(0): PDO->__construct()
#1 /workspace/coast/kohana/system/classes/Kohana/Controller.php(84): Controller_Product->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 /workspace/coast/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 /workspace/coast/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/coast/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/coast/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/coast/application/classes/Controller/Product.php:0
2014-12-23 00:51:48 --- EMERGENCY: PDOException [ 2002 ]: SQLSTATE[HY000] [2002] php_network_getaddresses: getaddrinfo failed: nodename nor servname provided, or not known ~ APPPATH/classes/Controller/Product.php [ 15 ] in /workspace/coast/application/classes/Controller/Product.php:0
2014-12-23 00:51:48 --- DEBUG: #0 /workspace/coast/application/classes/Controller/Product.php(0): PDO->__construct()
#1 /workspace/coast/kohana/system/classes/Kohana/Controller.php(84): Controller_Product->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 /workspace/coast/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 /workspace/coast/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/coast/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/coast/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/coast/application/classes/Controller/Product.php:0
2014-12-23 00:53:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: statement ~ APPPATH/classes/Controller/Product.php [ 16 ] in /workspace/coast/application/classes/Controller/Product.php:16
2014-12-23 00:53:55 --- DEBUG: #0 /workspace/coast/application/classes/Controller/Product.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/coas...', 16, Array)
#1 /workspace/coast/kohana/system/classes/Kohana/Controller.php(84): Controller_Product->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 /workspace/coast/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 /workspace/coast/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/coast/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/coast/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/coast/application/classes/Controller/Product.php:16
2014-12-23 00:56:29 --- EMERGENCY: ErrorException [ 2 ]: PDO::exec() expects exactly 1 parameter, 0 given ~ APPPATH/classes/Controller/Product.php [ 18 ] in file:line
2014-12-23 00:56:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'PDO::exec() exp...', '/workspace/coas...', 18, Array)
#1 /workspace/coast/application/classes/Controller/Product.php(18): PDO->exec()
#2 /workspace/coast/kohana/system/classes/Kohana/Controller.php(84): Controller_Product->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 /workspace/coast/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 /workspace/coast/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/coast/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/coast/public/index.php(47): Kohana_Request->execute()
#8 {main} in file:line
2014-12-23 00:56:54 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method PDO::execute() ~ APPPATH/classes/Controller/Product.php [ 18 ] in file:line
2014-12-23 00:56:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-23 01:00:21 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: foo::$_properties ~ APPPATH/classes/Controller/Product.php [ 8 ] in file:line
2014-12-23 01:00:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-23 04:06:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: loginURL ~ APPPATH/classes/Lander.php [ 47 ] in /workspace/nikeplus/application/classes/Lander.php:47
2014-12-23 04:06:04 --- DEBUG: #0 /workspace/nikeplus/application/classes/Lander.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/nike...', 47, Array)
#1 /workspace/nikeplus/application/classes/Controller/Profile.php(7): Lander->execute()
#2 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#8 {main} in /workspace/nikeplus/application/classes/Lander.php:47
2014-12-23 04:09:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/Lander.php [ 51 ] in /workspace/nikeplus/application/classes/Lander.php:51
2014-12-23 04:09:44 --- DEBUG: #0 /workspace/nikeplus/application/classes/Lander.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/nike...', 51, Array)
#1 /workspace/nikeplus/application/classes/Controller/Profile.php(7): Lander->execute()
#2 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#8 {main} in /workspace/nikeplus/application/classes/Lander.php:51
2014-12-23 04:28:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: uri ~ APPPATH/classes/Lander.php [ 80 ] in /workspace/nikeplus/application/classes/Lander.php:80
2014-12-23 04:28:41 --- DEBUG: #0 /workspace/nikeplus/application/classes/Lander.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/workspace/nike...', 80, Array)
#1 /workspace/nikeplus/application/classes/Controller/Profile.php(7): Lander->execute()
#2 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#8 {main} in /workspace/nikeplus/application/classes/Lander.php:80
2014-12-23 04:29:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: uri ~ APPPATH/classes/Lander.php [ 81 ] in /workspace/nikeplus/application/classes/Lander.php:81
2014-12-23 04:29:07 --- DEBUG: #0 /workspace/nikeplus/application/classes/Lander.php(81): Kohana_Core::error_handler(8, 'Undefined index...', '/workspace/nike...', 81, Array)
#1 /workspace/nikeplus/application/classes/Controller/Profile.php(7): Lander->execute()
#2 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#8 {main} in /workspace/nikeplus/application/classes/Lander.php:81
2014-12-23 04:44:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: response ~ APPPATH/classes/Author.php [ 17 ] in /workspace/nikeplus/application/classes/Author.php:17
2014-12-23 04:44:27 --- DEBUG: #0 /workspace/nikeplus/application/classes/Author.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/nike...', 17, Array)
#1 /workspace/nikeplus/application/classes/Lander.php(63): Author->__construct(Array)
#2 /workspace/nikeplus/application/classes/Controller/Profile.php(7): Lander->execute()
#3 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#9 {main} in /workspace/nikeplus/application/classes/Author.php:17
2014-12-23 05:26:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: autor ~ APPPATH/classes/Controller/Profile.php [ 8 ] in /workspace/nikeplus/application/classes/Controller/Profile.php:8
2014-12-23 05:26:45 --- DEBUG: #0 /workspace/nikeplus/application/classes/Controller/Profile.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/nike...', 8, Array)
#1 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/nikeplus/application/classes/Controller/Profile.php:8
2014-12-23 05:27:02 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'id' ~ APPPATH/classes/Author.php [ 31 ] in /workspace/nikeplus/application/classes/Author.php:31
2014-12-23 05:27:02 --- DEBUG: #0 /workspace/nikeplus/application/classes/Author.php(31): Kohana_Core::error_handler(2, 'Illegal string ...', '/workspace/nike...', 31, Array)
#1 /workspace/nikeplus/application/classes/Lander.php(76): Author->__construct()
#2 /workspace/nikeplus/application/classes/Controller/Profile.php(9): Lander->execute()
#3 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#9 {main} in /workspace/nikeplus/application/classes/Author.php:31
2014-12-23 05:27:40 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'id' ~ APPPATH/classes/Author.php [ 34 ] in /workspace/nikeplus/application/classes/Author.php:34
2014-12-23 05:27:40 --- DEBUG: #0 /workspace/nikeplus/application/classes/Author.php(34): Kohana_Core::error_handler(2, 'Illegal string ...', '/workspace/nike...', 34, Array)
#1 /workspace/nikeplus/application/classes/Lander.php(76): Author->__construct()
#2 /workspace/nikeplus/application/classes/Controller/Profile.php(9): Lander->execute()
#3 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#9 {main} in /workspace/nikeplus/application/classes/Author.php:34
2014-12-23 05:28:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: screenName ~ APPPATH/classes/Author.php [ 35 ] in /workspace/nikeplus/application/classes/Author.php:35
2014-12-23 05:28:02 --- DEBUG: #0 /workspace/nikeplus/application/classes/Author.php(35): Kohana_Core::error_handler(8, 'Undefined index...', '/workspace/nike...', 35, Array)
#1 /workspace/nikeplus/application/classes/Lander.php(76): Author->__construct()
#2 /workspace/nikeplus/application/classes/Controller/Profile.php(9): Lander->execute()
#3 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#9 {main} in /workspace/nikeplus/application/classes/Author.php:35
2014-12-23 05:28:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: screenName ~ APPPATH/classes/Author.php [ 37 ] in /workspace/nikeplus/application/classes/Author.php:37
2014-12-23 05:28:20 --- DEBUG: #0 /workspace/nikeplus/application/classes/Author.php(37): Kohana_Core::error_handler(8, 'Undefined index...', '/workspace/nike...', 37, Array)
#1 /workspace/nikeplus/application/classes/Lander.php(76): Author->__construct()
#2 /workspace/nikeplus/application/classes/Controller/Profile.php(9): Lander->execute()
#3 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#9 {main} in /workspace/nikeplus/application/classes/Author.php:37
2014-12-23 05:28:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: uri ~ APPPATH/classes/Author.php [ 38 ] in /workspace/nikeplus/application/classes/Author.php:38
2014-12-23 05:28:35 --- DEBUG: #0 /workspace/nikeplus/application/classes/Author.php(38): Kohana_Core::error_handler(8, 'Undefined index...', '/workspace/nike...', 38, Array)
#1 /workspace/nikeplus/application/classes/Lander.php(76): Author->__construct()
#2 /workspace/nikeplus/application/classes/Controller/Profile.php(9): Lander->execute()
#3 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#9 {main} in /workspace/nikeplus/application/classes/Author.php:38
2014-12-23 05:31:20 --- EMERGENCY: ErrorException [ 8 ]: A session had already been started - ignoring session_start() ~ APPPATH/classes/Author.php [ 27 ] in file:line
2014-12-23 05:31:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A session had a...', '/workspace/nike...', 27, Array)
#1 /workspace/nikeplus/application/classes/Author.php(27): session_start()
#2 /workspace/nikeplus/application/classes/Lander.php(76): Author->__construct()
#3 /workspace/nikeplus/application/classes/Controller/Profile.php(10): Lander->execute()
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_list()
#5 [internal function]: Kohana_Controller->execute()
#6 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#10 {main} in file:line
2014-12-23 21:53:57 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Profile.php [ 7 ] in /workspace/nikeplus/application/classes/Controller/Profile.php:7
2014-12-23 21:53:57 --- DEBUG: #0 /workspace/nikeplus/application/classes/Controller/Profile.php(7): Kohana_Core::error_handler(2, 'Attempt to assi...', '/workspace/nike...', 7, Array)
#1 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/nikeplus/application/classes/Controller/Profile.php:7
2014-12-23 21:57:10 --- EMERGENCY: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/Controller/Profile.php [ 7 ] in /workspace/nikeplus/application/classes/Controller/Profile.php:7
2014-12-23 21:57:10 --- DEBUG: #0 /workspace/nikeplus/application/classes/Controller/Profile.php(7): Kohana_Core::error_handler(2048, 'Only variables ...', '/workspace/nike...', 7, Array)
#1 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/nikeplus/application/classes/Controller/Profile.php:7
2014-12-23 22:04:28 --- EMERGENCY: Exception [ 0 ]: 登陆失败 ~ APPPATH/classes/Lander.php [ 60 ] in /workspace/nikeplus/application/classes/Controller/Profile.php:14
2014-12-23 22:04:28 --- DEBUG: #0 /workspace/nikeplus/application/classes/Controller/Profile.php(14): Lander->execute()
#1 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/nikeplus/application/classes/Controller/Profile.php:14
2014-12-23 22:04:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: author ~ APPPATH/classes/Controller/Profile.php [ 19 ] in /workspace/nikeplus/application/classes/Controller/Profile.php:19
2014-12-23 22:04:54 --- DEBUG: #0 /workspace/nikeplus/application/classes/Controller/Profile.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/nike...', 19, Array)
#1 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/nikeplus/application/classes/Controller/Profile.php:19
2014-12-23 22:05:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: author ~ APPPATH/classes/Controller/Profile.php [ 19 ] in /workspace/nikeplus/application/classes/Controller/Profile.php:19
2014-12-23 22:05:26 --- DEBUG: #0 /workspace/nikeplus/application/classes/Controller/Profile.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/nike...', 19, Array)
#1 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/nikeplus/application/classes/Controller/Profile.php:19
2014-12-23 22:05:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: author ~ APPPATH/classes/Controller/Profile.php [ 19 ] in /workspace/nikeplus/application/classes/Controller/Profile.php:19
2014-12-23 22:05:45 --- DEBUG: #0 /workspace/nikeplus/application/classes/Controller/Profile.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/nike...', 19, Array)
#1 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/nikeplus/application/classes/Controller/Profile.php:19
2014-12-23 22:06:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: author ~ APPPATH/classes/Controller/Profile.php [ 19 ] in /workspace/nikeplus/application/classes/Controller/Profile.php:19
2014-12-23 22:06:13 --- DEBUG: #0 /workspace/nikeplus/application/classes/Controller/Profile.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/nike...', 19, Array)
#1 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/nikeplus/application/classes/Controller/Profile.php:19
2014-12-23 22:06:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: author ~ APPPATH/classes/Controller/Profile.php [ 19 ] in /workspace/nikeplus/application/classes/Controller/Profile.php:19
2014-12-23 22:06:29 --- DEBUG: #0 /workspace/nikeplus/application/classes/Controller/Profile.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/nike...', 19, Array)
#1 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/nikeplus/application/classes/Controller/Profile.php:19
2014-12-23 22:13:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: author ~ APPPATH/classes/Controller/Profile.php [ 19 ] in /workspace/nikeplus/application/classes/Controller/Profile.php:19
2014-12-23 22:13:26 --- DEBUG: #0 /workspace/nikeplus/application/classes/Controller/Profile.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/nike...', 19, Array)
#1 /workspace/nikeplus/kohana/system/classes/Kohana/Controller.php(84): Controller_Profile->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /workspace/nikeplus/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /workspace/nikeplus/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /workspace/nikeplus/public/index.php(47): Kohana_Request->execute()
#7 {main} in /workspace/nikeplus/application/classes/Controller/Profile.php:19