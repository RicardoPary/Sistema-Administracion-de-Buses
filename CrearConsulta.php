<?php
include("Conexion.php");

	$Codigo=$_POST['Codigo'];
	
	$Texto=$_POST['Texto'];

	

	$consulta=$cn->prepare('UPDATE consultas SET consulta=:Texto WHERE codigo=:Codigo');
	$consulta->execute(array(':Codigo'=>$Codigo,':Texto'=>$Texto));
	$resultado=$consulta->fetch();
	
	
$con1=$cn->prepare($Codigo);
$sql->execute();


?>