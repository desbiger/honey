<?php defined('SYSPATH') or die('No direct script access.');

	class Controller_Public_Pay extends Controller_Template
	{
		public function before()
		{
			$this->template = View::factory('clear');
		}

		public function action_index()
		{

		}

		public function action_result()
		{

		}

		public function action_minuspay()
		{
			if(Arr::get($_GET,'pass') == '3455464'){
				$balans = ORM::factory('Money')
						->find_all();
				foreach ($balans as $b) {
					if ($b->summa >= 20) {
						$curent = ORM::factory('Money', $b->id)
								->set('summa', $b->summa - 20)
								->save();
					}
				}
			}

		}
	}