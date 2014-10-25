<? $USER = Huser::SummarInfo(); ?>
<h2><?= $user->name ?> - сумарная информация</h2>
<? if ($user->about == ''): ?>
	<p>Внимание!!! Вы не будите находится в списке пасечников пока у вас незаполнено поле - "Описание вашей пасеки" <br>Запонить можно на
		<a href = "/user/personaledit">странице редактирования профиля</a></p>
<? endif ?>
<br/>
<table class = "user_info">
	<tr>
		<td>Состояние аккаунта</td>
		<td><?= $USER['client']->active == 1 ? 'Включен' : "Заблокирован" ?></td>
	</tr>
	<tr>
		<td>Ваш балланс</td>
		<td><?= $USER['money']['summa'] ?> р</td>
	</tr>
	<tr>
		<td>Имя пасечника</td>
		<td><?= $user->name ?></td>
	</tr>
	<tr>
		<td>Город</td>
		<td><?= $USER['client']->city->name ?></td>
	</tr>
	<!--	<tr>-->
	<!--		<td>Рейтинг на сайте</td>-->
	<!--		<td></td>-->
	<!--	</tr>-->
	<!--	<tr>-->
	<!--		<td>Количество заходов на вашу страницу</td>-->
	<!--		<td>--><?//=$user->name?><!--</td>-->
	<!--	</tr>-->
	<tr>
		<td>Товаров в продаже</td>
		<td><?= count($USER['tovars']) ?></td>
	</tr>
</table>
<hr/>
<h3>Оформление личной страницы</h3>
<form action = "" method = "post" enctype = "multipart/form-data">
	Картинка заднего фона Вашей страницы
	<br/>
	<? if ($user->background): ?>
		<a class = "fancy iframe" href = "/client/<?=$user->code?>">
			<img src = "<?= Hfile::Resize($user->background, 300, 300) ?>" alt = ""/>
		</a>
		<br/>
		<a href = "/user/delbackground/">Удалить подложку</a>
		<br/>
	<? endif ?>
	<br/>
	<?= Form::file('picture') ?>
	<?= Form::submit('sub', 'Загрузить фото') ?>
</form>
<?if(Auth::instance()->logged_in('admin')):?>
<br/>
<hr/>
<br/>
<h3>Пополнение счета</h3>
<?=View::factory('public/user/lk/wigets/pay_form')?>
<?endif?>
<!--<iframe frameborder = "0" allowtransparency = "true" scrolling = "no" src = "https://money.yandex.ru/embed/shop.xml?account=41001581763393&quickpay=shop&payment-type-choice=on&writer=seller&targets=%D0%9F%D0%BE%D0%BF%D0%BE%D0%BB%D0%BD%D0%B5%D0%BD%D0%B8%D0%B5+%D1%81%D1%87%D0%B5%D1%82%D0%B0&default-sum=1000&button-text=03&mail=on" width = "450" height = "199"></iframe>-->