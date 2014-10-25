<? $user = Auth::instance()
		->get_user() ?>
<form action = "https://money.yandex.ru/quickpay/confirm.xml" method = "post">
	<input type="hidden" name="receiver" value="41001581763393">
	<input type="hidden" name="formcomment" value="Курская ярмарка меда">
	<input type="hidden" name="short-dest" value="Пополнение счета">
	<input type="hidden" name="quickpay-form" value="shop">
	<input type="hidden" name="targets" value="на виртуальный счет пасечника - <?=$user->id?>">
	<input type="hidden" name="paymentType" value="AC">
	<?= Form::hidden('label', $user->id) ?>
		<?=Form::input('sum','1000')?>
	<?= Form::submit('submit-button', 'Оплатить') ?>
</form>