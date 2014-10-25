<?$raz = ORM::factory('Section')
		->find_all();
	$saleVariants = ORM::factory('SaleVariant')
			->find_all();

	$razdels = Honey::ObjArrayToSelectArray($raz, 'id', 'name');

?>
<script type = "text/javascript">
	$(function () {
		$('#del_button').click(function () {
			$('#edit_form').attr('action', '/user/products/del_tovar/');
			$('#edit_form').submit();
			return false;
		});
	});

</script>
<?
	$saleTovarVarints = array();
	$sale_variants = ORM::factory('SaleVariantTovar')
			->where('tovar_id', '=', $tovar->id)
			->find_all() ?>
<? foreach ($sale_variants as $vol): ?>
	<? $saleTovarVarints[] = $vol->sale_variant->id ?>
<? endforeach ?>
<form id = "edit_form" action = "" method = "post" enctype = "multipart/form-data">
	<?= Form::hidden('tovar_id', $tovar->id) ?>
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
			<td><?= Form::input('name', $tovar->name) ?></td>
		</tr>
		<tr>
			<td>Раздел</td>
			<td><?= Form::select('section_id', $razdels, $tovar->section_id) ?></td>
		</tr>
		<tr>
			<td>Стоимость / кг</td>
			<td><?= Form::input('price', $tovar->price) ?></td>
		</tr>
		<tr>
			<td>Варианты продажи</td>
			<td>
				<? foreach ($saleVariants as $vol): ?>
					<?= Form::checkbox('saleVariant[]', $vol->id, in_array($vol->id, $saleTovarVarints)) ?> <?= $vol->name ?><br>
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
			<td><?= Form::textarea('description', $tovar->description) ?></td>
		</tr>
		<tr>
			<td>Фото товара</td>
			<td>
				<? $img = Hfile::Resize($tovar->file->id, 200, 200) ?>
				<img src = "<?= $img ?>" alt = ""/><br>
				<?= Form::file('photo') ?>
			</td>
		</tr>
		<tr>
			<td colspan = "2">

				<?= Form::submit('sub', 'Сохранить') ?>
				<?= Form::submit('sub', 'Удалить', array('id' => 'del_button')) ?>
			</td>
		</tr>
	</table>
</form>