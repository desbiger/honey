<?$raz = ORM::factory('Section')
		->find_all();
	$saleVariants = ORM::factory('SaleVariant')
			->find_all();

	$razdels = Honey::ObjArrayToSelectArray($raz, 'id', 'name');

?>

<form action = "" method = "post" enctype = "multipart/form-data">
	<table class = "reg_table">
		<? foreach ($errors as $vol): ?>
			<tr>
				<td></td>
				<td style = "color: red;">
					<?= $vol ?>
				</td>
			</tr>
		<? endforeach ?>
		<tr>
			<td>Название товара</td>
			<td><?= Form::input('name', Arr::get($_POST, 'name')) ?></td>
		</tr>
		<tr>
			<td>Раздел</td>
			<td><?= Form::select('razdel', $razdels, Arr::get($_POST, 'razdel')) ?></td>
		</tr>
		<tr>
			<td>Стоимость / кг</td>
			<td><?= Form::input('price', Arr::get($_POST, 'price')) ?></td>
		</tr>
		<tr>
			<td>Варианты продажи</td>
			<td>
				<? foreach ($saleVariants as $vol): ?>
					<?= Form::checkbox('saleVarian[]', $vol->id, Honey::CheckSelect('saleVarian', $vol->id)) ?> <?= $vol->name ?><br>
				<? endforeach ?>
				<!--				--><? //=Form::select('saleVariant',$saleVariants)?>
			</td>
		</tr>
		<tr>
			<td>Минимальная партия (кг)</td>
			<td>
				<?=Form::input('min_weight',Arr::get($_POST,'min_weight'))?>
			</td>
		</tr>
		<tr>
			<td>Описание товара</td>
			<td><?= Form::textarea('description', Arr::get($_POST, 'description')) ?></td>
		</tr>
		<tr>
			<td>Фото товара</td>
			<td><?= Form::file('photo') ?></td>
		</tr>
		<tr>
			<td colspan = "2">
				<?= Form::submit('sub', 'Добавить') ?>
			</td>
		</tr>
	</table>
</form>