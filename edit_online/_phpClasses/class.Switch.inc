<?php 

/*
	@return: Switch para "list"
	

*/

class switch_widtget {
	/*
	
	<span class="switch<?php if($row_rsElement['proyecto_principal']){echo ' on';} ?>" 
          	
            data-on="<?php if($row_rsElement['proyecto_principal']){echo '1';}else{ echo '0';} ?>" 
            data-field="<?php echo 'proyecto_principal'; ?>" 
            data-table="<?php echo $thisTable; ?>" 
            data-code="<?php echo $currentUser; ?>"
            data-main="<?php echo $mainId; ?>"
            data-id="<?php echo $row_rsElement[$mainId]; ?>"
			><span></span>
		  </span>
	
	*/
	
	public $rs;
	public $field;
	public $table;
	public $user;
	public $id;
	public $rsId;
	public $output;
	public $class;
	
	
	public function __construct($rs,$field,$table,$user,$id,$class,$rsId){
		
		$this->rs = $rs;
		$this->field = $field;
		$this->table = $table;
		$this->user = $user;
		$this->id = $id;
		$this->class = $class;
		$this->rsId = $rsId;

		if($this->rs == '1'){
			$switchClass = ' on';
			$switchData = '1';
		}elseif($this->rs == '2'){
			$switchClass = ' canceled';
			$switchData = '';
			
		}else{
			$switchClass = '';
			$switchData = '0';
		}
	
	$output = '';
	
		$output.= '<span class="switch'.$switchClass.' '.$this->class.'" ';
			$output.= ($this->rs == 2) ? 'data-canceled="true" ' : '' ;
			$output.= 'data-on="'.$switchData.'"';
			$output.= 'data-field="'.$this->field.'"';
			$output.= 'data-table="'.$this->table.'"';
			$output.= 'data-code="'.$this->user.'"';
			$output.= 'data-main="'.$this->id.'"';
			$output.= 'data-id="'.$this->rsId.'"';
			$output.= '><span></span>';
		$output.= '</span>';
		
		$this->output =  $output;	
	}
	
	public function display(){
		return $this->output;	
	}
	
}

?>