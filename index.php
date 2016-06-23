<!DOCTYPE HTML>
<html>
    <head>
        <meta name="description" content= "CAMBIAR"/>
        <meta name="keywords" content="CAMBIAR"/> 
        
        <?php include_once("phpAssets/head.php"); ?>
        
        <title>CPI Seguridad</title>
	
    <script>
    $(document).ready(function(){
	  $('.bxslider').bxSlider({
		slideWidth: 300,
		minSlides: 3,
		maxSlides: 3,
		slideMargin: 10,
		auto: true,
		pager:false
		
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
                    </div>
                    
                    <div class="index-section">
                   	<div id="large-header" class="large-header col-50">
                      <canvas id="demo-canvas"></canvas>
                        <h1 class="sect-title">CONFIANZA</h1>
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
                    <img src="_images/galeria/contacto-index-bg.jpg" alt="">
                    <span>Contacto 01 800 00 (34337)</span>
                    </div><div id="index-clientes" class="col-50">
                   	<h1 class="sect-title">algunos de nuestros clientes</h1> 
                    
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="200">
						  <defs>
							<filter id="filter">
							  <feGaussianBlur stdDeviation="5"/>
							</filter>
							<mask id="mask">
							  <ellipse cx="50%" cy="50%" rx="25%" ry="25%" fill="white" filter="url(#filter)"></ellipse>
							</mask>
						  </defs>
						      <ul class="bxslider" mask="url(#mask)">
                      

                          <li><img src="_images/clientes/ai.jpg" /></li>
                          <li><img src="_images/clientes/alestra.jpg" /></li>
                          <li><img src="_images/clientes/altta.jpg" /></li>
                          <li><img src="_images/clientes/banorte.jpg" /></li>
                          <li><img src="_images/clientes/bio.jpg" /></li>
                          
                        </ul>
						  
						</svg>
                    
                    </div>
                    
                    </div>
                
                </main>

        	<div id="footer_cut"></div>
        </div><!--END #big-container -->
        
         <?php include_once("phpAssets/footer.php"); ?>
    
    </body>
</html>