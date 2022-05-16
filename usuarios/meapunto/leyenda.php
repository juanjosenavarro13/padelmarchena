<?php
session_start();
include ("../seguridad.php");
include ("../../conexion.php");
include ("../../includes.php");

encabezado();
	echo "<link href='../../estilos.css' rel='stylesheet' type='text/css' />";
	echo "</head>";
	echo "<body>";
$ssql_niveles="SELECT * FROM $tabla14";
$consulta=mysql_query($ssql_niveles);
echo "<table border='2' id='leyenda'>
	<tr class='titulo'>
		<td>Id</td>
		<td>Nombre Nivel</td>
		<td>Abreviatura</td>
	</tr>";
	
while($registro=mysql_fetch_object($consulta)){		

	echo "<tr>";
		echo "<td align='center'>$registro->nivel</td>";
		echo "<td>$registro->nombre</td>";
		echo "<td align='center'>$registro->abreviatura</td>";
	echo "</tr>";
}



?>

</body>
</html>