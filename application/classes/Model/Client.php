<?php defined('SYSPATH') or die('No direct script access.');

	class Model_Client extends ORM
	{
		protected $_has_many = array(
				'tovars' => array(
						'model' => 'Tovar'
				),
				'delevery' => array(
						'through' => 'delevery_variants'
				),
				'balans' => array(
						'model' => 'Money',
						'foreign_key' => 'user_id'
				)


		);
		protected $_belongs_to = array(
				'city' => array(
						'model' => 'City',
						'foreign_key' => 'city_id',
				),
				'file' => array(
						'model' => 'File',
						'foreign_key' => 'background'
				)

		);
		//		public function rules(){
		//			return array(
		//				'name' => array('not_empty')
		//			);
		//		}

	}