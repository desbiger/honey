<?

	class Kohana_Billing
	{
		protected $pay_per_day = 30;

		static function factory()
		{
			return new Billing();
		}

		function EveryDay()
		{
			$users = ORM::factory('Money')
					->with('client')
					->where('active', '=', 1)
					->find_all();
			foreach ($users as $vol) {
				$summa = $vol->summa;
				if ($summa > $this->pay_per_day) {
					ORM::factory('Money', $vol->id)
							->set('summa', $summa - $this->pay_per_day)
							->save();
				}
				else {
					ORM::factory('Client', $vol->client->id)
							->set('active', 0)
							->save();
				}
			}
		}
	}
 