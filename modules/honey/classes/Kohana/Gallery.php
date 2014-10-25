<?

	class Kohana_Gallery
	{
		/**
		 * @param $post
		 * @return bool|Validation
		 * Добавление нового товара с валидацией данных и генерацией картинок из $_FILE
		 */
		public static function Add($post)
		{
			$gallery = ORM::factory('Gallery');
			$fields  = $gallery->list_columns();

			$client_id = ORM::factory('Client')
					->where('user_id', '=', Auth::instance()
							->get_user()->id)
					->find()->id;


			$validate = Validation::factory($post);

			$validate->label('name', 'Название галереи');
			$validate->rule('name', 'not_empty');


			if ($validate->check()) {

				$gallery->set('name', Arr::get($post, 'name'));
				$gallery->set('description', Arr::get($post, 'description'));
				$gallery->set('client_id', $client_id);
				$gallery_id = $gallery->save();
				return true;
			}
			else {
				return $validate->errors('validation');
			}
		}

		public static function Del($tovar_id)
		{

			$tovar = ORM::factory('Tovar', $tovar_id);
			$file  = ORM::factory('File', $tovar->file->id);
			if (file_exists(DOCROOT . $file->path . $file->file_name)) {
				unlink(DOCROOT . $file->path . $file->file_name);
			}
			$file->delete();
			$tovar->delete();

		}

		/**
		 * @param $fields
		 * @param $tovar_id
		 * @return array|ORM
		 */
		public static function Update($fields, $tovar_id)
		{
			$tovar = ORM::factory('Tovar', $tovar_id);
			$cols  = $tovar->list_columns();

			foreach ($fields as $key => $vol) {
				if (key_exists($key, $cols)) {
					$tovar->$key = $vol;
				}
			}
			if (isset($_FILES['photo']) && $_FILES['photo']['size'] > 0) {
				$file_id           = Hfile::Upload($_FILES['photo']);
				$tovar->base_photo = $file_id;
			}
			try {
				$tovar->save();
				$saleVariants = ORM::factory('SaleVariantTovar')
						->where('tovar_id', '=', $tovar_id)
						->find_all();
				foreach ($saleVariants as $e) {
					ORM::factory('SaleVariantTovar', $e->id)
							->delete();
				}
				if (isset($_POST['saleVariant']) && count($_POST['saleVariant'])) {
					foreach ($_POST['saleVariant'] as $vol) {
						ORM::factory('SaleVariantTovar')
								->set('tovar_id', $tovar_id)
								->set('sale_id', $vol)
								->save();
					}
				}

			} catch (ORM_Validation_Exception $e) {
				return $e->errors('validation');
			}
		}
	}
 