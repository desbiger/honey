<?

	class Kohana_Honey
	{

		static public function ObjArrayToSelectArray($array, $key_id, $key_vol)
		{
			$result   = array();
			$result[] = '----------';
			foreach ($array as $vol) {
				$result[$vol->$key_id] = $vol->$key_vol;
			}
			return $result;
		}

		static public function CheckSelect($name, $value,$is_array = true)
		{
			$val = Arr::get($_POST, $name);
			if(!$is_array){
				return $value == $val ? true : false;
			}else{
				return is_array($val) && in_array($value,$val)  ? true : false;
			}
		}

		static public function MyClientID()
		{
			if ($user_id = Auth::instance()
					->get_user()
			) {
				return ORM::factory('Client')
						->where('user_id', '=', $user_id)
						->find()->id;
			}
			else {
				return false;
			}

		}

	}
 