<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-20 08:20:18 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /home/bitrix/ext_www/honey/application/classes/Controller/Public/Catalog.php:17
2014-02-20 08:20:18 --- DEBUG: #0 /home/bitrix/ext_www/honey/application/classes/Controller/Public/Catalog.php(17): Kohana_ORM->find()
#1 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller.php(84): Controller_Public_Catalog->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Catalog))
#4 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/bitrix/ext_www/honey/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/bitrix/ext_www/honey/index.php(118): Kohana_Request->execute()
#7 {main} in /home/bitrix/ext_www/honey/application/classes/Controller/Public/Catalog.php:17
2014-02-20 08:20:59 --- EMERGENCY: Kohana_Exception [ 0 ]: The about property does not exist in the Model_Tovar class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php:603
2014-02-20 08:20:59 --- DEBUG: #0 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('about')
#1 /home/bitrix/ext_www/honey/application/views/public/catalog/tovar_detail.php(21): Kohana_ORM->__get('about')
#2 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(61): include('/home/bitrix/ex...')
#3 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/bitrix/ex...', Array)
#4 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/bitrix/ext_www/honey/application/views/public/index.php(59): Kohana_View->__toString()
#6 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(61): include('/home/bitrix/ex...')
#7 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/bitrix/ex...', Array)
#8 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Catalog))
#12 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/bitrix/ext_www/honey/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /home/bitrix/ext_www/honey/index.php(118): Kohana_Request->execute()
#15 {main} in /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php:603
2014-02-20 12:17:28 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Public/User.php [ 139 ] in file:line
2014-02-20 12:17:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line