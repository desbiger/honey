<? $razdels = ORM::factory('Section')
		->find_all();
?>
<h2>Список разделов каталога</h2>
<br/>
<table class="content_table">
	<tr>
		<td>id</td>
		<td>Название</td>
		<td>Активность</td>
		<td>Описание</td>
	</tr>
	<? foreach ($razdels as $vol): ?>
		<tr>
			<td><?=$vol->id?></td>
			<td><?=$vol->name?></td>
			<td><?=$vol->active?></td>
			<td><?=$vol->description?></td>
		</tr>
	<? endforeach ?>
</table>