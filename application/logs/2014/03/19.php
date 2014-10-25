<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-19 12:53:05 --- EMERGENCY: Kohana_Exception [ 0 ]: Not an image or invalid image: /home/bitrix/ext_www/honey ~ MODPATH/image/classes/Kohana/Image.php [ 107 ] in /home/bitrix/ext_www/honey/modules/image/classes/Kohana/Image/GD.php:91
2014-03-19 12:53:05 --- DEBUG: #0 /home/bitrix/ext_www/honey/modules/image/classes/Kohana/Image/GD.php(91): Kohana_Image->__construct('/home/bitrix/ex...')
#1 /home/bitrix/ext_www/honey/modules/image/classes/Kohana/Image.php(54): Kohana_Image_GD->__construct('/home/bitrix/ex...')
#2 /home/bitrix/ext_www/honey/modules/images/classes/Kohana/Hfile.php(72): Kohana_Image::factory('/home/bitrix/ex...')
#3 /home/bitrix/ext_www/honey/application/views/public/client/wigets/client_detail.php(4): Kohana_Hfile::Crop(100, 100, '')
#4 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(61): include('/home/bitrix/ex...')
#5 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/bitrix/ex...', Array)
#6 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(228): Kohana_View->render()
#7 /home/bitrix/ext_www/honey/application/views/public/client/base_page.php(2): Kohana_View->__toString()
#8 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(61): include('/home/bitrix/ex...')
#9 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/bitrix/ex...', Array)
#10 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(228): Kohana_View->render()
#11 /home/bitrix/ext_www/honey/application/views/public/index.php(60): Kohana_View->__toString()
#12 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(61): include('/home/bitrix/ex...')
#13 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/bitrix/ex...', Array)
#14 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#15 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Client))
#18 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /home/bitrix/ext_www/honey/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /home/bitrix/ext_www/honey/index.php(118): Kohana_Request->execute()
#21 {main} in /home/bitrix/ext_www/honey/modules/image/classes/Kohana/Image/GD.php:91
2014-03-19 14:49:01 --- EMERGENCY: ErrorException [ 2 ]: require(): Unable to allocate memory for pool. ~ SYSPATH/classes/Kohana/Core.php [ 511 ] in /home/bitrix/ext_www/honey/system/classes/Kohana/Core.php:511
2014-03-19 14:49:01 --- DEBUG: #0 /home/bitrix/ext_www/honey/system/classes/Kohana/Core.php(511): Kohana_Core::error_handler(2, 'require(): Unab...', '/home/bitrix/ex...', 511, Array)
#1 /home/bitrix/ext_www/honey/system/classes/Kohana/Core.php(511): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Controller_Publ...')
#3 [internal function]: spl_autoload_call('Controller_Publ...')
#4 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client/Internal.php(74): class_exists('Controller_Publ...')
#5 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/bitrix/ext_www/honey/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/bitrix/ext_www/honey/index.php(118): Kohana_Request->execute()
#8 {main} in /home/bitrix/ext_www/honey/system/classes/Kohana/Core.php:511
2014-03-19 15:19:25 --- EMERGENCY: ErrorException [ 2 ]: require(): Unable to allocate memory for pool. ~ SYSPATH/classes/Kohana/Core.php [ 511 ] in /home/bitrix/ext_www/honey/system/classes/Kohana/Core.php:511
2014-03-19 15:19:25 --- DEBUG: #0 /home/bitrix/ext_www/honey/system/classes/Kohana/Core.php(511): Kohana_Core::error_handler(2, 'require(): Unab...', '/home/bitrix/ex...', 511, Array)
#1 /home/bitrix/ext_www/honey/system/classes/Kohana/Core.php(511): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Controller_Publ...')
#3 [internal function]: spl_autoload_call('Controller_Publ...')
#4 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client/Internal.php(74): class_exists('Controller_Publ...')
#5 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/bitrix/ext_www/honey/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/bitrix/ext_www/honey/index.php(118): Kohana_Request->execute()
#8 {main} in /home/bitrix/ext_www/honey/system/classes/Kohana/Core.php:511
2014-03-19 15:42:35 --- EMERGENCY: ErrorException [ 2 ]: require(): Unable to allocate memory for pool. ~ SYSPATH/classes/Kohana/Core.php [ 511 ] in /home/bitrix/ext_www/honey/system/classes/Kohana/Core.php:511
2014-03-19 15:42:35 --- DEBUG: #0 /home/bitrix/ext_www/honey/system/classes/Kohana/Core.php(511): Kohana_Core::error_handler(2, 'require(): Unab...', '/home/bitrix/ex...', 511, Array)
#1 /home/bitrix/ext_www/honey/system/classes/Kohana/Core.php(511): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Controller_Publ...')
#3 [internal function]: spl_autoload_call('Controller_Publ...')
#4 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client/Internal.php(74): class_exists('Controller_Publ...')
#5 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/bitrix/ext_www/honey/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/bitrix/ext_www/honey/index.php(118): Kohana_Request->execute()
#8 {main} in /home/bitrix/ext_www/honey/system/classes/Kohana/Core.php:511
2014-03-19 22:11:53 --- EMERGENCY: ErrorException [ 2 ]: max(): When only one parameter is given, it must be an array ~ MODPATH/honey/classes/Kohana/Paginator.php [ 16 ] in file:line
2014-03-19 22:11:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'max(): When onl...', '/home/bitrix/ex...', 16, Array)
#1 /home/bitrix/ext_www/honey/modules/honey/classes/Kohana/Paginator.php(16): max(1.6)
#2 /home/bitrix/ext_www/honey/application/views/public/client/wigets/clients_list.php(49): Kohana_Paginator->Generate()
#3 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(61): include('/home/bitrix/ex...')
#4 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/bitrix/ex...', Array)
#5 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /home/bitrix/ext_www/honey/application/views/public/client/base_page.php(2): Kohana_View->__toString()
#7 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(61): include('/home/bitrix/ex...')
#8 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/bitrix/ex...', Array)
#9 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(228): Kohana_View->render()
#10 /home/bitrix/ext_www/honey/application/views/public/index.php(60): Kohana_View->__toString()
#11 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(61): include('/home/bitrix/ex...')
#12 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/bitrix/ex...', Array)
#13 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#14 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Client))
#17 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /home/bitrix/ext_www/honey/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 /home/bitrix/ext_www/honey/index.php(118): Kohana_Request->execute()
#20 {main} in file:line
2014-03-19 22:27:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Client::current() ~ APPPATH/views/public/client/wigets/clients_list.php [ 7 ] in file:line
2014-03-19 22:27:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-19 23:59:58 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_assoc() ~ APPPATH/classes/Controller/Public/Index.php [ 188 ] in file:line
2014-03-19 23:59:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line