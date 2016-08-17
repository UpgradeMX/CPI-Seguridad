<?php 
	class input_select_duo {
	/*
	*Clase: Select
	@return: Select con varias opciones
	*/
	
		/* Opciones */		
		//$options = array();
		//array_push($options,array('Proceso','0'));
		//array_push($options,array('Completo','1'));
		
		// Propiedades
			/* 1) Spry */ 
			public $spry; 
			/* 2) Name */ 
			public $name; 
			/* 3) Label */ 
			public $label; 
			/* 4) title */ 
			public $title;
			/* 5) options */ 
			public $options; 
			/* 6) Required */ 
			public $required; 
			/* 7) Size */ 
			public $size; 
			/* 8) Tooltip */ 
			public $tooltip; 
			/* 9) Class */ 
			public $class; 
			/* 10) Action */ 
			public $action; 
			/* 11) Dato */ 
			public $data; 
			/* 12) Msg_required */ 
			public $msg_required; 
			/* 13) noManage */ 
			public $noManage; 
			/* S E G U N D O   S E L E C T */
			/* 14) Spry */
			public $spry_01;
			/* 15) Nombre */
			public $name_01;
			/* 16) Label */
			public $label_01;
			/* 17) Title */
			public $title_01;
			/* 18) Required */ 
			public $required_01;
			/* 19) Size */
			public $size_01;
			/* 20) Tooltip */ 
			public $tooltip_01; 
			/* 21) Class */ 
			public $class_01;
			/* 22) Dato */ 
			public $data_01; 
			/* 23) Msg_required */ 
			public $msg_required_01; 
			/* 24) noManage */ 
			public $noManage_01;
			/* U n i o n   e n t r e   l o s   d o s     s e l e c t */
			public $opcion;
			/* 26) Campo */ 
			public $field; 
			/* 27) Tabla */ 
			public $table;
			/* 28) Id de la tabla */ 
			public $table_id; 
			/* 29) Campo de la tabla */ 
			public $table_field;
			
			
		function setData($the_spry, $the_name, $the_label, $the_title, $the_options, $the_required, $the_size, $the_tooltip, $the_class, $the_action, $the_data, $the_msg_required, $the_noManage, $the_spry_01, $the_name_01, $the_label_01, $the_title_01, $the_required_01, $the_size_01, $the_tooltip_01, $the_class_01, $the_data_01, $the_msg_required_01, $the_noManage_01, $the_opcion, $the_field, $the_table, $the_table_id, $the_table_field){
			/** 		
				* Asignar datos a la variable
				* @return none
			**/
			/*Primer Select*/  
			$this->spry = $the_spry; $this->name = $the_name; $this->label = $the_label; $this->title = $the_title; $this->options = $the_options; $this->required = $the_required; $this->size = $the_size; $this->tooltip = $the_tooltip; $this->class = $the_class; $this->action = $the_action; $this->data = $the_data; $this->msg_required = $the_msg_required; $this->noManage = $the_noManage;
			/*Segundo select*/
			$this->spry_01 = $the_spry_01; $this->name_01 = $the_name_01; $this->label_01 = $the_label_01; $this->title_01 = $the_title_01; $this->required_01 = $the_required_01; $this->size_01 = $the_size_01; $this->tooltip_01 = $the_tooltip_01; $this->class_01 = $the_class_01; $this->data_01 = $the_data_01; $this->msg_required_01 = $the_msg_required_01; $this->noManage_01 = $the_noManage_01;
			/*Convinacion*/
			$this->opcion_add = $the_opcion; $this->field_union = $the_field; $this->table_union = $the_table; $this->table_id_union = $the_table_id; $this->table_field_union = $the_table_field;
			
			
			
		}
			
		function display(){
			/** 		
				* Mostrar el Select en el DOM
				* @return spry or select
			**/
			
			if(!$this->name){
				return '<span class="inputError"><i class="icon icon-sudi-warning"></i> Error: El select no tiene nombre</span>';	
			}
			
			if(!$this->name_01){
				return '<span class="inputError"><i class="icon icon-sudi-warning"></i> Error: El 2do select no tiene nombre</span>';	
			}
			
			
			if(!$this->options){
				return '<span class="inputError"><i class="icon icon-sudi-warning"></i> Error: El select esta vacío</span>';	
			}
			
			// Asignar valores si existen o no.
			$this->action = ($this->action) ? $this->action : 'add';
			$this->size = ($this->size) ? $this->size : '1x';
			$this->label = ($this->label) ? $this->label : '';
			$this->noManage = ($this->noManage == true) ? '' : 'spryManage ';
			$this->title = ($this->title) ? $this->title : 'Seleciona una opción';
			$this->required = ($this->required == true) ? 'true' : 'false';
			$this->class = ($this->class) ? $this->class : '';
			$this->data = ($this->action === 'edit') ? $this->data : '';
			$this->msg_required = ($this->msg_required) ? $this->msg_required : 'Requerido';
			
			
			// Asignar valores si existen o no (2do Select).
			$this->size_01 = ($this->size_01) ? $this->size_01 : '1x';
			$this->label_01 = ($this->label_01) ? $this->label_01 : '';
			$this->noManage_01 = ($this->noManage_01 == true) ? '' : 'spryManage ';
			$this->title_01 = ($this->title_01) ? $this->title_01 : 'Seleciona una opción';
			$this->required_01 = ($this->required_01 == true) ? 'true' : 'false';
			$this->class_01 = ($this->class) ? $this->class_01 : '';
			$this->data_01 = ($this->action === 'edit') ? $this->data_01 : '';
			$this->msg_required_01 = ($this->msg_required_01) ? $this->msg_required_01 : 'Requerido';
					
		
			//Si es Spry primer select
			if($this->spry){
				//Id del Spry
				$idSpry = 	' id="'.$this->spry .'" ';
				$classSpry = 'Spry';
				
				$validValue = ($this->required == 'false') ? '' : 'invalidValue:"-1",' ;
				
				$spryWidget = '<script type="text/javascript"> 	var '.$this->spry.' = new Spry.Widget.ValidationSelect("'.$this->spry.'", {'.$validValue.' isRequired:'.$this->required.', validateOn:["blur"]}); </script>';
				
			}else{
				$idSpry = $classSpry = '';
				$spryWidget = '';
			}
			//Si es Spry segundo select
			if($this->spry_01){
				//Id del Spry
				$idSpry_01 = 	' id="'.$this->spry_01 .'" ';
				$classSpry_01 = 'Spry';
				
				$validValue_01 = ($this->required_01 == 'false') ? '' : 'invalidValue:"-1",' ;
				
				$spryWidget_01 = '<script type="text/javascript"> 	var '.$this->spry_01.' = new Spry.Widget.ValidationSelect("'.$this->spry_01.'", {'.$validValue.' isRequired:'.$this->required_01.', validateOn:["blur"]}); </script>';
				
			}else{
				$idSpry_01 = $classSpry_01 = '';
				$spryWidget_01 = '';
			}
			
						
			//Si existe Tooltip
			if($this->tooltip){
				$thisTooltip = '<span class="tooltipQuestion tooltip" data-tip-type="text" data-tip-source="'.$this->tooltip.'"><i class="icon icon-sudi-help"></i></span>';
			}else{
				$thisTooltip = '';
			}	
			
			if($this->tooltip_01){
				$thisTooltip_01 = '<span class="tooltipQuestion tooltip" data-tip-type="text" data-tip-source="'.$this->tooltip_01.'"><i class="icon icon-sudi-help"></i></span>';
			}else{
				$thisTooltip_01 = '';
			}			
			$output ='';
			
			$output .= '
				<script type="text/javascript">
				$(document).ready(function(e) {	
					$("#'.$this->name.'").change(function() {
					  //alert("'.$this->name_01.'");
					  //$("#'.$this->name_01.'").append("<option value=4>Tomate</option>");
					   $("#'.$this->name_01.'").load("./_phpClasses/duoSelect.php",{
           				title: "'.$this->title_01.'", 
           				bank_fisc_ae_id: $(this).val(),
						opc: "'.$this->opcion_add.'",
						union: "'.$this->field_union.'",
						table: "'.$this->table_union.'",
						table_id: "'.$this->table_id.'",
						table_field: "'.$this->table_field.'"
       				 });
					});
				});
				</script>
			';
			
			
			
			
			// Resultado			
				$output .= '<section class="input_section input_'.$this->size.'">';
					$output .= $thisTooltip;
					$output .= '<span '.$idSpry.'class="'.$classSpry.'">';
						$output .= '<label for="'.$this->name.'" class="label_spry label_select">'.$this->label. '</label>  ';
						$output .= '<select name="'.$this->name.'" class="aSelect '.$this->noManage.$this->class.'" id="'.$this->name.'">';
					    $output .= '<option value="-1" selected="selected" >'.$this->title.'</option>';
					    for($i=0;$i<count($this->options);$i++){ 
							$theData = ($this->data == $this->options[$i][1] && $this->action == 'edit') ? 'selected="selected"' : '' ;
							$output .= '<option value="'.$this->options[$i][1].'" '.$theData.' >'.$this->options[$i][0] .'</option>';
						 }       
					    $output .= '</select>';
			           $output .= ($this->required == 'true') ? '<span class="selectInvalidMsg errorMessage">Seleccione un valor valido.</span>' : '';
						$output .= ($this->required == 'true') ? '<span class="textfieldRequiredMsg errorMessage">'.$this->msg_required.'</span>' : '';
					$output .= '</span>';
					$output .= $spryWidget;
				$output .= '</section>';
				
				$array_provicional = array();
				$output .= '<section class="input_section input_'.$this->size_01.'">';
					$output .= $thisTooltip_01;
					$output .= '<span '.$idSpry_01.'class="'.$classSpry_01.'">';
						$output .= '<label for="'.$this->name_01.'" class="label_spry label_select">'.$this->label_01. '</label>  ';
						$output .= '<select name="'.$this->name_01.'" class="aSelect '.$this->noManage_01.$this->class_01.'" id="'.$this->name_01.'">';
					    $output .= '<option value="-1" selected="selected" >'.$this->title_01.'</option>';
					    for($i=0;$i<count($array_provicional);$i++){ 
							$theData_01 = ($this->data_01 == $array_provicional[$i][1] && $this->action == 'edit') ? 'selected="selected"' : '' ;
							$output .= '<option value="'.$array_provicional[$i][1].'" '.$theData_01.' >'.$array_provicional[$i][0] .'</option>';
						 }       
					    $output .= '</select>';
			           $output .= ($this->required_01 == 'true') ? '<span class="selectInvalidMsg errorMessage">Seleccione un valor valido.</span>' : '';
						$output .= ($this->required_01 == 'true') ? '<span class="textfieldRequiredMsg errorMessage">'.$this->msg_required_01.'</span>' : '';
					$output .= '</span>';
					$output .= $spryWidget_01;
				$output .= '</section>';
						
			return $output;
		}
	} // [END CLASS] input_textfield
?>