<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-06 16:08:02 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Can't connect to local MySQL server through socket '/var/lib/mysqld/mysqld.sock' (111) ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php:171
2014-03-06 16:08:02 --- DEBUG: #0 /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('news')
#3 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct('2')
#7 /home/bitrix/ext_www/honey/application/classes/Controller/Public/News.php(6): Kohana_ORM::factory('News', '2')
#8 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller.php(84): Controller_Public_News->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_News))
#11 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/bitrix/ext_www/honey/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/bitrix/ext_www/honey/index.php(118): Kohana_Request->execute()
#14 {main} in /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php:171
2014-03-06 16:08:04 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Can't connect to local MySQL server through socket '/var/lib/mysqld/mysqld.sock' (111) ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php:171
2014-03-06 16:08:04 --- DEBUG: #0 /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('basket')
#3 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /home/bitrix/ext_www/honey/application/views/public/wigets/basket_small.php(3): Kohana_ORM::factory('Basket')
#8 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(61): include('/home/bitrix/ex...')
#9 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/bitrix/ex...', Array)
#10 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(228): Kohana_View->render()
#11 /home/bitrix/ext_www/honey/application/views/public/index.php(15): Kohana_View->__toString()
#12 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(61): include('/home/bitrix/ex...')
#13 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/bitrix/ex...', Array)
#14 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#15 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Index))
#18 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /home/bitrix/ext_www/honey/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /home/bitrix/ext_www/honey/index.php(118): Kohana_Request->execute()
#21 {main} in /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php:171
2014-03-06 16:08:04 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Can't connect to local MySQL server through socket '/var/lib/mysqld/mysqld.sock' (111) ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php:171
2014-03-06 16:08:04 --- DEBUG: #0 /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('sections')
#3 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /home/bitrix/ext_www/honey/application/views/public/wigets/left_menu.php(2): Kohana_ORM::factory('Section')
#8 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(61): include('/home/bitrix/ex...')
#9 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/bitrix/ex...', Array)
#10 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(228): Kohana_View->render()
#11 /home/bitrix/ext_www/honey/application/views/public/index.php(55): Kohana_View->__toString()
#12 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(61): include('/home/bitrix/ex...')
#13 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/bitrix/ex...', Array)
#14 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#15 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Index))
#18 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /home/bitrix/ext_www/honey/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /home/bitrix/ext_www/honey/index.php(118): Kohana_Request->execute()
#21 {main} in /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php:171
2014-03-06 16:08:04 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Can't connect to local MySQL server through socket '/var/lib/mysqld/mysqld.sock' (111) ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php:171
2014-03-06 16:08:04 --- DEBUG: #0 /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('news')
#3 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /home/bitrix/ext_www/honey/application/views/public/news/news_list.php(3): Kohana_ORM::factory('News')
#8 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(61): include('/home/bitrix/ex...')
#9 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/bitrix/ex...', Array)
#10 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(228): Kohana_View->render()
#11 /home/bitrix/ext_www/honey/application/views/public/index.php(56): Kohana_View->__toString()
#12 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(61): include('/home/bitrix/ex...')
#13 /home/bitrix/ext_www/honey/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/bitrix/ex...', Array)
#14 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#15 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Index))
#18 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /home/bitrix/ext_www/honey/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /home/bitrix/ext_www/honey/index.php(118): Kohana_Request->execute()
#21 {main} in /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php:171
2014-03-06 17:03:10 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Can't connect to local MySQL server through socket '/var/lib/mysqld/mysqld.sock' (111) ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php:171
2014-03-06 17:03:10 --- DEBUG: #0 /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('news')
#3 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct('4')
#7 /home/bitrix/ext_www/honey/application/classes/Controller/Public/News.php(6): Kohana_ORM::factory('News', '4')
#8 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller.php(84): Controller_Public_News->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_News))
#11 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/bitrix/ext_www/honey/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/bitrix/ext_www/honey/index.php(118): Kohana_Request->execute()
#14 {main} in /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php:171
2014-03-06 17:03:12 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Can't connect to local MySQL server through socket '/var/lib/mysqld/mysqld.sock' (111) ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php:171
2014-03-06 17:03:12 --- DEBUG: #0 /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('sections')
#3 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct('10')
#7 /home/bitrix/ext_www/honey/application/classes/Controller/Public/Catalog.php(22): Kohana_ORM::factory('Section', '10')
#8 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller.php(84): Controller_Public_Catalog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Catalog))
#11 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/bitrix/ext_www/honey/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/bitrix/ext_www/honey/index.php(118): Kohana_Request->execute()
#14 {main} in /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php:171
2014-03-06 17:32:30 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Can't connect to local MySQL server through socket '/var/lib/mysqld/mysqld.sock' (111) ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php:171
2014-03-06 17:32:30 --- DEBUG: #0 /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('sections')
#3 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /home/bitrix/ext_www/honey/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct('3')
#7 /home/bitrix/ext_www/honey/application/classes/Controller/Public/Catalog.php(22): Kohana_ORM::factory('Section', '3')
#8 /home/bitrix/ext_www/honey/system/classes/Kohana/Controller.php(84): Controller_Public_Catalog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Catalog))
#11 /home/bitrix/ext_www/honey/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/bitrix/ext_www/honey/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/bitrix/ext_www/honey/index.php(118): Kohana_Request->execute()
#14 {main} in /home/bitrix/ext_www/honey/modules/database/classes/Kohana/Database/MySQL.php:171