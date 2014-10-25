<?php defined('SYSPATH') or die('No direct script access.');

	class Controller_Public_Ajax_Gallery extends Controller_Public_Ajax_Ajax
	{

		public function action_index()
		{

		}

		public function action_add_photo()
		{
			if ($_FILES) {
				$gallery_id              = Arr::get($_POST, 'gallery_id');
				$id                      = Hfile::Upload($_FILES['photo']);
				$this->template->content = $id;
			}
			$this->template->content = "<pre>".print_r($_REQUEST,true)."</pre>";
		}
	}