<?

	class Kohana_Service
	{

		static function Activate($services)
		{
			$client_id = ORM::factory('Client')
					->where('user_id', "=", Auth::instance()
							->get_user()->id)
					->find();
			$activated = ORM::factory('ServiceUsers')
					->where('client_id', '=', $client_id)
					->find();
			if ($activated->loaded()) {
				foreach ($activated as $vol) {
					ORM::factory('ServiceUsers', $vol->id)
							->delete();
				}
			}
			foreach ($services as $value) {
				$service    = ORM::factory('Services', $value);
				$days       = $service->lenght_days;
				$final_date = self::DateChange($days);
				ORM::factory('ServiceUsers')
						->set('active_from', Date::formatted_time())
						->set('active_to', $final_date)
						->set('service_id', $value)
						->set('client_id', $client_id)
						->save();
			}
		}

		static function DateChange($days = null, $minutes = null)
		{
			$string = '';
			$string .= $days ? "{$days} days" : "";
			$string .= $minutes ? "{$minutes} minutes" : "";
			return Date::formatted_time("now + {$string}");
		}

		static function GetServicesForCurrentUser()
		{
			$client_id = ORM::factory('Client')
					->where('user_id', "=", Auth::instance()
							->get_user()->id)
					->find();
			return ORM::factory('ServiceUsers')
					->where('client_id', '=', $client_id)
					->group_by('service_id')
					->find_all();
		}

	}
 