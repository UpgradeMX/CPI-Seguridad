<?php 
	include_once ("../../../../sudi_cpi_assets/connectMySql.php");
	include_once("../../edit_online/_phpClasses/class.SpryTextfield.inc");
	//include_once("./edit_online/_php/arrayPost.php");
	if($_POST["choices"]){
		$datos = $_POST["choices"];
		for ($x = 0; $x <= count($datos); $x++) {
			$temp = explode("_:_",$datos[$x]);
			$_POST[$temp[0]] = $temp[1];
		}
	}
	$query_rsData = "SELECT * FROM ".$_POST["table"]." WHERE data_id = ".$_POST["id"].";";
	$rsData = mysqli_query($connectMySql,$query_rsData);
	$row_rsData = mysqli_fetch_assoc($rsData);
	$totalRows_rsData = mysqli_num_rows($rsData);
	
	$query_rsOld = "SELECT * FROM old_data_tb WHERE odt_new_id = ".$_POST["id"].";";
	$rsOld = mysqli_query($connectMySql,$query_rsOld);
	$row_rsOld = mysqli_fetch_assoc($rsOld);
	$totalRows_rsOld = mysqli_num_rows($rsOld);
?>
<section id="content-loaded">
	<img class="close" src="./edit_online/_img/cross-out.svg">
    <form action="./edit_online/_php/edit.php" method="post" id="form_inputs" data-opcion="1">
    	<span class="tiitle">Editar</span>
        <br>
        <textarea name="inputUpdate" id="inputUpdate" rows="10" cols="80">
            <?php echo $row_rsData["data_text"];?>
        </textarea>
        <script>
            CKEDITOR.replace( 'inputUpdate' , {
				language: 'es',
				uiColor: '#c7c7c7',
				removeButtons: 'About,Link,Unlink,Anchor,Indent,Outdent,NumberedList,BulletedList,Italic,Bold,Underline,Strike,Subscript,Superscript'
			});
			CKEDITOR.instances.inputUpdate.on('change', function() { 
				if(!$('#inputUpdate').hasClass('spry_changed')){
					$('#inputUpdate').addClass('spry_changed');
				}
			});
			$(".OldDataSelected").click(function(e) {
				var html = $(this).html();
				var oldhtml = CKEDITOR.instances['inputUpdate'].getData().replace('<p>', '').replace('</p>', '');
				//oldhtml.replace('</p>', '');
				console.log(oldhtml);
				CKEDITOR.instances['inputUpdate'].setData(html);
				$(this).html(oldhtml);
			});
        </script>
         <br>
         <?php if($totalRows_rsOld){ ?>
         <section id="old_data">
         	<span>Historial de cambio, Usted puede selecionar cambios anteriores y guardarlos.</span>
			 <?php 
             do{
				 if($row_rsData["data_text"]!=$row_rsOld["odt_data"]){
                 	echo "<p class='OldDataSelected'>".$row_rsOld["odt_data"]."</p>";
				 }
             }while($row_rsOld = mysqli_fetch_assoc($rsOld));
             ?>
         </section>
         <?php } ?>
         <input type="hidden" name="data" value="table_:_<?php echo $_POST["table"];?>_&_id_:_<?php echo $_POST["id"];?>">
        <input type="submit" value="Enviar">
    </form>
    <br class="clear">
    
</section>
<script type="text/javascript">
console.log("<?php echo $query_rsData;?>");
</script>