<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-27 22:18:18 --- EMERGENCY: Database_Exception [ 1030 ]: Got error 28 from storage engine [ SHOW FULL COLUMNS FROM `clients` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php:359
2014-08-27 22:18:18 --- DEBUG: #0 /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('clients')
#2 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /home/bitrix/ext_www/honey/application/classes/Controller/Public/Client.php(13): Kohana_ORM::factory('Client')
#7 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller.php(84): Controller_Public_Client->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Client))
#10 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/bitrix/ext_www/honey/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/bitrix/ext_www/honey/index.php(118): Kohana_Request->execute()
#13 {main} in /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php:359
2014-08-27 22:18:20 --- EMERGENCY: Database_Exception [ 1030 ]: Got error 28 from storage engine [ SHOW FULL COLUMNS FROM `clients` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php:359
2014-08-27 22:18:20 --- DEBUG: #0 /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('clients')
#2 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /home/bitrix/ext_www/honey/application/classes/Controller/Public/Client.php(13): Kohana_ORM::factory('Client')
#7 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller.php(84): Controller_Public_Client->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Client))
#10 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/bitrix/ext_www/honey/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/bitrix/ext_www/honey/index.php(118): Kohana_Request->execute()
#13 {main} in /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php:359