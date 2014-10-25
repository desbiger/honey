<? if (count($tovars) > 0): ?>

	<ul class = "product">
		<? foreach ($tovars as $vol): ?>
			<? $img = Hfile::Resize($vol->file->id, 140, 140) ?>
			<li>
				<div class = "product_wrap">
					<a href = "/catalog/<?= $vol->section_id ?>/<?= $vol->id ?>" class = "name"><?= $vol->name ?></a>
					<? $sale_variants = $vol->sale->find_all() ?>
					<? foreach ($sale_variants as $k): ?>
						<? if ($k->name == 'Оптом'): ?>
							<div class = "optom" style="bottom: -17px"></div>
						<? endif ?>
					<? endforeach ?>
					<div class = "product_img">
						<a href = "/catalog/<?= $vol->section_id ?>/<?= $vol->id ?>">
							<img src = "<?= $img ?>" alt = ""/>
						</a>
					</div>
					<p>
						<?= $vol->price ?>р. / <span>кг</span>
					</p>
				</div>
				<div class = "form_sub">
					<form action = "/catalog/<?= $vol->section_id ?>/<?= $vol->id ?>" method = "post">
						<input type = "submit" name = "submit" value = "В боченок"/>
					</form>
				</div>
			</li>
		<? endforeach ?>
	</ul>
<? endif ?>