<?php
class mailer {
	/*
	*Clase: Mailer
	@return: Input con varias opciones
	*/
	
	// Propiedades
	/* 01) Nombre*/
	public $nombre;
	/* 02) Mail (Correo al usuario ARRAY)*/
	public $email;
	/* 03) Asunto*/
	public $asunto;
	/* 04) Mensaje*/
	public $mensaje;
	/* 05) From*/
	public $from;
	/* 06) Style*/
	public $style;
	/* 07) Header*/
	public $header;
	/* 08) Footer*/
	public $footer;
	/* 09) Contenido*/
	public $contenido;
	
	public function __construct($the_nombre, $the_email, $the_asunto, $the_mensaje, $the_from, $the_style, $the_header, $the_footer, $the_cont){
		/** 		
		* Asignar datos a la variable
		* @return none 
		**/
		$this->nombre = $the_nombre; 
		$this->email = $the_email; 
		$this->asunto =  $the_asunto; 
		$this->mensaje = $the_mensaje; 
		$this->from = $the_from;
		$this->style = $the_style;
		$this->head = $the_header;
		$this->footer = $the_footer;
		$this->contenido = $the_cont;
		
		
		
		$this->asunto = ($this->asunto)?$this->asunto:'Sin asunto';
		
		$mailHeader2 = "";
		$mailHeader2 .= "X-Mailer: PHP/" . phpversion() . "\r\n";
		$mailHeader2 .= "Mime-Version: 1.0 \r\n";
		$mailHeader2 .= "Content-Type: text/html; charset='ISO-8859-1';";
		
		/* * * C O R R E O * * * U S U A R I O * * */
		if($this->email){
			
			$mail_User = '';
			$mail_User.= $this->style;
			$mail_User.= $this->head;
			$mail_User.= $this->contenido;
			$mail_User.= $this->footer;
			
			$acum = 0;
			for ($i = 0; $i <= count($this->email)-1 ; $i++) {
				//DEBUG 
				//
				//echo $mail_User; 
				mail($this->email[$acum], utf8_decode($this->asunto), utf8_decode($mail_User), "From: " . $this->from . "\r\n".$mailHeader2);	
				$acum++;
			} 
		}
	}
} 
?>