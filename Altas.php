<?php 
include "encabezado.php"
 ?>
<body> 
	 	


		<?php 
		include 'conexion.php';  

		 $Nom=htmlspecialchars($_POST['Nom']);
		 $Ape=htmlspecialchars($_POST['Ape']);
		 $Tel=htmlspecialchars($_POST['Tel']);  
		 $Dir=htmlspecialchars($_POST['Dir']);
		 $Docu=htmlspecialchars($_POST['Docu']);
		 $Dia=htmlspecialchars($_POST['Dia']); 
		 $Hora_e=$_POST['Hora_e'];
		 $Hora_s=$_POST['Hora_s']; 

		 
		$consulta="INSERT INTO usuarios(nombre,apellido,telefono,direccion,id_documento,hora_entrada,hora_salida,id_dia,id_estado) 
		values('{$Nom}','{$Ape}','{$Tel}','{$Dir}',{$Docu},'{$Hora_e}','{$Hora_s}',{$Dia},2);" ;  



		$ejecutarsql = mysqli_query($conexion,$consulta);
		 //echo $Nom; 



		$consulta2="SELECT id_usuario  
		from usuarios
		WHERE nombre= '{$Nom}' 
		and direccion='{$Dir}';";//dinamicos

		$ejecutarsql2=mysqli_query($conexion,$consulta2); //ejecutarconsulta2 guarda el resultado
		 $res=mysqli_fetch_assoc($ejecutarsql2);
		 
		 //echo $res['id_usuario'];
		mysqli_close($conexion);

		?>   
		<div class="container">
	  <div class="jumbotron">
	    <h1>Felicidades  <?php echo $Nom ?> :)</h1>      
	    <p>Tu registro se gurado con exito gruarda tu numero de folio,ya que sera 
	    	solicitado en la cicloestacion.</p> 

	    <h2>Folio: <?php echo $res['id_usuario']?></h2>
	 	<p><a class="btn btn-success btn-lg" href="Registro.php" role="button">Listo</a></p>

	 </div>   
	</div> 



	<SCRIPT LANGUAGE="javascript">
	  /* window.history.go(-1)*/
	</SCRIPT>  


</body>
	<?php 
	include "pie.php"
 	?> 
</body>
</html>