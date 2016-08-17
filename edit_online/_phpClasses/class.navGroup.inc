<?php 

/*
	@return: Output, es el elemento HTML que controla el menú de opciones principal.
	
	 __construct.- Recibe un array '$value' con la siguiente estructura
	 Array
		(
			[n] => Array
				(
					[title] => Pruebas
					[icon] => brush-o
					[section] => Array
						(
							[n] => Array
								(
									[id] => 2
									[name] => Test
									[icon] => apple
									[folder] => test
									[file] => list
								)                    
				)
		)

*/

class navGroup {
				
	public $title;
	public $icon;
	public $sections;
	public $output;
				
	public function __construct($value){
		$this->title = $value['title'];
		$this->icon = ($value['icon']) ? ' <i class="icon icon-sudi-'. $value['icon'] .' nav_title_icon"></i>': '' ;
		$this->output = '<div class="nav_group">';
		$this->output .= '<li class="group_title">';
		$this->output .= '<span><i class="icon icon-sudi-arrow-right"></i> '.$this->title.'</span>';
		$this->output .= $this->icon;
		$this->output .= '</li>';
		
		foreach ($value['section'] as &$value) {
				
				
				// Validamos si es la instrucción especial "list"
				$theFolder = ($value['file'] === 'list') ? '_sudiEngine/_engine' : $value['folder'];
				$value['file'] = ($value['file'] === 'list') ? 'list_engine.php' : $value['file'];
								
			$thisIcon = ($value['icon']) ? '<i class="icon icon-sudi-'.$value['icon'].' nav_title_icon"></i>' : '' ;											
			$this->output .= '<li class="loadContent nav_item" data-target="main" data-content="'.$theFolder.'/'.$value['file'].'" data-post="folder_:_'.$value['folder'].'"><span>'.$value['name'].'</span>'.$thisIcon.'</li>';			
		}
						
		$this->output .= '</div>';
		return $output;
	}
			
	public function display(){
		return $this->output;	
	}	
}

?>