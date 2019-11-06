<?php  
$host="mysql.hostinger.mx";//nombre servidor
$usuario="u893756039_root";//usuario bd
$clave="rooteco";//contra bd
$bd="u893756039_eco";//nombre de la base que se usara

$conexion = mysqli_connect($host,$usuario,$clave,$bd);
mysqli_set_charset($conexion,"utf8"); //Formato de consulta+

$consulta="TRUNCATE TABLE usuarios"; 
$ejecutarsql=mysqli_query($conexion,$consulta);

if($ejecutarsql){
echo "ok";
} else{ echo "error";}




 ?>