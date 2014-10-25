<?
	$session = Session::instance()
			->id();
	$basket = ORM::factory('Basket')
			->where('session_id', '=', $session)
			->find_all()

?>
<? if (count($basket) > 0): ?>
	<form action = "" method="post">
		<h2>Ваш Боченок</h2>
		<table class = "basket">
			<tr>
				<td>Товар</td>
				<td>Продавец</td>
				<td>Количество</td>
				<td>Стоимость</td>
				<td>Итого</td>
				<td>Удалить</td>
			</tr>
			<? $summa = 0; ?>
			<? foreach ($basket as $vol): ?>
				<? $summa += $vol->tovar->price * $vol->quantity ?>
				<? $file_name = Hfile::GetFileNameByID($vol->tovar->file->id) ?>
				<? $file = Hfile::Resize($vol->tovar->file->id, 50, 50) ?>
				<tr>
					<td style="text-align: left">
						<a href = "/catalog/<?= $vol->tovar->section_id ?>/<?=$vol->tovar->id ?>">
						<img src = "<?= $file ?>" alt = ""/>
						<?= $vol->tovar->name ?>
						</a>
					</td>
					<td><a href = "/client/<?= $vol->tovar->client->code ?>"><?= $vol->tovar->client->name ?></a></td>
					<td><?= Form::input('quantity_' . $vol->id, $vol->quantity, array('style' => 'width:40px')) ?> кг</td>
					<td><?= $vol->tovar->price ?> р.</td>
					<td><?= $vol->tovar->price * $vol->quantity ?> р.</td>
					<td><?= Form::checkbox('tovar_del[]', $vol->id) ?></td>
				</tr>
			<? endforeach ?>
			<tr>
				<td align = "right" colspan = "6">Итого: <?= $summa ?> р.</td>
			</tr>

		</table>
		<br/>
		<?= Form::submit('sub', 'Обновить') ?>
		<?= Form::submit('sub', 'Оформить заказ') ?>
	</form>
<? else: ?>
	<h2>Ваш боченок пуст</h2>
<?endif ?>