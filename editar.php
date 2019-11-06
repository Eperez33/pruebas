<?php  
include'conexion.php'; 

echo $id=$_GET['id'];

$consulta="UPDATE usuarios SET id_estado = 1 WHERE id_usuario = {$id}"; 
$ejecutarsql=mysqli_query($conexion,$consulta);




header("location:Admin.php");
?>  

<!--<SCRIPT LANGUAGE="javascript">
  window.history.go(-1); 

</SCRIPT>--> 
