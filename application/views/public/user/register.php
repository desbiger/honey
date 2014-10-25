<? $deleveris = ORM::factory('Delevery')
		->find_all() ?>
<? $sale_vaiants = ORM::factory('SaleVariant')
		->find_all() ?>


<div class = "clear"></div>
<form method = "post" action = "/register" enctype = "multipart/form-data">
	<h2>Форма регистрации пасечника(пасеки)</h2>


	<table class = "reg_table">
		<? if ($errors): ?>
			<? foreach ($errors as $vol): ?>
				<tr>
					<td></td>
					<td>
						<p style = "color: red"><?= $vol ?></p>
					</td>
				</tr>
			<? endforeach ?>
		<? endif ?>
		<tr>
			<td>Имя пасечника или название пасеки</td>
			<td><?= Form::input('name', Arr::get($_POST, 'name')) ?></td>
		</tr>
		<tr>
			<td>www.honey4all.ru/client/</td>
			<td>
				Ваш адрес<br>
				<?= Form::input('code',Arr::get($_POST, 'code')) ?></td>
		</tr>
		<tr>
			<td>Ваш город</td>
			<td><?= Form::input('city',Arr::get($_POST,'city')) ?></td>
		</tr>
		<tr>
			<td>Ваш Email</td>
			<td><?= Form::input('email',Arr::get($_POST,'email')) ?></td>
		</tr>
		<tr>
			<td>Ваш логин для входа на сайт</td>
			<td><?= Form::input('login',Arr::get($_POST,'login')) ?></td>
		</tr>
		<tr>
			<td>Пароль(не менее 6 символов)</td>
			<td>
				<?= Form::password('password',Arr::get($_POST,'password')) ?>
			</td>
		</tr>
		<tr>
			<td>Подтверждение Пароля</td>
			<td>
				<?= Form::password('password_confirm') ?>
			</td>
		</tr>
		<tr>
			<td>Варианты продажи меда</td>
			<td>

				<? foreach ($sale_vaiants as $v): ?>
					<?= Form::checkbox('sale_variants[]', $v->id) ?> <?= $v->name ?> <br>
				<? endforeach ?>
			</td>
		</tr>
		<tr>
			<td>Варианты доставки Вашего меда</td>
			<td>
				<? foreach ($deleveris as $v): ?>
					<?= Form::checkbox('delevery[]', $v->id) ?> <?= $v->name ?> <br>
				<? endforeach ?>

			</td>
		</tr>
		<tr>
			<td>Ваш контактный телефон(для связи с покупателями)</td>
			<td><?= Form::input('phone') ?></td>
		</tr>
		<tr>
			<td>Описание вашей пасеки, предприятия, контактные данные, приемущества, и.т.д.</td>
			<td><?= Form::textarea('about', "", array('cols' => 37)) ?></td>
		</tr>
		<tr>
			<td>Фото или логотип пасеки</td>
			<td><?= Form::file('logo') ?></td>
		</tr>
		<tr>
			<td></td>
			<td><?= Form::submit('sub', 'Зарегистрировать') ?></td>
		</tr>
	</table>

</form>

