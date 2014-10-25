<?

	class Kohana_Tovar
	{
		/**
		 * @param $post
		 * @return bool|Validation
		 * Добавление нового товара с валидацией данных и генерацией картинок из $_FILE
		 */
		public static function Add($post)
		{
			$tovar  = ORM::factory('Tovar');
			$fields = $tovar->list_columns();

			$client_id = ORM::factory('Client')
					->where('user_id', '=', Auth::instance()
							->get_user()->id)
					->find()->id;

			$photo = Hfile::Upload($post['photo'], true);


			$validate = Validation::factory($post);

			$validate->label('name', 'Название товара');
			$validate->rule('name', 'not_empty');

			$validate->label('razdel', 'Раздел');
			$validate->rule('razdel', 'not_empty');

			if ($validate->check()) {

				$tovar->set('name', Arr::get($post, 'name'));
				$tovar->set('description', Arr::get($post, 'description'));
				$tovar->set('section_id', Arr::get($post, 'razdel'));
				$tovar->set('price', Arr::get($post, 'price'));
				$tovar->set('client_id', $client_id);
				$tovar->set('base_photo', $photo);
				$tovar->set('modarate', 0);
				$tovar_id = $tovar->save();
				if (isset($post['saleVariant']) && count($post['saleVariant'])) {
					foreach ($post['saleVariant'] as $vol) {
						ORM::factory('SaleVariantTovar')
								->set('tovar_id', $tovar_id)
								->set('sale_id', $vol)
								->save();
					}
				}

				mail('desbiger@gmail.com', 'Модерация товаров', "Добавлен новый товар на модерацию");
				return true;
			}
			else {
				return $validate;
			}
		}

		public static function Del($tovar_id)
		{

			$tovar        = ORM::factory('Tovar', $tovar_id);
			$sale_varints = ORM::factory('SaleVariantTovar')
					->where('tovar_id', '=', $tovar_id)
					->find_all();
			foreach ($sale_varints as $variant) {
				ORM::factory('SaleVariantTovar', $variant->id)
						->delete();
			}
			if (file_exists(DOCROOT . $tovar->file->path . $tovar->file->file_name) && $tovar->file->file_name) {
				unlink(DOCROOT . $tovar->file->path . $tovar->file->file_name);
				ORM::factory('File', $tovar->file->id)
						->delete();
			}
			ORM::factory('Tovar', $tovar)
					->delete();
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
				$tovar->set('modarate', 0);
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
 