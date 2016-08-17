Pasos para usar el Edid Online

1.- Incluir los siguientes archivos en el index o en el head.php
    <script src="./edit_online/_css/special.css"></script>
    <script src="./edit_online/_js/special.js"></script>
    <script src="./edit_online/ckeditor/ckeditor.js"></script>
2.- Inlcuir el siguiente codigo enseguia de la etiqueta body
	-<body>
		<div id="LoadContent"></div>
3.- Incluir el boton login en donde ud. guste, el boton tendra que contener el id 'login-btn' y un data 'load'
	<a href="#" id="login-btn" data-load="login">Login</a>
4.- inlcuir las conecciones(connectMySql.php, sudi_functions.php) fuera del dominio publico
5.- incluir el siguiente codigo en la linea 1 de las secciones donde se quiere trabajar el "Edit online"
	<?php include_once("./edit_online/_session/_request.php");?> 
