<?

	abstract class Kohana_Huser
	{

		public static function UpdateClient($array)
		{
			$user   = Auth::instance()
					->get_user();
			$client = ORM::factory('Client')
					->where('user_id', '=', $user->id)
					->find();

			$columns = $client->list_columns();

			foreach ($array as $k => $v) {
				if (key_exists($k, $columns)) {
					$client->set($k, $v);
				}
			}
			return $client->update();
		}

		public static function SummarInfo()
		{
			$tovar_result = array();
			$user    = Auth::instance()
					->get_user();
			$user_id = $user->id;
			$client  = ORM::factory('Client')
					->where('user_id', '=', $user_id)
					->find();
			$money   = ORM::factory('Money')
					->where('user_id', '=', $client->id)
					->find();
			$tovars  = ORM::factory('Tovar')
					->where('client_id', "=", $client->id)
					->find_all();
			if ($tovars->count() > 0) {
				foreach ($tovars as $t) {
					$tovar_result[] = $t->as_array();
				}
			}
			if (!$money->loaded()) {
				ORM::factory('Money')
						->set('user_id', $client->id)
						->set('summa', '0')
						->save();
				$money = ORM::factory('Money')
						->where('user_id', '=', $client->id)
						->find();
			}
			return array(
					'tovars' => $tovar_result,
					'client' => $client,
					'money' => $money->as_array(),
					'user' => $user->as_array()
			);

		}

		public static function UpdateSaleVariants($array, $user_id)
		{
			$client    = ORM::factory('Client')
					->where('user_id', "=", $user_id)
					->find();
			$client_id = $client->id;

			$variants = ORM::factory('SaleVariantClient')
					->where('client_id', "=", $client_id)
					->find_all();
			foreach ($variants as $v) {
				ORM::factory('SaleVariantClient', $v->id)
						->delete();
			}
			if (count($array) > 0) {
				foreach ($array as $a) {
					$model = ORM::factory('SaleVariantClient');
					$model->values(array(
							'client_id' => $client_id,
							'sale_id' => $a
					))
							->save();
				}
			}

		}

		public static function UpdateDeleveryVariants($array, $user_id)
		{
			$client           = ORM::factory('Client')
					->where('user_id', "=", $user_id)
					->find();
			$client_id        = $client->id;
			$deleveryVariants = ORM::factory('DeleveryVariant')
					->where('client_id', '=', $client_id)
					->find_all();
			foreach ($deleveryVariants as $d) {
				ORM::factory('DeleveryVariant', $d->id)
						->delete();
			}
			if (count($array) > 0) {
				foreach ($array as $a) {
					ORM::factory('DeleveryVariant')
							->values(array(
									'client_id' => $client_id,
									'delevery_id' => $a
							))
							->save();
				}
			}
		}

		public static function GetSaleVariantsUser($user_id)
		{
			$result    = array();
			$client_id = ORM::factory('Client')
					->where('user_id', "=", $user_id)
					->find()->id;
			$values    = ORM::factory('SaleVariantClient')
					->where('client_id', '=', $client_id)
					->find_all();
			foreach ($values as $v) {
				$result[] = $v->sale_id;
			}
			return $result;
		}

		public static function GetDeleveryVariantsUser($user_id)
		{
			$result    = array();
			$client_id = ORM::factory('Client')
					->where('user_id', "=", $user_id)
					->find()->id;
			$values    = ORM::factory('DeleveryVariant')
					->where('client_id', '=', $client_id)
					->find_all();
			foreach ($values as $v) {
				$result[] = $v->delevery_id;
			}
			return $result;
		}

		public static function CheckSaleVariant($user_id, $value)
		{
			$array = self::GetSaleVariantsUser($user_id);
			return in_array($value, $array) ? true : false;
		}

		public static function CheckdeleveryVariant($user_id, $value)
		{
			$array = self::GetDeleveryVariantsUser($user_id);
			return in_array($value, $array) ? true : false;
		}
	}
 