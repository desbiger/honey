<? $tovars_mod = ORM::factory('Tovar')
		->where('modarate', '!=', '1')
		->find_all() ?>
<h2>Список элементов на модерацию</h2>
<br/>
<form action = "" method = "post">
	<table class = "content_table">
		<tr>
			<td>Название товара</td>
			<td>Описание</td>
			<td>Основная фото товара</td>
			<td>Цена товара</td>
			<td>Активность</td>
			<td>Разрешить</td>
		</tr>
		<? foreach ($tovars_mod as $tovar): ?>
			<tr>
				<td><?= $tovar->name ?></td>
				<td><?= $tovar->description ?></td>
				<td><img src = "<?= Hfile::Resize($tovar->base_photo,"100","100") ?>"></td>
				<td><?= $tovar->price ?></td>
				<td><?= $tovar->active ?></td>
				<td style="text-align: center; vertical-align: middle"><?= Form::checkbox('accept_' . $tovar->id) ?></td>
			</tr>
		<? endforeach ?>
		<tr></tr>
	</table>
	<br/>
	<?=Form::submit('sub','Применить')?>
</form>