<?phpclass C_Ajax_Frontedit extends C_Controller{	private $content;		//	// Конструктор.	//	public function __construct(){		$isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND           strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';		if(M_Users::Instance()->Get() == null)			die();			if(!$isAjax)			die('ajax only');		$this->content = '';	}		public function before(){	}		public function render(){		echo $this->content;	}	//	// Pages	//		public function action_savepage(){		$mPages = M_Pages::Instance();		$result = array('errors' => array(), 'res' => '');				if($mPages->edit($_POST['id'], $_POST)){			$page = $mPages->get($_POST['id']);			$page['content'] = $this->replace_widgets($page['content']);			$result['res'] = $page;		}		else			$result['errors'] = $mPages->errors();				$this->content = json_encode($result);	}		public function action_getpage(){		$this->content = json_encode(M_Pages::Instance()->get($_POST['id']));	}		//	// Texts	//		public function action_savetext(){		$mTexts = M_Texts::Instance();		$result = array('errors' => array(), 'res' => '');				if($mTexts->edit($_POST['id'], $_POST)){			$text = $mTexts->get($_POST['id']);			$result['res'] = $text;		}		else			$result['errors'] = $mTexts->errors();				$this->content = json_encode($result);	}		public function action_gettext(){		$this->content = json_encode($mTexts->get($_POST['id']));	}}