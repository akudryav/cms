<?php//// Конттроллер страницы чтения.//class C_Auth extends C_Base{	public function action_login(){		if (isset($_SERVER['HTTP_REFERER']) && strpos($_SERVER['HTTP_REFERER'], 'login') === false){			Session::push('org_referer', $_SERVER['HTTP_REFERER']);		}					$this->title .= '::Авторизация';		$this->adminlink = false;				$mUsers = M_Users::Instance();		$mUsers->Logout();				if($this->isPost())		{			if($mUsers->Login($_POST['login'], $_POST['password'], isset($_POST['remember']))) {				$url = Session::has('org_referer') ? Session::slice('org_referer') : '/pages'; 				$this->redirect($url);			}						} 		$this->content = $this->Template('v_login.php');		}}