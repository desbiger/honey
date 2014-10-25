<? $themes = ORM::factory('Theme')->order_by('id','DESC')
		->find_all(); ?>

<h2>Список обращений</h2>
<br/>
<table class = "content_table">
	<tr>
		<td>Тема обращения</td>
		<td>Дата создания</td>
		<td>Автор</td>
	</tr>

	<? foreach ($themes as $theme): ?>
		<?

		if ($my_id = Honey::MyClientID()) {
			$messages = ORM::factory('Message')
					->where('theme_id', '=', $theme->id)
					->and_where('read', '=', 0)
					->and_where('from', '!=', $my_id)
					->count_all();
		}
		else {
			$messages = false;
		}
		?>
		<tr>
			<td>
				<a <?= $messages ? 'class="bold"' : '' ?> href = "/admin/tech/theme/<?= $theme->id ?>">
					<?= $theme->title ?>
					<?=$messages? "({$messages})":''?>
				</a>
			</td>
			<td><?= $theme->date_create ?></td>
			<td><a href = "/admin/pasechniki/edit/<?= $theme->author ?>"><?= ORM::factory('Client', $theme->author)->name ?></a></td>
		</tr>
	<? endforeach ?>
</table>