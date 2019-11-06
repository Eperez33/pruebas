<?php  
$host="mysql.hostinger.mx";//nombre servidor
$usuario="uu933275593_root";//usuario bd
$clave="eco+root";//contra bd
$bd="u933275593_root";//nombre de la base que se usara

$conexion = mysqli_connect($host,$usuario,$clave,$bd);
mysqli_set_charset($conexion,"utf8"); //Formato de consulta+

if($conexion){
//echo "conectado";
}else{
	echo "No conectado";
}



 ?>