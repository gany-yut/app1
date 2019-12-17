<?php 
include("configuracion.php");
$conexion = new mysqli($server,$user,$pass,$bd);//parametros de conexion 
//validacion a la conexion a la bd
if (mysqli_connect_errno()){
	echo "No Conectado", mysqli_connect_error();
		exit();
} 
else{
	echo 'Conectado';
}
 ?>

