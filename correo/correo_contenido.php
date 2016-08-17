<?php 
	
	$mensaje_usuario = '
		 <tr>
			<td valign="top" class="rows" id="contenido">
				<table class="one" align="left">
					<tbody>
						<tr>
							
							<td id="mensaje_user"> 
							
								<h1>&iexcl;Gracias por contactarnos!</h2> 
								<p> Estaremos respondiendo lo más pronto posible.</p>
							</td>
						</tr>
					</tbody>
				</table>
				<table class="tri_2" align="left">
					<tbody>
						
					</tbody>
				</table>
			</td>
		</tr>
	';
	
	$mensaje_admin = '
		 <tr>
			<td valign="top" class="rows" id="contenido">
				<table class="one" align="left">
					<table class="duo" align="left">
					<tbody>
						<tr>
							<td > 
							
							</td>
							<td id="mensaje_user"  style="vertical-align:top;">  
							
								<h1 style="padding: 0;">&iexcl;El siguiente usuario ha hecho contacto desde el sitio!</h1> 
							</td>
						</tr>
					</tbody>
				</table>
				<table class="tri_2" align="left">
					<tbody>
						<tr>
							<td id="mensaje_user_text"> 
								<p><strong>Nombre : </strong>'.$nombre.'</p><br>
								<p><strong>Edad : </strong>'.$edad.'</p><br>
								<p><strong>Ciudad : </strong>'.$ciudad.'</p><br>
								<p>
									<strong>Responder : </strong><a href="mailto:'.$correo.'">'.$correo.'</a>
								</p>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
		
	';
	
	$mensaje_reclutamiento_usuario = '
		 <tr>
			<td valign="top" class="rows" id="contenido">
				<table class="one" align="left">
					<tbody>
						<tr>
							
							<td id="mensaje_user"> 
							<img src="http://cpi.upgrade.red/_images/logo.svg">
								<h1>&iexcl;Gracias <br> por <br> quererte unir a nuestro equipo de trabajo!</h1> 
								<p>Nos pondremos en contacto contigo</p>
							</td>
						</tr>
					</tbody>
				</table>
				<table class="tri_2" align="left">
					<tbody>
						
					</tbody>
				</table>
			</td>
		</tr>
	';
	$arrayGenero = ["Mujer","Hombre"];
	$mensaje_reclutamiento_admin = '
		 <tr>
			<td valign="top" class="rows" id="contenido">
				<table class="one" align="left">
					<table class="duo" align="left">
					<tbody>
						<tr>
							<td > 
							
							</td>
							<td id="mensaje_user"> 
								<img src="http://cpi.upgrade.red/_images/logo.svg">
								<h1>&iexcl;El siguiente usuario quiere unirse a nuestro equipo de trabajo!</h1> 
							</td>
						</tr>
					</tbody>
				</table>
				<table class="tri_2" align="left">
					<tbody>
						<tr>
							<td id="mensaje_user_text"> 
								<p><strong>Nombre : </strong>'.$nombre.'</p><br>
								<p><strong>Edad : </strong>'.$edad.'</p><br>
								<p><strong>Sexo : </strong>'.$arrayGenero[$sexo].'</p><br>
								<p><strong>Ciudad : </strong>'.$ciudad.'</p><br>
								<p>
									<strong>Responder : </strong><a href="mailto:'.$correo.'">'.$correo.'</a>
								</p>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
		
	';
	
	
?>
