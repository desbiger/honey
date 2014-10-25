<?php defined('SYSPATH') or die('No direct script access.');

	class Model_SaleVariantTovar extends ORM
	{
		protected $_table_name = 'sale_variants_tovars';

		protected $_belongs_to = array(
			'tovar' => array(
				'model' => 'Tovar'
			),
			'sale_variant' => array(
				'model' => 'SaleVariant',
				'foreign_key' => 'sale_id'
			),
		);
	}