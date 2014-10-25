<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-14 00:00:31 --- EMERGENCY: View_Exception [ 0 ]: The requested view clear could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/b/biger/honey46.ru/public_html/system/classes/Kohana/View.php:137
2014-10-14 00:00:31 --- DEBUG: #0 /home/b/biger/honey46.ru/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('clear')
#1 /home/b/biger/honey46.ru/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('clear', NULL)
#2 /home/b/biger/honey46.ru/public_html/application/classes/Controller/Public/Pay.php(7): Kohana_View::factory('clear')
#3 /home/b/biger/honey46.ru/public_html/system/classes/Kohana/Controller.php(69): Controller_Public_Pay->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/b/biger/honey46.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Pay))
#6 /home/b/biger/honey46.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/b/biger/honey46.ru/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/b/biger/honey46.ru/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /home/b/biger/honey46.ru/public_html/system/classes/Kohana/View.php:137