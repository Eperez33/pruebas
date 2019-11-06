<?php  
include'conexion.php'; 

$id=$_GET['id'];

$consulta="DELETE FROM usuarios WHERE id_usuario = {$id}"; 
$ejecutarsql=mysqli_query($conexion,$consulta);

header("location:Admin.php");
?>  
 
