<h3><?=$news->name?></h3>
<br>
<p><?=$news->detail_text?></p>
<?if($news->picture):?>
	<br/>
	<a class="fancy" href = "<?= $news->file->path . $news->file->file_name ?>">
		<img src = "<?= Hfile::Resize($news->picture, 570, 600) ?>" alt = ""/>
	</a>
<?endif?>
 