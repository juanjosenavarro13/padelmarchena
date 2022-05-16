<?php 
session_start();
include ("../seguridad.php");
include("../../conexion.php");

$cliente=$_SESSION["id"];
$fecha=date(Y."/".m."/".d);
$pag=$_SERVER['PHP_SELF'];


if ($_GET['accion']=="borrar"){

	$id_anular= $_GET['id'];
	if($_SESSION['privilegios']==1){
		$sentencia="DELETE FROM $tabla5 WHERE id_reserva='$id_anular'";
		$sentencia_jugadores="DELETE FROM $tabla10 WHERE Id_reserva='$id_anular'";
		$sentencia_temporal="DELETE FROM $tabla12 WHERE Id_reserva='$id_anular'";

		mysql_query($sentencia_jugadores) or die(mysql_error());
		mysql_query($sentencia) or die(mysql_error());
		mysql_query($sentencia_temporal) or die(mysql_error());
	}else{
		$sentencia="DELETE FROM $tabla5 WHERE id_reserva='$id_anular' AND usuario='$usuario'";
		$sentencia_jugadores="DELETE FROM $tabla10 WHERE Id_reserva='$id_anular'";
		$sentencia_temporal="DELETE FROM $tabla12 WHERE Id_reserva='$id_anular'";
		mysql_query($sentencia_jugadores) or die(mysql_error());
		mysql_query($sentencia) or die(mysql_error());
		mysql_query($sentencia_temporal) or die(mysql_error());
//		echo $sentencia;
	}
	mysql_close();
	$pag=$_SERVER['PHP_SELF'];
	//echo "DELETE FROM $tabla5 WHERE id_reserva='$id_anular'";
	//echo "pagina: ".$pag;
	header ("Location: $pag");
	exit;

}

if ($_GET['accion']=="modificar"){
	$id_modificar= $_GET['id'];
	mysql_close();
	header ("Location: modificar_clientes2.php?id_usuario=$id_modificar");
	exit;
}

if ($_GET['accion']=="anadir"){
	$id_info= $_GET['id'];
	mysql_close();
	header ("Location: alta_imagenes.php?id_usuario=$id_info");
	exit;
}


include("../../includes.php");
include("../includes_gestion.php");

$tiempo_ahora=time();
/////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////      PAGINACIÓN     //////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////


$TAMANO_PAGINA = 10;

//examino la página a mostrar y el inicio del registro a mostrar
$pagina = $_GET["pagina"];
if (!$pagina) {
    $inicio = 0;
    $pagina=1;
}
else {
    $inicio = ($pagina - 1) * $TAMANO_PAGINA;
}


//miro a ver el número total de campos que hay en la tabla con esa búsqueda
$ssql = "select * from `$tabla5` WHERE hora_inicio>=$tiempo_ahora";
$rs = mysql_query($ssql,$conexion);
$num_total_registros = mysql_num_rows($rs);
//calculo el total de páginas
$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);

/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////

encabezado();
	echo "<link href='../../estilos.css' rel='stylesheet' type='text/css' />";
cabecera();
col_izda1();
enlaces_izda();
administrar();
col_izda2();
cuerpo1();
///////////////////////////////////////		AKI COMIENZA LA WEB 		/////////////////////////////
enlaces_reservas();
?>

<div id='boton_nuevo'><a href='alta_reservas.php'>NUEVA RESERVA</a></div>

<?php

/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla5` WHERE hora_inicio<=$tiempo_ahora ORDER BY hora_inicio limit " . $inicio . "," . $TAMANO_PAGINA ;
$resultado = mysql_query($ssql);
/////////////////////////////////////////////////////////////

echo "<table border='0' id='tabla_gestion' width='650'>";

echo "<tr id='cabecera_tabla'> <td> <div id='texto_titulo'> ID </div></td> <td><div id='texto_titulo'> Usuario </div></td> <td><div id='texto_titulo'> Pista </div></td>  <td><div id='texto_titulo'> D&iacute;a </div></td> <td><div id='texto_titulo'> Hora </div></td> <td><div id='texto_titulo'> &nbsp; </div></td> </tr>";

$i=1;
while ($row=mysql_fetch_object($resultado)){

$id_reserva=$row->id_reserva;
$usuario=$row->usuario;
$pista=$row->pista;
$horario=$row->horario;
$dia=$row->dia;
	$fecha_seg=explode("-",$dia);
	$dia_seg=$fecha_seg[2];
	$mes_seg=$fecha_seg[1];
	$ano_seg=$fecha_seg[0];
	$fecha_esp=$dia_seg."-".$mes_seg."-".$ano_seg;
	
$inicio_seg=$row->hora_inicio;

	/////////////////////////////////////////////////////////////
	$ssql_ocupante = "SELECT Nombre, Apellidos FROM `$tabla11` WHERE Id='$usuario'"; //busca el nombre del usuario.
	$resultado_ocupante = mysql_query($ssql_ocupante);
	$row_ocupante = mysql_fetch_object($resultado_ocupante);
	$ocupante=$row_ocupante->Nombre." ".$row_ocupante->Apellidos;
	/////////////////////////////////////////////////////////////
	
	/////////////////////////////////////////////////////////////
	$ssql_pista = "SELECT * FROM `$tabla2` WHERE id_pista=$pista";
	$resultado_pista = mysql_query($ssql_pista);
	$row_pista=mysql_fetch_object($resultado_pista);
	$nombre_pista=$row_pista->nombre;
	/////////////////////////////////////////////////////////////

	/////////////////////////////////////////////////////////////
	$ssql_horario = "SELECT * FROM `$tabla3` WHERE id_horario=$horario";
	$resultado_horario = mysql_query($ssql_horario);
	$row_horario=mysql_fetch_object($resultado_horario);
	$hora_inicio=$row_horario->inicio;
		$hora_div=explode(":",$hora_inicio);
		$hora_bien=$hora_div[0].":".$hora_div[1];

	/////////////////////////////////////////////////////////////



$i++;
if($i%2==0){
	$estilo="fila_par";
}else{
	$estilo="fila_inpar";
	}

		echo "<tr id='".$estilo."'>";
			echo "<td align='center'>".$id_reserva."</td>";
			echo "<td>".$ocupante."</td>";
			echo "<td>".$nombre_pista."</td>";
			echo "<td>".$hora_bien."</td>";
			echo "<td>".$fecha_esp."</td>"; 
			echo "<td>";
?>			
			<a target="_blank" onClick="window.open(this.href, this.target, 'width=650,height=450'); return false;" style="text-decoration: none" href="info_reserva.php?id_reserva=<?php echo $id_reserva; ?>"><img src='../../imagenes/info.png' alt='info' border='0'></a> | 			
			<a href='?accion=borrar&id=<?php  echo $id_reserva; ?>'><img src='../../imagenes/delete.gif' name='borrar' alt='borrar' border='0'></a></div></td>
<?php
	 echo "</tr>";
	}
	echo "</table>";

//cerramos el conjunto de resultado y la conexión con la base de datos
mysql_free_result($rs);

//muestro los distintos índices de las páginas, si es que hay varias páginas
$pag_anterior=$pagina-1;
$pag_siguiente=$pagina+1;
?>
</div>
<br><br><br><br>
<table border="0" width="600">
<tr>
	<td width="200" align="left">

<?php
if($pagina==1){
	echo "&nbsp;";
}else{
echo "<a href='gestion_reservas.php?pagina=".$pag_anterior."'>P&aacute;gina anterior</a>";
}
echo "</td>";

echo "<td align='center'>";
if ($total_paginas > 1){
    for ($i=1;$i<=$total_paginas;$i++){
       if ($pagina == $i)
          //si muestro el índice de la página actual, no coloco enlace
          echo $pagina . " ";
       else
          //si el índice no corresponde con la página mostrada actualmente, coloco el enlace para ir a esa página
          echo "<a href='gestion_reservas.php?pagina=" . $i . "'class=izquierda>" . $i . "</a> ";
    }
} 

?>
</td>

<td width="200" align="right">
	<?php

if($pagina==$total_paginas){
	echo "&nbsp;";
}else{
	echo "<a href='gestion_reservas.php?pagina=".$pag_siguiente."'>P&aacute;gina siguiente</a>";
}

	?>
</td>
</table>
<?php
///////////////////////////////////////		AKI TERMINA LA WEB 		/////////////////////////////

cuerpo2();
/*
col_derecha1();
eventos1();
eventos2();
saldo1();
saldo2();
torneos1();
torneos2();
actividades1();
actividades2();
col_derecha2();*/
pie();
?>