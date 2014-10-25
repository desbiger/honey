<a class = "add_button" href = "/user/products/add_new">Добавить товар</a>

<? $tovars_list = ORM::factory('Tovar')
		->where('client_id', "=", $client->id)
		->find_all() ?>

<ul class = "product">
	<? foreach ($tovars_list as $vol): ?>
		<? $img = Hfile::Resize($vol->file->id, 150, 150) ?>
		<li>
			<?if($vol->modarate == 0):?>
					<div class="mod"></div>
				<?endif?>
			<div class = "product_wrap">
				<a href = "/user/products/tovar_edit/<?= $vol->id ?>" class = "name"><?= $vol->name ?></a>

				<div class = "product_img">
					<a href = "/user/products/tovar_edit/<?= $vol->id ?>">
						<img src = "<?= $img ?>" alt = "">
					</a>
				</div>
				<p>
					<?= $vol->price ?>р. / <span>кг</span>
				</p>
			</div>

		</li>
	<? endforeach ?>


</ul>