<h2>Результат поиска</h2>
<? foreach ($res as $vol): ?>
	<? $string = explode(" ", $_REQUEST['search_text']) ?>
	<?foreach ($string as $val) {
		if($val){
			$vol['about'] = preg_replace("/(" . $val . ")/", "<strong style='color: green'>$1</strong>", $vol['about']);
		}
	}?>
	<?= $vol['about'] ?><br/>
	<hr/>
<? endforeach ?>

 