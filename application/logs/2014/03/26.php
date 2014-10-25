<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-26 19:52:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: balans_id ~ MODPATH/orm/classes/Kohana/ORM.php [ 633 ] in /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php:633
2014-03-26 19:52:06 --- DEBUG: #0 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(633): Kohana_Core::error_handler(8, 'Undefined index...', '/home/bitrix/ex...', 633, Array)
#1 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('balans')
#2 /home/bitrix/ext_www/honey/application/views/admin/pasechniki/list.php(23): Kohana_ORM->__get('balans')
#3 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(61): include('/home/bitrix/ex...')
#4 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/bitrix/ex...', Array)
#5 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /home/bitrix/ext_www/honey/application/views/admin/index.php(36): Kohana_View->__toString()
#7 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(61): include('/home/bitrix/ex...')
#8 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/bitrix/ex...', Array)
#9 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Pasechniki))
#13 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /home/bitrix/ext_www/honey/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /home/bitrix/ext_www/honey/index.php(118): Kohana_Request->execute()
#16 {main} in /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php:633
2014-03-26 19:55:05 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'iser_id' in 'where clause' [ SELECT `money`.`id` AS `id`, `money`.`summa` AS `summa`, `money`.`user_id` AS `user_id` FROM `ballans` AS `money` WHERE `iser_id` = '26' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/Query.php:251
2014-03-26 19:55:05 --- DEBUG: #0 /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `money`....', false, Array)
#1 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /home/bitrix/ext_www/honey/application/views/admin/pasechniki/list.php(23): Kohana_ORM->find()
#4 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(61): include('/home/bitrix/ex...')
#5 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/bitrix/ex...', Array)
#6 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(228): Kohana_View->render()
#7 /home/bitrix/ext_www/honey/application/views/admin/index.php(36): Kohana_View->__toString()
#8 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(61): include('/home/bitrix/ex...')
#9 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/bitrix/ex...', Array)
#10 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#11 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Pasechniki))
#14 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/bitrix/ext_www/honey/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /home/bitrix/ext_www/honey/index.php(118): Kohana_Request->execute()
#17 {main} in /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/Query.php:251
2014-03-26 20:12:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Clent' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-03-26 20:12:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-26 20:37:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/views/admin/pasechniki/list.php [ 1 ] in /home/bitrix/ext_www/honey/application/views/admin/pasechniki/list.php:1
2014-03-26 20:37:02 --- DEBUG: #0 /home/bitrix/ext_www/honey/application/views/admin/pasechniki/list.php(1): Kohana_Core::error_handler(8, 'Undefined index...', '/home/bitrix/ex...', 1, Array)
#1 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(61): include('/home/bitrix/ex...')
#2 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/bitrix/ex...', Array)
#3 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/bitrix/ext_www/honey/application/views/admin/index.php(36): Kohana_View->__toString()
#5 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(61): include('/home/bitrix/ex...')
#6 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/bitrix/ex...', Array)
#7 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Pasechniki))
#11 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/bitrix/ext_www/honey/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/bitrix/ext_www/honey/index.php(118): Kohana_Request->execute()
#14 {main} in /home/bitrix/ext_www/honey/application/views/admin/pasechniki/list.php:1
2014-03-26 22:51:57 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'email' at 'MODPATH/email' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /home/bitrix/ext_www/honey/application/bootstrap.php:140
2014-03-26 22:51:57 --- DEBUG: #0 /home/bitrix/ext_www/honey/application/bootstrap.php(140): Kohana_Core::modules(Array)
#1 /home/bitrix/ext_www/honey/index.php(102): require('/home/bitrix/ex...')
#2 {main} in /home/bitrix/ext_www/honey/application/bootstrap.php:140
2014-03-26 22:52:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/Controller/Admin/Index.php [ 9 ] in file:line
2014-03-26 22:52:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-26 22:53:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/Controller/Admin/Index.php [ 9 ] in file:line
2014-03-26 22:53:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-26 22:54:36 --- EMERGENCY: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/Controller/Admin/Index.php [ 9 ] in file:line
2014-03-26 22:54:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-26 22:59:29 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Honey::SendMAil() ~ MODPATH/honey/classes/Kohana/Tovar.php [ 98 ] in file:line
2014-03-26 22:59:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-26 23:00:13 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Honey::SendMAil() ~ MODPATH/honey/classes/Kohana/Tovar.php [ 98 ] in file:line
2014-03-26 23:00:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-26 23:00:36 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Honey::SendMail() ~ MODPATH/honey/classes/Kohana/Tovar.php [ 98 ] in file:line
2014-03-26 23:00:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-26 23:00:59 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Honey::SendMail() ~ MODPATH/honey/classes/Kohana/Tovar.php [ 98 ] in file:line
2014-03-26 23:00:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-26 23:01:55 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Honey::SendMail() ~ MODPATH/honey/classes/Kohana/Tovar.php [ 98 ] in file:line
2014-03-26 23:01:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-26 23:03:01 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Honey::SendMail() ~ APPPATH/classes/Controller/Public/User.php [ 174 ] in file:line
2014-03-26 23:03:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-26 23:03:55 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Honey::Message() ~ APPPATH/classes/Controller/Public/User.php [ 174 ] in file:line
2014-03-26 23:03:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-26 23:05:34 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Honey::Message() ~ APPPATH/classes/Controller/Public/User.php [ 174 ] in file:line
2014-03-26 23:05:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line