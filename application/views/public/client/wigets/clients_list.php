<?
	$per_page = 10;
	$list = ORM::factory('Client')
			->where('active', '=', 1)
			->where('about', '!=', '')
			->order_by('id', 'DESC')
			->limit($per_page);

	$list = isset($_REQUEST['p']) ? $list->offset($per_page * ($_REQUEST['p'] - 1)) : $list;
	$list = $list->find_all();

	$count = ORM::factory('Client')
			->count_all() ?>
<h2>Пасечники</h2>
<? if ($count > $per_page): ?>
	<?=
	Paginator::instance()
			->Count($count)
			->Current(Arr::get($_REQUEST, 'p'))
			->PerPage($per_page)
			->Generate() ?>
<? endif ?>
<? foreach ($list as $client): ?>
	<?
	$tovars = $client->tovars->find_all();
	?>

	<div class = "client_header">
		<div>
			<? if ($client->logo): ?>
				<a class = "fancy" href = "<?= Hfile::GetImageByID($client->logo) ?>">
					<img width = "100" src = "<?= Hfile::Crop(100, 100, Hfile::GetImageByID($client->logo)) ?>">
				</a>
			<? else: ?>
				<img style = "border: 1px solid #db6501" src = "/include/image/empty.jpg" alt = ""/>
			<?endif ?>
		</div>
		<div style = "width: 455px;
				text-align: right;">
			<h3><a href = "/client/<?= $client->code ?>/"><?= $client->name ?></a></h3>

			<p><?= $client->about ?></p>
		</div>
	</div>
	<!--	--><? // if (count($tovars)): ?>
	<!--		<p style = "font-weight: bold">Товары пасечника:</p>-->
	<!--		<div>-->
	<!--			--><? // foreach ($tovars as $tovar): ?>
	<!--				--><? //
	//				$img = Hfile::Resize($tovar->base_photo, 75, 50)
	//
	?>
	<!--				<div class = "tovar">-->
	<!--					<p>--><?//= $tovar->name ?><!--</p>-->
	<!---->
	<!--					<a href = "/catalog/--><?//= $tovar->section_id ?><!--/--><?//= $tovar->id ?><!--">-->
	<!--						<img src = "--><?//= $img ?><!--" alt = ""/>-->
	<!--					</a>-->
	<!---->
	<!--					<p>--><?//= $tovar->price ?><!-- р.</p>-->
	<!--				</div>-->
	<!--			--><? // endforeach ?>
	<!--		</div>-->
	<!--	--><? // endif ?>
	<div class = "clear"></div>
	<hr>

	<div class = "clear"></div>

<? endforeach ?>
<? if ($count > $per_page): ?>
	<?=
	Paginator::instance()
			->Count($count)
			->Current(Arr::get($_REQUEST, 'p'))
			->PerPage($per_page)
			->Generate() ?>
<? endif ?>

