<?php defined('SYSPATH') or die('No direct script access.');

	class Controller_Admin_Base extends Controller_Template
	{
		public function before(){
			if(!Auth::instance()->logged_in('admin') && $this->request->action() != 'login'){
				$this->redirect('admin/index/login');
			}
			$this->template = View::factory('admin/index');
			$this->template->content = '';
			$this->template->left_menu = View::factory('admin/wigets/left_menu');
			$this->template->title = 'Панель администрирования';
		}
	}