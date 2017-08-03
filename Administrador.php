<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Cuenta Administrador</title>

<link rel="stylesheet" href="css/Administrador.css" type="text/css" />	


<script src="js/jquery.js"></script>
<script src="js/jquery-1.11.0.min.js"></script>

	
<script type="text/javascript">
	$(document).ready(function() 
	{							
	
		
		CargarCuerpo();			
		
		function CargarCuerpo()
		{  var codigo=<?php echo $_GET['id']; ?>;		
		$("#Cuerpo").load('MuroAdministrador.php',{id:codigo});		
		}
		
							
	});
	     	
	</script>	

			
</head>

<body>	
<?php	   
  include('Conexion.php');
  $cod=$_GET['id'];
  
 ?>
  
<div class="cabeza"> 
<ul id="menu">
 
   <table width="100%" border="0" cellspacing="0" cellpadding="0">   
     <tr>	 
       <td width="176" >&nbsp;</td>	   
       <td width="25"></td>
	   <td width="272">&nbsp;</td>
	   
  <td width="139"><a href=""></a></td>
  
  <td width="29">&nbsp;</td>
  	   
  <td width="29">&nbsp;</td>
  	   
  <td width="29">&nbsp;</td>
	   	   
  <td width="29">&nbsp;</td>	   
  <td width="71">&nbsp;</td>      
  <td width="65">&nbsp;</td>
       
  <td width="100">    </td>
	   
  <td width="65">
   <li><strong>Inicio</strong>	     
         <ul>
           <li> <a href="index.html">Cerrar Sesion</a></li>
        
         </ul>
	   </li>  </td>	 
  </tr>
  </table>
</ul>  
 
</div>
  
  
<div id="Cuerpo" class="Cuerpo">
</div>
 

	
		
</body>
</html>