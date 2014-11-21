<?php defined('SYSPATH') or die('No direct script access.');

	class Controller_Rodin extends Controller_Template
	{
		public function before()
		{
			$this->template = View::factory('Rodin_ask');
		}

		public function action_index()
		{
			$name                   = Arr::get($_REQUEST, 'name');
			$this->template->result = $this->Check($name);
		}

		function Check($name)
		{
			$names = array(
					'Александр' => 'Пидар стопудовый',
					'Саша' => 'Пидар стопудовый',
					'Саня' => 'Пидар стопудовый',
					'Сашок' => 'Пидар стопудовый',
					'Родин' => 'Пидар стопудовый',
					'Шурик' => 'Пидар стопудовый',


					'Павел' => 'Святой человек, пидаром быть не может',
					'Паша' => 'Святой человек, пидаром быть не может',
					'Пахан' => 'Святой человек, пидаром быть не может',
					'Павлуша' => 'Святой человек, пидаром быть не может',
					'Павло' => 'Святой человек, пидаром быть не может',
					'Пан' => 'Святой человек, пидаром быть не может',
			);
			if (array_key_exists($name, $names)) {
				return $names[$name];
			}
			elseif (preg_match("|Пав|isU", $name)) {
				return 'Полюбому этот человек не может быть пидаром';
			}
			else {
				return 'Есть подозрение что пидарок в нем сидит';
			}
		}
	}