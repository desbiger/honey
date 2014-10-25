<?php defined('SYSPATH') or die('No direct script access.');

	class Controller_Public_Catalog extends Controller_Public_Base
	{
		public function action_index()
		{
			$section_id = $this->request->param('section_id');
			$element_id = $this->request->param('element_id');


			$session = Session::instance()
					->id();
			if (Arr::get($_POST, 'submit') == 'В боченок') {
				$tovar  = ORM::factory('Tovar', $element_id);
				$min_by = $tovar->min_weight ? $tovar->min_weight : 1;
				Basket::Add($element_id, $session, $min_by);
				$this->redirect('/catalog/'.$section_id.'/'.$element_id);
			}

			$section_name          = ORM::factory('Section', $section_id)->name;
			$this->template->title = $section_name . " мёд";


			if (!$element_id) {
				$this->template->content = View::factory('public/catalog/section_list')
						->bind('section_name', $section_name)
						->bind('section_id', $section_id);
			}
			else {
				$tovar                   = ORM::factory('Tovar', $this->request->param('element_id'));
				$this->template->content = View::factory('/public/catalog/tovar_detail')
						->bind('tovar', $tovar);
			}
		}

		public function action_detail()
		{

		}
	}