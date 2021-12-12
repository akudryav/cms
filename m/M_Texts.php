<?php
class M_Texts extends I18n
{	
	private static $instance;	
	private $field;
	private static $tcache;
	
	public static function Instance()
	{
		if (self::$instance == null)
			self::$instance = new self();
			
		return self::$instance;
	}

	public function __construct(){
		parent::__construct('texts', 'id_text');
		$this->field = 'alias';
		self::$tcache = null;
	}
	
	public function getByA($alias)
	{
		if(self::$tcache == null)
			$this->load_texts();

		if(!isset(self::$tcache[$alias])) return;
		
		return self::$tcache[$alias];
	}
	
	private function load_texts()
	{
		$texts = $this->all();
		
		foreach($texts as $text)
			self::$tcache[$text['alias']] = $text;
	}
}


