<?php
session_start();
include ("../seguridad.php");
include("../../conexion.php");
include("../includes_gestion.php");
?>

<html>

<head>
<!--	<link href='../../estilos.css' rel='stylesheet' type='text/css' />-->
</head>

<body id='info_reservas'>

<?php
$id_reserva=$_GET['id_reserva'];
//echo $id_reserva;
$ssql_reserva = "select * from `$tabla5` WHERE id_reserva=$id_reserva";
$resultado_reserva = mysql_query($ssql_reserva);

$row_reserva=mysql_fetch_object($resultado_reserva);

$id_reserva=$row_reserva->id_reserva;
$usuario_reserva=$row_reserva->usuario;
$pista_reserva=$row_reserva->pista;
$horario_reserva=$row_reserva->horario;
$dia_reserva=$row_reserva->dia;
	$fecha_reserva=explode("-",$dia_reserva);
	$dia_fecha_reserva=$fecha_reserva[2];
	$mes_fecha_reserva=$fecha_reserva[1];
	$ano_fecha_reserva=$fecha_reserva[0];
	$fecha_reserva_esp=$dia_fecha_reserva."-".$mes_fecha_reserva."-".$ano_fecha_reserva;
	
?>

<table border='0' id='resumen_reservas'>

	<tr>
		<td colspan='6' class='titulo' align='center'>RESUMEN DE LA RESERVA</td>
	</tr>

	<tr>
		<td class='titulo'>PISTA: </td>
		<td><?php datos_pista($pista_reserva); ?></td>
		<td class='titulo'>HORARIO: </td>
		<td><?php datos_horario($horario_reserva); ?></td>
		<td class='titulo'>DIA: </td>
		<td align='center'><?php echo $fecha_reserva_esp; ?></td>
	</tr>
	<tr>
		<td colspan='6'><span class='titulo'>USUARIO:</span>
		<?php nombre_jugador($usuario_reserva); ?></td>
	</tr>
	
</table>




<?php

$ssql = "select * from `$tabla10` WHERE id_reserva=$id_reserva";
$resultado = mysql_query($ssql);

echo "<table border='0' id='tabla_gestion' width='650'>";

echo "<tr id='cabecera_tabla'> <td> <div id='texto_titulo'> ID reserva </div></td> <td><div id='texto_titulo'> Jugadores </div></td> <td><div id='texto_titulo'> Precio </div></td> </tr>";

$i=1;
while ($row=mysql_fetch_object($resultado)){

$id_jugador_reserva=$row->id_jugador_reserva;
$id_jugador=$row->id_jugador;
$id_reserva=$row->id_reserva;
$nombre_jugador=$row->nombre_jugador;
$precio=$row->precio;
$fecha=$row->fecha;
	$fecha_seg=explode("-",$fecha);
	$dia_seg=$fecha_seg[2];
	$mes_seg=$fecha_seg[1];
	$ano_seg=$fecha_seg[0];
	$fecha_esp=$dia_seg."-".$mes_seg."-".$ano_seg;
$tipo_partido=$row->tipo_partido;

$i++;
if($i%2==0){
	$estilo="fila_par";
}else{
	$estilo="fila_inpar";
	}

		echo "<tr id='".$estilo."'>";
			echo "<td>".$id_reserva."</td>";
			echo "<td>".$nombre_jugador." (".$id_jugador.")</td>";
			echo "<td>".$precio." &euro;</td>";
		echo "</tr>";

}
	echo "</table>";

$ssql_suma = "select SUM(precio) from `$tabla10` WHERE id_reserva=$id_reserva";
$resultado_suma = mysql_query($ssql_suma);
$row_suma=mysql_fetch_array($resultado_suma);
$suma_precios=$row_suma[0];

	echo "<table id='total_resumen'>";
		echo "<tr>";
			echo "<td colspan='2' class='titulo'>TOTAL: </td>";
			echo "<td width='100' align='center'>$suma_precios &euro;</td>";
		echo "</tr>";
	echo "</table>";


?>




</body>

</html>