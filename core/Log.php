<?php

class Log
{	
	private static $log_map;
	private static $f;

	//
	// Log structure:
	// 		1 row = 1 note
	//		dt|ip|id_user|action|table|id_note
	//
	
	public static function write($obj = array()){
		self::init();
		
		if(self::in_map($obj['table'])){
			$obj['ip'] = $_SERVER['REMOTE_ADDR'];
			$obj['dt'] = date("Y-m-d H:i:s");
			$obj['id_user'] = M_Users::Instance()->GetUid();
			$str = json_encode($obj);
			fwrite(self::$f, "$str \n");
		}
	}
	
	public function clear(){
		self::$log_map = null;
		fclose(self::$f);
	}
	
	public function assoc($table, $action){
		self::init();
		return self::$log_map['actions'][$action] . ' ' . self::$log_map['tables'][$table];
	}
	
	private static function in_map($table){
		return isset(self::$log_map['tables'][$table]);
	}
	
	private static function init(){
		if(self::$log_map == null)
			self::$log_map = include_once(LOGS_PATH);
			
		if(self::$f == null)
			self::$f = fopen(LOG_FILE_PATH, 'a+');
	}
}
