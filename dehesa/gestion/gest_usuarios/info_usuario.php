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

include("../../includes.php");
include("../includes_gestion.php");
//include("enlaces.php");
 
$id_usuario=$_GET['id_usuario'];
$fecha=date(Y."/".m."/".d);

/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla11` WHERE Id=$id_usuario";
$resultado = mysql_query($ssql);
$row=mysql_fetch_object($resultado);
/////////////////////////////////////////////////////////////

$cod_usuario=$row->Id;
$mail=$row->Email;
$nick=$row->Apodo;
$nombre=$row->Nombre;
$apellido1=$row->Apellidos;
$dni=$row->Nif;
$telefono1=$row->Telefono;
$telefono2=$row->Telefono2;
$movil=$row->Movil;
$calle=$row->Direccion;

$fechaEsp = $row->FechaNacimiento;
$fecha_nacimiento = strftime("%d-%m-%Y", strtotime($fechaEsp));

$fechaAlta = $row->FechaAlta;
$fecha_alta = strftime("%d-%m-%Y", strtotime($fechaAlta));

$nivel=$row->nivel;
$localidad=$row->Poblacion;
$provincia=$row->Provincia;
$nivel=$row->Nivel;

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

?>

<fieldset id="alta_clientes">

	<legend>DATOS DEL USUARIO</legend>
	
<table border="0" id='tabla_altas'>

	<tr>
		<td>Nivel:</td><td><b><?php niveles2($nivel); ?></b></td>
	</tr>
	<tr>
		<td>Nombre:</td><td><b><?php echo $nombre; ?></b></td>
	</tr>
	<tr>
		<td>Primer apellido:</td><td><b><?php echo $apellido1; ?></b></td>
	</tr>
	<tr>		
		<td>Direcci&oacute;n:</td><td><b><?php echo $calle.", ".$numero; ?></b></td>
	</tr>	
	<tr>
		<td>Localidad:</td><td><b><?php echo $localidad; ?></b></td>
	</tr>
	<tr>
		<td>DNI:</td><td><b><?php echo $dni; ?></b></td>
	</tr>
	<tr>
		<td>Correo electronico:</td><td><b><?php echo $mail; ?></b></td>
	</tr>
	<tr>
		<td>Te&eacute;fono fijo:</td><td><b><?php echo $telefono1; ?></b></td>
	</tr>

	<tr>
		<td>M&oacute;vil:</td><td><b><?php echo $movil; ?></b></td>
	</tr>

	<tr>
		<td>Fecha de nacimiento:</td><td><b><?php echo $fecha_nacimiento; ?></b></td>
	</tr>
	<tr>
		<td>Fecha de inscripci&oacute;n:</td><td><b><?php echo $fecha_alta; ?></b></td>
	</tr>
	

</table>

</fieldset>
<br>

<hr>

<fieldset id="alta_clientes">
	<legend>PARTIDOS DEL USUARIO</legend>

<?php

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
$ssql = "select * from `$tabla5` WHERE usuario=$id_usuario";
$rs = mysql_query($ssql,$conexion);
$num_total_registros = mysql_num_rows($rs);
//calculo el total de páginas
$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);

/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla5` WHERE usuario=$id_usuario ORDER BY hora_inicio DESC limit " . $inicio . "," . $TAMANO_PAGINA ;
$resultado = mysql_query($ssql);

/////////////////////////////////////////////////////////////

echo "<table border='0' id='tabla_gestion' width='500'>";

echo "<tr id='cabecera_tabla'> <td> <div id='texto_titulo'> ID </div></td> <td><div id='texto_titulo'> Pista </div></td>  <td><div id='texto_titulo'> D&iacute;a </div></td> <td><div id='texto_titulo'> Hora </div></td> <td><div id='texto_titulo'> &nbsp; </div></td> </tr>";

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
	$ssql_ocupante = "SELECT Apodo FROM `$tabla11` WHERE Id='$usuario'"; //busca el nombre del usuario.
	$resultado_ocupante = mysql_query($ssql_ocupante);
	$row_ocupante = mysql_fetch_object($resultado_ocupante);
	$ocupante=$row_ocupante->Apodo;
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
			echo "<td>".$nombre_pista."</td>";
			echo "<td>".$hora_bien."</td>";
			echo "<td>".$fecha_esp."</td>"; 
			echo "<td></td>";
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
<table border="0" width="550">
<tr>
	<td width="200" align="left">

<?php
if($pagina==1){
	echo "&nbsp;";
}else{
echo "<a href='info_usuario.php?pagina=".$pag_anterior."&id_usuario=$id_usuario'>P&aacute;gina anterior</a>";
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
          echo "<a href='info_usuario.php?pagina=" . $i . "&id_usuario=$id_usuario'class=izquierda>" . $i . "</a> ";
    }
} 

?>
</td>

<td width="200" align="right">
	<?php

if($pagina>=$total_paginas){
	echo "&nbsp;";
}else{
	echo "<a href='info_usuario.php?pagina=".$pag_siguiente."&id_usuario=$id_usuario'>P&aacute;gina siguiente</a>";
}

	?>
</td>
</table>

</fieldset>
<table border='0' width='80%' id='informe'>
	<tr>
		<td colspan='2' class='titulo'>
			INFORME GENERAL
		</td>
	</tr>

	<tr>
		<td>Partido de esta semana</td>
		<td><?php partidos_semana(); ?></td>
	</tr>
	<tr>
		<td>Partidos de este mes</td>
		<td><?php partidos_mes(); ?></td>
	</tr>
	<tr>
		<td>Partidos de este a&ntilde;o</td>
		<td><?php partidos_ano(); ?></td>
	</tr>

</table>

<br><br>


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