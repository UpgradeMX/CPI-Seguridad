<?php include_once("./edit_online/_session/_request.php"); include_once ("../../sudi_cpi_assets/connectMySql.php");?>
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

$query_rsUbicacion = "SELECT * FROM mapa_tb WHERE hidefield=0;";
$rsUbicacion = mysqli_query($connectMySql,$query_rsUbicacion);
$row_rsUbicacion = mysqli_fetch_assoc($rsUbicacion);
$totalRows_rsUbicacion = mysqli_num_rows($rsUbicacion);
$ubicaciones = "";
do{
	$ubicaciones .= $row_rsUbicacion["map_name"]." • ";
}while($row_rsUbicacion = mysqli_fetch_assoc($rsUbicacion));

$ubicaciones = trim($ubicaciones," • ");

?>
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
		pause:0,	 
	speed:3000, 	 
	easing:'linear',
    slideWidth: 300,
    minSlides: 1,
    maxSlides: 3,
	moveSlides:1,
    slideMargin: 10,
	auto: true,
	responsive: true,
	pager:false
	  });
	});

    
    </script>
    </head>
    <body>
    <div id="LoadContent"></div>
    <?php include_once("phpAssets/analytics.php"); ?>
        <div id="big-container"> 
        	 <?php include_once("phpAssets/header.php"); ?>
				<main id="index">
                	<div id="welcome" style="background-image:url('http://sudi-cpi.upgrade.red/<?php echo $arrayImage[1];?>');">
                    <p><span style="font-size: 1.5em;" class="<?php echo $class; ?>" <?php if($edit){?>data-load="contload" data-datos="id_:_1_&_table_:_data_tb"<?php }?>><?php echo $arrayData["1"];?></span><br>
<span class="jumbo <?php echo $class; ?>" <?php if($edit){?>data-load="contload" data-datos="id_:_2_&_table_:_data_tb"<?php }?>><?php echo $arrayData["2"];?></span> <br>
<span class="<?php echo $class; ?>" <?php if($edit){?>data-load="contload" data-datos="id_:_3_&_table_:_data_tb"<?php }?> style="font-size: 1.5em;"Kovaciw40
><?php echo $arrayData["3"];?></span></p>
                   
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
                        <a href="<?php echo $rootpath; ?>contacto">
                        <div class="lista-ciudades">
                       		<p><?php print $ubicaciones;?><!--Chihuahua • Hermosillo• Tijuana • Cancún • Tulum • Mexicali • San José del Cabo • Torreón • Saltillo • Gómez Palacio • Durango • El Salto • Santiago Papasquiaro • Guadalupe Victoria • Rodeo • Cuencamé • Vicente Guerrero • Canatlán • Monterrey • San Pedro Garza García • Reynosa • Matamoros • Río Bravo • San Fernando • Nuevo Laredo • Polanco • Santa Fe • Xochimilco • Ecatepec • Pachuca • Tizayuca • Querétaro de Arteaga • Puebla • Puerto Plata (República Dominicana)--></p>
                        </div>
                        </a>
                    </div>
                    </div>
                    
                    <div id="third" class="index-section"  style="background-image:url('http://sudi-cpi.upgrade.red/<?php echo $arrayImage[2];?>');">
                    <h1 class="<?php echo $class; ?>" <?php if($edit){?>data-load="contload" data-datos="id_:_4_&_table_:_data_tb"<?php }?>><?php echo $arrayData["4"];?></h1>
                    </div>
                    
                    <div id="last" class="index-section">
                    <div id="contacto-index" class="col-50" style="background-image:url('http://sudi-cpi.upgrade.red/<?php echo $arrayImage[3];?>');">
                    <!--<img src="_images/galeria/contacto-index-bg.jpg" alt="">-->
                    <span>Contacto <a href="tel:018000034337">01 800 00 (34337)</a></span>
                    </div><div id="index-clientes" class="col-50">
                   	<h1 class="sect-title">algunos de nuestros clientes</h1> 
                    
             			<div id="gradient-radial"></div>
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