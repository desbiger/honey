<script type = "text/javascript">
	$(function () {
		$('input[name=sub]').click(function () {
			var data = '';
				data.append('photo',$('#photo')[0].files[0]);
			$.ajax({
						type: 'POST',
						url: '/ajax/gallery/add_photo',
						enctype: 'multipart/form-data',
						data: data,
						success: function (date) {
							alert(date);
						}
					});
			return false;
		})
	})
	;
</script>

<?$gallerys = ORM::factory('Gallery')
		->where('client_id', '=', ORM::factory('Client')
				->where('user_id', '=', Auth::instance()
						->get_user()->id)
				->find()->id)
		->find_all()?>


<h2>Список фотогалерей</h2>
<a href = "/user/gallery_add" class = "add_button">Добавить галерею</a>
<? foreach ($gallerys as $vol): ?>
	<?= $vol->name ?>
	<a class = "fancy" href = "#hidden">Добавить фото</a>
<? endforeach ?>



<div style = "display: none">
	<form id = "hidden">
		Файл для добавления <br/>
		<?= Form::file('photo',array('id'=>'photo')) ?>
		<?= Form::submit('sub', 'Загрузить') ?>
	</form>
</div>