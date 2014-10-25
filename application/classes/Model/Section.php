<?php defined('SYSPATH') or die('No direct script access.');

	class Model_Section extends ORM
	{
		protected $_has_many = array(
				'tovar' => array(
						'model' => 'Tovar',
				)
		);
	}