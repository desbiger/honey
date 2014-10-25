<?//
//	if ($my_id = Honey::MyClientID()) {
//		$themes   = ORM::factory('Theme')
//				->where('author', '=', $my_id)
//				->find_all();
//		$list = '';
//		foreach($themes as $th){
//			$list[] = $th->id;
//		}
//		$messages = ORM::factory('Message')
//				->where('theme_id', 'IN', $list)
//				->where('read', '=', 0)
//				->where('from', '!=', $my_id)
//				->count_all();
//	}
//	else {
//		$messages = false;
//	}?>
<h2>Кабинет пользователя</h2>
<ul class = "menu_left">
	<!--	<li><a href="/user/finans">Мои финансы</a></li>-->
	<!--	<li><a href="/user/services">Мои услуги</a></li>-->
	<li><a href = "/user/">Сумарная информация</a></li>
	<li><a href = "/user/sertificats">Мои сертификаты</a></li>
<!--	<li><a href = "/user/tech">Техническая поддержка --><?//= $messages ? "({$messages})" : '' ?><!--</a></li>-->
	<li><a href = "/user/tech">Техническая поддержка </a></li>
	<li><a href = "/user/personaledit">Личные данные</a></li>
	<li><a href = "/user/gallery">Фотогалереи</a></li>
	<li><a href = "/user/shop">Мой Интернет магазин</a></li>
	<li><a href = "/user/products">Мои товары</a></li>
	<!--    <li><a href="/user/slider">Управление слайдерами</a></li>-->
</ul>