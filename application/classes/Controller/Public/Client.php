<?php defined('SYSPATH') or die('No direct script access.');

	class Controller_Public_Client extends Controller_Public_Base
	{
		public function action_index()
		{

			$client_code = $this->request->param('code');
			if ($_FILES) {
				echo Hfile::upload($_FILES['logo']);
			}
			if ($client_code) {
				$client = ORM::factory('Client')
						->where('code', '=', $client_code)
						->find();
				if (($client->loaded() && $client->active) OR (Auth::instance()
										->get_user()->id == $client->user_id)
				) {
					$values                = View::factory('public/client/wigets/client_detail')
							->bind('client', $client);
					$this->template->title = "Пасечник - " . $client->name . ". Персональная страница пасечника";
				}
				else {
					$this->redirect('/client/');
				}

			}
			else {
				$this->template->title = "Список пасечников Курска и Курской области";
				$list                  = ORM::factory('Client')
						->where('active', '=', 1)
						->find_all();
				$values                = View::factory('public/client/wigets/clients_list')
						->bind('list', $list);
			}

			$this->template->content = View::factory('public/client/base_page')
					->bind('content', $values);

		}

		public function action_login()
		{
			//			$this->auto_render = false;
			if ($_POST) {
				if (Auth::instance()
						->login($_POST['login'], $_POST['pass'], true)
				) {
					$this->redirect("/client/" . ORM::factory('Client')
									->where('user_id', '=', Auth::instance()
											->get_user()->id)
									->find()->code);
				}
			}
		}

		public function action_logout()
		{
			Auth::instance()
					->logout();
			$this->redirect('/');
		}
	}
