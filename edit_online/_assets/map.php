<?php 
	include_once("../../edit_online/_phpClasses/class.SpryMaps.inc");
	if($_POST["choices"]){
		$datos = $_POST["choices"];
		for ($x = 0; $x <= count($datos); $x++) {
			$temp = explode("_:_",$datos[$x]);
			$_POST[$temp[0]] = $temp[1];
		}
	}
?>
<section id="content-loaded">
	<img class="close" src="./edit_online/_img/cross-out.svg">
    <form action="./edit_online/_session/_session.php" method="post" id="form_inputs" data-opcion="1">
    	<span class="tiitle">Lugares-</span>
		   <?php 
            $location = new input_googlemaps();
            $location->long = $row_rsElement[$location->long];
            $location->lat = $row_rsElement[$location->lat];
            $location->tooltip = 'Agregar la localización de la sucursal en coordenadas';
            $location->size = '1x';
            $location->label = 'Localización de la sucursal';
            $location->action = "add";
            echo $location->display();
           ?> 
        <input type="submit" value="Entrar">
    </form>
    <br class="clear">
</section>