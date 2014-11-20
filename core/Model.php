<?php

class Model
{
	protected $table;		// имя талицы
	protected $pk;			// первичный ключ
	protected $db;			// модуль для работы с бд
	protected $errors;		// список ошибок
	protected $cache;		// кэш
	protected $last_valid_obj;// последний успешный объект валидации
	private $valid;			// модуль валидации


	
	protected function __construct($table, $pk)
	{
		$this->table = $table;
		$this->pk = $pk;
		$this->errors = array();
		$this->valid = null;
		$this->last_valid_obj = null;
		$this->db = SQL::Instance();
		$this->cache = array();
	}
	
	public function all()
	{
		if($this->cache['all'] == null)
			$this->cache['all'] = $this->db->Select("SELECT * FROM {$this->table}");
		
		return $this->cache['all'];
	}

	public function get($id)
	{
		$id = (int)$id;
		
		if(empty($this->cache["get_$id"])){
			$res = $this->db->Select("SELECT * FROM {$this->table} WHERE {$this->pk} = '$id'");
			$this->cache["get_$id"] = (isset($res[0])) ? $res[0] : null;
		}
		
		return $this->cache["get_$id"];
	}
	
	public function getByFieldset($obj)
	{
		if(empty($obj))
			return array();
		
		$where = $this->makeFieldsetWhere($obj);
		$sql = "SELECT * FROM {$this->table} WHERE $where";

		return $this->db->Select($sql);
	}
	
	public function add($fields)
	{
		$this->errors = array();  // обнуляем список ошибок
		$valid = $this->load_validation(); // подгружаем модуль валидации
		
		$valid->execute($fields); 
		if($valid->good()){
			Cache::mb_clear($this->table);
			$this->cache['all'] = null;
			$this->last_valid_obj = $valid->getObj();
			$id = $this->db->Insert($this->table, $this->last_valid_obj);
			Log::write(array('table' => $this->table, 'action' => 'add', 'id_note' => $id));
			return $id;
		}
		
		$this->errors = $valid->errors();
		return false;
	}
	
	public function edit($pk, $fields)
	{
		$this->errors = array();  		   // обнуляем список ошибок
		$valid = $this->load_validation(); // подгружаем модуль валидации
		
		$valid->execute($fields, $pk); 
		if($valid->good()){
			$this->last_valid_obj = $valid->getObj();
			$this->db->Update($this->table, $this->last_valid_obj, "{$this->pk} = '$pk'");
			Cache::mb_clear($this->table);
			$this->cache = array();
			Log::write(array('table' => $this->table, 'action' => 'edit', 'id_note' => $pk));
			return true;
		}
		
		$this->errors = $valid->errors();
		return false;
	}
	
	public function delete($id)
	{
		$id = (int)$id;
		$this->db->Delete($this->table, "{$this->pk} = '$id'");
		Cache::mb_clear($this->table);
		Log::write(array('table' => $this->table, 'action' => 'delete', 'id_note' => $id));
		return true;
	}
	
	public function remove($id)
	{
		return $this->edit($id, array('is_show'=> '2'));
	}

	public function restore($id)
	{
		return $this->edit($id, array('is_show'=> '0'));
	}

	public function errors()
	{
		return $this->errors;
	}
	
	private function load_validation()
	{
		return new Validation($this->table);
	}

	public function get_table()
	{
		return $this->table;
	}

	public function get_pk()
	{
		return $this->pk;
	}
	
	protected function makeFieldsetWhere($obj){
		$pairs = array();
		
		foreach($obj as $key => $value)
		{
			if(is_array($value))
			{
				$inner_pairs = array();
				
				foreach($value as $k => $v)
				{
					if($v === null)
						$inner_pairs[] = "$k = NULL";
					else{
						$v = $this->db->quote($v . '');
						$inner_pairs[] = "$k = $v";
					}
				}
				
				$pairs[] = ' (' . implode(" AND ", $inner_pairs) . ') ';
			}
			else
			{
				if($value === null)
					$pairs[] = "$key = NULL";
				else{
					$value = $this->db->quote($value . '');
					$pairs[] = "$key = $value";
				}
			}
		}
		
		return implode(" OR ", $pairs);
	}
}