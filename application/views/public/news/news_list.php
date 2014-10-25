<h2>Новости</h2>

<? $news = ORM::factory('News')
->order_by('id','DESC')
->limit(3)
		->find_all() ?>
<? foreach ($news as $vol): ?>
	<div class = "news">
		<h3 style="font-weight: bold"><?= $vol->name ?></h3>
		<span class = "date"><?= $vol->date_create ?></span>
		<a href = "/news/<?=$vol->id?>"><?= $vol->preview_text ?></a>
	</div>
<? endforeach ?>


