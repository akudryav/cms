<?php
class FilePaginaion
{	
	private $f;
	private $on_page; //кол-во на странице
	private $settings_navbar;
	private $reverse;
	
	public function __construct($path, $count = 10, $reverse = false)
	{
		$this->f = fopen($path, 'rt');
		
		if($this->f === false)
			die("File $path doesn't exists");
		
		$this->on_page = $count;
		$this->reverse = $reverse;
	 	$this->settings_navbar = array('url_self' => '/', 'count' => $this->pagination_count(), 
									   'on_page' => $this->on_page, 'page_num' => 1);
	}
	
	public function get(){
		$page_num = (int)$this->settings_navbar['page_num'] - 1;
		$shift = ($this->reverse) ? $this->settings_navbar['count'] - ($page_num * $this->on_page) - $this->on_page : 
							  $page_num * $this->on_page;
		
		$notes = array();
		
		fseek($this->f, 0, SEEK_SET);
		while($shift-- > 0)
			fgets($this->f);
		
		$i = 0;
		
		while($i++ < $this->on_page && !feof($this->f)){
			$string = fgets($this->f);
			
			if(!feof($this->f))
				$notes[] = json_decode($string, true);
		}
		
		if($this->reverse)
			$notes = array_reverse($notes);
		
		return $notes;
	}
	
	public function pagination_count(){
		fseek($this->f, 0, SEEK_SET);
		$all = -1;

		while(!feof($this->f)) {
			fgets($this->f);
			$all++;
		} 
		
		return $all;
	}
	
	public function navbar(){
		return $this->settings_navbar;
	}
	
	public function url($url_self){
		$this->settings_navbar['url_self'] = $this->prepare_url($url_self);
		return $this;
	}
	
	public function num($page_num){
		$this->settings_navbar['page_num'] = (int)$page_num;
		return $this;
	}
	
	public function reverse($reverse){
		$this->reverse = $reverse;
		return $this;
	}
	
	public function on_page($on_page){
		$this->on_page = (int)$on_page;
		$this->settings_navbar['on_page'] = $this->on_page;
		return $this;
	}
	
	private function prepare_url($url){
		$temp = explode('/', $url);
		$arr = array();
		
		foreach ($temp as $v)
		{
			if ($v != '')
				$arr[] = $v;
		}
		
		$url = implode('/', $arr);
		
		if($url == '')
			$url = '/';
		else
			$url .= '/';
		
		return $url;
	}
}