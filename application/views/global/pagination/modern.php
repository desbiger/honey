<div class = "clear"></div>

<div class = "pagination">

	<ul>
		<li>Страницы</li>
		<? for ($i = 1; $i <= $pages; $i++): ?>
			<li <?= Arr::get($_REQUEST, 'p') == $i || (!isset($_REQUEST['p']) && $i == 1) ? 'class="current"' : '' ?>>
				<a href = "?p=<?= $i ?>"><?= $i ?></a>
			</li>
		<? endfor ?>
	</ul>
</div>