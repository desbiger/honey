<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-20 22:04:53 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Public/Client.php [ 17 ] in /home/bitrix/ext_www/honey/application/classes/Controller/Public/Client.php:17
2014-06-20 22:04:53 --- DEBUG: #0 /home/bitrix/ext_www/honey/application/classes/Controller/Public/Client.php(17): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/bitrix/ex...', 17, Array)
#1 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller.php(84): Controller_Public_Client->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Client))
#4 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/bitrix/ext_www/honey/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/bitrix/ext_www/honey/index.php(118): Kohana_Request->execute()
#7 {main} in /home/bitrix/ext_www/honey/application/classes/Controller/Public/Client.php:17