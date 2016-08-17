<?php 

/*
	@return.- Información del usuario actual
*/

//include("../../../".$root_folder."/class.Database.inc");
//include("../../".$root_folder."/class.Database.inc");

class current_user{
	
	public $user_id;
	public $user_username;
	public $user_name;
	public $user_lname;
	public $user_sname;
	public $sha_password;
	public $user_gender;
	public $user_photo;
	public $user_profile;
	public $user_status;
	
	public function __construct(){
		
		// Conexión a la base de datos
			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			
			//Query
			$sql_query = sprintf("SELECT * FROM sudi_users_tb WHERE user_username = %s", GetSQLValueString( $_SESSION['MM_Username'], "text"));		
			//$sql_query = "pffff";
			//$this->user_status = $sql_query;		
			// Jquery Result	
			$result = $mysqli->query($sql_query);
			$row = $result->fetch_assoc();
			
			//Establecemos los valores
			$this->user_id = $row['user_id'];
			$this->user_username = $row['user_username'];
			$this->user_name = ($row['user_fname'] == 'f') ? $row['user_fname'] : $row['user_mname'];
			$this->user_lname = $row['user_lname'];
			$this->user_sname = $row['user_sname'];
			$this->sha_password = $row['user_password'];
			$this->user_gender = ($row['user_gender'] == "0") ? 'f' : 'm' ;
			$this->user_photo = $row['user_photo'];
			$this->user_profile = $row['user_profile'];
			$this->user_status = $row['user_status'];
		
	}
	
	
	
}

?>