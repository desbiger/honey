<h2>Топ продаж</h2>
<?
	$tovars = ORM::factory('Tovar')
			->where('modarate', '=', 1)
			->find_all();
?>
<ul class = "product">
	<? foreach ($tovars as $vol): ?>
		<li>
			<div class = "product_wrap">
				<a href = "/catalog/<?= $vol->section_id ?>/<?= $vol->id ?>" class = "name"><?= $vol->name ?></a>

				<div class = "product_img">
					<a href = "/catalog/<?= $vol->section_id ?>/<?= $vol->id ?>">
						<img src = "/include/image/pic1.jpg" alt = ""/>
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