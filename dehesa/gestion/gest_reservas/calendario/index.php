<?php

///////////////////////////////////////////////////////////////////////////////////////////////
//Libreria para mostrar un calendario y obtener una fecha
//
//La p�gina que llame a esta libreria debe contener un formulario con tres campos donde se introducir� el d�a el mes y el a�o que se desee
//Para que este calendario pueda actualizar los campos de formulario correctos debe recibir varios datos (por GET)
//formulario (con el nombre del formulario donde estan los campos
//dia (con el nombre del campo donde se colocar� el d�a)
//mes (con el nombre del campo donde se colocar� el mes)
//ano (con el nombre del campo donde se colocar� el a�o)
///////////////////////////////////////////////////////////////////////////////////////////////
$nick_disponible=$_GET['nombre'];
$disponible=$_GET['disponible'];


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>Comprueba la disponibilidad del nick</title>
	<link rel="STYLESHEET" type="text/css" href="../../../estilos.css">
	<script>
		function devuelveFecha(dia){
			//Se encarga de escribir en el formulario adecuado los valores seleccionados
			//tambi�n debe cerrar la ventana del calendario
			var formulario_destino = '<?php echo $_GET["formulario"]?>'
			
			var campo_destino = '<?php echo $_GET["nomcampo"]?>'
					
			//meto el dia
			eval ("opener.document." + formulario_destino + "." + campo_destino + ".value='" + dia + "'")
			window.close()
		}
	</script>
</head>

<body>

<table border='0' width='100%' height='100%'>

<tr>
	<td>&nbsp;</td>
	<td width='200'>

<table border='0' id='comprueba_nick'>

<tr>
	<td class='titulo'>Comprobar disponibilidad</td>
</tr>
<tr>
	<td>
<?php
if($disponible=="\'si\'"){
	echo "<div id='disponible'>Nick disponible</div>";
}elseif($disponible=="\'no\'"){
	echo "<div id='no_disponible'>Nick no disponible</div>";
}

?>	
	</td>
</tr>

<tr>
	<td align='center'>
<?php
if($disponible=="\'si\'"){
?>
	<div id='boton_nick'><a href="javascript:devuelveFecha(<?php echo "'".$nick_disponible."'"; ?>)" >Usar</a></div>
<?php
}elseif($disponible=="\'no\'"){
	echo "
		</td>
</tr>
<form action='comprueba2.php' method='POST'>
<tr>
	<td align='center'>Pruebe con otro nick</td>
</tr>

<tr>
	<td align='center'>
		<input type='text' name='nick'>
	</td>
</tr>

<tr>
	<td align='center'><input type='submit' value='comprobar'>
	";
}else{

?>	

	</td>
</tr>
<form action='comprueba2.php' method='POST'>
<tr>
	<td align='center'>Escriba un nick</td>
</tr>

<tr>
	<td align='center'>
		<input type='text' name='nick'>
	</td>
</tr>

<tr>
	<td align='center'><input type='submit' value='comprobar'>
<?php } ?>	
</td>
</tr>
</form>

</table>



	</td>
	
	<td>&nbsp;
	</td>
</tr>

</table>
</body>
</html>