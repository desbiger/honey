<h2>Каталог</h2>
<? $razdels = ORM::factory('Section')
		->order_by('name')
		->find_all() ?>
<ul class = "menu_left">
	<? foreach ($razdels as $vol): ?>
		<? $tovars = $vol->tovar->where('modarate','=',1)->find_all() ?>
		<? if (count($tovars) > 0): ?>
				<?if($curent_razdel == $vol->id){
				$class = " class='menu_selected'";
			}else{
				$class = '';
			}?>
			<li<?=$class?>><a href = "/catalog/<?= $vol->id ?>"><?= $vol->name ?> (<?= count($tovars) ?>)</a></li>
		<? endif ?>
	<? endforeach ?>
</ul>