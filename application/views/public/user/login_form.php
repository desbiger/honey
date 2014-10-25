<? if (!Auth::instance()
		->logged_in('login')
): ?>
	<form method = "post" style = "text-align: right" action = "/client_user/login">
		Ваш логин:
		<?= Form::input('login', Arr::get($_POST, 'login')) ?><br>
		Пароль:
		<?= Form::password('pass', Arr::get($_POST, 'pass')) ?>
		<?= Form::submit('sum', 'Войти') ?>
	</form>
<? else: ?>
	<div style = "text-align: right">
		<?
			$user_id = Auth::instance()
					->get_user()->id;
			$client = ORM::factory('Client')
					->where('user_id', "=", $user_id)
					->find();
		?>
		Добро пожаловать, <?= $client->name ?><br>

		<form action = "/client_user/logout">
			<?= Form::submit('sub', "Выход") ?>
		</form>

	</div>
<?endif ?>