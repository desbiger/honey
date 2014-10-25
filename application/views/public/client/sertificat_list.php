<? if (count($sertificats)): ?>
	<? foreach ($sertificats as $vol): ?>
			<div class="fleft">
				<a title="<?=$vol->name?>" class="fancy" rel="1" href = "<?=$vol->file->path . $vol->file->file_name ?>">
					<img src = "<?= Hfile::Resize($vol->file_id,200,200)?>" alt = ""/>
				</a>
			</div>
	<? endforeach ?>
<? endif ?>
 