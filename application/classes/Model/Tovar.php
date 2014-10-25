<?php defined('SYSPATH') or die('No direct script access.');

	class Model_Tovar extends ORM
	{
		protected $_belongs_to = array(
				'file' => array(
						'model' => 'Image',
						'foreign_key' => 'base_photo'
				),
				'client' => array(
						'model' => 'Client',
						'foreign_ley' => 'client_id'
				),
				'section' => array(
						'model' => 'Section'
				)

		);
		protected $_has_many = array(
				'sale' => array(
						'model' => 'SaleVariant',
						'through' => 'sale_variants_tovars'
				)
		);

		public function rules()
		{
			return array(
					'name' => array(
							array('not_empty')
					),
			);
		}

		public function labels()
		{
			return array(
					'name' => 'Название товара'
			);
		}
	}