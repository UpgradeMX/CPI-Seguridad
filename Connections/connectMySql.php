<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
/*$server_source = "remote"; // 'local' o 'remote'

$hostname_connectMySql = "localhost";

if($server_source == 'local'):
$rootPath = 'http://localhost/nombre_proyecto/';
$database_connectMySql = "";
$username_connectMySql = "root";
$password_connectMySql = "root";
else:
$rootPath = 'http://cpi.upgrade.red/'; 
$database_connectMySql = "";
$username_connectMySql = "";
$password_connectMySql = "";
endif;

$connectMySql = new mysqli($hostname_connectMySql, $username_connectMySql, $password_connectMySql, $database_connectMySql);
if (mysqli_connect_error()) {
    printf("Conexi&oacute;n fallida: %s\n", mysqli_connect_error());
    exit();
}
$GLOBALS['connectMySql'] = $connectMySql;
mysqli_query($connectMySql,"SET NAMES 'utf8'");*/

$rootpath = 'http://cpi.upgrade.red/'; 
?>