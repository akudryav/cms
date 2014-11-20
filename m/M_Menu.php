<?phpclass M_Menu extends Model{	private static $instance;	// экземпляр класса	public static function Instance()	{		if (self::$instance == null)			self::$instance = new M_Menu();					return self::$instance;	}		public function __construct(){		parent::__construct('menu', 'id_menu');	}	public function all()	{		return $this->db->Select("SELECT * FROM menu");	}		public function getTopMenu()	{		// return $this->db->Select("SELECT * FROM pages WHERE id_parent = '0' AND is_show='1'");		return $this->getWithPages(MAIN_MENU_ID);	}		public function get($id)	{		$id = (int)$id;		$res = $this->db->Select("SELECT * FROM menu WHERE id_menu = '$id'");		$menu = $res[0];				$pages = $this->db->Select("SELECT id_page FROM menu_pages WHERE id_menu = '{$menu['id_menu']}'");		$arr = array();				foreach($pages as $page)			$arr[] = $page['id_page'];				$menu['pages'] = $arr;		return $menu;	}		public function getWithPages($id)	{		$id = (int)$id;		$lang = I18n::language();		return $this->db->Select("SELECT * FROM menu_pages								 JOIN pages using(id_page)								 LEFT JOIN i18n using(id_page)								 WHERE menu_pages.id_menu = '$id' AND id_lang = '$lang' ORDER BY num_sort ASC");	}		public function add($fields)	{		$id_menu = parent::add($fields);				if($id_menu === false)			return false;					$obj = array('id_menu' => $id_menu);		$pages = explode(',', $fields['pages']);		for($i = 0; $i < count($pages); $i++)		{			$obj['id_page'] = $pages[$i];			$obj['num_sort'] = $i;			$this->db->Insert('menu_pages', $obj);		}				return $id_menu;	}		public function edit($id_menu, $fields)	{		$id_menu = (int)$id_menu;			if(!parent::edit($id_menu, $fields))			return false;		$where = "id_menu = '$id_menu'";		$this->db->Delete('menu_pages', $where);				$obj = array('id_menu' => $id_menu);		$pages = explode(',', $fields['pages']);		for($i = 0; $i < count($pages); $i++)		{			$obj['id_page'] = $pages[$i];			$obj['num_sort'] = $i;			$this->db->Insert('menu_pages', $obj);		}				return true;	}		public function sorting($id_menu, $pages)	{		$pages = explode(',', $pages);		$obj = array();				for($i = 0; $i < count($pages); $i++)		{			$id_page = (int)$pages[$i];			$where = "id_menu='$id_menu' AND id_page='$id_page'";			$obj['num_sort'] = $i;			$this->db->Update('menu_pages', $obj, $where);		}				Cache::mb_clear($this->table);		return true;	}		public function is_active($url, $url_page)	{		if(strpos($url, $url_page) === 0)		{			$symb = substr($url, strlen($url_page), 1);			if($symb === false || $symb == '/')				return true;		}		return false;	}}