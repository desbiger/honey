<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-03 20:18:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: deleverys ~ APPPATH/views/public/order/step1.php [ 24 ] in /home/bitrix/ext_www/honey/application/views/public/order/step1.php:24
2014-03-03 20:18:51 --- DEBUG: #0 /home/bitrix/ext_www/honey/application/views/public/order/step1.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/bitrix/ex...', 24, Array)
#1 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(61): include('/home/bitrix/ex...')
#2 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/bitrix/ex...', Array)
#3 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/bitrix/ext_www/honey/application/views/public/index.php(60): Kohana_View->__toString()
#5 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(61): include('/home/bitrix/ex...')
#6 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/bitrix/ex...', Array)
#7 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Index))
#11 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/bitrix/ext_www/honey/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/bitrix/ext_www/honey/index.php(118): Kohana_Request->execute()
#14 {main} in /home/bitrix/ext_www/honey/application/views/public/order/step1.php:24
2014-03-03 23:06:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: services ~ APPPATH/classes/Controller/Public/User.php [ 136 ] in /home/bitrix/ext_www/honey/application/classes/Controller/Public/User.php:136
2014-03-03 23:06:49 --- DEBUG: #0 /home/bitrix/ext_www/honey/application/classes/Controller/Public/User.php(136): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/bitrix/ex...', 136, Array)
#1 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller.php(84): Controller_Public_User->action_services()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_User))
#4 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/bitrix/ext_www/honey/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/bitrix/ext_www/honey/index.php(118): Kohana_Request->execute()
#7 {main} in /home/bitrix/ext_www/honey/application/classes/Controller/Public/User.php:136