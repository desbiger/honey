<?

	class Kohana_Paginator
	{
		protected $count;
		protected $current;
		protected $per_page;

		static function instance()
		{
			return new self;
		}

		public function Generate($template = 'modern')
		{
			 $pages = floor($this->count / $this->per_page);
			if (($this->count - ($pages * $this->per_page)) > 0) {
				 $pages =  $pages+1;
			}
			return View::factory('global/pagination/' . $template)
					->bind('pages', $pages);
		}

		public function Count($val)
		{
			$this->count = $val;
			return $this;
		}

		public function Current($val)
		{

			$this->current = $val;
			return $this;
		}

		public function PerPage($val)
		{
			$this->per_page = $val;
			return $this;
		}

	}
 