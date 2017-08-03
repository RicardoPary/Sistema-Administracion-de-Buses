<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Consulta Personalizada</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


</head>



<body>


 <table width="100%" cellpadding="0" cellspacing="0" border="1">
<?php 
include("Conexion.php");

$consulta=$cn->prepare('select * from consultas');
$consulta->execute();
$res=$consulta->fetch();


$prueba=$res['consulta'];
$consulta2=$cn->prepare($prueba);
$consulta2->execute();

$res11=$consulta2->fetch();
$tam=count($res11)/2;

while($res2=$consulta2->fetch())
{	
?>
  <tr >
	
	<?php 
	for($i=0;$i<$tam;$i++)
	{
	?>
	<td><?php echo $res2[$i];?></td>
	<?php  }?>
	
  </tr>
<?php
}
?>
</table>



</body>
</html>
