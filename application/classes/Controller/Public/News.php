<?php defined('SYSPATH') or die('No direct script access.');
    class Controller_Public_News extends Controller_Public_Base
    {
        public function action_index(){
	        $id = $this->request->param('id');
	        $news = ORM::factory('News',$id);
	        $this->template->title = $news->name;
	        $this->template->content = View::factory('public/news/detail',array('news'=>$news));
        }

    }