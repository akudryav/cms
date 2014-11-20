<?php
class Cache
{
	private static $map;

	//
	// Save page in cache if necessary
	//
	public static function push($url, $text)
	{
		self::load_map();
		
		foreach(self::$map['no_cahce'] as $exp)
			if(strpos($url . '/', $exp) === 0)
				return false;
				
		
		$path = CACHE_DIR . I18n::assoc() . '_' . strtr($url, '/', '_') . '.cache';
		file_put_contents($path, $text);
		return true;
	}
	
	//
	// Get page from cache or false
	//
	public static function get($url)
	{
		$path = CACHE_DIR . I18n::assoc() . '_' . strtr($url, '/', '_') . '.cache';
		
		if(!file_exists($path))
			return false;
			
		return file_get_contents($path);
	}
	
	//
	// May be clear all cache if necessary
	//
	public static function mb_clear($table)
	{
		self::load_map();
		
		if(in_array($table, self::$map['clear_on_change'])){
			$files = scandir(CACHE_DIR);
			
			foreach($files as $file){
				$temp = explode('.', $file);
				
				if(end($temp) === 'cache')
					unlink(CACHE_DIR . $file);
			}
		}
	}
	
	//
	// Load cache map
	//
	private static function load_map()
	{
		if(self::$map == null)
			self::$map = include_once(CACHE_PATH);
	}
}