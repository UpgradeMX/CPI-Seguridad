<?php
	class binnacle {
	/*
	*Clase: Input de texto
	@return: Input con varias opciones
			
	*/
		
		// Propiedades
			/* 1) Id User */ 
			public $Id_user; 
			/* 3) Table */ 
			public $Table; 
			/* 4) Pal. Field */ 
			public $Field; 
			/* 5) Id del registro */ 
			public $Id_reg; 
			/* 6) Size */ 
			public $Action;
			

			
			public function __construct($the_user, $the_table, $the_field, $the_id_reg, $the_action){
				
				/** 		
					* Asignar datos a la variable
					* @return none
				**/
				$this->user = $the_user; $this->table = $the_table; $this->field = $the_field; $this->id_reg = $the_id_reg; $this->action = $the_action;
				
				
				
				/** 		
					* Mostrar el Input en el DOM
					*if($debug && $debug_queries){ array_push($queries,$query_rsSQL,' ID_user: '.$Id_user,' Nombre: '.$Name_user,' Tabla: '.$table_key,' Campo Pal.: '.$primary_key,' Registro: '.$newID,' Acción: '.$action);}
					* @return spry or input
				**/
				
				$db = Database::getInstance();
				$mysqli = $db->getConnection();
				
				
				$sql_query = sprintf("INSERT INTO sudi_binnacle_tb (
									binn_user_id ,
									binn_table ,
									binn_field ,
									binn_reg_id ,
									binn_action ,
									binn_hour ,
									binn_date
									) VALUES (
									%s,
									%s,
									%s,
									%s,
									%s,
									%s,
									%s
									);", 
									GetSQLValueString( $this->user, "int"),
									GetSQLValueString( $this->table, "text"),
									GetSQLValueString( $this->field, "text"),
									GetSQLValueString( $this->id_reg, "int"),
									GetSQLValueString( $this->action, "text"),
									GetSQLValueString( date('H:i:s'), "text"),
									GetSQLValueString( date('Y-m-d'), "text")
									);
								
					// echo '-'.$sql_query.' -'.$this->user.' -'.$this->table.' -'.$this->field.' -'.$this->id_reg.' -'.$this->action; 	exit;			
				$result = $mysqli->query($sql_query);
				//$row = $result->fetch_assoc();
				/**/
				
			
			}
			
	
	} // [END CLASS] input_textfield
	
?>