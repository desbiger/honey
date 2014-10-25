<? $services = ORM::factory('Services')
		->find_all();
	$active_services = Service::GetServicesForCurrentUser();

	echo Service::DateChange(1);
?>
<h2>Мои услуги</h2>
<form method = "post" action = "/user/services">
	<table class = "services">
		<tr>
			<td>Название услуги</td>
			<td>Описание услуги</td>
			<td>Стоимость / дней</td>
			<td>Подключить / отключить</td>
		</tr>
		<? foreach ($services as $serv) : ?>
			<tr>
				<td><?= $serv->name ?></td>
				<td><?= $serv->description ?></td>
				<td><?= $serv->price ?> р. / <?= $serv->lenght_days ?> дней.</td>
				<td><?= Form::checkbox('active_' . $serv->id) ?></td>
			</tr>
		<? endforeach ?>
		<tr>
			<td>
				<?= Form::submit('sub', 'Сохранить') ?>
			</td>
		</tr>
	</table>
</form>


 