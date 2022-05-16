<?php 
session_start();
include ("../seguridad.php");
include("../../conexion.php");
$pag=$_SERVER['PHP_SELF'];
if ($_GET['accion']=="borrar"){
	$id_borrar=$_GET['id'];
	mysql_query("DELETE FROM $tabla11 WHERE Id='$id_borrar'") or die(mysql_error());
	mysql_close();
	$pagina=$_GET['pagina'];
	header ("Location: $pag");
	exit;
}
if ($_GET['accion']=="modificar"){
	$id_modificar= $_GET['id'];
	header ("Location: modifica_usuario.php?id_usuario=$id_modificar");
	exit;
}
if ($_GET['accion']=="anadir"){
	$id_info= $_GET['id'];
	header ("Location: alta_imagenes.php?id_usuario=$id_info");
	exit;
}
include("../../includes.php");
include("../includes_gestion.php");
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
$ssql = "select * from `$tabla11` WHERE historico='0'";
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
//enlaces_usuarios();
///////////////////////////////////////		AKI COMIENZA LA WEB 		/////////////////////////////
/*
?>

<div id='boton_nuevo'><a href='alta_usuarios.php'>NUEVO USUARIO</a></div>

<?php
*/
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla11` WHERE historico='0' limit " . $inicio . "," . $TAMANO_PAGINA;
$resultado = mysql_query($ssql);
/////////////////////////////////////////////////////////////

echo "<table border='0' id='tabla_gestion' width='750'>";

echo "<tr id='cabecera_tabla'> <td> <div id='texto_titulo'> ID </div></td> <td><div id='texto_titulo'> Nombre </div></td> <td><div id='texto_titulo'> Apellidos </div></td>  <td><div id='texto_titulo'> Direccion </div></td> <td><div id='texto_titulo'> M&oacute;vil </div></td> <td><div id='texto_titulo'> Acci&oacute;n </div></td> </tr>";

$i=1;
while ($row=mysql_fetch_object($resultado)){

$id_usuario=$row->Id;
$mail=$row->Email;
$nick=$row->Apodo;
$pass=$row->Pass;
$nombre=$row->Nombre;
$apellido1=$row->Apellidos;
$dni=$row->Nif;
$telefono1=$row->Movil;
$telefono2=$row->Telefono2;
$calle=$row->Direccion;
$fnacimiento=$row->FechaNacimiento;
$fecha=explode("-",$fnacimiento);
$fecha_nacimiento=$fecha[2]."-".$fecha[1]."-".$fecha[0]; 
$dia_alta=$row->FechaAlta;
$hora_alta=$row->hora_alta;

$i++;
if($i%2==0){
	$estilo="fila_par";
}else{
	$estilo="fila_inpar";
	}

		echo "<tr id='".$estilo."'>";
			echo "<td align='center'>".$id_usuario."</td>";
			echo "<td>".$nombre."</td>";
			echo "<td>".$apellido1." ".$apellido2."</td>";
			echo "<td>".$mail."</td>";
//			echo "<td>".$nick."</td>";
			echo "<td>".$telefono1."</td>";
			echo "<td><a href='info_usuario.php?id_usuario=$id_usuario'><img src='../../imagenes/info.png' name='borrar' alt='borrar' border='0'></a> | <a href='?accion=modificar&id=$id_usuario'><img src='../../imagenes/edit.gif' alt='editar' border='0'></a>";
			echo "|<a href='?accion=borrar&id=$id_usuario'><img src='../../imagenes/delete.gif' name='borrar' alt='borrar' border='0'></a></div></td>";
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
echo "<a href='usuarios.php?pagina=".$pag_anterior."'>P&aacute;gina anterior</a>";
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
          echo "<a href='usuarios.php?pagina=" . $i . "'class=izquierda>" . $i . "</a> ";
    }
} 

?>
</td>

<td width="200" align="right">
	<?php

if($pagina==$total_paginas){
	echo "&nbsp;";
}else{
	echo "<a href='usuarios.php?pagina=".$pag_siguiente."'>P&aacute;gina siguiente</a>";
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
