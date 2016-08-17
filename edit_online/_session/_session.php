<?php 

include_once ("../../../../sudi_cpi_assets/connectMySql.php");
require_once ("../../../../sudi_cpi_assets/sudi_functions.php");
if($_GET["log"]=="out" || isset($_GET["log"])){
	session_name("_cpi");
	session_start ();
	session_destroy();
	$parametros_cookies = session_get_cookie_params(); 
	setcookie(session_name('_cpi'),0,1,$parametros_cookies["path"]);
	header("location: ../../index.php"); exit;
}

if(!$_POST["password"] && !$_POST["user"]){ header("location: ../../index.php"); exit;}
//echo "hola"; exit;
$query_rsUser = "SELECT * FROM users_tb WHERE user_mail = '".$_POST["user"]."' AND user_password = SHA1('".$_POST["password"]."');";
$rsUser = mysqli_query($connectMySql,$query_rsUser);
$row_rsUser = mysqli_fetch_assoc($rsUser);
$totalRows_rsUser = mysqli_num_rows($rsUser);
if(!$totalRows_rsUser){ header("location: ../../index.php?acces=denied"); exit;}
session_name("_cpi");
session_start ();
$_SESSION['UserId']  = $row_rsUser['user_id'];
$_SESSION['User']  = $row_rsUser['user_mail'];
$_SESSION ['Timeout']  = time(); 
header("location: ../../index.php?login=true"); exit;
?>