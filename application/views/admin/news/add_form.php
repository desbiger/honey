<h2>Добавление новой новости</h2>
<br/>
<form action = "/admin/news/add" method="post">
	<table>
		<tr>
			<td>Название новости</td>
			<td><?= Form::input('name', Arr::get($_REQUEST, 'name'),array('style="width:700px;padding:5px"')) ?></td>
		</tr>
		<tr>
			<td>Анонс</td>
			<td><?= Form::textarea('preview_text', Arr::get($_REQUEST, 'preview_text')) ?></td>
		</tr>
		<tr>
			<td>Текст новости</td>
			<td><?= Form::textarea('detail_text', Arr::get($_REQUEST, 'detail_text')) ?></td>
		</tr>
		<tr>
			<td>Дата новости</td>
			<td><?= Form::input('date_create', date('Y-m-d')) ?></td>
		</tr>
		<tr>
			<td></td>
			<td><?= Form::submit('sub', 'Добавить') ?></td>
		</tr>
	</table>

</form>
<br/>