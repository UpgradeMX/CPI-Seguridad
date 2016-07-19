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
			
			//	$('.dropdown-content a').click(function(e){
//					e.preventDefault();
//					var position_map_lat = $(this).data('lat');
//					var position_map_long = $(this).data('long');
//					var position_map_zoom = $(this).data('zoom');
//					
//					var info = $(this).data('info');
//					
//					var name = address[info][0];
//					var street = address[info][1];
//					var telephone = address[info][2];
//					var cp = address[info][3];
//					 
//					document.getElementById("name").innerHTML=name;
//					document.getElementById("street").innerHTML=street;
//					document.getElementById("cp").innerHTML=cp;
//					document.getElementById("telephone").innerHTML=telephone;
//				
//			
//					// Mapa de google
//					//var ulrMarker = '_images/general/market.png';
//					var ulrMarker = 'https://maps.gstatic.com/mapfiles/ms2/micons/blue-dot.png';
//		
//					jQuery("#google").gmap3({
//						marker:{
//							values:[
//								//{latLng:[position_map_lat, position_map_long],  options:{ icon: ulrMarker, title:"CPI"}, data:"CPI"}
//								{latLng:["28.645421", "-106.091889"],  options:{ icon: ulrMarker, title:"CPI"}, data:"CPI"}
//							]
//						},
//						map:{
//							options:{
//								mapTypeControl: false,
//								zoom: 6, // zoom del mapa
//								center:["28.645421", "-106.091889"],
//								mapTypeId: "cpi_map",
//								navigationControl: false,
//								scrollwheel: false,
//								streetViewControl: true
//							}
//						},
//						styledmaptype:{
//							id: "cpi_map",
//							options:{
//								name: "cpi_map"
//							},
//							styles: [
//								{
//									elementType: "all",
//								}
//							]
//						}
//					});
//				});
//				
				// Mapa de google
				//var ulrMarker = '_images/general/market.png';
				var ulrMarker = 'https://maps.gstatic.com/mapfiles/ms2/micons/blue-dot.png';
	
				jQuery("#google").gmap3({
					marker:{
						values:[
							{latLng:[29.565038, -105.852349],  options:{ icon: ulrMarker, title:"Chihuahua"}, data:"Chihuahua"},
							{latLng:[29.074881, -110.958784],  options:{ icon: ulrMarker, title:"Hermosillo"}, data:"Hermosillo"},
							{latLng:[32.514112, -117.035010],  options:{ icon: ulrMarker, title:"Tijuana"}, data:"Tijuana"},
							{latLng:[21.163379, -86.855622],  options:{ icon: ulrMarker, title:"Cancún"}, data:"Cancún"},
							{latLng:[20.211271, -87.465439],  options:{ icon: ulrMarker, title:"Tulum"}, data:"Tulum"},
							{latLng:[32.624019, -115.451836],  options:{ icon: ulrMarker, title:"Mexicali"}, data:"Mexicali"},
							{latLng:[23.062599, -109.705005],  options:{ icon: ulrMarker, title:"San José del cabo"}, data:"San José del cabo"},
							{latLng:[25.542712, -103.407411],  options:{ icon: ulrMarker, title:"Torreón"}, data:"Torreón"},
							{latLng:[25.433785, -101.012221],  options:{ icon: ulrMarker, title:"Saltillo"}, data:"Saltillo"},
							{latLng:[25.589410, -103.482783],  options:{ icon: ulrMarker, title:"Gómez Palacio"}, data:"Gómez Palacio"},
							{latLng:[20.517501, -103.180202],  options:{ icon: ulrMarker, title:"El Salto"}, data:"El Salto"},
							{latLng:[25.042774, -105.424381],  options:{ icon: ulrMarker, title:"Santiago Papasquiaro"}, data:"Santiago Papasquiaro"},
							{latLng:[25.042774, -105.424381],  options:{ icon: ulrMarker, title:"Guadalupe Victoria"}, data:"Guadalupe Victoria"},
							{latLng:[25.179758, -104.556457],  options:{ icon: ulrMarker, title:"Rodeo"}, data:"Rodeo"},
							{latLng:[24.868480, -103.697117],  options:{ icon: ulrMarker, title:"Cuencamé"}, data:"Cuencamé"},
							{latLng:[23.732294, -103.982806],  options:{ icon: ulrMarker, title:"Vicente Guerrero"}, data:"Vicente Guerrero"},
							{latLng:[24.529457, -104.765857],  options:{ icon: ulrMarker, title:"Canatlán"}, data:"Canatlán"},
							{latLng:[25.687718, -100.315464],  options:{ icon: ulrMarker, title:"Monterrey"}, data:"Monterrey"},
							{latLng:[25.657155, -100.399975],  options:{ icon: ulrMarker, title:"San Pedro Garza García"}, data:"San Pedro Garza García"},
							{latLng:[26.049792, -98.293115],  options:{ icon: ulrMarker, title:"Reynosa"}, data:"Reynosa"},
							{latLng:[25.868571, -97.502242],  options:{ icon: ulrMarker, title:"Matamoros"}, data:"Matamoros"},
							{latLng:[25.985678, -98.096899],  options:{ icon: ulrMarker, title:"Río Bravo"}, data:"Río Bravo"},
							{latLng:[24.841702, -98.150105],  options:{ icon: ulrMarker, title:"San Fernando"}, data:"San Fernando"},
							{latLng:[27.477816, -99.548027],  options:{ icon: ulrMarker, title:"Nuevo Laredo"}, data:"Nuevo Laredo"},
							{latLng:[19.434793, -99.195685],  options:{ icon: ulrMarker, title:"Polanco"}, data:"Polanco"},
							{latLng:[19.379513, -99.247707],  options:{ icon: ulrMarker, title:"Santa Fe"}, data:"Santa Fe"},
							{latLng:[19.290096, -99.099117],  options:{ icon: ulrMarker, title:"Xochimilco"}, data:"Xochimilco"},
							{latLng:[19.600957, -99.047320],  options:{ icon: ulrMarker, title:"Ecatepec"}, data:"Ecatepec"},
							{latLng:[20.100250, -98.758495],  options:{ icon: ulrMarker, title:"Pachuca"}, data:"Pachuca"},
							{latLng:[19.840624, -98.981729],  options:{ icon: ulrMarker, title:"Tizayuca"}, data:"Tizayuca"},
							{latLng:[20.579698, -100.060493],  options:{ icon: ulrMarker, title:"Queretaro de Arteaga"}, data:"Queretaro de Arteaga"},
							{latLng:[18.505233, -98.304647],  options:{ icon: ulrMarker, title:"Puebla"}, data:"Puebla"},
							{latLng:[19.780370, -70.689174],  options:{ icon: ulrMarker, title:"Puerto Plata(Republica Dominicana)"}, data:"Puerto plata(Republica Dominicana)"},
						]
					},
					map:{
						options:{
							mapTypeControl: false,
							zoom: 4, // zoom del mapa
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