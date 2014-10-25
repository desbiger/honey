<?php defined('SYSPATH') or die('No direct script access.');

	class Controller_Public_Index extends Controller_Public_Base
	{
		public function action_index()
		{

			$news = ORM::factory('News')
					->order_by('date_create', 'DESC')
					->order_by('id', 'DESC')
					->limit(1)
					->find_all();
			//			echo "<pre>";
			//			print_r($news[0]);
			$this->template->slider = View::factory('public/wigets/slider_on_index');
			$this->template->content .= "<h2>Последняя новость</h2>" . View::factory('public/news/detail')
							->bind('news', $news[0]);
			//			$this->template->content .= View::factory('/public/wigets/about_as');
		}

		public function action_about()
		{
			$this->template->title       = 'О проекте';
			$this->template->description = 'Добро пожаловать на сайт - интернет магазин мёда. Это первый ресурс в интернете, в котором каждый пасечник сможет иметь свой собственный интернет магазин без огромных денежных затрат. Вы просто регистрируетесь на сайте и с этого момента Вы можете продавать мёд.';
			$this->template->content     = View::factory('public/wigets/about_as');
		}

		public function action_contacts()
		{
			$this->template->title   = 'Контакты';
			$this->template->content = View::factory('global/contacts');

		}

		public function action_honey()
		{
			$this->template->title = 'Каталог мёда';

		}


		public function action_bee()
		{
			$this->template->title = 'Наши пчелы';
		}

		public static function unique($value, $model_name, $field)
		{
			$values = ORM::factory($model_name)
					->find_all();
			foreach ($values as $vol) {
				$array[] = $vol->$field;
			}
			if (in_array($value, $array)) {
				return false;
			}
			else {
				return true;
			}
		}

		public function action_basket()
		{
			if ($_POST && $_POST['sub'] == 'Обновить') {
				foreach ($_POST as $key => $vol) {
					if (preg_match("|(quantity)_([0-9]+)$|", $key, $match)) {
						$basket_record = ORM::factory('Basket', $match[2]);
						$tovar         = ORM::factory('Tovar', $basket_record->tovar_id);
						if ($tovar->min_weight <= $vol || $tovar->min_weight == '') {
							ORM::factory('Basket', $basket_record)
									->set('quantity', $vol)
									->save();
						}
					}
					if (isset($_POST['tovar_del']) && count($_POST['tovar_del'])) {
						foreach ($_POST['tovar_del'] as $v) {
							$basket = ORM::factory('Basket', $v);
							if ($basket->loaded()) {
								$basket->delete();
							}
						}
					}
				}
				$this->redirect('/basket');
			}
			elseif ($_POST && $_POST['sub'] == 'Оформить заказ') {
				$this->redirect('/order');
			}

			$this->template->title   = 'Ваш боченок';
			$this->template->content = View::factory('public/wigets/basket');

		}

		public function action_order()
		{
			$errors = array();
			if ($_POST) {
				echo "<pre>";
				//				print_r($_POST);
				echo "</pre>";

				$valid = Validation::factory($_POST);
				$valid->rule('client_name', 'not_empty');
				$valid->label('client_name', 'Имя');
				$valid->rule('phone', 'not_empty');
				$valid->rule('phone', 'phone');
				$valid->label('phone', 'Контактный телефон');
				$valid->rule('client_email', 'not_empty');
				$valid->rule('client_email', 'email');
				$valid->label('client_email', 'email');

				if ($valid->check()) {
					foreach ($_POST['order'] as $key => $vol) {
						$order_id = ORM::factory('Order')
								->set('client_id', $key)
								->set('delevery_id', $vol['delevery'])
								->set('name', $_POST['client_name'])
								->set('first_name', $_POST['client_firstname'])
								->set('description', $_POST['client_adress'])
								->set('phone', $_POST['phone'])
								->set('email', $_POST['client_email'])
								->set('adress', $_POST['client_adress'])
								->set('date_create', date('Y-m-d'))
								->set('status_id', 1)
								->save();
						foreach ($vol['tovars'] as $k => $t) {
							$tovar = ORM::factory('Tovar', $k);
							ORM::factory('OrderTovar')
									->set('tovar_id', $k)
									->set('quantity', $t)
									->set('price', $t * $tovar->price)
									->set('order_id', $order_id)
									->save();
						}
					}
					$basket = ORM::factory('Basket')
							->where('session_id', '=', Session::instance()
									->id())
							->find_all();
					foreach ($basket as $bas) {
						ORM::factory('Basket', $bas->id)
								->delete();
					}
					$this->redirect('/orderfinish/');
				}
				else {
					$errors = $valid->errors('validation');
				}
			}
			$this->template->title   = 'Заказать мёд';
			$this->template->content = View::factory('public/order/step1')
					->bind('errors', $errors);
		}

		public function action_orderfinish()
		{
			$this->template->content = 'Спасибо за заказ. В ближайшее время с Вами свяжутся продавцы меда';

		}


		public function action_images()
		{
			$deleted   = array();
			$exist     = array();
			$files     = ORM::factory('File')
					->find_all();
			$dir_files = scandir(DOCROOT . '/uploads/images/');
			foreach ($files as $vol) {
				$result[] = Hfile::GetFileNameByID($vol->id);
			}
			foreach ($dir_files as $f) {
				if ($f != '.' && $f != '..') {
					foreach ($result as $name) {
						if (preg_match("|{$name}[0-9]*_[0-9]*\.[a-zA-Z]{3}|", $f)) {
							echo $f . "<br>";
							$exist[] = $f;
						}
					}
				}
			}
			foreach ($dir_files as $f) {
				if (!in_array($f, $exist) && $f != '.' && $f != '..') {
					$deleted[] = $f;
					unlink(DOCROOT . "/uploads/images/{$f}");
				}
			}

			echo "<pre>";
			//			print_r($result);
			//			print_r($dir_files);
			print_r($deleted);
			echo "</pre>";
		}


		public function action_register()
		{

			$this->template->title = 'Регистрация пасечника';
			if ($_POST) {

				$valid = Validation::factory($_POST);
				$valid->rule('code', 'Controller_Public_Index::unique', array(
						':value',
						'Client',
						'code'
				));
				$valid->rule('code', 'Controller_Public_Index::CodeFormat', array(':value'));
				$valid->rule('code', 'not_empty');
				$valid->rule('password', 'not_empty');
				$valid->rule('password', 'min_length', array(
						':value',
						6
				));
				$valid->rule('name', 'not_empty');
				$valid->rule('email', 'email');
				$valid->rule('email', 'not_empty');
				$valid->rule('email', 'Controller_Public_Index::unique', array(
						':value',
						'User',
						'email'
				));

				if ($valid->check()) {
					$errors = array();
					$model  = ORM::factory('User');
					$model->set('username', $_POST['login']);
					$model->set('password', $_POST['password']);
					$model->set('email', $_POST['email']);
					$user_id = $model->save();

					$model->add('roles', ORM::factory('Role')
							->where('name', '=', 'login')
							->find());
					$client = ORM::factory('Client');
					$client->values(array(
							'user_id' => $user_id,
							'name' => $_POST['name'],
							'about' => $_POST['about'],
							'code' => $_POST['code'],
							'phone' => $_POST['phone'],
							'date_create' => date('Y-m-d'),
							'active' => 1
					));
					$client->save();
					if ($_FILES['logo']['size']) {
						$new_photo = Hfile::Upload($_FILES['logo']);
						ORM::factory('Client')
								->where('user_id', '=', $user_id)
								->find()
								->set('logo', $new_photo)
								->save();
					}

					$this->redirect('/client/' . $_POST['code']);
				}
				else {
					$errors = $valid->errors('validation');
				}
			}
			if (Auth::instance()
					->logged_in('login')
			) {
				$auth_user = Auth::instance()
						->get_user();
				$user_id   = $auth_user->id;
				$client    = ORM::factory('Client')
						->where('user_id', "=", $user_id)
						->find()
						->as_array();

				if ($client['logo']) {
					$client['logo_big'] = Hfile::GetImageByID($client['logo']);
					$client['logo']     = Hfile::GetImageByID($client['logo'], '100_100');
				}

				$this->template->content = View::factory('public/user/user_edit_form')
						->bind('user', $client)
						->bind('errors', $errors);
			}
			else {
				$this->template->content = View::factory('public/user/register')
						->bind('errors', $errors);
			}
		}

		public function action_search()
		{
			$this->template->title = 'Результат поиска';

			if (isset($_REQUEST['search_text'])) {
				$res = DB::query(Database::SELECT, "SELECT clients.*, MATCH(`about`) AGAINST('" . $_REQUEST['search_text'] . "')  AS Relevance
							   FROM
							`clients`
							WHERE MATCH(`about`) AGAINST('" . $_REQUEST['search_text'] . "')
							ORDER BY Relevance DESC")
						->as_assoc()
						->execute();

				$this->template->content = View::factory('public/search/search_result')
						->bind('res', $res);
			}
			else {
				$this->template->content = "";
			}


		}

		static function CodeFormat($values)
		{
			if (preg_match("|^[-_a-zA-Z0-9]+$|", $values)) {
				return true;
			}
			else {
				return false;
			}
		}

	}