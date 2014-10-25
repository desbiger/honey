<?php defined('SYSPATH') or die('No direct script access.');

	class Controller_Public_Ajax_Ajax extends Controller_Template
	{
		public function before()
		{
			$this->template = View::factory('ajax/empty');
			$this->template->content = '123';
		}

		public function action_index()
		{

		}
	}