<?
	$client_id = ORM::factory('Client')
			->where('user_id', '=', Auth::instance()
					->get_user()->id)
			->find()->id;
	$sliders = ORM::factory('Slider')
			->where('client_id', '=', $client_id)
?>

<h2>Список Ваших слайдеров</h2>
<p>Вы можете сделать рекламу Вашей продукции или самого себя или даже стороннего сайта, создав свой слайдер на главной странице сайта.
   Для этого вам достаточно заполнить все поля на <a href = "/user/slider_add/">странице создания своего слайдера</a>. Услуга платная. Стоимость состовляет 800 р в месяц</p>