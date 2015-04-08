<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-22 02:03:16 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /workspace/coast/kohana/system/classes/Kohana/Cookie.php:67
2014-12-22 02:03:16 --- DEBUG: #0 /workspace/coast/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('CNZZDATA155540', NULL)
#1 /workspace/coast/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('CNZZDATA155540')
#2 /workspace/coast/public/index.php(51): Kohana_Request::factory(true, Array, false)
#3 {main} in /workspace/coast/kohana/system/classes/Kohana/Cookie.php:67
2014-12-22 02:09:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: result ~ SYSPATH/classes/Kohana/Request.php [ 203 ] in /workspace/coast/kohana/system/classes/Kohana/Request.php:203
2014-12-22 02:09:54 --- DEBUG: #0 /workspace/coast/kohana/system/classes/Kohana/Request.php(203): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/coas...', 203, Array)
#1 /workspace/coast/public/index.php(46): Kohana_Request::factory(true, Array, false)
#2 {main} in /workspace/coast/kohana/system/classes/Kohana/Request.php:203
2014-12-22 02:09:59 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ SYSPATH/classes/Kohana/Request.php [ 203 ] in file:line
2014-12-22 02:09:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 02:43:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: this ~ SYSPATH/classes/Kohana/Request.php [ 154 ] in /workspace/coast/kohana/system/classes/Kohana/Request.php:154
2014-12-22 02:43:26 --- DEBUG: #0 /workspace/coast/kohana/system/classes/Kohana/Request.php(154): Kohana_Core::error_handler(8, 'Undefined varia...', '/workspace/coas...', 154, Array)
#1 /workspace/coast/public/index.php(46): Kohana_Request::factory(true, Array, false)
#2 {main} in /workspace/coast/kohana/system/classes/Kohana/Request.php:154
2014-12-22 04:35:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'Dao' not found ~ APPPATH/classes/Controller/Product.php [ 10 ] in file:line
2014-12-22 04:35:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 04:38:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Dao' not found ~ APPPATH/classes/Controller/Product.php [ 10 ] in file:line
2014-12-22 04:38:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 04:38:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Dao' not found ~ APPPATH/classes/Controller/Product.php [ 10 ] in file:line
2014-12-22 04:38:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 04:38:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Dao' not found ~ APPPATH/classes/Controller/Product.php [ 10 ] in file:line
2014-12-22 04:38:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 04:39:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Dao' not found ~ APPPATH/classes/Controller/Product.php [ 10 ] in file:line
2014-12-22 04:39:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 04:39:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'Dao' not found ~ APPPATH/classes/Controller/Product.php [ 10 ] in file:line
2014-12-22 04:39:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 04:39:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'Dao' not found ~ APPPATH/classes/Controller/Product.php [ 10 ] in file:line
2014-12-22 04:39:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 04:39:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Dao' not found ~ APPPATH/classes/Controller/Product.php [ 10 ] in file:line
2014-12-22 04:39:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 04:39:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Dao' not found ~ APPPATH/classes/Controller/Product.php [ 10 ] in file:line
2014-12-22 04:39:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 04:39:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Dao' not found ~ APPPATH/classes/Controller/Product.php [ 10 ] in file:line
2014-12-22 04:39:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 04:39:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Dao' not found ~ APPPATH/classes/Controller/Product.php [ 10 ] in file:line
2014-12-22 04:39:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 04:39:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'Slice_DB' not found ~ MODPATH/misc/classes/Dao.php [ 47 ] in file:line
2014-12-22 04:39:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 04:40:43 --- EMERGENCY: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php:130
2014-12-22 04:40:43 --- DEBUG: #0 /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php(130): Kohana_Database_PDO->connect()
#1 /workspace/coast/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM c...', 'Model_Product', Array)
#2 /workspace/coast/application/classes/Dao/Product.php(21): Kohana_Database_Query->execute(Object(Database_PDO))
#3 /workspace/coast/application/classes/Controller/Product.php(10): Dao_Product->getProducts(10, 0)
#4 /workspace/coast/kohana/system/classes/Kohana/Controller.php(84): Controller_Product->action_list()
#5 [internal function]: Kohana_Controller->execute()
#6 /workspace/coast/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#7 /workspace/coast/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /workspace/coast/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /workspace/coast/public/index.php(47): Kohana_Request->execute()
#10 {main} in /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php:130
2014-12-22 04:41:21 --- EMERGENCY: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php:130
2014-12-22 04:41:21 --- DEBUG: #0 /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php(130): Kohana_Database_PDO->connect()
#1 /workspace/coast/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM c...', 'Model_Product', Array)
#2 /workspace/coast/application/classes/Dao/Product.php(21): Kohana_Database_Query->execute(Object(Database_PDO))
#3 /workspace/coast/application/classes/Controller/Product.php(10): Dao_Product->getProducts(10, 0)
#4 /workspace/coast/kohana/system/classes/Kohana/Controller.php(84): Controller_Product->action_list()
#5 [internal function]: Kohana_Controller->execute()
#6 /workspace/coast/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#7 /workspace/coast/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /workspace/coast/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /workspace/coast/public/index.php(47): Kohana_Request->execute()
#10 {main} in /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php:130
2014-12-22 04:41:21 --- EMERGENCY: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php:130
2014-12-22 04:41:21 --- DEBUG: #0 /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php(130): Kohana_Database_PDO->connect()
#1 /workspace/coast/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM c...', 'Model_Product', Array)
#2 /workspace/coast/application/classes/Dao/Product.php(21): Kohana_Database_Query->execute(Object(Database_PDO))
#3 /workspace/coast/application/classes/Controller/Product.php(10): Dao_Product->getProducts(10, 0)
#4 /workspace/coast/kohana/system/classes/Kohana/Controller.php(84): Controller_Product->action_list()
#5 [internal function]: Kohana_Controller->execute()
#6 /workspace/coast/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#7 /workspace/coast/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /workspace/coast/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /workspace/coast/public/index.php(47): Kohana_Request->execute()
#10 {main} in /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php:130
2014-12-22 04:41:22 --- EMERGENCY: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php:130
2014-12-22 04:41:22 --- DEBUG: #0 /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php(130): Kohana_Database_PDO->connect()
#1 /workspace/coast/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM c...', 'Model_Product', Array)
#2 /workspace/coast/application/classes/Dao/Product.php(21): Kohana_Database_Query->execute(Object(Database_PDO))
#3 /workspace/coast/application/classes/Controller/Product.php(10): Dao_Product->getProducts(10, 0)
#4 /workspace/coast/kohana/system/classes/Kohana/Controller.php(84): Controller_Product->action_list()
#5 [internal function]: Kohana_Controller->execute()
#6 /workspace/coast/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#7 /workspace/coast/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /workspace/coast/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /workspace/coast/public/index.php(47): Kohana_Request->execute()
#10 {main} in /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php:130
2014-12-22 04:42:20 --- EMERGENCY: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php:130
2014-12-22 04:42:20 --- DEBUG: #0 /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php(130): Kohana_Database_PDO->connect()
#1 /workspace/coast/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM c...', 'Model_Product', Array)
#2 /workspace/coast/application/classes/Dao/Product.php(21): Kohana_Database_Query->execute(Object(Database_PDO))
#3 /workspace/coast/application/classes/Controller/Product.php(10): Dao_Product->getProducts(10, 0)
#4 /workspace/coast/kohana/system/classes/Kohana/Controller.php(84): Controller_Product->action_list()
#5 [internal function]: Kohana_Controller->execute()
#6 /workspace/coast/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#7 /workspace/coast/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /workspace/coast/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /workspace/coast/public/index.php(47): Kohana_Request->execute()
#10 {main} in /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php:130
2014-12-22 04:42:21 --- EMERGENCY: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php:130
2014-12-22 04:42:21 --- DEBUG: #0 /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php(130): Kohana_Database_PDO->connect()
#1 /workspace/coast/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM c...', 'Model_Product', Array)
#2 /workspace/coast/application/classes/Dao/Product.php(21): Kohana_Database_Query->execute(Object(Database_PDO))
#3 /workspace/coast/application/classes/Controller/Product.php(10): Dao_Product->getProducts(10, 0)
#4 /workspace/coast/kohana/system/classes/Kohana/Controller.php(84): Controller_Product->action_list()
#5 [internal function]: Kohana_Controller->execute()
#6 /workspace/coast/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#7 /workspace/coast/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /workspace/coast/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /workspace/coast/public/index.php(47): Kohana_Request->execute()
#10 {main} in /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php:130
2014-12-22 04:42:21 --- EMERGENCY: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php:130
2014-12-22 04:42:21 --- DEBUG: #0 /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php(130): Kohana_Database_PDO->connect()
#1 /workspace/coast/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM c...', 'Model_Product', Array)
#2 /workspace/coast/application/classes/Dao/Product.php(21): Kohana_Database_Query->execute(Object(Database_PDO))
#3 /workspace/coast/application/classes/Controller/Product.php(10): Dao_Product->getProducts(10, 0)
#4 /workspace/coast/kohana/system/classes/Kohana/Controller.php(84): Controller_Product->action_list()
#5 [internal function]: Kohana_Controller->execute()
#6 /workspace/coast/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#7 /workspace/coast/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /workspace/coast/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /workspace/coast/public/index.php(47): Kohana_Request->execute()
#10 {main} in /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php:130
2014-12-22 04:50:27 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 20 ] in file:line
2014-12-22 04:50:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 04:50:31 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 20 ] in file:line
2014-12-22 04:50:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:00:06 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getName() on a non-object ~ APPPATH/views/product/list.php [ 4 ] in file:line
2014-12-22 05:00:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:00:20 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getName() on a non-object ~ APPPATH/views/product/list.php [ 4 ] in file:line
2014-12-22 05:00:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:02:55 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 20 ] in file:line
2014-12-22 05:02:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:03:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Model_Product ~ MODPATH/database/classes/Kohana/Database/Result.php [ 145 ] in /workspace/coast/kohana/modules/database/classes/Kohana/Database/Result.php:145
2014-12-22 05:03:07 --- DEBUG: #0 /workspace/coast/kohana/modules/database/classes/Kohana/Database/Result.php(145): Kohana_Core::error_handler(8, 'Undefined index...', '/workspace/coas...', 145, Array)
#1 /workspace/coast/application/classes/Dao/Product.php(20): Kohana_Database_Result->as_array('Model_Product')
#2 /workspace/coast/application/classes/Controller/Product.php(10): Dao_Product->getProducts(10, 0)
#3 /workspace/coast/kohana/system/classes/Kohana/Controller.php(84): Controller_Product->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /workspace/coast/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#6 /workspace/coast/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/coast/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/coast/public/index.php(47): Kohana_Request->execute()
#9 {main} in /workspace/coast/kohana/modules/database/classes/Kohana/Database/Result.php:145
2014-12-22 05:03:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Model_Product ~ MODPATH/database/classes/Kohana/Database/Result.php [ 145 ] in /workspace/coast/kohana/modules/database/classes/Kohana/Database/Result.php:145
2014-12-22 05:03:11 --- DEBUG: #0 /workspace/coast/kohana/modules/database/classes/Kohana/Database/Result.php(145): Kohana_Core::error_handler(8, 'Undefined index...', '/workspace/coas...', 145, Array)
#1 /workspace/coast/application/classes/Dao/Product.php(20): Kohana_Database_Result->as_array('Model_Product')
#2 /workspace/coast/application/classes/Controller/Product.php(10): Dao_Product->getProducts(10, 0)
#3 /workspace/coast/kohana/system/classes/Kohana/Controller.php(84): Controller_Product->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /workspace/coast/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#6 /workspace/coast/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /workspace/coast/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /workspace/coast/public/index.php(47): Kohana_Request->execute()
#9 {main} in /workspace/coast/kohana/modules/database/classes/Kohana/Database/Result.php:145
2014-12-22 05:03:19 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getName() on a non-object ~ APPPATH/views/product/list.php [ 4 ] in file:line
2014-12-22 05:03:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:03:37 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getName() on a non-object ~ APPPATH/views/product/list.php [ 4 ] in file:line
2014-12-22 05:03:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:03:41 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getName() on a non-object ~ APPPATH/views/product/list.php [ 4 ] in file:line
2014-12-22 05:03:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:32:26 --- EMERGENCY: ErrorException [ 2 ]: debug_backtrace() expects parameter 1 to be long, object given ~ APPPATH/classes/Controller/Product.php [ 12 ] in file:line
2014-12-22 05:32:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'debug_backtrace...', '/workspace/coas...', 12, Array)
#1 /workspace/coast/application/classes/Controller/Product.php(12): debug_backtrace(Object(Database_Result_Cached))
#2 /workspace/coast/kohana/system/classes/Kohana/Controller.php(84): Controller_Product->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 /workspace/coast/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 /workspace/coast/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /workspace/coast/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /workspace/coast/public/index.php(47): Kohana_Request->execute()
#8 {main} in file:line
2014-12-22 05:36:50 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 21 ] in file:line
2014-12-22 05:36:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:42:06 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 21 ] in file:line
2014-12-22 05:42:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:42:06 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 21 ] in file:line
2014-12-22 05:42:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:42:07 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 21 ] in file:line
2014-12-22 05:42:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:42:07 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 21 ] in file:line
2014-12-22 05:42:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:42:07 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 21 ] in file:line
2014-12-22 05:42:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:42:07 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 21 ] in file:line
2014-12-22 05:42:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:42:07 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 21 ] in file:line
2014-12-22 05:42:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:42:08 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 21 ] in file:line
2014-12-22 05:42:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:42:08 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 21 ] in file:line
2014-12-22 05:42:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:42:08 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 21 ] in file:line
2014-12-22 05:42:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:42:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 21 ] in file:line
2014-12-22 05:42:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:42:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 21 ] in file:line
2014-12-22 05:42:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:42:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 21 ] in file:line
2014-12-22 05:42:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:42:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 21 ] in file:line
2014-12-22 05:42:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:42:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 21 ] in file:line
2014-12-22 05:42:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:42:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 21 ] in file:line
2014-12-22 05:42:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:42:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 21 ] in file:line
2014-12-22 05:42:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:42:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 21 ] in file:line
2014-12-22 05:42:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:42:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 21 ] in file:line
2014-12-22 05:42:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:42:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 21 ] in file:line
2014-12-22 05:42:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:42:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 21 ] in file:line
2014-12-22 05:42:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:42:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 21 ] in file:line
2014-12-22 05:42:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:42:10 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 21 ] in file:line
2014-12-22 05:42:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:42:10 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 21 ] in file:line
2014-12-22 05:42:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:42:10 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 21 ] in file:line
2014-12-22 05:42:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:42:10 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 21 ] in file:line
2014-12-22 05:42:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:42:10 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 21 ] in file:line
2014-12-22 05:42:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:42:10 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 21 ] in file:line
2014-12-22 05:42:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 05:42:10 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Dao/Product.php [ 21 ] in file:line
2014-12-22 05:42:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-22 20:21:19 --- EMERGENCY: PDOException [ HY000 ]: SQLSTATE[HY000]: General error: could not call class constructor ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 183 ] in /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php:0
2014-12-22 20:21:19 --- DEBUG: #0 /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php(0): PDOStatement->fetchAll()
#1 /workspace/coast/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM c...', 'Model_Product', Array)
#2 /workspace/coast/application/classes/Dao/Product.php(21): Kohana_Database_Query->execute(Object(Database_PDO))
#3 /workspace/coast/application/classes/Controller/Product.php(10): Dao_Product->getProducts(10, 0)
#4 /workspace/coast/kohana/system/classes/Kohana/Controller.php(84): Controller_Product->action_list()
#5 [internal function]: Kohana_Controller->execute()
#6 /workspace/coast/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#7 /workspace/coast/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /workspace/coast/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /workspace/coast/public/index.php(47): Kohana_Request->execute()
#10 {main} in /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php:0
2014-12-22 20:33:31 --- EMERGENCY: PDOException [ HY000 ]: SQLSTATE[HY000]: General error: could not call class constructor ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 183 ] in /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php:0
2014-12-22 20:33:31 --- DEBUG: #0 /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php(0): PDOStatement->fetchAll()
#1 /workspace/coast/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM c...', 'Model_Product', Array)
#2 /workspace/coast/application/classes/Dao/Product.php(21): Kohana_Database_Query->execute(Object(Database_PDO))
#3 /workspace/coast/application/classes/Controller/Product.php(10): Dao_Product->getProducts(10, 0)
#4 /workspace/coast/kohana/system/classes/Kohana/Controller.php(84): Controller_Product->action_list()
#5 [internal function]: Kohana_Controller->execute()
#6 /workspace/coast/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#7 /workspace/coast/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /workspace/coast/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /workspace/coast/public/index.php(47): Kohana_Request->execute()
#10 {main} in /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php:0
2014-12-22 21:15:19 --- EMERGENCY: PDOException [ HY000 ]: SQLSTATE[HY000]: General error: fetch mode doesn't allow any extra arguments ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 176 ] in /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php:176
2014-12-22 21:15:19 --- DEBUG: #0 /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php(176): PDOStatement->setFetchMode(5, 'Model_Product', Array)
#1 /workspace/coast/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM c...', 'Model_Product', Array)
#2 /workspace/coast/application/classes/Dao/Product.php(21): Kohana_Database_Query->execute(Object(Database_PDO))
#3 /workspace/coast/application/classes/Controller/Product.php(10): Dao_Product->getProducts(10, 0)
#4 /workspace/coast/kohana/system/classes/Kohana/Controller.php(84): Controller_Product->action_list()
#5 [internal function]: Kohana_Controller->execute()
#6 /workspace/coast/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#7 /workspace/coast/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /workspace/coast/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /workspace/coast/public/index.php(47): Kohana_Request->execute()
#10 {main} in /workspace/coast/kohana/modules/database/classes/Kohana/Database/PDO.php:176