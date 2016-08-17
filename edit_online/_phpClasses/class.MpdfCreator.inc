<?php 
class pdf_creator {
		/* 1) Spry */ 
		public $pdf_head;
		public $pdf_footer;
		public $pdf_title;
		public $pdf_body;
		public $pdf_style;
		public $pdf_size;
		public $margins;
		public $orientation;
		public $output;
	
		function display(){
			/** 		
				* Mostrar el Input en el DOM
				* @return spry or input
			**/
			$html = '';
			
			$html .= ($this->pdf_body)? $this->pdf_body :'';		
			
			include("../../../../mpdf/mpdf.php");
			$orientationPage = array('','-L');
			$mpdf=new mPDF('utf-8', $this->pdf_size.$orientationPage[$this->orientation],'','',$this->margins[0],$this->margins[1],$this->margins[2],$this->margins[3]);

			// Cargamos Estilos
			
				for($i = 0; $i < count($this->pdf_style); $i++){
					$stylesheet = file_get_contents('../../'.$this->pdf_style[$i]);
					$mpdf->WriteHTML($stylesheet,1); // 1 para indicar que es CSS
					
				}
				
			// Establecemos Encabezado y Pie de página
				$mpdf->SetHTMLHeader($this->pdf_head);
				$mpdf->SetHTMLFooter($this->pdf_footer);
				$mpdf->SetDisplayMode('fullpage');
				$mpdf->SetTitle($this->pdf_title);
				$mpdf->WriteHTML($html); // <-- Se inserta el HTML
					
				$mpdf->Output($this->pdf_title.'.pdf',$this->output);
		}
}

?>