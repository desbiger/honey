<?php defined('SYSPATH') or die('No direct script access.');

	class Controller_Admin_Pasechniki extends Controller_Admin_Base
	{
		public function action_index()
		{
			//	        echo "<pre>".print_r($_REQUEST,true)."</pre>";
			$this->template->content = View::factory('admin/pasechniki/list');
		}

		public function action_edit()
		{
			if ($id = $this->request->param('id1')) {

				if (!ORM::factory('Money')
						->where('user_id', '=', $id)
						->find()
						->loaded()
				) {
					ORM::factory('Money')
							->set('user_id', $id)
							->set('summa', 0)
							->save();
				}

				$client = ORM::factory('Client', $id);
				if ($_POST) {
					$client->set('name', Arr::get($_POST, 'name'));
					$client->set('phone', Arr::get($_POST, 'phone'));
					$client->set('about', Arr::get($_POST, 'about'));
					$client->set('code', Arr::get($_POST, 'code'));
					if (!isset($_POST['active'])) {
						$client->set('active', 0);
					}
					else {
						$client->set('active', 1);
					}


					$balans = ORM::factory('Money')
							->where('user_id', '=', $client->id)
							->find();
					$balans->set('summa', Arr::get($_POST, 'balans'))
							->save();
					$client->save();
				}


				$this->template->content = View::factory('admin/pasechniki/edit')
						->bind('client', $client);
			}
		}
	}