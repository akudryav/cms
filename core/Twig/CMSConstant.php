<?php
class Twig_CMSConstant
{
	public function __construct(){
		
	}
	
	public function __isset($name){
		return true;
	}
	
	public function __get($name){
		return constant($name);
	} 
}