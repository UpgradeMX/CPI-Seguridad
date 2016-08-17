<?php 
/*	@return: Botón que agrega nuevos campos cargados por los parametros seleccionados */
class another_tb_inputs {

	public $table;
	public $id_field;
	public $field_linked;
	public $id_record;
	public $path;
	private $action;
	private $main_id;
	private $div_container_a;
	private $div_container_b;
	public $max_records;
	
	public function __construct($text,$table,$id_field,$field_linked,$path,$action,$main_id,$this_icon,$this_max){
		
		$this->max_records = $this_max;
		$max_records = ($this->max_records) ? 'data-max="'.$this->max_records.'"': '';
		
		$this->table = $table; $this->id_field = $id_field; $this->field_linked = $field_linked; $this->path = $path; $this->action = $action; $this->main_id = $main_id;
		
		$this->div_container_a = '<section class="multiple_tb_inputs" data-path="'.$path.'" data-table="'.$table.'" data-id_field="'.$id_field.'" data-field_linked="'.$field_linked.'" data-childrens="0"><div class="multiple_tb_container">';
		
		$btn_icon = ($this_icon) ? '<i class="icon icon-sudi-'.$this_icon.'"></i>' : '<i class="icon icon-sudi-plus"></i>';
		
		$this->div_container_b = '</div><a href="#" class="multiple_tb_btn" '.$max_records.'>'. $btn_icon . ' ' . $text .'</a></section>';

		if($action === 'add'){
			echo $this->div_container_a . $this->div_container_b;
		}else{
			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			
			//Query
			$query_rsData = sprintf("SELECT * FROM %s WHERE %s = %s AND hideField = 0", $this->table, $this->field_linked, $this->main_id);
			// Jquery Result	
			$rsData = $mysqli->query($query_rsData);
			$row_rsElement = $rsData->fetch_assoc();
			$totalRows_rsElement = $rsData->num_rows;
			
			//debug echo $query_rsData;
			

			echo $this->div_container_a;
			
			if($totalRows_rsElement){
						do {  
							echo '<div class="recordb" data-action="edit" data-table="'.$this->table.'" data-id_field="'.$this->id_field.'" data-field_linked="'.$this->field_linked.'" data-id_record="'.$row_rsElement[$this->id_field].'"><span class="recordb_delete"><i class="icon icon-sudi-trash"></i></span><section>';
							require '../../'.$this->path;
							echo '</section></div>';
						} while($row_rsElement = mysqli_fetch_assoc($rsData));			
			}
			echo $this->div_container_b;			
		} // IF- $action (end)
	} // __construct() (end)
} // class another_tb_inputs (end)
?>