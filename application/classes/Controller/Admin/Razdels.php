<?php defined('SYSPATH') or die('No direct script access.');

	class Controller_Admin_Razdels extends Controller_Admin_Base
	{
		public function action_index()
		{
			$this->template->content = View::factory('admin/Catalog/Razdels/razdels_list');
		}
	}