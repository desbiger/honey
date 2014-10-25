<?php defined('SYSPATH') or die('No direct script access.');

	class Controller_Public_User_Base extends Controller_Template
	{
		public function before()
		{
			if(Auth::instance()->logged_in('login')){

				$this->client = ORM::factory('Client')
						->where('user_id', '=', Auth::instance()
						->get_user()->id)->find();

				$this->user = Auth::instance()->get_user();

				$this->template              = View::factory('public/user/lk/index');
				$this->template->title       = 'Личный кабинет пользователя';
				$section_id                  = 3;
				$this->template->login_form  = View::factory('public/user/login_form');
				$this->template->content     = View::factory('public/user/lk/user_page')
						->bind('user', $this->client);
				$this->template->top_menu    = View::factory('public/wigets/top_menu');
				$this->template->left_menu   = View::factory('public/user/lk/wigets/left_menu');
				$this->template->news_list   = "";
				$this->template->slider      = '';
				$this->template->menu_bottom = View::factory('public/wigets/bottom_menu');

			}else{
				$this->redirect('/register');
			}

		}
	}