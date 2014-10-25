<? $deleveris = ORM::factory('Delevery')
		->find_all() ?>
<? $sale_vaiants = ORM::factory('SaleVariant')
		->find_all();
	$USER = Auth::instance()
			->get_user();
	$cities = ORM::factory('City')
			->find_all();
	foreach ($cities as $c) {
		$citys[$c->id] = $c->name;
	}
?>


<div class = "clear"></div>
<form method = "post" action = "/user/updateuser" enctype = "multipart/form-data">
	<h2>Редактирования данных</h2>


	<table class = "reg_table">
		<? $errors = Cookie::get('validate_errors') ?>
		<? Cookie::delete('validate_errors') ?>
		<? if ($errors): ?>
			<? foreach (unserialize($errors) as $vol): ?>
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
			<td><?= Form::input('name', Arr::get($user, 'name')) ?></td>
		</tr>
		<tr>
			<td>www.honey4all.ru/client/</td>
			<td>
				Ваш адрес<br>
				<?= Form::input('code', Arr::get($user, 'code')) ?></td>
		</tr>
		<tr>
			<td>Ваш город</td>
			<td><?= Form::select('city_id', $citys, Arr::get($user, 'city_id')) ?></td>
		</tr>
		<tr>
			<td>Ваш Email</td>
			<td><?= Form::input('email', Arr::get($USER->as_array(), 'email')) ?></td>
		</tr>

		<tr>
			<td>Варианты продажи меда</td>
			<td>

				<? foreach ($sale_vaiants as $v): ?>
					<?= Form::checkbox('sale_variants[]', $v->id, Huser::CheckSaleVariant($USER->id, $v->id)) ?> <?= $v->name ?> <br>
				<? endforeach ?>
			</td>
		</tr>
		<tr>
			<td>Варианты доставки Вашего меда</td>
			<td>
				<? foreach ($deleveris as $v): ?>
					<?= Form::checkbox('delevery[]', $v->id, Huser::CheckdeleveryVariant($USER->id, $v->id)) ?> <?= $v->name ?> <br>
				<? endforeach ?>

			</td>
		</tr>
		<tr>
			<td>Ваш телефон(только для администрации сайта)</td>
			<td><?= Form::input('phone', Arr::get($user, 'phone')) ?></td>
		</tr>
		<tr>

			<td style = "text-align: left;" colspan = "2">
				Описание "О пасечнике" <br/>
				<?= Form::textarea('about', Arr::get($user, 'about'), array('style' => 'width:550px; heght:400px')) ?>
			</td>
		</tr>
		<tr>
			<td>Фото или логотип пасеки</td>
			<td><a class = "fancy" href = "<?= $user['logo_big'] ?>">
					<img src = "<?= $user['logo'] ?>" alt = ""/>
				</a>
				<?= Form::file('logo') ?></td>
		</tr>
		<tr>
			<td></td>
			<td><?= Form::submit('sub', 'Сохранить') ?></td>
		</tr>
	</table>

</form>

