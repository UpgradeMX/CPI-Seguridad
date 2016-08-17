<?php 
	include_once("../../edit_online/_phpClasses/class.SpryTextfield.inc");
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
    	<span class="tiitle">Login</span>
        <input type="text" name="user" class="input">
        <input type="password" name="password" class="input">
        <input type="submit" value="Entrar">
    </form>
    <br class="clear">
</section>