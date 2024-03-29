<?php

class Rout
{	
	private $controller;
	private $action;
	private $params;
	
	public function __construct($url)
	{
		$info = explode('/', $url);	
		$this->params = [];

		foreach ($info as $v)
		{
			if ($v != '')
				$this->params[] = $v;
		}
		
		$langs = I18n::langs_arr();
		$current = I18n::language();
		
		// articles
		// ru/articles
		// en/news
		// ru/*
		
		if(isset($this->params[0], $langs[$this->params[0]])){
			if($langs[$this->params[0]] != $current)
				I18n::set($this->params[0]);
				
			unset($this->params[0]);
			$this->params = array_values($this->params);
		}
		elseif(count($this->params) == 0){
			$assoc = I18n::assoc();
			header('location: ' . BASE_URL . $assoc);
			exit();
		}
		
		$this->action = 'action_';
		$this->action .= (isset($this->params[1])) ? $this->params[1] : 'index';
		// пропишем для пустого урла
		if (0 == count($this->params)) {
			$this->params[0] = null;
		}
		switch ($this->params[0])
		{
			case 'widget':
				$this->controller = 'C_Widget';
				break;
			case 'page':
				$this->controller = 'C_Page';
				break;
			case 'users':
				$this->controller = 'C_Users';
				break;
			case 'gallery':
				$this->controller = 'C_Gallery';
				break;
			case 'pages':
				$this->controller = 'C_Pages';
				break;
			case 'articles':
				$this->controller = 'C_Articles';
				break;
			case 'texts':
				$this->controller = 'C_Texts';
				break;
			case 'news':
				$this->controller = 'C_News';
				break;
			case 'docs':
				$this->controller = 'C_Docs';
				break;
			case 'menu':
				$this->controller = 'C_Menu';
				break;
			case 'auth':		
				$this->controller = 'C_Auth';
				break;
			case 'ajax':		
				$this->controller = 'C_Ajax';
				break;
			case 'templates':		
				$this->controller = 'C_Templates';
				break;
			case 'logs':		
				$this->controller = 'C_Logs';
				break;
			case 'login':
				$this->controller = 'C_Auth';
				$this->action = 'action_login';
				break;
			case 'search':
				$this->controller = 'C_Page';
				$this->action = 'action_search';
				break;
			case 'frontedit':
				$this->controller = 'C_Ajax_Frontedit';
				break;
            case 'trash':
                $this->controller = 'C_Trash';
               $this->action = 'action_mode';
                break;                
			case null:
				$this->controller = 'C_Page';
				$this->action = 'action_index';
				break;
			default:
				$this->controller = 'C_Page';
				$this->action = 'action_index';
		}
	}
	
	public function Request()
	{
		$c = new $this->controller();
		$c->Go($this->action, $this->params);
	}
}
