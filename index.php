<!DOCTYPE HTML>
<html>
    <head>
        <meta name="description" content= "CAMBIAR"/>
        <meta name="keywords" content="CAMBIAR"/> 
        
        <?php include_once("phpAssets/head.php"); ?>
        
        <title>CPI Seguridad</title>
	
    <script>
    $(document).ready(function(){
		var slidecount;
		if ($(window).width() > 425){
			slidecount = 3;
			} else {slidecount = 2;}
		
	  $('.bxslider').bxSlider({
		slideWidth: 400,
		minSlides: slidecount,
		maxSlides: slidecount,
		slideMargin: 10,
		auto: true,
		pager:false,
		responsive:true	
	  });
	});

    
    </script>
    </head>
    <body>
    <?php include_once("phpAssets/analytics.php"); ?>
        <div id="big-container"> 
        	 <?php include_once("phpAssets/header.php"); ?>
				<main id="index">
                	<div id="welcome">
                    <p>Contamos con la experiencia de <br>
						<span class="jumbo">20 años</span> <br>
						prestando nuestros servicios de seguridad para la industria, el <br>
                        comercio, el turismo, la construcción y residencial</p>
                        <div class="arrows">
                        <div class="arrow arrow-1"></div>
						<div class="arrow arrow-2"></div>
                        </div>
                    </div>
                    
                    <div class="index-section">
                   	<div id="large-header" class="large-header col-50">
                      <canvas id="demo-canvas"></canvas>
                        <h1 class="sect-title word-carousel" data-index="1">CONFIANZA</h1>
                        <h1 class="sect-title word-carousel" data-index="2">PROTECCIÓN</h1>
                        <h1 class="sect-title word-carousel" data-index="3">INTEGRIDAD</h1>
                    </div><div id="ciudades-index" class="col-50">
                    	<h1 class="sect-title">nuestras ciudades</h1>
                        <a href="">
                        <div class="lista-ciudades">
                       		<p>Chihuahua • Hermosillo • Tijuana • Cancún • Tulum • Mexicali • San José del Cabo • Torreón • Saltillo • Gómez Palacio • Durango • El Salto • Santiago Papasquiaro • Guadalupe Victoria • Rodeo • Cuencamé • Vicente Guerrero • Canatlán • Monterrey • San Pedro Garza García • Reynosa • Matamoros • Río Bravo • San Fernando • Nuevo Laredo • Polanco • Santa Fe • Xochimilco • Ecatepec • Pachuca • Tizayuca • Querétaro de Arteaga • Puebla • Puerto Plata (República Dominicana)</p> 
                        </div>
                        </a>
                    </div>
                    </div>
                    
                    <div id="third" class="index-section">
                    
                    </div>
                    
                    <div id="last" class="index-section">
                    <div id="contacto-index" class="col-50">
                    <!--<img src="_images/galeria/contacto-index-bg.jpg" alt="">-->
                    <span>Contacto 01 800 00 (34337)</span>
                    </div><div id="index-clientes" class="col-50">
                   	<h1 class="sect-title">algunos de nuestros clientes</h1> 
                    
             
						 <ul class="bxslider">
                      

                          <li><img src="_images/clientes/ai.jpg" /></li>
                          <li><img src="_images/clientes/alestra.jpg" /></li>
                          <li><img src="_images/clientes/altta.jpg" /></li>
                          <li><img src="_images/clientes/banorte.jpg" /></li>
                          <li><img src="_images/clientes/bio.jpg" /></li>
                          
                        </ul>
						  
                    </div>
                    
                    </div>
                
                </main>

        	<div id="footer_cut"></div>
        </div><!--END #big-container -->
        
         <?php include_once("phpAssets/footer.php"); ?>
    
    </body>
</html>