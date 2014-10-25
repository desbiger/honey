<? ?>
<h2>Редактирование данных пасечника <?= $client->name ?></h2>
<br/>
<form action = "" method="post">
	<table class = "edit_form">
		<tr>
			<td>Имя</td>
			<td><?= Form::input('name', $client->name) ?></td>
		</tr>
		<tr>
			<td>Телефон</td>
			<td><?= Form::input('phone', $client->phone) ?></td>
		</tr>
		<tr>
			<td>О себе</td>
			<td><?= Form::input('about', $client->about) ?></td>
		</tr>
		<tr>
			<td>Адрес личной страницы</td>
			<td><?= Form::input('code', $client->code) ?></td>
		</tr>
		<tr>
			<td>Состояние счета</td>
			<td><?= Form::input('balans', ORM::factory('Money')
						->where('user_id', '=', $client->id)
						->find()->summa) ?></td>
		</tr>
		<tr>
			<td>Активен</td>
			<td><?= Form::checkbox('active', null, (bool)$client->active) ?></td>
		</tr>
		<tr>
			<td></td>
			<td><?= Form::submit('sub', 'Применить') ?></td>
		</tr>
	</table>
</form>
<br/>
 