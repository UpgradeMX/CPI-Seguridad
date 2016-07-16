<?php include ("Connections/connectMySql.php");?>
<?php echo $_GET["ciudad"]; ?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta name="description" content= "CAMBIAR"/>
        <meta name="keywords" content="CAMBIAR"/> 
        
        <?php include_once("phpAssets/head.php"); ?>
        
        <title>CPI Seguridad | Nosotros</title>
        
        <script type="text/javascript">
        	$(document).ready(function() {	
			
			var address =[];
			address[1] = ["Matriz Chihuahua","calle Falsa 123","663064633","31000"];
			address[2] = ["Matriz Mexico","Fake st 456","1234567","21310"];
			
				$('.dropdown-content a').click(function(e){
					e.preventDefault();
					var position_map_lat = $(this).data('lat');
					var position_map_long = $(this).data('long');
					var position_map_zoom = $(this).data('zoom');
					
					var info = $(this).data('info');
					
					var name = address[info][0];
					var street = address[info][1];
					var telephone = address[info][2];
					var cp = address[info][3];
					 
					document.getElementById("name").innerHTML=name;
					document.getElementById("street").innerHTML=street;
					document.getElementById("cp").innerHTML=cp;
					document.getElementById("telephone").innerHTML=telephone;
				
			
					// Mapa de google
					//var ulrMarker = '_images/general/market.png';
					var ulrMarker = 'https://maps.gstatic.com/mapfiles/ms2/micons/blue-dot.png';
		
					jQuery("#google").gmap3({
						marker:{
							values:[
								{latLng:[position_map_lat, position_map_long],  options:{ icon: ulrMarker, title:"CPI"}, data:"CPI"}
							]
						},
						map:{
							options:{
								mapTypeControl: false,
								zoom: position_map_zoom, // zoom del mapa
								center:[position_map_lat, position_map_long],
								mapTypeId: "cpi_map",
								navigationControl: false,
								scrollwheel: false,
								streetViewControl: true
							}
						},
						styledmaptype:{
							id: "cpi_map",
							options:{
								name: "cpi_map"
							},
							styles: [
								{
									elementType: "all",
								}
							]
						}
					});
				});
				
				// Mapa de google
				//var ulrMarker = '_images/general/market.png';
				var ulrMarker = 'https://maps.gstatic.com/mapfiles/ms2/micons/blue-dot.png';
	
				jQuery("#google").gmap3({
					marker:{
						values:[
							{latLng:[28.633016, -106.069188],  options:{ icon: ulrMarker, title:"UIS"}, data:"UIS"}
						]
					},
					map:{
						options:{
							mapTypeControl: false,
							zoom: 16, // zoom del mapa
							center:[28.633016, -106.069188],
							mapTypeId: "cpi_map",
							navigationControl: false,
							scrollwheel: false,
							streetViewControl: true
						}
					},
					styledmaptype:{
						id: "cpi_map",
						options:{
							name: "cpi_map"
						},
						styles: [
							{
								elementType: "all",
							}
						]
					}
				});
			});
        </script>

    </head>
    <body>
    <?php include_once("phpAssets/analytics.php"); ?>
        <div id="big-container"> 
        	 <?php include_once("phpAssets/header.php"); ?>
             	<div id="img-reclutamiento" class="img-title"> <h1 class="page-title">CONTACTO</h1> </div>
				<main id="contacto">
                <div id="contacto1">
                	<div class="sucursal-info">
                    	<h2><span id="name">MATRIZ CHIHUAHUA</span></h2>
                        <hr>
                         <p>Calle, colonia y número: <span id="street"></span> </p>
                         <p>Teléfono de contacto:<span id="telephone"></span></p>
                         <br>
                         <p>C.P. : <span id="cp"></span></p> 
                         
                         
                    <div class="sucursal-img">
                    </div></div><div class="sucursal-map">
                    	<div id="location_map"><div id="google"></div></div>
                    
                    </div>
                </div>
                
                
                <div class="dropdown">
                  <input class="dropdown-toggle" type="text">
                  <div class="dropdown-text">Buscar una sucursal</div>
                  <ul class="dropdown-content" >
                    <li><a data-lat="28.645421" data-long="-106.091889"  data-zoom="16" data-info="1" href="editar-nombre-ciudad">Sucursal 1</a></li>
                    <li><a data-lat="" data-long=""  data-zoom=""  data-info="2" href="editar-nombre-ciudad">Sucursal 2</a></li>
                    <li><a data-lat="" data-long=""  data-zoom="" href="editar-nombre-ciudad">Sucursal 3</a></li>
                  </ul>
                </div>
                <div id="formulario-contacto">
                
                    <div class="formulario">
                        <input type="text" placeholder="Nombre">
                        <input type="text" placeholder="Edad">
                       	<input type="text" placeholder="Ciudad">
                        <input type="email" placeholder="Correo electrónico">
                        <input type="submit" placeholder="ENVIAR">       
                    </div>
                </div>
                </main>
        	<div id="footer_cut"></div>
        </div><!--END #big-container -->
        
         <?php include_once("phpAssets/footer.php"); ?>
    
    </body>
</html>