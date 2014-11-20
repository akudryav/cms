<?php
class M_I18n extends Model
{	
	private static $instance;	// экземпляр класса
	
	public static function Instance()
	{
		if (self::$instance == null)
			self::$instance = new self();
			
		return self::$instance;
	}

	public function __construct(){
		parent::__construct('i18n', 'id_i18n');
	}
}


