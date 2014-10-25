<?if($client->background):?>
	<script type = "text/javascript">
		$(function(){
			$('body').css('background-image','url(<?=$client->file->path. $client->file->file_name?>)');
			$('body').css('background-position-y','307px');
			$('body').css('background-size','100%');
		});
	</script>
<?endif?>

<div class = "client_header">
	<div>
		<? if ($client->logo): ?>
			<a class = "fancy" href = "<?= Hfile::GetImageByID($client->logo) ?>">
				<img src = "<?= Hfile::Crop(100, 100, Hfile::GetImageByID($client->logo)) ?>">
			</a>
		<? else: ?>
			<img style = "border: 1px solid #db6501" src = "/include/image/empty.jpg" alt = ""/>
		<?endif ?>
	</div>
	<div style = "width: 455px;
		text-align: right;">
		<h1><?= $client->name ?></h1>

		<p>телефон: <?= $client->phone ?></p>
	</div>
</div>
<div class = "clear"></div>
<div class = "client_content">
	<? if ($client->about): ?>
	<? endif ?>
	<!--	<div class = "gallery">-->
	<!--		<ul>-->
	<!--			<li><a href = "#"><img src = "" alt = ""/></a></li>-->
	<!--		</ul>-->
	<!--	</div>-->
	<? $tovars = ORM::factory('Tovar')
			->where('client_id', '=', $client->id)
			->and_where('modarate', '=', 1)
			->find_all();
		$sertificats = ORM::factory('Sertificat')
				->where('client_id', '=', $client->id)
				->find_all();
	?>
	<div class = "section">
		<ul class = "tabs">
			<li class = "current">О пасечнике</li>
			<li>Товары пасечника</li>
			<li>Сертификаты</li>
			<li>Фотогалерея</li>
		</ul>

		<div class = "box visible">
			<p><?= $client->about ?></p>
		</div>
		<div class = "box">
			<?=
				View::factory('public/client/tovars_list')
						->bind('tovars', $tovars)?>
		</div>
		<div class = "box">
			<?=
				View::factory('public/client/sertificat_list')
						->bind('sertificats', $sertificats) ?>
		</div>
		<div class = "box"></div>
	</div>
</div>
