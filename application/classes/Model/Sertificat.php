<?php defined('SYSPATH') or die('No direct script access.');

    class Model_Sertificat extends ORM
    {
	    protected $_table_name = 'sertificats';
	    protected $_belongs_to = array(
		    'file'=>array(
			    'model' => 'File'
		    )
	    );
    }