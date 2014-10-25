<?
	$client_id = ORM::factory('Client')
			->where('user_id', '=', Auth::instance()
					->get_user()->id)
			->find()->id;
	$sertificats = ORM::factory('Sertificat')
			->where('client_id', '=', $client_id)
			->find_all();
?>
	<h2>Успралвение сертификатами</h2>
	<form action = "" method = "post" enctype = "multipart/form-data">
		<p>
			Для повышения рейтинга в системе необходимо предоставить сертификаты соответствия, и масимальное количество документом,
			удостоверяющие Вас как пасечника.
		</p>

		<hr/>
		<p>
			<br/>
			<?= Form::input('name', '', array('placeholder' => 'Название документа')) ?>
			<?= Form::file('picture') ?>
			<?= Form::submit('sub', 'Загрузить') ?>
		</p>
	</form>
<? if (count($sertificats)): ?>
	<br/>
	<hr/>
	<h3>Список загруженных сертификатов</h3>
	<? foreach ($sertificats as $ser): ?>
		<div class = "fleft">
			<a rel = "123" title="<?= $ser->name ?>" class = "fancy" href = "<?= $ser->file->path . $ser->file->file_name ?>">
				<?= $ser->name ?><br/>
				<img src = "<?= Hfile::Resize($ser->file_id, '200', '200') ?>" alt = "<?= $ser->name ?>"/>
			</a>
		</div>
	<? endforeach ?>
<? endif ?>