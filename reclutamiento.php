<!DOCTYPE HTML>
<html>
    <head>
        <meta name="description" content= "CAMBIAR"/>
        <meta name="keywords" content="CAMBIAR"/> 
        
        <?php include_once("phpAssets/head.php"); ?>
        
        <title>CPI Seguridad | Nosotros</title>

    </head>
    <body>
    <?php include_once("phpAssets/analytics.php"); ?>
        <div id="big-container"> 
        	 <?php include_once("phpAssets/header.php"); ?>
             	<div id="img-reclutamiento" class="img-title"> <h1 class="page-title">RECLUTAMIENTO</h1> </div>
				<main id="reclutamiento">
                    <div id="descripcion-reclutamiento">
                        <p>Los aspirantes a ingresar a nuestra familia son seleccionados cumpliendo con los estándares establecidos por las Autoridades de Seguridad Pública, además de examen médico, antidoping, físico, psicológico y socioeconómico.</p>
                    </div>
                <div id="formulario-reclutamiento">
                <img class="bw" src="_images/galeria/reclutamiento-form.jpg" alt="">
                    <div class="formulario">
                        <input type="text" placeholder="Nombre">
                        <input type="text" placeholder="Edad">
                        
                        <select  name="sexo" id="">
                        	<option value="">Sexo</option>
                        	<option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                       	<input type="text" placeholder="Ciudad">
                        <input type="text" placeholder="Teléfono">
                        <input type="submit" placeholder="ENVIAR">       
                    </div>
                </div>
              	<div id="contacto-reclutamiento">
                <h1>CONTACTO</h1>
                <span>teléfono 01 800 00 (34337)</span>
                <a href=""><i class="icon icon-sudi-facebook"></i></a>
                </div>
                </main>
        	<div id="footer_cut"></div>
        </div><!--END #big-container -->
        
         <?php include_once("phpAssets/footer.php"); ?>
    
    </body>
</html>