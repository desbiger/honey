<?php defined('SYSPATH') or die('No direct script access.');

	class Controller_Admin_News extends Controller_Admin_Base
	{
		public function action_index()
		{
			$this->template->content = View::factory('admin/news/News_List');
		}

		public function action_add()
		{
			if ($_POST) {
				$news = ORM::factory('News');
				$news->set('name', Arr::get($_POST, 'name'));
				$news->set('preview_text', Arr::get($_POST, 'preview_text'));
				$news->set('detail_text', Arr::get($_POST, 'detail_text'));
				$news->set('date_create', Arr::get($_POST, 'date_create'));
				$news->save();

				$this->redirect('/admin/news');
			}
			$this->template->content = View::factory('admin/news/add_form');
		}

		public function action_edit()
		{

			if ($id = $this->request->param('id1')) {
				if ($_POST) {
					$news = ORM::factory('News', $id);
					if ($_FILES) {
						if ($picture = Hfile::Upload($_FILES['picture'])) {
							$news->set('picture', $picture);
						}
					}
					$news->set('name', $_POST['name']);
					$news->set('preview_text', $_POST['preview_text']);
					$news->set('detail_text', $_POST['detail_text']);
					$news->set('date_create', $_POST['date_create']);
					$news->save();

					$this->redirect('/admin/news');
				}
				$news                    = ORM::factory('News', $id);
				$this->template->content = View::factory('admin/news/edit_form')
						->bind('news', $news);
			}
		}
	}