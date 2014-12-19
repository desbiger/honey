<?

	class Task_Billing extends Minion_Task
	{
		protected function _execute(array $params)
		{
			print_r(Billing::factory()->EveryDay());
		}
	}
 