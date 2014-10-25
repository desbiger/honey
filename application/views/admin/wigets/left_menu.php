<?        if ($my_id = Honey::MyClientID()) {
	$messages = ORM::factory('Message')
			->where('read', '=', 0)
			->and_where('from', '!=', $my_id)
			->count_all();
}
else {
	$messages = false;
}?>
<h3>Меню</h3>
<a href = "/">перейти на сайт</a>
<ul>
	<li><a href = "/admin/">Модерация новых товаров</a></li>
	<li>
		<a href = "/admin/razdels">Разделы каталога</a>
	</li>
	<li>
		<a href = "/admin/news">Управление новостями</a>
	</li>
	<li><a href = "/admin/pasechniki/">Управление пасечниками</a></li>
	<li><a href = "/admin/tech/">Обращения <?=$messages? "({$messages})":''?></a></li>
</ul>
<a href = "/admin/index/exit">Выйти</a>