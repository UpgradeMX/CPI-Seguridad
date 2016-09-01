<?php  include_once("./edit_online/_session/_request.php"); include_once ("../../sudi_cpi_assets/connectMySql.php");?>
<?php 
	$query_rsData = "SELECT * FROM data_tb;";
	$rsData = mysqli_query($connectMySql,$query_rsData);
	$row_rsData = mysqli_fetch_assoc($rsData);
	$totalRows_rsData = mysqli_num_rows($rsData);
	$arrayData = array();
	do{
	$arrayData[$row_rsData["data_id"]]=$row_rsData["data_text"];
	}while($row_rsData = mysqli_fetch_assoc($rsData));
	
	$query_rsImages = "SELECT * FROM images_tb;";
	$rsImages = mysqli_query($connectMySql,$query_rsImages);
	$row_rsImages = mysqli_fetch_assoc($rsImages);
	$totalRows_rsImages = mysqli_num_rows($rsImages);
	$arrayImage = array();
	do{
	$arrayImage[$row_rsImages["img_section"]]=$row_rsImages["img_file"];
	}while($row_rsImages = mysqli_fetch_assoc($rsImages));
	if($edit){//echo "exito:".date('m/d/Y H:i:s', $_SESSION['Timeout']);
	 }

	include_once("spryClass/class.SpryTextfield.inc"); 
	include_once("spryClass/class.SpryTextarea.inc"); 
	include_once("spryClass/class.SprySelect.inc");
	
	if ((isset($_POST["MMinsert"])) && ($_POST["MMinsert"] == "runContacto")) {
	
		$nombre = $_POST['name'];
		$edad = $_POST['edad'];
		$ciudad = $_POST['ciudad'];
		$correo = $_POST['mail'];
		$sexo = $_POST['sexo'];
		 
		$mailHeader = "From: " . $nombre . " \r\n";
		$mailHeader .= "X-Mailer: PHP/" . phpversion() . " \r\n";
		$mailHeader .= "Mime-Version: 1.0 \r\n";
		$mailHeader .= "Content-Type: text/html; charset=utf-8";
		
		$mailHeader2 = "From: contacto@cpi.com \r\n";
		$mailHeader2 .= "X-Mailer: PHP/" . phpversion() . " \r\n";
		$mailHeader2 .= "Mime-Version: 1.0 \r\n";
		$mailHeader2 .= "Content-Type: text/html; charset=utf-8";
		
		// Contactos a enviar el correo
		$para = 'natsumi@upgrade.com.mx';
	
		
		// Incluir los estilos
		include_once("correo/style.php");
		include_once("correo/myStyle.php");
		// Incluir Header y Footer
		include_once('correo/correo_h&f.php');
		// Contenido del mensaje enviado al usuario y al administrador
		include_once('correo/correo_contenido.php');
		// Función que crea toda la estructura del correo
		include_once("correo/correo.php");
		
		// Correo al Administrador
		$mailContentAdmin  = mailContent($style,$myStyle,$header,$mensaje_reclutamiento_admin,$footer);
		mail($para, utf8_decode("Contacto desde sitio web"), utf8_decode($mailContentAdmin), $mailHeader);		
		// Correo al Usuario
		$mailContentUser = mailContent($style,$myStyle,$header,$mensaje_reclutamiento_usuario,$footer);
		mail($correo, utf8_decode("CPI seguridad"), utf8_decode($mailContentUser), $mailHeader2);	
		
		//echo $mailContentAdmin.'<br/>'.$mailContentUser;	
		
		header("Location: ".$rootPath."contacto/enviado");
		exit;
	
	}
	
	if( $_GET['status'] ) { $opacity = 'style="opacity:1;"'; }
?>  
<!DOCTYPE HTML>
<html>
    <head>
        <meta name="description" content= "CAMBIAR"/>
        <meta name="keywords" content="CAMBIAR"/> 
        
        <?php include_once("phpAssets/head.php"); ?>
        
        <title>CPI Seguridad | Reclutamiento</title>

    </head>
    <body>
    <div id="LoadContent"></div>
    <?php include_once("phpAssets/analytics.php"); ?>
        <div id="big-container"> 
        	 <?php include_once("phpAssets/header.php"); ?>
             	<div id="img-reclutamiento" class="img-title" style="background-image:url('http://sudi-cpi.upgrade.red/<?php echo $arrayImage[7];?>');"> <h1 class="page-title">RECLUTAMIENTO</h1> </div>
				<main id="reclutamiento">
                    <div id="descripcion-reclutamiento">
                        <p class="<?php echo $class; ?>" <?php if($edit){?>data-load="contload" data-datos="id_:_8_&_table_:_data_tb"<?php }?>><?php echo $arrayData["8"];?></p>
                    </div>
                <div id="formulario-reclutamiento">
                <img class="bw" src="_images/galeria/reclutamiento-form.jpg" alt="">
                      <form action="<?php echo $rootPath; ?>reclutamiento" method="post" class="formulario">
                      
                      	 <?php 
                        $nombre = new input_textfield;
                        $nombre->spry = "spryNombre";
                        $nombre->name = "name";
                        $nombre->hint = "Nombre";
						$nombre->class = "nombre";
                        $nombre->required = true;
                        echo $nombre->display();
						
                        $edad = new input_textfield;
						$edad->spry = "spryEdad";
						$edad->name = "edad";
						$edad->hint = "edad";
                        $edad->required = true;
                        echo $edad->display();
						
						$arraySexo = array();
						
						array_push($arraySexo,array("masculino","1"),array("femenino","0"));
						$sexo = new input_select;
						$sexo->title = "Sexo";
						$sexo->spry = "sprySexo";
						$sexo->name = "sexo";
						$sexo->options = $arraySexo;
						$sexo->required = true;
						$sexo->size = "2x";
						$sexo->action = $action;
						$sexo->data = $row_rsElement[$sexo->name];
						echo $sexo->display();
						
						
						$ciudad = new input_textfield;
						$ciudad->spry = "spryCiudad";
						$ciudad->name = "ciudad";
						$ciudad->hint = "ciudad";
                        $ciudad->required = true;
                        echo $ciudad->display();
						
                        $correo = new input_textfield;
                        $correo->spry = "spryMail";
                        $correo->name = "mail";
                        $correo->hint = "Correo electrónico";
                        $correo->type = "email";
                        $correo->required = true;
                        echo $correo->display();
                        
                    
						
                    ?>
                      
                        <input type="submit" placeholder="ENVIAR">
                        <input type="hidden" name="MMinsert" value="runContacto"/       
                    </div>
                </div>
              	<div id="contacto-reclutamiento" style="background-image:url('http://sudi-cpi.upgrade.red/<?php echo $arrayImage[8];?>');">
                <h1>CONTACTO</h1>
                <span>teléfono 01 800 00 (34337)</span>
                <a target="_blank" href="https://www.facebook.com/CPISEGURIDADPRIVADA/"><i class="icon icon-sudi-facebook"></i></a>
                </div>
                </main>
        	<div id="footer_cut"></div>
        </div><!--END #big-container -->
        
         <?php include_once("phpAssets/footer.php"); ?>
    
    </body>
</html>