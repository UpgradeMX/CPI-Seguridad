<?php
	class input_file {
	/*
	*Clase: Input File
	@return: Selector de imágenes y archivos
	#Desarrollado por: Hugo Acosta
	#Fecha: Septiembre 2015
	
	*/
		
		// Propiedades
			/* 1)  Tipo */ 
			public $type; // <-- 'same' / 'gallery' / 'files' 
			
			/* 2)  Texto*/
			public $text;
			
			/* 3)  Código único */
			public $code;
			
			/* 4)  Ruta final */
			public $path;
			
			/* 5)  Miniatura */
			public $thumb;
			
			/* 6)  Ancho de miniatura */
			public $thumbWidth;
			
			/* 7)  Ancho de la imagen */
			public $width;
			
			/* 8)  Alto de la imagen */
			public $height;
			
			/* 9)  Recorte de la imagen */
			public $crop;
			
			/* 10) Calidad de la imagen */
			public $quality;
			
			/* 11) Cantidad de archivos */
			public $max_files;
			
			/* 12) Tipos de archivos*/ 
			public $file_types;
			
			/* 13) Ancho máximo si es imagen */ 
			public $max_width;
			
			/* 14) Alto Máximo si es imagen*/ 
			public $max_height;
			
			/* 15) Tabla en la que se guarda*/ 
			public $table;
			
			/* 16) Icono del botón para seleccionar el archivo */ 
			public $icon;
			
			/* 16) Campo en el que se guarda*/ 
			public $field;
			
			/* 17) Acción "add" o "edit"*/ 
			public $action;
			
			/* 18) Recorset */ 
			public $data;
			
			/* 19) Linked_field -gallery / files - */ 
			public $linked_field;
			
			/* 20) Linked_field_id -gallery / files - */ 
			public $linked_field_id;
			
		function __construct($action_code,$type){
			/** 		
				* Asignar datos a la variable
				* @return none
			**/
			
			$this->code = $action_code;
			$this->type = $type;
			
			
		}
			
		function display(){
			/** 		
				* Mostrar el Input en el DOM
				* @return spry / input
			**/
			
			// LIMITACIONES GENERALES
			
				// Si es galería o file, necesita field, table, linked_field
				
				if($this->type != 'same'){
					if(!$this->field	 || 	!$this->linked_field || !$this->table || !$this->linked_field_id){
						return '<p style="font-size:.7em;"><i style="color:#FF0000;" class="icon icon-sudi-warning"></i> File - Propiedad faltante "field - linked_field - table"</p>'; 	
					}else{
						$linked_field = 'data-linked="'.$this->linked_field.'"';	
						$linked_field_id = 'data-linkedid="'.$this->linked_field_id.'"';		
					}
				}else{
					// No se requiere $linked_field
					$linked_field = '';
					$linked_field_id = '';	
				}
			
				// Si no existe la ruta, se corta el input
				if(!$this->path){ 
					return '<p style="font-size:.7em;"><i style="color:#FF0000;" class="icon icon-sudi-warning"></i> File - Propiedad faltante "path"</p>'; 
					exit; 
				}else{
					//Nos aseguramos que exista diagonal al final			
					$this->path = rtrim($this->path, '/') . '/';
					if(!is_dir('../../'.$this->path)){
						return '<p style="font-size:.7em;"><i style="color:#FF0000;" class="icon icon-sudi-warning"></i> File - La ruta "'.$this->path.'" no existe.</p>'; exit; 	
					}
				}
				// Si no existe la tabla
				if(!$this->table || !$this->field){ 
					return '<p style="font-size:.7em;"><i style="color:#FF0000;" class="icon icon-sudi-warning"></i> File - Propiedad faltante "Table o Field"</p>'; 
					exit; 
				}
				
				
				// TIPOS DE ARCHIVO 
					$types_ok = '';
					// En Galería
						//accept=".xls,.xlsx"
					if($this->type === 'gallery'){
						$types_ok = 'accept=".jpg,.png,.svg"';
					}
			

			$output = '';
			
			if(!$this->type){ return $output='<p>No se ha definido el tipo de input_file</p>'; }		
				// Limitaciones
				
					
					// #1.A) Con CROP: Si se requiere corte CROP y no se tiene el ancho
					if(!$this->width && $this->crop){ 
						return '<p style="font-size:.7em;"><i style="color:#FF0000;" class="icon icon-sudi-warning"></i> File - Propiedad faltante: "with"</p>'; exit; 
					}
				
				
				// Preparamos los parametros
				
					// #Ancho Final
					$thisWidth = ($this->width) ? 'data-width="'.$this->width.'"' : '';
					
					// #Alto Final
					$thisHeight = ($this->height) ? 'data-height="'.$this->height.'"' : '';
					
					// #Ancho maximo
					$thisMaxWidth = ($this->max_width) ? 'data-allowedwidth="'.$this->max_width.'"' : '';
					
					// #Alto maximo
					$thisMaxHeight = ($this->max_height) ? 'data-allowedheight="'.$this->max_height.'"' : '';
					
					// #Calidad de la imagen
					$thisQuality = ($this->quality) ? 'data-quality="'.$this->quality.'"' : '' ;
					
					// #Recorte
					$thisCrop = ($this->crop) ? 'data-crop="1"' : 'data-crop="0"';
				
					// #Miniatura
					$thisThumb = ($this->thumb) ? 'data-thumb="1"' : 'data-thumb="0"';
					// #Ancho miniatura
					$thisThumbWith = ($this->thumbWidth) ? 'data-thumbwidht="'.$this->thumbWidth.'"' : '';	
				
				
					// EDIT
					
					if($this->action == 'edit'){
						if(file_exists('../../'.$this->data) && !is_dir('../../'.$this->data)){
							
							$pathInfo = pathinfo($this->data);
								$file_folder = 	$pathInfo['dirname'];
								$file_name = $pathInfo['basename'];
							if(file_exists('../../'.$file_folder.'/min_'.$file_name)){
								$file_path = $file_folder.'/min_'.$file_name; 					
							}else{
								$file_path  = $this->data;
							}
														
							$loaded_items = '
							<div class="loaded_item_row">
								<div class="loaded_img">
									<img src="'.$file_path.'">
								</div>
								<div class="loaded_file_name">
									<p>'.substr($file_name,14).'</p>
								</div>
								<div class="loaded_file_options loaded_edit_file_delete file_delete"
									data-file = "'.substr($file_name,14).'"
									data-field = "'.$this->field.'"
									data-table = "'.$this->table.'"
									data-pathfile="'.$this->data.'">
										<i class="icon icon-sudi-trash"></i>
								</div>
								<input name="'.$this->field.'" type="hidden" class="spryManage" value="'.$this->data.'">
							</div>							
							';							
						} // if file exits (end)
						
					}else{
						$loaded_items = '';
					}
				
				$output .= '
					<div class="upload_container">
						<div class="fileName"><div class="files_container blur_effect">'.$loaded_items.'</div>
							<div class="file_loading">
								<div class="loader_wrapper"><div class="cssload-loader"></div></div>
							</div>
						</div>
						<div class="upload">
							<p class="upload_text"><i class="icon icon-sudi-'.$this->icon.'"></i>'.$this->text.'</p>
						<input type="file" name="image_upload" data-type="'.$this->type.'" '.$thisCrop.' '.$thisThumb.' '.$thisThumbWith.' '.$thisWidth.' '.$thisHeight.' '.$thisMaxWidth.''.$types_ok.''.$thisMaxHeight.' '.$thisQuality.' data-path="'.$this->path.'" data-code="'.$this->code.'" data-field="'.$this->field.'" data-table="'.$this->table.'" '.$linked_field .' '.$linked_field_id.' />
						</div>
					</div>
					';
				
			
			
			return $output;
		}
	} // [END CLASS] input_textfield
	
?>