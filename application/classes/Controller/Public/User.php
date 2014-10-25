<?php defined('SYSPATH') or die('No direct script access.');

	class Controller_Public_User extends Controller_Public_User_Base
	{
		public function action_index()
		{
			if ($_FILES) {
				$client_id = ORM::factory('Client')
						->where('user_id', '=', Auth::instance()
								->get_user()->id)
						->find();
				$client_id->set('background', Hfile::Upload($_FILES['picture']))
						->save();
				$this->redirect('/user/');
			}
			//			echo "<pre>";
			//			print_r(Huser::SummarInfo());
			//			echo "</pre>";
		}

		public function action_delbackground()
		{
			$user = Auth::instance()
					->get_user();
			//			echo $user->id;
			//			die();
			$client = ORM::factory('Client')
					->where('user_id', '=', $user->id)
					->find();

			ORM::factory('Client', $client->id)
					->set('background', null)
					->save();
			$this->redirect('/user/');
		}

		public function action_sertificats()
		{
			if ($_FILES) {
				$client_id = ORM::factory('Client')
						->where('user_id', '=', Auth::instance()
								->get_user()->id)
						->find()->id;
				$file_id   = Hfile::Upload($_FILES['picture']);
				if (ORM::factory('Sertificat')
						->set('client_id', $client_id)
						->set('file_id', $file_id)
						->set('name', $_POST['name'])
						->save()
				) {
					$this->redirect('/user/sertificats');
				}
			}
			$this->template->content = View::factory('public/user/lk/sertificats/sertificats_list');
		}

		public function action_message()
		{
			if ($_POST) {
				$client_id = ORM::factory('Client')
						->where('user_id', '=', Auth::instance()
								->get_user()->id)
						->find()->id;
				if ($client_id) {
					$theme    = ORM::factory('Theme');
					$theme_id = $theme->set('title', $_POST['title'])
							->set('date_create', date('Y-m-d'))
							->set('author', $client_id)
							->save();
					$message  = ORM::factory('Message');
					$message->set('text', $_POST['text']);
					$message->set('theme_id', $theme_id);
					$message->set('from', $client_id);
					$message->set('date_create', date('Y-m-d'))
							->save();
					if ($message) {
						$this->redirect('user/messages/' . $theme);
					}
				}

			}
			$this->template->content = View::factory('public/user/lk/message/send_form');
		}

		public function action_tech()
		{
			$this->template->content = View::factory('public/user/lk/message/list');
		}

		public function action_messages()
		{

			if ($id = $this->request->param('do')) {
				if ($_POST) {
					$client_id = ORM::factory('Client')
							->where('user_id', '=', Auth::instance()
									->get_user()->id)
							->find()->id;
					$message   = ORM::factory('Message');
					$message->set('text', $_POST['text']);
					$message->set('theme_id', $id);
					$message->set('from', $client_id);
					$message->set('date_create', date('Y-m-d'))
							->save();
					$this->redirect('/user/messages/' . $id);
				}
				$this->template->content = View::factory('public/user/lk/message/theme')
						->bind('id', $id);
			}
		}

		public function action_personaledit()
		{
			$errors           = '';
			$user             = $this->client->as_array();
			$user['logo_big'] = Hfile::GetImageByID($user['logo']);
			if ($user['logo']) {
				$user['logo'] = Hfile::Resize($user['logo'], 100, 100);
			}


			$this->template->content = View::factory('public/user/user_edit_form')
					->bind('user', $user);
			//					->bind('errors', $errors);
		}

		public static function unique($value, $array_obj, $key)
		{
			foreach ($array_obj as $v) {
				$values[] = $v->$key;
			}
			return in_array($value, $values) ? false : true;
		}

		public function action_updateuser()
		{
			if ($_POST) {

				$USER      = Auth::instance()
						->get_user();
				$users_obj = ORM::factory('User')
						->where('id', '!=', $USER->id)
						->find_all();
				$clients   = ORM::factory('Client')
						->where('user_id', '!=', $USER->id)
						->find_all();


				$validation = Validation::factory($_POST);
				$validation->rule('username', 'Controller_Public_User::unique', array(
						':value',
						$users_obj,
						'username'
				));
				$validation->rule('name', 'not_empty');
				$validation->rule('code', 'Controller_Public_User::unique', array(
						':value',
						$clients,
						'code'
				));
				$validation->rule('email', 'Controller_Public_User::unique', array(
						':value',
						$users_obj,
						'email'
				));
				$validation->label('code', 'Адрес вашего сайта');
				$validation->label('email', 'Адрес почты');

				if ($validation->check()) {

					Huser::UpdateClient($_POST);
					if ($_FILES['logo']['size']) {
						$new_photo = Hfile::Upload($_FILES['logo']);
						ORM::factory('Client')
								->where('user_id', '=', $USER->id)
								->find()
								->set('logo', $new_photo)
								->save();
					}

					Huser::UpdateSaleVariants(Arr::get($_POST, 'sale_variants'), $USER->id);
					Huser::UpdateDeleveryVariants(Arr::get($_POST, 'delevery'), $USER->id);
					$this->redirect('/user/personaledit');
				}
				else {
					Cookie::set('validate_errors', serialize($validation->errors('user_update')));
					$this->redirect('/user/personaledit');
					//					print_r($validation->errors('user_update'));
				}


			}

		}

		public function action_shop()
		{
			$this->template->content = View::factory('public/user/lk/shop/edit_shop_page');
		}

		public function action_finans()
		{

		}

		public function action_gallery()
		{
			$this->template->content = View::factory('public/user/lk/gallery/gallery_list');
		}

		public function action_gallery_add()
		{
			$errors = array();
			if ($_POST) {
				$res = Gallery::Add($_POST);
				if (is_bool($res)) {
					$this->redirect('/user/gallery/');
				}
				else {
					$errors = $res;
				};
			}
			$this->template->content = View::factory('public/user/lk/gallery/gallery_add')
					->bind('errors', $errors);

		}

		public function action_services()
		{
			if ($_POST) {
				foreach ($_POST as $key => $vol) {
					if (preg_match("|active_([0-9]+)|", $key, $match)) {
						$services[] = $match[1];
					}
				}
				Service::Activate($services);
			}

			$this->template->content = View::factory('public/user/lk/services/list');

		}

		public function action_products()
		{
			$errors = array();
			if (isset($_POST['sub']) && $_POST['sub'] == 'Добавить') {
				if (is_bool($result = Tovar::Add(Arr::merge($_POST, $_FILES)))) {
					$this->redirect('user/products');
				}
				else {
					$errors = $result->errors('validation');
				}
			}
			elseif (isset($_POST) && $_POST['submit'] = 'Сохранить') {

			}


			$template = 'tovars_list';
			if ($do = $this->request->param('do')) {
				switch ($do) {
					case 'add_new':
						$template = "tovar_add_form";
						$content  = View::factory('public/user/lk/tovars/wigets/' . $template)
								->bind('user', $this->user)
								->bind('client', $this->client)
								->bind('errors', $errors);
						break;
					case 'tovar_edit':
						$template = 'tovar_edit';
						$tovar_id = $this->request->param('id');
						if (isset($_POST['sub'])) {
							$config = Kohana::$config->load('email');
							Email::connect($config);
							Email::send('desbiger@yandex.ru', 'info@honey4all.ru', 'Добавлен товар на модерацию', 'Пришел товар на модерацию после изменений');

							$update_result = Tovar::Update($_POST, $tovar_id);

							if (is_array($update_result)) {

								$errors = $update_result;
							}
							else {

							};
						}

						$tovar   = ORM::factory('Tovar', $tovar_id);
						$content = View::factory('public/user/lk/tovars/wigets/' . $template)
								->bind('tovar', $tovar)
								->bind('user', $this->user)
								->bind('client', $this->client)
								->bind('errors', $errors);
						break;
					case 'del_tovar':
						Tovar::Del(Arr::get($_POST, 'tovar_id'));
						$this->redirect('/user/products');
						break;
					default:

						break;

				}
			}
			else {
				$content = View::factory('public/user/lk/tovars/wigets/' . $template)
						->bind('user', $this->user)
						->bind('client', $this->client)
						->bind('errors', $errors);
			}


			$this->template->content = View::factory('public/user/lk/tovars/tovars_list_edit')

					->bind('content', $content);
		}

		public function action_slider()
		{
			$this->template->content = View::factory('public/user/lk/sliders/sliders_list');
		}

		public function action_slider_add()
		{
			$this->template->content = View::factory('public/user/lk/sliders/slider_add');
		}
	}