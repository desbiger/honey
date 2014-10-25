<?php defined('SYSPATH') or die('No direct script access.');

	class Controller_Admin_Tech extends Controller_Admin_Base
	{
		public function action_index()
		{
			$this->template->content = View::factory('admin/tech/list');
		}

		public function action_theme()
		{
			if ($id = $this->request->param('id1')) {
				if ($_POST) {
					$my_id   = ORM::factory('Client')
							->where('user_id', '=', Auth::instance()
									->get_user())
							->find()->id;
					$message = ORM::factory('Message')
							->set('text', $_POST['text'])
							->set('date_create', date('Y-m-d'))
							->set('theme_id', $id)
							->set('from', $my_id)
							->save();
					$this->redirect('admin/tech/theme/' . $id);
				}
				$this->template->content = View::factory('admin/tech/theme')
						->bind('id', $id);
			}
		}
	}