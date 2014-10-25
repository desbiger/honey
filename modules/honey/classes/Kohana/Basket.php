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
			return ORM::factory('Basket')
					->set('tovar_id', $tovar_id)
					->set('quantity', $quantity)
					->set('session_id', $session)
					->save();
		}

	}
 