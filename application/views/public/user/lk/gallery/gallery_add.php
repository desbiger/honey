<h2>Добавление галереи</h2>
<form method = "post">
	<table class = "reg_table">
		<? foreach ($errors as $vol): ?>
			<tr>
				<td></td>
				<td style = "color: red;">
					<?= $vol ?>
				</td>
			</tr>
		<? endforeach ?>
		<tr>
			<td>Название галереи</td>
			<td><?= Form::input('name', Arr::get($_POST, 'name')) ?></td>
		</tr>
		<tr>
			<td>Описание:</td>
			<td>
				<?= Form::textarea('description', Arr::get($_POST, 'description')) ?>
			</td>
		</tr>
		<tr>
			<td><?= Form::submit('sub', 'Добавить') ?></td>
		</tr>
	</table>
</form>