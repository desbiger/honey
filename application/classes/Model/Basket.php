<?php defined('SYSPATH') or die('No direct script access.');

	class Model_Basket extends ORM
	{
		protected $_table_name = 'basket';
		protected $_belongs_to = array(
				'tovar' => array(
						'model' => 'Tovar',
						'foreign_key' => 'tovar_id'
				)
		);
	}