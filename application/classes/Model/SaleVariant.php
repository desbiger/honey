<?php defined('SYSPATH') or die('No direct script access.');

    class Model_SaleVariant extends ORM
    {
	    protected $_table_name = 'sale_variants';
	    protected $_has_many = array(
	  				'tovars' => array(
	  						'model' => 'Tovar',
	  						'through' => 'sale_variants_tovars'
	  				)
	  		);
    }