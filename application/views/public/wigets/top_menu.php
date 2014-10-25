<div class = "menu_top_center">
	<ul>
		<?if(Auth::instance()->logged_in('admin')):?>
				<li><a href = "/admin">Админка</a></li>
		<?endif?>
		<li><a href = "/about">о проекте</a></li>
		<li><a href = "/contacts">контакты</a></li>
		<li><a href = "/honey">мёд</a></li>
		<li><a href = "/client">Пасечники</a></li>
		<li><a href = "/user"><?=Auth::instance()
		->logged_in('login') ? "Личный кабинет" : "Регистрация пасечника" ?></a ></li >
    </ul>
</div >