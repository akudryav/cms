<?php
class Template
{
	private $base_template_path;
	private $twig;
	
	public function __construct($base_template_path = ''){
		$this->base_template_path = $base_template_path;
	}
	
	public function set_base($base_template_path){
		$this->base_template_path = $base_template_path;
	}
	
	public function simple($fileName, $vars = array()){
		// Установка переменных для шаблона.
		foreach ($vars as $k => $v)
		{
			$$k = $v;
		}
		
		$lang = I18n::assoc();
		$path = "v/{$this->base_template_path}$fileName";
		$mb_path = "v/{$this->base_template_path}langs_templates/$lang/$fileName";
		
		if(file_exists("v/{$this->base_template_path}langs_templates/$lang/$fileName"))
			$path = $mb_path;

		// Генерация HTML в строку.
		ob_start();
		include $path;
		return ob_get_clean();	
	}	
	
	public function twig($fileName, $vars = array()){
		if($this->twig == null)
			$this->twig_init();
		
		$lang = I18n::assoc();
		
		if(file_exists("v/{$this->base_template_path}langs_templates/$lang/$fileName"))
			$fileName = "langs_templates/$lang/$fileName";

		return $this->twig->render($fileName, $vars);
	}
	
	private function twig_init(){
		$loader = new Twig_Loader_Filesystem("v/{$this->base_template_path}");
		$this->twig = new Twig_Environment($loader, array(
			'cache' => "v/{$this->base_template_path}twig_cache",
			'auto_reload' => true,
			'autoescape' => false
		));
		$this->twig->addGlobal('S', new Twig_CMSStaticExecution());
		$this->twig->addGlobal('C', new Twig_CMSConstant());
	}
}