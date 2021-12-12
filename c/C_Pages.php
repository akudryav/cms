<?php//// Конттроллер страниц.//class C_Pages extends C_Admin_Base{	public function before(){		parent::before();	}		public function action_index(){		$this->title .= ' :: Страницы';		$map = M_Pages::Instance()->make_tree();		$this->content = $this->Template('pages/v_all.php', array('map' => $map));		}		//	// Список страниц	//	public function action_all()	{		$this->title .= ' :: Страницы';				// получение номера страницы		$page_num = isset($this->params[2]) ? (int)$this->params[2] : 1;				// создание объекта постраничной навигации (обязательные параметры)		$mPagination = new Pagination('pages', '/pages/all/');		// задание свойств объекта		$lang = I18n::language();		$pages = $mPagination->on_page(10)->page_num($page_num)->left_join('i18n using(id_page)')							 ->where("i18n.is_show != '2' AND id_lang = '$lang'")->page();		// получение html-кода панели навигации		$navbar = $this->Template('v_navbar.php', array('navparams' => $mPagination->navparams()));				// формирование контента страницы		$this->content = $this->Template('pages/v_alllist.php', array('pages' => $pages,																	   'navparams' => $mPagination->navparams(),																	   'navbar' => $navbar));	}		public function action_add(){		$this->title .= ' :: Страницы';		$this->scripts[] = 'ckeditor/ckeditor';		$this->scripts[] = 'ck_init';		$fields = array(			'url' => '',			'title' => '',			'title_in_menu' => '',			'keywords' => '',			'id_menu' => 0,			'description' => '',			'content' => '',			'id_base_template' => 0,			'id_template' => 0,			'is_show' => 1,		);		$mPages = M_Pages::Instance();		$messages = array(); 				if($this->isPost())		{			if($mPages->add($_POST))				$this->redirect('/pages');			$fields = $_POST;			$messages = $mPages->errors();		}				$this->content = $this->Template('pages/v_add.php', array('messages' => $messages, 'fields' => $fields,						'map' => $mPages->make_tree(), 'base_templates' => M_Templates::Instance()->getByFieldset(array('ttype' => '0')),						 'templates' => M_Templates::Instance()->getByFieldset(array('ttype' => '1')), 'menu' => M_Menu::Instance()->all()));			}		public function action_edit(){		$this->title .= ' :: Страницы';		$this->scripts[] = 'ckeditor/ckeditor';		$this->scripts[] = 'ck_init';		$this->scripts[] = 'sortable';		$mPages = M_Pages::Instance();		$messages = array(); 				if($this->isPost())		{			if($mPages->edit($this->params[2], $_POST))				$this->redirect('/pages');			$fields = $_POST;			$messages = $mPages->errors();		}		else			$fields = $mPages->get($this->params[2]);				$this->content = $this->Template('pages/v_edit.php', array('id' => $this->params[2], 'messages' => $messages, 		// id - для того чтобы сделать в select при выборе раздела, поле соответствующее этой же странице сделать disabled 									'fields' => $fields, 'map' => $mPages->make_tree(), 									'base_templates' => M_Templates::Instance()->getByFieldset(array('ttype' => '0')),									'templates' => M_Templates::Instance()->getByFieldset(array('ttype' => '1')),									'children' => $mPages->getByParent($this->params[2]),									'menu' => M_Menu::Instance()->all()));				}	public function action_delete(){		if($this->IsGet() && M_Users::Instance()->Can('ALL'))            M_Pages::Instance()->delete($this->params[2]);			        $this->redirect($_SERVER['HTTP_REFERER']); // т.к. удалять можем на разных страницах    }    public function action_remove(){        if($this->IsGet())        {            M_Pages::Instance()->remove($this->params[2]);            $this->redirect($_SERVER['HTTP_REFERER']); // т.к. удалять можем на разных страницах        }    }    public function action_restore(){        if($this->IsGet())        {            M_Pages::Instance()->restore($this->params[2]);            $this->redirect($_SERVER['HTTP_REFERER']); // т.к. удалять можем на разных страницах        }    }}