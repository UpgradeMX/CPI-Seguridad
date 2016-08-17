<?php

	/*	Clase: Crear privilegios
		
		# Autor: Hugo Acosta
		# Versión: 1.0.1
		# Última actualización: 26-01-16
		
		Clase que controla los accesos CRUD para el sistema
	
	 */

	class SectionPrivileges {
	
		// Sección a revisar
			public $section;
		// Privilegio "Crear"
			public $create;
		// Privilegio "Leer"
			public $read;
		// Privilegio "Actualizar"
			public $update;
		// Privilegio "Borrar"
			public $delete;

		/** 		
			* Crear cadena con información de la sección
			* @return NONE
		**/
		public function __construct($section, $create, $read, $update, $delete){
			
			$this->section = $section;
			$this->create = $create;
			$this->read = $read;
			$this->update = $update;
			$this->delete = $delete;					
		}
		
	}

	class CheckPrivileges {
		
		//uso: CheckPrivileges::getPrivileges("R",$idSection)
		
		public static function getPrivileges($type,$section,$profile){
		
			if(!$section || !$profile || !$section){ echo "Faltan parametros de privilegio"; exit;}
			
		$priv_section_id = $section;
		$lenght_section_id = strlen($priv_section_id);
		$search_section = sprintf("'\"section\";s:%s:\"%s\"'",$lenght_section_id,$priv_section_id);
		$like_search_section = "'%\"section\";s:".$lenght_section_id.":\"".$priv_section_id."\"%'";
			
		switch ($type) {
			case 'C':
				$search_position = '19';
			break;
			case 'R':
				$search_position = '38';
			break;
			case 'U':
				$search_position = '59';
			break;
			case 'D':
				$search_position = '80';
			break;	
		}
				
		// Conexión a la base de datos
			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			
			//Query
			$sql_query = sprintf("
			SELECT 
				MID(profile_privileges, (LOCATE(%s, profile_privileges) + CHAR_LENGTH(%s) + %s), 1) AS s_position
			FROM 
				sudi_profiles 
			WHERE 
				profile_id = %s AND profile_privileges LIKE %s",$search_section, $search_section,$search_position, $profile, $like_search_section);	
			// Jquery Result	
			
			$result = $mysqli->query($sql_query);
			$row_rsPriv = mysqli_fetch_assoc($result);	
			$totalRows_rsPriv = mysqli_num_rows($result);
			
			return ($totalRows_rsPriv && $row_rsPriv['s_position'] == '1') ? 1: 0;
		}	
	}
?>
