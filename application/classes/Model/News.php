<?php defined('SYSPATH') or die('No direct script access.');

    class Model_News extends ORM
    {
	    protected $_table_name = 'news';
	    protected $_belongs_to = array(
		    'file' => array(
			    'model'=>'File',
				    'foreign_key'=>'picture'
		    )
	    );
    }