<?php 
include "encabezado.php"; 

$msn="";
if(isset($_POST['Usuario'])){
		if($_POST['Usuario'] == ""|| $_POST['Contrasena']==""){
			$msn="Favor de colocar usuario y/o Contraseña";	
		}else{
			if($_POST['Usuario'] == "admin" && $_POST['Contrasena']=="admin"){
			
				echo '<script>window.location.replace("Admin.php");</script>';
			}else{
				$msn="Favor de validar su usuario y/o Contraseña";		
			}	
		}
}

 ?>

<body> 

<section >	
	<div class="content-paralax  paralax-img-contact ">       
		<div class="content content-default contact-paralax">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-3 col-md-3 section-head-default">		
						Hola 
					</div><!-- End section-text-default--> 	
			  		<div class="col-xs-12 col-sm-9 col-md-9 section-text-default">
			  			<p>Administrador: <br> Recuerda que para poder ver los registros, tienes que iniciar sesión.</p>
			  		</div><!-- End section-text-default--> 				
				</div><!-- End row-->
			</div><!-- End Container-->
		</div><!-- End content-color-default-->
		
		<div class="container wow flipInX">
			<div class="container-contact">
				<div class="row cont-row">
					<div class="col-xs-12 col-sm-7 col-md-7 ">
						<form action="Iniciar_sesion.php" method="POST">  <!-- REMPLACE <form action="mail.php" method="post"> -->
							<div class="form-group" id="frm-Usuario">
  									<label for="Usuario">Usuario</label>
							   		<div class="input-group">
								  	  	<span class="input-group-addon">
								  		  <i class="fa fa-user"></i>
								 	    </span>								  
								 	 	<input type="text" name="Usuario" id="Usuario" class="form-control"  placeholder="Usuario"  required>
									</div>
							</div><!-- End frm-Usuario-->

							  <div class="form-group" id="frm-Contraseña">
							    <label for="Contraseña">Contraseña</label>
							   		<div class="input-group">
								  	  	<span class="input-group-addon">
								  		  <i class="glyphicon glyphicon-lock"></i>
								 	    </span>								  
								 	 	<input type="password" class="form-control" name="Contrasena" placeholder="Contraseña" id="Contrasena" required>
									</div>
							  </div><!-- End frm-contraseña-->
								<?php echo $msn; ?>
							  <button type="submit" id="sendmessage"class="btn btn-default">Enviar</button>
						</form>	<!-- End form-->
					</div>
					
				</div><!-- End row cont-row-->	
			</div><!-- End container-contact-->	
		</div><!-- End container-->		
	</div><!-- End content-paralax-->	
</section><!-- End secction contact-->
	
		
</body>

<?php  
include "pie.php"
 ?>

</body>
</html>