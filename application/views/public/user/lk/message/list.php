<?
	$client_id = ORM::factory('Client')
			->where('user_id', "=", Auth::instance()
					->get_user())
			->find()->id;
	$themes = ORM::factory('Theme')
			->where('author', '=', $client_id)
			->find_all();
?>
<h2>Список Ваших обращений</h2>
<? if (count($themes) > 0): ?>
	<table class = "content_table" style = "width: 100%">
		<tr>
			<td>Тема обращения</td>
			<td>Дата создания</td>
		</tr>

		<? foreach ($themes as $theme): ?>
			<?        if ($my_id = Honey::MyClientID()) {
				$messages = ORM::factory('Message')
						->where('theme_id', '=', $theme->id)
						->and_where('read', '=', 0)
						->and_where('from', '!=', $my_id)
						->count_all();
			}
			else {
				$messages = false;
			}?>
			<tr>
				<td>
					<a <?= $messages ? 'class="bold"' : '' ?> href = "/user/messages/<?= $theme->id ?>">
						<?= $theme->title ?>
						<?=$messages? "({$messages})":''?>
					</a>
				</td>
				<td><?= $theme->date_create ?></td>
			</tr>

		<? endforeach ?>
	</table>
<? endif ?>
<br/>
<a href = "/user/message/">Создать обращение</a>
 