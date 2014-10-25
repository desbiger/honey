<? if (isset($_POST['id']) && $_POST['id'] > 0) {
	$List = ORM::factory('Client')->where('id','=',$_POST['id'])->find_all();
}
else {
	$List = ORM::factory('Client')
			->order_by('id','DESC')
			->find_all();
}
?>
<h2>Список пасчеников</h2>
<br/>
<form action = "" method = "post">
	<div class = "admin_filter">
		<p>ID Пасечника</p>

		<p><?= Form::input('id', Arr::get($_POST, 'id')) ?>
			<?= Form::submit('sub', 'Найти') ?>
		</p>
	</div>
</form>
<table class = "content_table">
	<tr>
		<td>ID</td>
		<td>Имя пасченика</td>
		<td>Телефон</td>
		<td>О себе</td>
		<td>Адрес личной страницы</td>
		<td>состояние счета</td>
		<td>Фото</td>
		<td>Активен</td>

	</tr>
	<? foreach ($List as $vol): ?>
		<tr>
			<td><?= $vol->id ?></td>
			<td><a href = "/admin/pasechniki/edit/<?= $vol->id ?>"><?= $vol->name ?></a></td>
			<td><?= $vol->phone ?></td>
			<td><?= $vol->about ?></td>
			<td><?= $vol->code ?></td>
			<td style = "text-align: center;vertical-align: middle">
				<?$summa = ORM::factory('Money')
						->where('user_id', '=', $vol->id)
						->find()->summa ?>
				<?=  $summa?> руб.
			</td>
			<td><img src = "<?= Hfile::Resize($vol->logo, 70, 70) ?>" alt = ""/></td>
			<td style = "text-align: center;vertical-align: middle"><?= Form::checkbox('close_' . $vol->id, null, (bool)$vol->active) ?></td>
		</tr>
	<? endforeach ?>

</table>
<br/>
