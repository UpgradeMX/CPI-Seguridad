<?php 
include_once ("../../../../sudi_cpi_assets/connectMySql.php");
require_once ("../../../../sudi_cpi_assets/sudi_functions.php");
if($_POST["data"]){
	$datos = $_POST["data"];
	$datos = explode("_&_",$_POST["data"]);
	for ($x = 0; $x <= count($datos); $x++) {
		$temp = explode("_:_",$datos[$x]);
		$datos[$temp[0]] = $temp[1];
	}
}
$query_rsData = "SELECT * FROM ".$datos["table"]." WHERE data_id = ".$datos["id"].";";
$rsData = mysqli_query($connectMySql,$query_rsData);
$row_rsData = mysqli_fetch_assoc($rsData);
$totalRows_rsData = mysqli_num_rows($rsData);

$oldText = $row_rsData["data_text"];
$_POST["inputUpdate"] = preg_replace('~<p>~', '',$_POST['inputUpdate']);
$_POST["inputUpdate"] = preg_replace('~</p>~', '',$_POST['inputUpdate']);
if($_POST["inputUpdate"] != $oldText){
	$query_rsData = "UPDATE ".$datos["table"]." SET data_text = '".$_POST["inputUpdate"]."' WHERE data_id = ".$datos["id"].";";
	$rsData = mysqli_query($connectMySql,$query_rsData);
	
	$query_rsSearch = "SELECT * FROM old_data_tb WHERE odt_new_id = ".$datos["id"]." AND odt_data = '".$oldText."';";
	$rsSearch = mysqli_query($connectMySql,$query_rsSearch);
	$row_rsSearch = mysqli_fetch_assoc($rsSearch);
	$totalRows_rsSearch = mysqli_num_rows($rsSearch);
	if(!$totalRows_rsSearch){
		$query_rsData = "INSERT INTO old_data_tb (odt_new_id, odt_data) VALUES ('".$datos["id"]."', '".$oldText."');";
		$rsData = mysqli_query($connectMySql,$query_rsData);
	}
	//echo $query_rsSearch; exit;
}
header("location: ./../../index.php");
?>