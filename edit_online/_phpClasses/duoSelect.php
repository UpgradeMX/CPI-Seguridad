<?php
	// incluimos la conexión a la base de datos include ("../../../../sudi_assets/connectMySql.php");
	include ("../_sudiEngine/_engine/config.php");
	include ("../../../".$root_folder."/connectMySql.php");
	$query_rsBusqueda = sprintf("SELECT bank_id, bank_name FROM ".$_POST['table']." WHERE ".$_POST['union']." = ".$_POST['bank_fisc_ae_id']." AND hideField = 0");
	//debug echo $query_rsBusqueda; //exit;
	$rsBusqueda = mysqli_query($connectMySql,$query_rsBusqueda);
	$row_rsBusqueda = mysqli_fetch_assoc($rsBusqueda);
	$totalRows_rsBusqueda = mysqli_num_rows($rsBusqueda);
?>
<option value="-1" selected="selected" ><?php echo $_POST['title'];?></option>
<?php if($_POST['opc']){?>
	<option value="0" ><?php echo $_POST['opc']; ?></option>
<?php } ?>
<?php if($totalRows_rsBusqueda){ do{?>
			<option value="<?php echo $row_rsBusqueda['bank_id']?>"><?php echo $row_rsBusqueda['bank_name']?></option>
<?php } while($row_rsBusqueda = mysqli_fetch_assoc($rsBusqueda));
  
}else{?>
	<option value="-1">No existen registros</option>
<?php } ?>