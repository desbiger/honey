<?php defined('SYSPATH') or die('No direct script access.');

	class Model_Money extends ORM
	{
		protected $_table_name = "ballans";
		protected $_belongs_to = array(
				'client' => array(
						'model' => 'Client',
						'foreign_key' => 'user_id'
				)
		);

	}