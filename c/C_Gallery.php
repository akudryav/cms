<?php//// Конттроллер страниц.//class C_Gallery extends C_Admin_Base{	//	// Конструктор.	//	public function __construct(){		parent::__construct();	}		public function before(){		parent::before();	}		public function action_index()	{		$this->title .= ' :: Галереи';				// получение номера страницы		$page_num = isset($this->params[2]) ? (int)$this->params[2] : 1;				// создание объекта постраничной навигации (обязательные параметры)		$mPagination = new Pagination('gallery', '/gallery/index/');		// задание свойств объекта		$pages = $mPagination->on_page(10)->page_num($page_num)->page();				// получение html-кода панели навигации		$navbar = $this->Template('v_navbar.php', array('navparams' => $mPagination->navparams()));				// формирование контента страницы		$this->content = $this->Template('gallery/v_all.php', array('gallery' => $pages,																	  'navparams' => $mPagination->navparams(),																	  'navbar' => $navbar));	}		public function action_add(){		$this->title .= ' :: Галереи';		$mGal = M_Gallery::Instance();		$messages = array(); 				if($this->isPost())		{			if($id_gallery = $mGal->add($_POST))				$this->redirect("/gallery/images/$id_gallery");						$fields = $_POST;			$messages = $mGal->errors();		}				$this->content = $this->Template('gallery/v_add.php', array('fields' => $fields,						'messages' => $messages));			}		//	// Редактирование изображения	//	public function action_edit()	{		$this->title .= ' :: Галереи';		$mImages = M_Images::Instance();		$gallery = M_Gallery::Instance()->get($this->params[3]);		$error = false;				if($this->isPost())		{			if($mImages->edit($this->params[2], $_POST))				$this->redirect("/gallery/images/{$gallery['id_gallery']}");			$fields = $_POST;			$error = true;		}		else			$fields = $mImages->get($this->params[2]);				$this->content = $this->Template('gallery/v_edit.php', array('fields' => $fields,																	 'gallery' => $gallery,																	 'error' => $error));			}		public function action_upload(){		$this->title .= ' :: Галереи';		$this->scripts[] = 'imageuploader';				$id_gallery = isset($this->params[2]) ? (int)$this->params[2] : 1;		$this->content = $this->Template('gallery/v_upload.php', 						array('gallery' => M_Gallery::Instance()->get($id_gallery)));	}		public function action_images(){		$this->title .= ' :: Галереи';		$this->scripts[] = 'image_sort';		$mGallery = M_Gallery::Instance();		$id_gallery = isset($this->params[2]) ? (int)$this->params[2] : 1;				if($this->isPost())		{			$mGallery->delete_image($_POST['id_gallery'], $_POST['id_image']);			$this->redirect("/gallery/images/$id_gallery");		}				$this->content = $this->Template('gallery/v_images.php', 						array('gallery' => $mGallery->get($id_gallery),							'images' => $mGallery->get_images($id_gallery)));	}	public function action_delete()		{			M_Gallery::Instance()->delete_gallery($this->params[2]);			$this->redirect('/gallery');		}}