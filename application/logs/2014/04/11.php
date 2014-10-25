<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-11 08:58:46 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Public/Client.php [ 17 ] in /home/bitrix/ext_www/honey/application/classes/Controller/Public/Client.php:17
2014-04-11 08:58:46 --- DEBUG: #0 /home/bitrix/ext_www/honey/application/classes/Controller/Public/Client.php(17): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/bitrix/ex...', 17, Array)
#1 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller.php(84): Controller_Public_Client->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Client))
#4 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/bitrix/ext_www/honey/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/bitrix/ext_www/honey/index.php(118): Kohana_Request->execute()
#7 {main} in /home/bitrix/ext_www/honey/application/classes/Controller/Public/Client.php:17
2014-04-11 10:38:54 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Public/Client.php [ 17 ] in /home/bitrix/ext_www/honey/application/classes/Controller/Public/Client.php:17
2014-04-11 10:38:54 --- DEBUG: #0 /home/bitrix/ext_www/honey/application/classes/Controller/Public/Client.php(17): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/bitrix/ex...', 17, Array)
#1 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller.php(84): Controller_Public_Client->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Client))
#4 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/bitrix/ext_www/honey/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/bitrix/ext_www/honey/index.php(118): Kohana_Request->execute()
#7 {main} in /home/bitrix/ext_www/honey/application/classes/Controller/Public/Client.php:17
2014-04-11 16:24:24 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Public/Client.php [ 17 ] in /home/bitrix/ext_www/honey/application/classes/Controller/Public/Client.php:17
2014-04-11 16:24:24 --- DEBUG: #0 /home/bitrix/ext_www/honey/application/classes/Controller/Public/Client.php(17): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/bitrix/ex...', 17, Array)
#1 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller.php(84): Controller_Public_Client->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Client))
#4 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/bitrix/ext_www/honey/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/bitrix/ext_www/honey/index.php(118): Kohana_Request->execute()
#7 {main} in /home/bitrix/ext_www/honey/application/classes/Controller/Public/Client.php:17
2014-04-11 21:30:20 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Public/Client.php [ 17 ] in /home/bitrix/ext_www/honey/application/classes/Controller/Public/Client.php:17
2014-04-11 21:30:20 --- DEBUG: #0 /home/bitrix/ext_www/honey/application/classes/Controller/Public/Client.php(17): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/bitrix/ex...', 17, Array)
#1 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller.php(84): Controller_Public_Client->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Client))
#4 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/bitrix/ext_www/honey/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/bitrix/ext_www/honey/index.php(118): Kohana_Request->execute()
#7 {main} in /home/bitrix/ext_www/honey/application/classes/Controller/Public/Client.php:17
2014-04-11 23:54:57 --- EMERGENCY: ErrorException [ 2 ]: require(): Unable to allocate memory for pool. ~ SYSPATH/classes/Kohana/Core.php [ 511 ] in /home/bitrix/ext_www/honey/system/classes/Kohana/Core.php:511
2014-04-11 23:54:57 --- DEBUG: #0 /home/bitrix/ext_www/honey/system/classes/Kohana/Core.php(511): Kohana_Core::error_handler(2, 'require(): Unab...', '/home/bitrix/ex...', 511, Array)
#1 /home/bitrix/ext_www/honey/system/classes/Kohana/Core.php(511): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('HTTP_Exception_...')
#3 /home/bitrix/ext_www/honey/system/classes/Kohana/HTTP/Exception.php(17): spl_autoload_call('HTTP_Exception_...')
#4 /home/bitrix/ext_www/honey/system/classes/Kohana/Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#5 /home/bitrix/ext_www/honey/index.php(118): Kohana_Request->execute()
#6 {main} in /home/bitrix/ext_www/honey/system/classes/Kohana/Core.php:511