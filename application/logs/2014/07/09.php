<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-09 01:25:33 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Can't connect to local MySQL server through socket '/var/lib/mysqld/mysqld.sock' (111) ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php:171
2014-07-09 01:25:33 --- DEBUG: #0 /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('clients')
#3 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /home/bitrix/ext_www/honey/application/classes/Controller/Public/Client.php(13): Kohana_ORM::factory('Client')
#8 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller.php(84): Controller_Public_Client->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Client))
#11 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/bitrix/ext_www/honey/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/bitrix/ext_www/honey/index.php(118): Kohana_Request->execute()
#14 {main} in /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php:171
2014-07-09 01:25:35 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Can't connect to local MySQL server through socket '/var/lib/mysqld/mysqld.sock' (111) ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php:171
2014-07-09 01:25:35 --- DEBUG: #0 /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('clients')
#3 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /home/bitrix/ext_www/honey/application/classes/Controller/Public/Client.php(13): Kohana_ORM::factory('Client')
#8 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller.php(84): Controller_Public_Client->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Client))
#11 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/bitrix/ext_www/honey/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/bitrix/ext_www/honey/index.php(118): Kohana_Request->execute()
#14 {main} in /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php:171