<?php 
if($_POST["choices"]){
	$datos = $_POST["choices"];
	for ($x = 0; $x <= count($datos); $x++) {
		$temp = explode("_:_",$datos[$x]);
		$_POST[$temp[0]] = $temp[1];
	}
}
?>