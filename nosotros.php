<?php include_once("./edit_online/_session/_request.php"); include_once ("../../sudi_cpi_assets/connectMySql.php");?>
<?php 
$query_rsData = "SELECT * FROM data_tb;";
$rsData = mysqli_query($connectMySql,$query_rsData);
$row_rsData = mysqli_fetch_assoc($rsData);
$totalRows_rsData = mysqli_num_rows($rsData);
$arrayData = array();
do{
$arrayData[$row_rsData["data_id"]]=$row_rsData["data_text"];
}while($row_rsData = mysqli_fetch_assoc($rsData));

$query_rsImages = "SELECT * FROM images_tb;";
$rsImages = mysqli_query($connectMySql,$query_rsImages);
$row_rsImages = mysqli_fetch_assoc($rsImages);
$totalRows_rsImages = mysqli_num_rows($rsImages);
$arrayImage = array();
do{
$arrayImage[$row_rsImages["img_section"]]=$row_rsImages["img_file"];
}while($row_rsImages = mysqli_fetch_assoc($rsImages));

if($edit){//echo "exito:".date('m/d/Y H:i:s', $_SESSION['Timeout']);
 }?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta name="description" content= "CAMBIAR"/>
        <meta name="keywords" content="CAMBIAR"/> 
        
        <?php include_once("phpAssets/head.php"); ?>
        
        <title>CPI Seguridad | Nosotros</title>

    </head>
    <body>
    <div id="LoadContent"></div>
    <?php include_once("phpAssets/analytics.php"); ?>
        <div id="big-container"> 
        	 <?php include_once("phpAssets/header.php"); ?>
             	<div id="img-nosotros" class="img-title"  style="background-image:url('http://sudi-cpi.upgrade.red/<?php echo $arrayImage[4];?>');"> <h1 class="page-title">NOSOTROS</h1> </div>
				<main id="nosotros">
                <div class="nosotros-apt">
                    <h2>Historia</h2>
                    <p class="<?php echo $class; ?>" <?php if($edit){?>data-load="contload" data-datos="id_:_5_&_table_:_data_tb"<?php }?>><?php echo $arrayData["5"];?></p>
                </div>
              		<div id="one" class="background-fixed" style="background-image:url('http://sudi-cpi.upgrade.red/<?php echo $arrayImage[5];?>');"></div>
                    <div class="nosotros-apt">
                    <h2>Misión</h2>
                    <p class="<?php echo $class; ?>" <?php if($edit){?>data-load="contload" data-datos="id_:_6_&_table_:_data_tb"<?php }?>><?php echo $arrayData["6"];?></p>
                    </div>
                	<div id="two" class="background-fixed" style="background-image:url('http://sudi-cpi.upgrade.red/<?php echo $arrayImage[6];?>');"></div>
                    <div class="nosotros-apt">
                    <h2>visión</h2>
                    <p class="<?php echo $class; ?>" <?php if($edit){?>data-load="contload" data-datos="id_:_7_&_table_:_data_tb"<?php }?>><?php echo $arrayData["7"];?></p>
                    </div>
                <div id="nosotros-reclutamiento" class="nosotros-apt">
                	<h1>¿Quieres pertenecer al equipo?</h1>
                    <a id="btn-nosotros" href="<?php echo $rootpath; ?>reclutamiento">RECLUTAMIENTO</a>
                </div>
                
                </main>
        	<div id="footer_cut"></div>
        </div><!--END #big-container -->
        
         <?php include_once("phpAssets/footer.php"); ?>
    
    </body>
</html>