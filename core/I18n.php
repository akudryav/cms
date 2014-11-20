<?php

//
// Class of languages distribution  
//
abstract class I18n extends Model
{	
	//
	// static languages part start --------------------------------------------------------------------------
	//
	
	private static $languages;
	private static $current;
	private static $assoc;
	
	public static function language(){
		if(self::$current == null)
			self::read_cooks();
		
		return self::$current;
	}
	
	public static function assoc(){
		if(self::$assoc == null)
			self::read_cooks();
		
		return self::$assoc;
	}
	
	public static function set($language){
		$langs = self::langs_arr();
		if(isset($langs[$language])){
			setcookie('lang', $language, time() + 3600 * 24 * 365, '/');
			self::$assoc = $language;
			self::$current = $langs[$language];
		}
	}
	
	public static function langs_arr(){
		if(self::$languages == null)
			self::$languages = include_once(LANGS_PATH);
		
		return self::$languages;
	}
	
	public static function synhronize(){
		$models = array();
		$models[] = M_Pages::Instance();
		$models[] = M_Articles::Instance();
		$models[] = M_Images::Instance();
		$models[] = M_Texts::Instance();

		$mI18n = M_I18n::Instance();
		$langs = I18n::langs_arr();

		foreach($models as $model){
			$all = $model->synh_all();
			$pk = $model->get_pk();
			
			foreach($all as $one){	
				$one_i18n = $mI18n->getByFieldset(array($pk => $one[$pk]));
				
				foreach($langs as $cur => $num){
					$find = false;
					
					foreach($one_i18n as $note){
						if($note['id_lang'] == $num){
							$find = true;
							break;
						}
					}
					
					if(!$find){
						$one['id_lang'] = $num;
						$one['is_show'] = 0;
						$mI18n->add($one);
					}
				}
				$one = null;
			}
		}
		
		return true;
	}
	
	private static function read_cooks(){
		$langs = self::langs_arr();
		$cook = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : DEFAULT_LANGUAGE; 
		self::$assoc = isset($langs[$cook]) ? $cook : DEFAULT_LANGUAGE;
		self::$current = $langs[self::$assoc];
	}
	
	//
	// static languages part end ----------------------------------------------------------------------------
	//
	
	protected function __construct($table, $pk){
		parent::__construct($table, $pk);
	}
	
	public function all()
	{
		return $this->i18njoin();
	}
	
	public function get($pk)
	{
		$res = $this->i18njoin("{$this->pk} = $pk"); 
		return $res[0];
	} 
	
	public function i18njoin($where = '1'){
		$current = self::language();
		$query = "SELECT * FROM {$this->table} 
			LEFT JOIN i18n 
			using({$this->pk}) 
			WHERE $where AND id_lang = $current";
		return $this->db->Select($query);
	}
	
	public function getByFieldset($obj)
	{
		$where = $this->makeFieldsetWhere($obj);
		return $this->i18njoin($where);
	}
	
	public function add($fields){
		$id_pk = parent::add($fields);
		
		if($id_pk === false)
			return false;
			
		$obj = $this->last_valid_obj;	
		$obj[$this->pk] = $id_pk;	
		$this->i18nadd($obj);
		return $id_pk;
	}
	
	public function edit($pk, $fields, $find_show = true){
		if(!parent::edit($pk, $fields))
			return false;
			
		$obj = $this->last_valid_obj;
		$mI18n = M_I18n::Instance();
		$current = self::language();
		$res = $mI18n->getByFieldset(array(array('id_lang' => $current, $this->pk => $pk)));
		
		if(count($res) == 0){
			$obj[$this->pk] = $pk;
			$this->i18nadd($fields);
		}
	
		$obj['id_lang'] = $current;
		
		if($find_show){
			if(isset($obj['is_show']) && !empty($obj['is_show']))
				$show = $obj['is_show'];
			
			if($show == 'on')
				$show = 1;
			
			$obj['is_show'] = (int)$show;
		}
		
		$mI18n->edit($res[0]['id_i18n'], $obj);
		return true;
	}
	
	public function delete($pk)
	{
		$res = parent::delete($pk);
		
		if($res){
			$mI18n = M_I18n::Instance();
			$to_delete = $mI18n->getByFieldset(array($this->pk => $pk));
			
			foreach($to_delete as $item)
				$mI18n->delete($item['id_i18n']);
		}
		
		return $res;
	}
	
	public function synh_all()
	{
		return parent::all();
	}
	
	protected function i18nadd($obj){
		$mI18n = M_I18n::Instance();
		$langs = self::langs_arr();
		$current = self::language();
		
		foreach($langs as $lang){
			$obj['id_lang'] = $lang;
			$obj['is_show'] = (int)($lang == $current);
			$mI18n->add($obj);
		}
		
		return true;
	}
}
