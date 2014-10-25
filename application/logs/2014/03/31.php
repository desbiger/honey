<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-31 14:10:31 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /home/bitrix/ext_www/honey/application/classes/Controller/Admin/Pasechniki.php:30
2014-03-31 14:10:31 --- DEBUG: #0 /home/bitrix/ext_www/honey/application/classes/Controller/Admin/Pasechniki.php(30): Kohana_ORM->find()
#1 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller.php(84): Controller_Admin_Pasechniki->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Pasechniki))
#4 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/bitrix/ext_www/honey/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/bitrix/ext_www/honey/index.php(118): Kohana_Request->execute()
#7 {main} in /home/bitrix/ext_www/honey/application/classes/Controller/Admin/Pasechniki.php:30