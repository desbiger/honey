<?

	class Kohana_Basket
	{
		public static function GetList($session_id)
		{
			return ORM::factory('Basket')
					->where('session_id', '=', $session_id)
					->find_all();
		}

		public static function Add($tovar_id, $session, $quantity)
		{
			$tovar_in_basket = ORM::factory('Basket')
					->where('tovar_id', '=', $tovar_id)
					->where('session_id', '=', $session)->find();
			if ($tovar_in_basket->id
			) {
				$tovar_quantity = $tovar_in_basket->quantity;
				return $tovar_in_basket->set('quantity', $tovar_quantity+1)
						->save();
			}
			else {
				return ORM::factory('Basket')
						->set('tovar_id', $tovar_id)
						->set('quantity', $quantity)
						->set('session_id', $session)
						->save();

			}
		}

	}
 