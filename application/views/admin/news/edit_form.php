<h2>Добавление новой новости</h2>
<br/>
<form action = "/admin/news/edit/<?=$news->id?>" method = "post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Название новости</td>
			<td><?= Form::input('name', $news->name, array('style="width:700px;padding:5px"')) ?></td>
		</tr>
		<tr>
			<td>Картинка</td>
			<td>
				<?if($picture = $news->file->file_name):?>

					<a class="fancy" href = "<?=$news->file->path .$picture?>">
						<img src = "<?= Hfile::Resize($news->picture, 200, 200) ?>" alt = ""/>
					</a>
					<br/>
				<?endif?>
				<?=Form::file('picture')?></td>
		</tr>
		<tr>
			<td>Анонс</td>
			<td><?= Form::textarea('preview_text', $news->preview_text) ?></td>
		</tr>
		<tr>
			<td>Текст новости</td>
			<td><?= Form::textarea('detail_text', $news->detail_text) ?></td>
		</tr>
		<tr>
			<td>Дата новости</td>
			<td><?= Form::input('date_create', $news->date_create) ?></td>
		</tr>
		<tr>
			<td></td>
			<td><?= Form::submit('sub', 'Обновить') ?></td>
		</tr>
	</table>

</form>
<br/>