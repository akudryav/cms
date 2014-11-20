<?php
class Twig_CMSStaticExecution
{
	private $curent_class;

	public function __construct(){
		$this->curent_class == null;
	}
	
	public function __isset($name){
		return (class_exists($name));
	}
	
	public function __get($name){
		if(!class_exists($name)){
			//die("$name doestn't exists in Twig_CMSStaticExecution");
			return;
		}
		
		$this->curent_class = $name;
		return $this;
	} 
	
	public function __call($name, $params){
		if($this->curent_class == null){
			//die("Not select the static class in Twig_CMSStaticExecution");
			return;
		}

		return call_user_func_array("{$this->curent_class}::$name", $params);
	}
}