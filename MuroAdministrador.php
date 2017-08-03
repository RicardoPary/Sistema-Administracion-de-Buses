<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Muro</title>

<link rel="stylesheet" href="css/MuroAdministrador.css" type="text/css"/> 
<script src="js/jquery-1.11.0.min.js"></script>


<script type="text/javascript">
	$(document).ready(function() 
	{							
		CargarMuro();	
		function CargarMuro()
		{  
		$("#Medio").load('ConsultaPersonal.php');	
		}
	});
</script>


<script type="text/javascript">
$(document).ready(function()
{
   $("p a").each(function(){
      var href = $(this).attr("href");
	 
	  $(this).attr({ href: "#"});
      $(this).click(function(){
	  
	  
	  
	  var codigo=<?php echo $_POST['id'];?>;
      $("#Medio").load(href,{id:codigo});		 
		 
      });
   });
});
</script>

</head>

<body>
<?php   
include('Conexion.php');
  $cod=$_POST['id'];  
 
  $sql=$cn->prepare('SELECT * FROM cuenta WHERE CodigoCuenta=:Codigo');
  $sql->execute(array(':Codigo'=>$cod));
  $op=$sql->fetch(); 
?>

<div class="Menudiv" style="height:50px;">
 
		 
	<p style="float:left;">
	<img src="Imagenes/nike.jpg" class="img"/><a href="ConsultaPersonal.php" class="letra2">Consulta Personal</a>
	</p>
	
	<p style="float:left;">
	<img src="Imagenes/nike.jpg" class="img"/><a href="" class="letra2">Consulta 1</a>
	</p>		
	
	<p style="float:left;">
	<img src="Imagenes/nike.jpg" class="img"/><a href="" class="letra2">Consulta 2</a>
	</p>	
	
	<p style="float:left;">
	<img src="Imagenes/nike.jpg" class="img"/><a href="" class="letra2">Consulta 3</a>
	</p>	
	
	<p style="float:left;">
	<img src="Imagenes/nike.jpg" class="img"/><a href="" class="letra2">Consulta 4</a>
	</p>	
	
</div>	 
   
<div id="Medio" style="margin:10px; padding:0px; border:1px #E5E5E5 solid;">					 
</div>

</body>
</html>
