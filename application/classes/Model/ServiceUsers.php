<?php defined('SYSPATH') or die('No direct script access.');

    class Model_ServiceUsers extends ORM
    {
	    protected $_table_name = 'services_user';
	    protected $_belongs_to = array(
		    'service' => array(
			    'model' => 'Services'
		    )
	    );
    }