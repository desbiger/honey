<h2><?= ORM::factory('Theme', $id)->title ?></h2>
<br/>
<form action = "" method = "post">
	<table>
		<tr>

			<td><?= Form::textarea('text') ?></td>
		</tr>
		<tr>

			<td><?= Form::submit('sub', 'Отправить сообщение') ?></td>
		</tr>
	</table>
</form>
<? if ($id): ?>
	<? $messages = ORM::factory('Message')
			->where('theme_id', '=', $id)
			->order_by('id', 'DESC')
			->find_all() ;
	$my_client_id = Honey::MyClientID();
	?>
	<? foreach ($messages as $mess): ?>
		<?if ($mess->from != $my_client_id) {
			ORM::factory('Message', $mess->id)
					->set('read', 1)
					->save();
		}?>
		<div class = "messages">
			<table>
				<tr>
					<td>От:</td>
					<td><?= ORM::factory('Client', $mess->from)->name ?></td>
				</tr>
				<tr>
					<td>Дата:</td>
					<td><?= $mess->date_create ?></td>
				</tr>
			</table>
			<p><?= $mess->text ?></p>
		</div>
	<? endforeach ?>
<? endif ?>
<br/>