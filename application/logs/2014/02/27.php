<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-27 17:14:31 --- EMERGENCY: Kohana_Exception [ 0 ]: Not an image or invalid image: /home/bitrix/ext_www/honey ~ MODPATH/image/classes/Kohana/Image.php [ 107 ] in /home/bitrix/ext_www/honey/modules/image/classes/Kohana/Image/GD.php:91
2014-02-27 17:14:31 --- DEBUG: #0 /home/bitrix/ext_www/honey/modules/image/classes/Kohana/Image/GD.php(91): Kohana_Image->__construct('/home/bitrix/ex...')
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