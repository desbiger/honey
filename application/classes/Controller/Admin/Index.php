<?php defined('SYSPATH') or die('No direct script access.');

	class Controller_Admin_Index extends Controller_Admin_Base
	{
		public function action_index()
		{
//


			$template = 'moderate_list';
			if ($_POST) {
				foreach ($_POST as $key => $vol) {
					if (preg_match("|accept_([0-9]+)|", $key, $id)) {
						$id = $id[1];
						ORM::factory('Tovar', $id)
								->set('modarate', 1)
								->save();
					}
					if (preg_match("|decept_([0-9]+)|", $key, $id)) {
						$id = $id[1];
						ORM::factory('Tovar', $id)
								->set('modarate', 0)
								->save();
					}
				}
				$this->redirect('admin/');
			}
			if ($action = $this->request->param('id1')) {
				switch ($action) {
					case "accepted":
						$template = 'ACCEPTED_list';
						break;
					default:
						$template = 'moderate_list';
						break;
				}
			}
			$this->template->content = View::factory('admin/index_page/WIGETS/top_menu') . View::factory('admin/index_page/'.$template);
		}

		public function action_login()
		{
			if ($_POST) {
				Auth::instance()
						->login($_REQUEST['name'], $_REQUEST['pass'], true);
				if (Auth::instance()
						->logged_in('admin')
				) {
					$this->redirect('admin');
				};
			}
			$this->template->title     = 'Авторизируйтесь';
			$this->template->left_menu = '';
			$this->template->content   = View::factory('admin/wigets/login_form');
		}

		public function action_exit()
		{
			Auth::instance()
					->logout();
			$this->redirect('admin');
		}

	}