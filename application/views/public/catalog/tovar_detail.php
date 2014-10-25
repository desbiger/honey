<? $client = ORM::factory('Client', $tovar->client_id) ?>
<?$sale_variants = $tovar->sale->find_all();
?>
<h2><?= $tovar->section->name ?></h2>
<div class = "product_wrap">

	<div style = "float: left; margin-right: 40px" class = "product_img">
		<? $img = Hfile::Resize($tovar->file->id, 200, 200) ?>
		<? $default_image = preg_match("|pic1|", $img) ?>
		<? if (!$default_image): ?>
			<a class = "fancy" href = "<?= $tovar->file->path ?><?= $tovar->file->file_name ?>">
				<img src = "<?= $img ?>" alt = "">
			</a>
		<? else: ?>
			<img src = "<?= $img ?>" alt = "">
		<? endif ?>
	</div>
	<div class = "properties">
		<h2><?= $tovar->name ?></h2>
		<ul>
			<li>
				<p>Производство: <a href = "/client/<?= $client->code ?>"><?= $client->name ?></a></p>
			</li>
			<? if (count($sale_variants)): ?>

				<li>
					<p>Вариант продажи:</p>
					<ul style = "margin-left: 20px;">
						<? foreach ($sale_variants as $var): ?>
							<li style = "list-style: circle"><p><?= $var->name ?></p></li>
						<? endforeach ?>
					</ul>
				</li>
			<? endif ?>
			<li>
				<br/>

				<div class = "clear"></div>
			</li>
			<li>
				<p><span class = "price"><?= $tovar->price ?> р.</span> /
					<span>кг</span><?= $tovar->min_weight ? " (Мин. " . $tovar->min_weight . " кг)" : ''
					?></p>
			</li>
		</ul>
		<div class = "form_sub" style="text-align: left; margin-top: 21px;">
			<form action = "/catalog/<?= $tovar->section_id ?>/<?= $tovar->id ?>" method = "post">
				<input type = "submit" name = "submit" value = "В боченок"/>
			</form>
		</div>
	</div>
	<div class = "clear"></div>
	<p>

	</p>
</div>
<div class = "clear"></div>
<? if ($tovar->description): ?>
	<br/>
	<h3>Описание товара</h3>
	<p style = "margin-top: 20px"><?= $tovar->description ?></p>
<? endif ?>
