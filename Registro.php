<?php 
include "encabezado.php";
include'conexion.php'; 

$consulta="SELECT count(*) as cont FROM usuarios where id_estado=1;"; 
$ejecutarsql=mysqli_query($conexion,$consulta);
$res = mysqli_fetch_assoc($ejecutarsql);
$total= $res['cont'];

 ?>


<body> 
<section > 
 
	<div class="content content-greey">
		<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-3 col-md-3 section-head-inverse">
						Registro
					</div>					
		  			<div class="col-xs-12 col-sm-9 col-md-9 section-text-inverse">
		  				<p>Bienvenido aquí puedes realizar tu registro de manera gratuita. 
		  					Pero antes tienes que echar un vistazo a nuestros términos y condiciones.</p>
		  			</div>  				
				</div><!-- End row-->
			</div><!-- End container-->
		</div><!-- End content content-greey-->
 
	<!-- Reglas--> 
	<div class="container">
	<div class="row wow bounceIn">
			<div class="cont-client">
					<h3>Deseas Realizar tu registro?</h3>
					<p>Primero tienes que dar un vistazo a nuestros términos y condiciones para que puesdas realizarlo.</p>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6"><!-- Reglas usuario-->		
				<div class="clients-item-des">
					<h4><strong>Reglas Para El Usuario</strong></h4>
					 <li>El registro podra ser realizado por el usuario siempre, cuando cuente con conexion a internet y con el lector qr adecuado.</li>
					 <li>El prestamo de bicicletas sera solo para mayors de edad y menenores de edad en compañia de un adulto.</li>
					 <li>En caso de que el usuario no presente su folio de registro o el documento mencionado al momento de el registro. 
					 El registro  sera eliminado del Sistema para que otro usuario haga uso de la bicicleta.</li>
				</div>			
			</div><!--Reglas usuario-->

			<div class="col-xs-12 col-sm-6 col-md-6"><!--Reglas app -->		
				<div class="clients-item-des">
						<h4><strong>Reglas Para El Uso De La Aplicación</strong></h4>
						<li>El lector  qr sera los espesificados por la  por la pagina web  o el administrador.</li>
						<ul><em><strong>Para el sistema operativo Windows Phone se usara la aplicación: Código qr+ </strong></em></ul>
						<ul><em><strong>Para el sistema operativo Android se usara la aplicación: QR Droid.</strong></em></ul>		

						<li>El codigo qr solo sera reconocido por las apps mensionadas anteriormente.</li>
						<li>Aun no se cuenta con la version para IOS.</li>
						
				</div>			
			</div><!-- Reglas app--> 
		</div>
	</div><!-- End Reglas-->
</section><!-- End section team-->
<?php if($total < 2){ ?>
	<section >	
	<div class="content-paralax  paralax-img-registo ">       
		<div class="content content-default contact-paralax">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-3 col-md-3 section-head-default">		
						Es aquí
					</div><!-- End section-text-default--> 	
			  		<div class="col-xs-12 col-sm-9 col-md-9 section-text-default">
			  			<p>Introduce los datos que se te solicitan.Recuerda guardar tú número de folio.</p>
			  		</div><!-- End section-text-default--> 				
				</div><!-- End row-->
			</div><!-- End Container-->
		</div><!-- End content-color-default-->
		
		<div class="container wow flipInX">
			<div class="container-contact">
				<div class="row cont-row">
					<div class="col-xs-12 col-sm-7 col-md-7 ">
						<form  action="Altas.php" method="POST">  <!-- REMPLACE <form action="mail.php" method="post"> -->
							
							<div class="form-group" id="frm-name"><!-- Nombre--> 

  									<label for="Nombre">Nombre</label>
							   		<div class="input-group">
								  	  	<span class="input-group-addon">
								  		  <i class="fa fa-user"></i>
								 	    </span>								  
								 	 	<input type="text" name="Nom" id="Nombre" class="form-control"  placeholder="Nombre"  required>
									</div>
							</div><!-- End frm-name--> 

							<div class="form-group" id="frm-Apellido"><!-- Apellido--> 
  									<label for="Apellido">Apellido</label>
							   		<div class="input-group">
								  	  	<span class="input-group-addon">
								  		  <i class="fa fa-user"></i>
								 	    </span>								  
								 	 	<input type="text" name="Ape" id="Apellido" class="form-control"  placeholder="Apellido"  required>
									</div>
							</div><!-- End frm-apellido--> 

							<div class="form-group" id="frm-phone"><!-- Telefono--> 
							    <label for="Telefono">Telefono</label>
							    <div class="input-group">
								  	  	<span class="input-group-addon">
								  		  <i class="fa fa-phone"></i>
								 	    </span>								  
								 	 	<input type="tel" class="form-control" name="Tel" id="Telefono" placeholder="Telefono">
									</div>
							  </div><!-- End frm-phone-->

							  <div class="form-group" id="frm-direccion"><!-- direccion--> 
							    <label for="Direccion">Dirección</label>
							   		<div class="input-group">
								  	  	<span class="input-group-addon">
								  		  <i class="fa fa-envelope"></i>
								 	    </span>								  
								 	 	<input type="text" class="form-control" name="Dir" id="Direccion" placeholder="Direccion" id="direccion" required>
									</div>
							  </div><!-- End direccion-->
								
								<div class="form-group" id="frm-direccion"><!--Identificacion--> 
							    <label for="Identificacion">Identificacion</label>
							   		<div class="input-group">
								  	  	<span class="input-group-addon">
								  		  <i class="glyphicon glyphicon-credit-card"></i>
								 	    </span>								  
								 	 	<select class="form-control" name="Docu" id="Documento">
											<option  value="0">Seclecciona un documento
											</option> 
											<option  value="1">INE
											</option>  
											<option  value="2">PASAPORTE
											</option>  
											<option  value="3">LICENCIA
											</option> 
								 	 	</select> 

								 	</div>
							  </div><!-- End identificacion-->
							
							<div class="form-group" id="frm-direccion"> <!-- Dia--> 
							    <label for="dia">Día</label>
							   		<div class="input-group">
								  	  	<span class="input-group-addon">
								  		  <i class="glyphicon glyphicon-certificate"></i>
								 	    </span>								  
								 	 	<select class="form-control" name="Dia" id="dia">
											<option  value="0">Seclecciona un documento
											</option> 
											<option  value="1">Sabado
											</option>  
											<option  value="2">Domingo
											</option>  
										</select> 

								 	</div>
							  </div><!-- End dia-->  

							  <div class="form-group" id="frm-horae"><!-- hora entrada--> 
							    <label for="dia">Hora de entrada </label>
							   		<div class="input-group">
								  	  	<span class="input-group-addon">
								  		  <i class="glyphicon glyphicon-log-in"></i>
								 	    </span>	 
								 	    <input type="time" id="myTime" name="Hora_e" min="09:00" max="17:00" value="09:15:00">							  
								 	 </div>
							  </div><!-- End hora_entra--> 

							  <div class="form-group" id="frm-horas"><!--hora salida--> 
							    <label for="dia">Hora de salida </label>
							   		<div class="input-group">
								  	  	<span class="input-group-addon">
								  		  <i class="glyphicon glyphicon-log-out"></i>
								 	    </span>	 
								 	    <input type="time" id="myTime" name="Hora_s" min="09:00" max="17:00" value="09:15:00">							  
								 	 </div>
							  </div><!-- End hora_salida--> 
 

							  

						

							  <button type="submit" id="sendmessage"class="btn btn-default">Registrar</button>
						</form>	<!-- End form-->
					</div>
					<div class="col-xs-12 col-sm-5 col-md-5">
						<div class="hed-contact">
							<h2>Eco-Bici CDMX</h2>
							<p>Con el fin de brindarte un servicio de calidad,comunícate con nos otros tienes dudas puedes no dudes en llamarnos.</p>

							<address>
 								 <strong>Eco-Bici</strong><br>
 								 Al pendiente de tus sugerencias en:<br>
 								 <strong>Telefono(1):</strong>
 								 <br> 55-5005-2424<br>
								 <strong>Phone (2):</strong>
								 <br> 55-5005-2323<br>
								 <strong>E-mail: </strong>
								 <br> 
								 	<a href="eco_bici@cdmx.com"> eco_bici@cdmx.com</a>
								 <br>
  							</address>
						</div><!-- End hed-contact-->
					</div><!-- End col-xs-12 col-sm-5 col-md-5-->
				</div><!-- End row cont-row-->	
			</div><!-- End container-contact-->	
		</div><!-- End container-->		
	</div><!-- End content-paralax-->	
</section><!-- End secction contact-->

<?php } else{?>	
	<br>
	<br>
	<br>
	  <div class="jumbotron">
	    
	    <div class="container"><h1>Lo sentimos</h1>      
	    <p>Ya no contamos con mas bisivletas por el momento.</p> 
		</div>
	  </div>   
	
<?php } ?>


</body>

<?php 
include "pie.php"
 ?>

</body>
</html>