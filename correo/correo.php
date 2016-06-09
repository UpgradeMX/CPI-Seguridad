<?php 
	function mailContent($style,$myStyle,$header,$contenido,$footer){	
		// NO MODIFICAR
		$html = ' 
			<!DOCTYPE HTML> 
			<html>
				<head>
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
					<title>Ibance</title>
					<link rel="stylesheet" type="text/css" href="correo/style.css" media="screen" />
					<link rel="stylesheet" type="text/css" href="correo/myStyle.css" media="screen" />
				</head>
				'.$style.'
				'.$myStyle.'
				<body>
					<table id="base" width="100%" border="0" cellspacing="0" cellpadding="0">
						<tbody>
							<tr>
								<td>
									<table class="container" width="60%" align="center" border="0" cellpadding="0" cellspacing="0">
										<tbody>
											'.$header.'
											'.$contenido.'
											'.$footer.'
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</body>
			</html>
		';
		// NO MODIFICAR [ end ]
		
		return $html;
	}
?>