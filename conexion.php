<?php  
echo	$host="localhost";//nombre servidor
echo	$usuario="root";//usuario bd
echo	$clave="root";//contra bd
echo	$bd="ecobici";//nombre de la base que se usara

$conexion = mysqli_connect($host,$usuario,$clave,$bd);
mysqli_set_charset($conexion,"utf8"); //Formato de consulta+

if($conexion){
//echo "conectado";
}else{
	echo "No conectado";
}



 ?>