<?php



	/* Clase -> Sección */

	class SudiSection {
				
		public $table;
		public $title;
		public $image;
		public $main_id;
		public $type;
		public $folder;
		
	  	public function set_section_info($folder,$table){
			// Nombre de la carpeta actual		
			$this->folder = $folder;
			// Conexión a la base de datos
			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			
			//Query
			
			if($table){
			$sql_query = sprintf("SELECT * FROM sudi_sections_tb WHERE sec_table = %s", GetSQLValueString($table, "text"));		
			}else{
			$sql_query = sprintf("SELECT * FROM sudi_sections_tb WHERE sec_folder = %s", GetSQLValueString( $this->folder, "text"));				
			}
			// Jquery Result	
			$result = $mysqli->query($sql_query);
				
			if($row = $result->fetch_assoc()){
					$this->table = $row['sec_table'];
					$this->main_id = $row['sec_table_id'];
					$this->title = $row['sec_table_title'];
					$this->image = $row['sec_table_image'];
					$this->type = $row['sec_type'];
					return "successful";
			}else{
				return "unseccessful";	
			}
		}
	}
	
	/*
		@return Objeeto de campo en lista
		* Tipos
			* text => texto
			* image => imagen
			* switch => switch 
			* money => $0.00
			* date => date_mm
	
	*/
	class SudiList {	
		public $field;
		public $name;
		public $size;
		public $type;
		
		public function setListInfo($field,$name,$size,$type){
			$this->field = $field;
			$this->name = $name;
			$this->size = $size;
			$this->type = $type;
		}
	}

?>
