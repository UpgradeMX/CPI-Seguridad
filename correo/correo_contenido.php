<?php 
	
	$mensaje_usuario = '
		 <tr>
			<td valign="top" class="rows" id="contenido">
				<table class="duo" align="left">
					<tbody>
						<tr>
							<td id="mensaje_user"> 
								<h1>&iexcl;Gracias <br> por <br> contactarnos!</h2> 
							</td>
						</tr>
					</tbody>
				</table>
				<table class="tri_2" align="left">
					<tbody>
						<tr>
							<td id="mensaje_user_text"> 
								<p>
									En IBANCE le ofrecemos un servicio r&aacute;pido, seguro y privado en compra venta de :
									<br><br>
									<strong>D&oacute;lares, Money Order, Cheques de viajero, Oro, Plata, Centenarios.</strong> 
									<br><br>
									Contamos con personal profesional que le dar&aacute; un servicio de calidad y le atender&aacute; como 
									usted se merece.
									<br><br>
									Para nuestra casa de cambio es muy importante brindarle a cada uno de nuestros clientes la 
									tranquilidad de que todas las transacciones que llevar&aacute; a cabo con completa 
									seguridad y en un ambiente c&oacute;modo y privado.
									<br><br>
									<strong><span>Visitenos en su sucursal m&aacute;s cercana.</span></strong>
								</p>
							</td>
						</tr>
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
							<td id="mensaje_user"> 
								<h1>&iexcl;El siguiente usuario ha hecho contacto desde el sitio!</h2> 
							</td>
						</tr>
					</tbody>
				</table>
				<table class="tri_2" align="left">
					<tbody>
						<tr>
							<td id="mensaje_user_text"> 
								<p><strong>Nombre : </strong>'.$nombre.'</p><br>
								<p><strong>Asunto : </strong>'.$asunto.'</p><br>
								<p><strong>Mensaje : </strong>'.$mensajeOK.'</p><br>
								<p>
									<strong>Responder : </strong><a href="mailto:'.$mail.'">'.$mail.'</a>
								</p>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
		
	';
	
?>
