<?$session = Session::instance()
		->id();
	$basket = ORM::factory('Basket')
			->where('session_id', '=', $session)
			->find_all()
			->count();
?>
<li class = "basket_icon">
	<a href = "/basket">
		<?= $basket > 0 ? "В боченке {$basket} товаров" : "Ваш боченок пуст"; ?>
	</a>
</li>