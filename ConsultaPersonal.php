<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Enviar Mensaje</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
<!--
.Estilo3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; }
.Estilo15 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #000099; font-weight: bold; }
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
}

</style>
<link rel="stylesheet" type="text/css" media="all" href="css/RegistrarCuenta.css" />
<script src="js/jquery.js"></script>
<script src="js/jquery-1.11.0.min.js"></script>

	
			
<script>
function realizaProceso(){
        var parametros = {
                "Codigo" :1,				
                "Texto" : $('#Texto').val()
				};
        $.ajax({
                data:  parametros,
                url:   'CrearConsulta.php',
                type:  'post',
                success:  function() {   alert('Consulta Exitosa');  }
        });
		$("#cargartabla").load('Consulta.php');	
		
		
}
</script>
		


</head>

<body>

<fieldset>
<legend><strong>CONSULTA PERSDONALIZADA</strong></legend>
<table width="885" height="74" border="0" cellpadding="2" cellspacing="0">
          
 <tr>
   <td scope="row">&nbsp;</td>
   <td height="26" scope="row"></td>
   <td><input name="button" type="button" class="submit" onclick="realizaProceso();return false;" value="Ejecutar" href="javascript:;"/></td>
   <td>&nbsp;</td>
 </tr>
 <tr>
     <td width="13" scope="row">&nbsp;</td>
    <td width="12" height="26" scope="row"></td>
     <td width="711"><textarea rows="5" cols="100" id="Texto" style="font-family:'Courier New', Courier, monospace;"></textarea></td>
     <td width="24">&nbsp;</td>
 </tr>
          
 <tr>
     <td height="22" scope="row">&nbsp;</td>
     <td scope="row"></td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
 </tr>
</table>
</fieldset>
	





<div id="cargartabla" style="border:1px #000000 solid;">


</div>



</body>
</html>
