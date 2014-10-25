<?
	$result = array();
	$basket = ORM::factory('Basket')
			->where('session_id', '=', Session::instance()
					->id())
			->find_all();
	foreach ($basket as $vol) {
		$result[$vol->tovar->client_id][] = $vol;
	}
?>
<h2>Оформление заказа</h2>
<form action = "" method = "post">
	<h3>Контактные данные</h3>
	<table class = "order_client">
		<tr>
			<td>Имя</td>
			<td>
				<?= Form::input('client_name', Arr::get($_POST, 'client_name')) ?>
				<a><?= Arr::get($errors, 'client_name') ?></a>
			</td>

		</tr>
		<tr>
			<td>Фамилия</td>
			<td><?= Form::input('client_firstname', Arr::get($_POST, 'client_firstname')) ?></td>
		</tr>
		<tr>
			<td>Отчество</td>
			<td><?= Form::input('client_secondname', Arr::get($_POST, 'client_secondname')) ?></td>
		</tr>
		<tr>
			<td>Контактный телефон (включая код города)</td>
			<td><?= Form::input('phone', Arr::get($_POST, 'phone')) ?>
				<a><?= Arr::get($errors, 'phone') ?></a>
			</td>
		</tr>
		<tr>
			<td>Ваш email адрес</td>
			<td><?= Form::input('client_email', Arr::get($_POST, 'client_email')) ?>
				<a><?= Arr::get($errors, 'client_email') ?></a>
			</td>
		</tr>
		<tr>
			<td>Адрес доставки</td>
			<td><?= Form::textarea('client_adress', Arr::get($_POST, 'client_adress'), array('cols' => 40)) ?></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
		</tr>
	</table>


	<hr/>
	<? foreach ($result as $key => $vol): ?>
		<? $client = ORM::factory('Client', $key) ?>
			<?$deleverys = array()?>
		<?foreach ($client->delevery->find_all() as $de) {
			$deleverys[$de->id] = $de->name;
		}?>

		<br/>
		<p>Продавец - <?= $client->name ?></p>
		<p>Место самовывоза - <?=
				ORM::factory('City', $client->city)->name ? ORM::factory('City', $client->city)->name : "уточните у продавца" ?></p>


		<p>Способы доставки</p>
		<? if ($deleverys): ?>
			<p><?= Form::select("order[{$key}][delevery]", $deleverys) ?></p>
		<? else: ?>
			<input type = "hidden" name = "order[<?=$key?>][delevery]" value="Самовывоз"/>
			<p>Только самовывоз</p>
		<?endif ?>
		<br/>
		<table style = "margin-top: 10px" class = "basket">
			<tr>
				<td>Товар</td>
				<td>Цена/кг</td>
				<td>Количество</td>
				<td>Итого</td>
			</tr>
			<? $summa = 0; ?>
			<? foreach ($vol as $k => $v): ?>
				<tr>
					<td>
						<input type = "hidden" name = "order[<?=$key?>][tovars][<?=$v->tovar->id?>]" value="<?=$v->quantity?>"/>

						<?= $v->tovar->name ?></td>
					<td><?= $v->tovar->price ?></td>
					<td><?= $v->quantity ?></td>
					<td><?= $v->tovar->price * $v->quantity ?></td>
					<? $summa += $v->tovar->price * $v->quantity ?>
				</tr>
			<? endforeach ?>
			<tr>
				<td colspan = "4">Итого: <?= $summa ?> р.</td>
			</tr>
		</table>


	<? endforeach ?>
	<br/>
	<?= Form::submit('do', 'Оформить заказ') ?>
</form>