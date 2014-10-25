<?$News = ORM::factory('News')->order_by('id','DESC')->find_all();?>
<h2>Управление новостями</h2>
<br/>
<a href = "/admin/news/add">Добавить новость</a>
<br/>
<table class="content_table">
	<tr>
		<td>Название новости</td>
		<td>Анонс</td>
		<td>Текст</td>
		<td>Дата создания</td>
	</tr>
	<?foreach($News as $nes):?>
			<tr>
				<td><a href = "/admin/news/edit/<?= $nes->id ?>"><?=$nes->name?></a></td>
				<td><?=$nes->preview_text?></td>
				<td><?=$nes->detail_text?></td>
				<td><?=$nes->date_create?></td>
			</tr>
	<?endforeach?>

</table>
 