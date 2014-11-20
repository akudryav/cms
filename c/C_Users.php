<?php//// Контроллер страниц.//class C_Users extends C_Admin_Base{	//	// Конструктор.	//	public function __construct(){		parent::__construct();	}		public function before(){		parent::before();				if(!M_Users::Instance()->Can('ALL'))			$this->p404();	}		public function action_index(){		$this->action_all();	}		public function action_all()	{		$this->title .= ' :: Пользователи';					$page_num = isset($this->params[2]) ? (int)$this->params[2] : 1;				$mPagination = new Pagination('users', '/users/all/');								  		$users = $mPagination->fields('users.id_user, users.login, users.name, 									  roles.description,privs.description as description_priv')							 ->left_join('roles using(id_role)')							 ->left_join('privs2roles using(id_role)')							 ->left_join('privs using(id_priv)')							 ->on_page(4)->page_num($page_num)->page();							 		$navbar = $this->Template('v_navbar.php', array('navparams' => $mPagination->navparams()));				$this->content = $this->Template('users/v_all.php', array('users' => $users,																  'navparams' => $mPagination->navparams(),																  'navbar' => $navbar));	}		public function action_add(){		$this->title .= ' :: Пользователи';			$mUsers = M_Users::Instance();				$messages = array(); 		$fields = array();		if($this->isPost())		{			if($mUsers->add($_POST))				$this->redirect('/users');							$messages = $mUsers->errors();			$fields = $_POST;		}				$this->content = $this->Template('users/v_add.php',  array('fields' => $fields, 						'messages' => $messages, 'roles' => $mUsers->getRoles()));		}		public function action_edit()	{		$this->title .= ' :: Пользователи';			$mUsers = M_Users::Instance();		$messages = array(); 		$id_user = (int)$this->params[2];				if($this->isPost())		{			if($mUsers->edit($id_user, $_POST))			{				$this->redirect('/users');			}									$messages = $mUsers->errors();			$fields = $_POST;		}		else			$fields = $mUsers->get($id_user);			$this->content = $this->Template('users/v_edit.php',  array('fields' => $fields, 			'messages' => $messages, 'roles' => $mUsers->getRoles()));		}		//	// Удалить пользователя	//	public function action_delete()	{		M_Users::Instance()->delete($this->params[2]);		$this->redirect('/users');	}}