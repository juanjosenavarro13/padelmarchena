<?php 
session_start();
include ("seguridad.php");
include("../conexion.php");
$pag=$_SERVER['PHP_SELF'];
if ($_GET['accion']=="borrar"){
	$id_borrar= $_GET['id'];
	mysql_query("DELETE FROM $tabla7 WHERE id_solicitud='$id_borrar'") or die(mysql_error());
	mysql_close();
	$pagina=$_GET['pagina'];
	header ("Location: $pag");
	exit;
}

if ($_GET['accion']=="descartar"){
	$id_modificar= $_GET['id'];
	$campos="estado_solicitud='4'";
	$sentencia="UPDATE $base . `$tabla7` SET $campos WHERE $tabla7 . id_solicitud=$id_modificar ";
	$modifica=mysql_query($sentencia,$conexion);
	mysql_close();	
	$pagina=$_GET['pagina'];
	header ("Location: $pag");
	exit;
}


include("../includes.php");
//include("enlaces.php");
 
$cliente=$_SESSION["id"];
$fecha=date(Y."/".m."/".d);





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
$ssql = "select * from `$tabla1`";
$rs = mysql_query($ssql,$conexion);
$num_total_registros = mysql_num_rows($rs);
//calculo el total de páginas
$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);

/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////

encabezado();
	echo "<link href='../estilos.css' rel='stylesheet' type='text/css' />";
cabecera();
col_izda1();
enlaces_izda();
administrar();
col_izda2();
cuerpo1();
///////////////////////////////////////		AKI COMIENZA LA WEB 		/////////////////////////////
?>

<div id='boton_nuevo'><a href='alta_usuarios.php'>NUEVO USUARIO</a></div>

<?php
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla7` limit " . $inicio . "," . $TAMANO_PAGINA;
$resultado = mysql_query($ssql);
/////////////////////////////////////////////////////////////

echo "<table border='0' id='tabla_gestion' width='650'>";

echo "<tr id='cabecera_tabla'> <td> <div id='texto_titulo'> ID </div></td> <td><div id='texto_titulo'> Nombre </div></td> <td><div id='texto_titulo'> Apellidos </div></td>  <td><div id='texto_titulo'> Direccion </div></td> <td><div id='texto_titulo'> M&oacute;vil </div></td> <td><div id='texto_titulo'> Acci&oacute;n </div></td> </tr>";

$i=1;
while ($row=mysql_fetch_object($resultado)){

$id_solicitud=$row->id_solicitud;
$mail=$row->mail;
$nick=$row->nick;
$pass=$row->pass;
$nombre=$row->nombre;
$apellido1=$row->apellido1;
$apellido2=$row->apellido2;
$dni=$row->dni;
$telefono1=$row->telefono1;
$telefono2=$row->telefono2;
$calle=$row->calle;
$numero=$row->numero;
$bloque=$row->bloque;
$puerta=$row->puerta;
$fnacimiento=$row->fecha_nacimiento;
$fecha=explode("-",$fnacimiento);
$fecha_nacimiento=$fecha[2]."-".$fecha[1]."-".$fecha[0]; 
$dia_alta=$row->dia_alta;
$hora_alta=$row->hora_alta;
$estado_solicitud=$row->estado_solicitud;

$i++;
if($estado_solicitud==1){
	$estilo='sin_leer';
}elseif($estado_solicitud==2){
	$estilo='leida';
}elseif($estado_solicitud==3){
	$estilo='aceptada';
}elseif($estado_solicitud==4){
	$estilo='rechazada';
}

		echo "<tr id='".$estilo."'>";
			echo "<td align='center'>".$id_solicitud."</td>";
			echo "<td>".$nombre."</td>";
			echo "<td>".$apellido1." ".$apellido2."</td>";
//			echo "<td>".$mail."</td>";
			echo "<td>".$nick."</td>";
			echo "<td>".$telefono1."</td>"; 
			echo "<td><a href='alta_usuarios.php?id_solicitud=$id_solicitud'><img src='../imagenes/add.gif' alt='anadir' border='0'></a>|<a href='?accion=descartar&id=$id_solicitud'>|<img src='../imagenes/desc.gif' alt='descartar' border='0'></a>";
			echo "|<a href='?accion=borrar&id=$id_solicitud'>|<img src='../imagenes/delete.gif' name='borrar' alt='borrar' border='0'></a></div></td>";
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
echo "<a href='solicitud.php?pagina=".$pag_anterior."'>P&aacute;gina anterior</a>";
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
          echo "<a href='solicitud.php?pagina=" . $i . "'class=izquierda>" . $i . "</a> ";
    }
} 

?>
</td>

<td width="200" align="right">
	<?php

if($pagina==$total_paginas){
	echo "&nbsp;";
}else{
	echo "<a href='solicitud.php?pagina=".$pag_siguiente."'>P&aacute;gina siguiente</a>";
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
col_derecha2();
*/
pie();
?>
