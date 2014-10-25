<?php defined('SYSPATH') or die('No direct script access.');

	class Controller_Public_Base extends Controller_Template
	{
		public function before()
		{
			$this->template = View::factory('public/index');

			$this->template->keywords = 'Ярмарка меда, Курск, Пасека, Пасечник, Курский мед';
			$this->template->description = 'Курский мед. Первая Курская интернет ярмарка меда.';
			$section_id                  = $this->request->param('section_id') ? $this->request->param('section_id') : '';
			$this->template->title       = 'Ярмарка меда';
			$this->template->login_form  = View::factory('public/user/login_form');
			$this->template->content     = View::factory('public/catalog/sale_hits')
					->bind('section_id', $section_id);
			$this->template->top_menu    = View::factory('public/wigets/top_menu');
			$this->template->left_menu   = View::factory('public/wigets/left_menu')->bind('curent_razdel',$section_id);
			$this->template->news_list   = View::factory('public/news/news_list');
			$this->template->slider      = '';
			$this->template->menu_bottom = View::factory('public/wigets/bottom_menu');
		}
	}