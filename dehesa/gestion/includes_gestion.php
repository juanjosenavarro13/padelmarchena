<?php

/////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////	BORRAR RESERVAS 4 JUGADORES			///////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////

function borrar_reserva(){
include("../../conexion.php");

$usuario=$_SESSION['id'];
//echo $usuario;
	$id_anular= $_GET['id'];
	if($_SESSION['privilegios']==1 OR $_SESSION['privilegios']==2){
		$sentencia="DELETE FROM $tabla5 WHERE id_reserva='$id_anular'";
		$sentencia_jugadores="DELETE FROM $tabla10 WHERE Id_reserva='$id_anular'";
		$sentencia_temporal="DELETE FROM $tabla12 WHERE Id_reserva='$id_anular'";
//		echo $sentencia."<br>";
//		echo $sentencia_jugadores;
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
echo $pag;
	//echo "DELETE FROM $tabla5 WHERE id_reserva='$id_anular'";
	//echo "pagina: ".$pag;
	header ("Location: $pag");
	exit;
}
/*
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOo		ENLACES DE GESTION	OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOo
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
*/
function enlaces_usuarios(){
echo "
<table border='2' width='100%' id='subenlaces_gestion'>
	<tr>
		<td><a href='alta_usuarios.php'>ALTA USUARIOS</a></td>
		<td><a href='usuarios.php'>LISTADO</a></td>
		<td><a href='solicitud.php'>SOLICITUD</a></td>
	</tr>
</table> ";


}

function enlaces_reservas(){
echo "
<table border='2' width='100%' id='subenlaces_gestion'>
	<tr>
		<td><a href='../gest_reservas/gestion_reservas.php'>RESERVAS</a></td>
		<td><a href='../gest_reservas/historial.php'>HISTORIAL</a></td>
		<td><a href='../gest_meapunto/gestion_meapunto.php'>ME APUNTO!!</a></td>
	</tr>
</table> ";

}

/*
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOo		LISTA DE PISTAS		OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOo
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
*/

function listadoPistas(){
include("../../conexion.php");

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
$ssql = "select * from `$tabla2`";
$rs = mysql_query($ssql,$conexion);
$num_total_registros = mysql_num_rows($rs);
//calculo el total de páginas
$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);

/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////

echo "<div id='boton_nuevo'><a href='alta_pistas.php'>NUEVA PISTA</a></div>";

/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla2` limit " . $inicio . "," . $TAMANO_PAGINA;
$resultado = mysql_query($ssql);
/////////////////////////////////////////////////////////////

echo "<table border='0' id='tabla_gestion' width='650'>";

echo "<tr id='cabecera_tabla'> <td> <div id='texto_titulo'> ID </div></td> <td><div id='texto_titulo'> Nombre </div></td> <td><div id='texto_titulo'> Descripcion </div></td>  <td><div id='texto_titulo'> Bloque </div></td> <td><div id='texto_titulo'> Bloque FS</div></td> <td><div id='texto_titulo'> Acci&oacute;n </div></td> </tr>";

$i=1;
while ($row=mysql_fetch_object($resultado)){

$id_pista=$row->id_pista;
$nombre=$row->nombre;
$descripcion=$row->descripcion;
$bloque=$row->bloque;
$bloque_fs=$row->bloque_fs;

$i++;
if($i%2==0){
	$estilo="fila_par";
}else{
	$estilo="fila_inpar";
	}

		echo "<tr id='".$estilo."'>";
			echo "<td align='center'>".$id_pista."</td>";
			echo "<td>".$nombre."</td>";
			echo "<td>".$descripcion."</td>";
			echo "<td align='center'>";
?>			
<a target="_blank" onClick="window.open(this.href, this.target, 'width=600,height=600'); return false;" id="enlace_bloque" href="informacion_bloques.php?bloque=<?php echo $bloque; ?>"><?php echo $bloque; ?></a>	
<?php
			echo "</td>";
			
			echo "<td align='center'>";
?>			
<a target="_blank" onClick="window.open(this.href, this.target, 'width=600,height=600'); return false;" id="enlace_bloque" href="informacion_bloques.php?bloque=<?php echo $bloque_fs; ?>"><?php echo $bloque_fs; ?></a>	
<?php
			echo "</td>";
			echo "<td>"; 
			echo "<a href='?accion=modificar&id=$id_pista'><img src='../../imagenes/edit.gif' alt='editar' border='0'></a>";
			echo "|<a href='?accion=borrar&id=$id_pista'><img src='../../imagenes/delete.gif' name='borrar' alt='borrar' border='0'></a></div></td>";
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
echo "<a href='pistas.php?pagina=".$pag_anterior."'>P&aacute;gina anterior</a>";
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
          echo "<a href='pistas.php?pagina=" . $i . "'class=izquierda>" . $i . "</a> ";
    }
} 

?>
</td>

<td width="200" align="right">
	<?php

if($pagina==$total_paginas){
	echo "&nbsp;";
}else{
	echo "<a href='pistas.php?pagina=".$pag_siguiente."'>P&aacute;gina siguiente</a>";
}

	?>
</td>
</table>

<?php } ?>

<?php

/*
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOo		LISTA DE BLOQUES		OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOo
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
*/

function listadoBloques(){
include("../../conexion.php");

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
$ssql = "select * from `$tabla4`";
$rs = mysql_query($ssql,$conexion);
$num_total_registros = mysql_num_rows($rs);
//calculo el total de páginas
$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);

/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////

echo "<div id='boton_nuevo'><a href='alta_bloques.php'>NUEVO BLOQUE</a></div>";

/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla4` limit " . $inicio . "," . $TAMANO_PAGINA;
$resultado = mysql_query($ssql);
/////////////////////////////////////////////////////////////

echo "<table border='0' id='tabla_gestion' width='650'>";

echo "<tr id='cabecera_tabla'> <td> <div id='texto_titulo'> ID </div></td> <td><div id='texto_titulo'> Nombre </div></td> <td><div id='texto_titulo'> Descripcion </div></td>  <td><div id='texto_titulo'> Detalles </div></td> </tr>";

$i=1;
while ($row=mysql_fetch_object($resultado)){

$id_bloque=$row->id_bloque;
$nombre=$row->nombre;
$descripcion=$row->descripcion;
$bloque=$row->bloque;

$i++;
if($i%2==0){
	$estilo="fila_par";
}else{
	$estilo="fila_inpar";
	}

		echo "<tr id='".$estilo."'>";
			echo "<td align='center'>".$id_bloque."</td>";
			echo "<td>".$nombre."</td>";
			echo "<td>".$descripcion."</td>";
?>
<td> <a target="_blank" onClick="window.open(this.href, this.target, 'width=300,height=600'); return false;" style="text-decoration: none" href="informacion_bloques.php?bloque=<?php echo $id_bloque; ?>"><img src='../../imagenes/edit.gif' alt='editar' border='0'></a>
<?php


			echo "|<a href='?accion=borrar_bloque&id=$id_bloque'><img src='../../imagenes/delete.gif' name='borrar' alt='borrar' border='0'></a></div></td>";
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

<?php } ?>
<?php
/*
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOo		LISTA DE TARIFAS		OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOo
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
*/

function listadoTarifas(){
include("../../conexion.php");

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
$ssql = "select * from `$tabla15`";
$rs = mysql_query($ssql,$conexion);
$num_total_registros = mysql_num_rows($rs);
//calculo el total de páginas
$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);

/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla15` ORDER BY id_tarifa limit " . $inicio . "," . $TAMANO_PAGINA ;
$resultado = mysql_query($ssql);
/////////////////////////////////////////////////////////////

echo "<table border='0' id='tabla_gestion' width='650'>";

echo "<tr id='cabecera_tabla'> <td> <div id='texto_titulo'> ID </div></td> <td><div id='texto_titulo'> Descripcion </div></td> <td><div id='texto_titulo'> precio socios </div></td> <td><div id='texto_titulo'> precio no socios </div></td> <td><div id='texto_titulo'> Detalles </div></td> </tr>";

$i=1;
while ($row=mysql_fetch_object($resultado)){

$id_tarifa=$row->id_tarifa;
$descripcion=$row->descripcion;
//$precio_soc=$row->precio_soc;
//$precio_nosoc=$row->precio_nosoc;
$f2=$row->precio_soc;
$f = explode(".", $row->precio_soc['PHP_SELF']);
$precio_soc_euro=$f[count($f)-1];
$precio_soc_cent=substr ( $f2 , 2 ,  2 );
$precio_soc=$precio_soc_euro.".".$precio_soc_cent;

$g2=$row->precio_nosoc;
$g = explode(".", $row->precio_nosoc['PHP_SELF']);
$precio_nosoc_euro=$g[count($g)-1];
$precio_nosoc_cent=substr ( $g2 , 2 ,  2 );
$precio_nosoc=$precio_nosoc_euro.".".$precio_nosoc_cent;


$i++;
if($i%2==0){
	$estilo="fila_par";
}else{
	$estilo="fila_inpar";
	}

		echo "<tr id='".$estilo."'>";
			echo "<td align='center'>".$id_tarifa."</td>";
			echo "<td>".$descripcion."</td>";
			echo "<td>".$precio_soc." &euro;</td>";
			echo "<td>".$precio_nosoc." &euro;</td>";
?>
<td> <a href="informacion_tarifas.php?tarifa=<?php echo $id_tarifa; ?>"><img src='../../imagenes/edit.gif' alt='editar' border='0'></a>
<?php


			echo "|<a href='?accion=borrar_tarifa&id=$id_tarifa'><img src='../../imagenes/delete.gif' name='borrar' alt='borrar' border='0'></a></div></td>";
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

<?php } ?>

<?php

/*
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOo		ALTA DE BLOQUES		OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOo
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
*/

function altaBloques(){


echo "<form action='alta_bloques2.php' method='post' name='alta_bloques'>

<fieldset id='alta_clientes'>

	<legend>ALTA BLOQUES</legend>
	
<table border='0' id='tabla_altas' width='700'>
	
	<tr>
		<td>Nombre:</td><td colspan='2'>Descrici&oacute;n:</td>
	</tr>
	<tr>
		<td align='left' valign='top'><input type='text' name='nombre'></td><td colspan='2'><textarea name='descripcion'></textarea></td>
	</tr>

	<tr>		
		<td colspan='3'><hr></td>
	</tr>
	<tr>
		<td colspan='3' id='titulo'>Horas:</td>
	</tr>
	<tr>
		<td id='bloque'>Desde:<input type='text' name='desde1'>Hasta:<input type='text' name='hasta1'></td>
		<td id='bloque'>Desde:<input type='text' name='desde2'>Hasta:<input type='text' name='hasta2'></td>
		<td id='bloque'>Desde:<input type='text' name='desde3'>Hasta:<input type='text' name='hasta3'></td>
	</tr>
	<tr>
		<td id='bloque'>Desde:<input type='text' name='desde4'>Hasta:<input type='text' name='hasta4'></td>
		<td id='bloque'>Desde:<input type='text' name='desde5'>Hasta:<input type='text' name='hasta5'></td>
		<td id='bloque'>Desde:<input type='text' name='desde6'>Hasta:<input type='text' name='hasta6'></td>
	</tr>
	<tr>
		<td id='bloque'>Desde:<input type='text' name='desde7'>Hasta:<input type='text' name='hasta7'></td>
		<td id='bloque'>Desde:<input type='text' name='desde8'>Hasta:<input type='text' name='hasta8'></td>
		<td id='bloque'>Desde:<input type='text' name='desde9'>Hasta:<input type='text' name='hasta9'></td>
	</tr>

	<tr>
		<td colspan='3' align='right'><input type='submit' name='guardar' value='GUARDAR' id='boton'></td>
	</tr>

		</table>

</form>
</fieldset>";
}


/*
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOo		ALTA DE TARIFAS		OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOo
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
*/

function altaTarifas(){


echo "<form action='alta_tarifas2.php' method='post' name='alta_bloques'>

<fieldset id='alta_clientes'>

	<legend>NUEVA TARIFA</legend>
	
<table border='0' id='tabla_altas' width='700'>
	
	<tr>
		<td>Nombre:</td><td colspan='2'>Descrici&oacute;n:</td>
	</tr>
	<tr>
		<td align='left' valign='top'><input type='text' name='nombre'></td><td colspan='2'><textarea name='descripcion' rows='3' cols='40'></textarea></td>
	</tr>

	<tr>		
		<td colspan='3'><hr></td>
	</tr>
	<tr>
		<td colspan='3' id='titulo'>Horas:</td>
	</tr>
	<tr>
		<td id='bloque'>Desde:<input type='text' name='desde1'>Hasta:<input type='text' name='hasta1'></td>
		<td id='bloque'>Desde:<input type='text' name='desde2'>Hasta:<input type='text' name='hasta2'></td>
		<td id='bloque'>Desde:<input type='text' name='desde3'>Hasta:<input type='text' name='hasta3'></td>
	</tr>
	<tr>
		<td id='bloque'>Desde:<input type='text' name='desde4'>Hasta:<input type='text' name='hasta4'></td>
		<td id='bloque'>Desde:<input type='text' name='desde5'>Hasta:<input type='text' name='hasta5'></td>
		<td id='bloque'>Desde:<input type='text' name='desde6'>Hasta:<input type='text' name='hasta6'></td>
	</tr>
	<tr>
		<td id='bloque'>Desde:<input type='text' name='desde7'>Hasta:<input type='text' name='hasta7'></td>
		<td id='bloque'>Desde:<input type='text' name='desde8'>Hasta:<input type='text' name='hasta8'></td>
		<td id='bloque'>Desde:<input type='text' name='desde9'>Hasta:<input type='text' name='hasta9'></td>
	</tr>

	<tr>
		<td colspan='3' align='right'><input type='submit' name='guardar' value='GUARDAR' id='boton'></td>
	</tr>

		</table>

</form>
</fieldset>";
}

/*
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOo		MUESTRA CALENDARIO		oOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOo
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
*/

function calcula_numero_dia_semana($dia,$mes,$ano){
	$numerodiasemana = date('w', mktime(0,0,0,$mes,$dia,$ano));
	if ($numerodiasemana == 0) 
		$numerodiasemana = 6;
	else
		$numerodiasemana--;
	return $numerodiasemana;
}

//funcion que devuelve el último día de un mes y año dados
function ultimoDia($mes,$ano){ 
    $ultimo_dia=28; 
    while (checkdate($mes,$ultimo_dia + 1,$ano)){ 
       $ultimo_dia++; 
    } 
    return $ultimo_dia; 
    
} 

function dame_nombre_mes($mes){
	 switch ($mes){
	 	case 1:
			$nombre_mes="Enero";
			break;
	 	case 2:
			$nombre_mes="Febrero";
			break;
	 	case 3:
			$nombre_mes="Marzo";
			break;
	 	case 4:
			$nombre_mes="Abril";
			break;
	 	case 5:
			$nombre_mes="Mayo";
			break;
	 	case 6:
			$nombre_mes="Junio";
			break;
	 	case 7:
			$nombre_mes="Julio";
			break;
	 	case 8:
			$nombre_mes="Agosto";
			break;
	 	case 9:
			$nombre_mes="Septiembre";
			break;
	 	case 10:
			$nombre_mes="Octubre";
			break;
	 	case 11:
			$nombre_mes="Noviembre";
			break;
	 	case 12:
			$nombre_mes="Diciembre";
			break;
	}
	return $nombre_mes;
}

function mostrar_calendario($dia,$mes,$ano){
$mes_hoy=date("m");
$ano_hoy=date("Y");

$dia_seleccionado=$_POST['seleccionado'];
$mes_seleccionado=$_POST['nuevo_mes'];
$ano_seleccionado=$_POST['nuevo_ano'];
//echo $dia_seleccionado."-".$mes_seleccionado."-".$ano_seleccionado;
if (($mes_hoy <> $mes) || ($ano_hoy <> $ano))
{
	$hoy=0;
}
else
{
	$hoy=date("d");
}

if($dia_seleccionado<=$hoy){
	$dia_seleccionado=$hoy;
}

	//tomo el nombre del mes que hay que imprimir
	$nombre_mes = dame_nombre_mes($mes);
	
	//construyo la cabecera de la tabla

	echo "<table width=200 cellspacing=3 cellpadding=2 border=0 id='calendario'><tr><td colspan=7 align=center class=tit>";
	echo "<table width=100% cellspacing=2 cellpadding=2 border=0><tr><td style=font-size:10pt;font-weight:bold;color:white>";
	//calculo el mes y ano del mes anterior
	
	if ($mes==1){
		$ano_anterior = $ano - 1;
		$mes_anterior=12;
	}else{
		$mes_anterior = $mes - 1;
		$ano_anterior = $ano;
	}

	if($mes>$mes_hoy OR $ano>$ano_hoy){
	//$mes_anterior=$mes-1;
	echo "<form action='alta_reservas.php' method='POST'>";
	echo "<input type='submit' name='enviar' value='&lt;&lt;'><input type='hidden' name='mes_actual' value='$mes_anterior'><input type='hidden' name='ano_actual' value='$ano_anterior'><input type='hidden' name='seleccionado' value='32'></form>";
	}else{
	//$mes_anterior=$mes-1;
	echo "&nbsp;";
	}
		echo "</td>";
	   echo "<td align=center class=tit>$nombre_mes $ano</td>";
	   echo "<td align=right style=font-size:10pt;font-weight:bold;color:white>";
	//calculo el mes y ano del mes siguiente
	//$mes_siguiente = $mes + 1;

	if ($mes==12){
		$ano_siguiente = $ano + 1;
		$mes_siguiente=1;
	}else{
		$ano_siguiente = $ano;
		$mes_siguiente=$mes+1;
	}
//	if($mes==$mes_hoy){	
	
	echo "<form action='alta_reservas.php' method='POST'>";
	echo "<input type='submit' name='enviar' value='&gt;&gt;'><input type='hidden' name='mes_actual' value='$mes_siguiente'><input type='hidden' name='ano_actual' value='$ano_siguiente'><input type='hidden' name='seleccionado' value='32'></form>";
//	}else{
//	echo "&nbsp;";
//	}
	echo "</td></tr></table></td></tr>";
	echo "<form action='alta_reservas.php' method='POST'>";
	echo '<tr>
			    <td width=14% align=center class=altn>Lu</td>
			    <td width=14% align=center class=altn>Ma</td>
			    <td width=14% align=center class=altn>Mi</td>
			    <td width=14% align=center class=altn>Ju</td>
			    <td width=14% align=center class=altn>Vi</td>
			    <td width=14% align=center class=altn>Sa</td>
			    <td width=14% align=center class=altn>Do</td>
			</tr>';
	
	//Variable para llevar la cuenta del dia actual
	$dia_actual = 1;
	
	//calculo el numero del dia de la semana del primer dia
	$numero_dia = calcula_numero_dia_semana(1,$mes,$ano);
	//echo "Numero del dia de demana del primer: $numero_dia <br>";
	
	//calculo el último dia del mes
	$ultimo_dia = ultimoDia($mes,$ano);

	//calculo de los días que llevan enlace
$dias_enlace=100;

$ultimo_dia_enlace_mes2=date("d")+$dias_enlace-$ultimo_dia;

if($mes==$mes_hoy){
$ultimo_dia_enlace=date("d")+$dias_enlace;

}else{
$ultimo_dia_enlace=date("d")+$dias_enlace-$ultimo_dia;
}
//echo $ultimo_dia_enlace;
echo "<br>";

//escribo la primera fila de la semana
	echo "<tr>";
	for ($i=0;$i<7;$i++){
		if ($i < $numero_dia){
			//si el dia de la semana i es menor que el numero del primer dia de la semana no pongo nada en la celda
			echo "<td></td>";
		} else {
		if (($i == 5) || ($i == 6))
		{
				if ($dia_actual == $hoy)
				{
					echo "<td class=da><input type='submit' name='seleccionado' value='$dia_actual' class=da></td>";
				}
				elseif ($dia_actual == $dia_seleccionado)
				{
					echo "<td class=ds>";
						if($dia_actual>=$hoy){
						echo "<input type='submit' name='seleccionado' value='$dia_actual' class=ds>";
						}
					echo "</td>";
				}
				elseif($dia_actual<$hoy)
				{
					echo "<td class=fs>$dia_actual</td>";
				}
				elseif($dia_actual>=$ultimo_dia_enlace){
					echo "<td class=fs>$dia_actual</td>";
				}
				else
				{
					echo "<td class=fs><input type='submit' name='seleccionado' value='$dia_actual' class=fs></td>";
				}
		}
		else
		{			
				if ($dia_actual == $dia_seleccionado)
				{
					echo "<td class=ds><input type='submit' name='seleccionado' value='$dia_actual' class=ds></td>";
				}
				elseif ($dia_actual == $hoy)
				{
					echo "<td class=da><input type='submit' name='seleccionado' value='$dia_actual' class=da></td>";
				}
				elseif($dia_actual<$hoy)
				{
					echo "<td align=center>$dia_actual</td>";
				}
				elseif($dia_actual>=$ultimo_dia_enlace){
					echo "<td align='center'>$dia_actual</td>";
				}
				else
				{
					echo "<td class=dl><input type='submit' name='seleccionado' value='$dia_actual' class=dl></td>";
				}
		}
			$dia_actual++;
		}
	}
	echo "</tr>";
	
	//recorro todos los demás días hasta el final del mes
	$numero_dia = 0;
	while ($dia_actual <= $ultimo_dia){
		//si estamos a principio de la semana escribo el <TR>
		if ($numero_dia == 0)
			echo "<tr>";
		//si es el uñtimo de la semana, me pongo al principio de la semana y escribo el </tr>

			if (($numero_dia == 5) || ($numero_dia == 6))
			{
				if ($dia_actual == $hoy)
				{
					echo "<td class=da><input type='submit' name='seleccionado' value='$dia_actual' class=da></td>";
				}
				elseif ($dia_actual == $dia_seleccionado)
				{
					echo "<td class=ds><input type='submit' name='seleccionado' value='$dia_actual' class=ds></td>";
				}
				elseif($dia_actual>=$ultimo_dia_enlace){
					echo "<td class=fs>$dia_actual</td>";
				}
				elseif($dia_actual<$hoy)
				{
					echo "<td class=fs>$dia_actual</td>";
				}
				else
				{
					echo "<td class=fs ><input type='submit' name='seleccionado' value='$dia_actual' class=fs></td>";
				}
			}
			else
			{		
				if ($dia_actual == $dia_seleccionado)
				{
					echo "<td class=ds><input type='submit' name='seleccionado' value='$dia_actual' class=ds></td>";
				}
				elseif ($dia_actual == $hoy)
				{
					echo "<td class=da><input type='submit' name='seleccionado' value='$dia_actual' class=da></td>";
				}			
				elseif($dia_actual<$hoy)
				{
					echo "<td align=center>$dia_actual</td>";
				}
				elseif($dia_actual>=$ultimo_dia_enlace){
					echo "<td align=center>$dia_actual</td>";
				}				
				else
				{
					echo "<td align=center><input type='submit' name='seleccionado' value='$dia_actual' class=dl></td>";
				}
			}

			$dia_actual++;
			$numero_dia++;
			if ($numero_dia == 7)
			{
				$numero_dia = 0;
				echo "</tr>";
			}

	}
	
	//compruebo que celdas me faltan por escribir vacias de la última semana del mes
	for ($i=$numero_dia;$i<7;$i++){
		echo "<td></td>";
	}
	
	echo "</tr>";
	echo "</table>";
	echo "<input type='hidden' name='mes_actual' value='$mes'>";
	echo "<input type='hidden' name='ano_actual' value='$ano'>";
	echo $pag;
	echo "</form>";

	
}

function mostrar_calendario_meapunto($dia,$mes,$ano){
$mes_hoy=date("m");
$ano_hoy=date("Y");

$dia_seleccionado=$_POST['seleccionado'];
$mes_seleccionado=$_POST['nuevo_mes'];
$ano_seleccionado=$_POST['nuevo_ano'];
//echo $dia_seleccionado."-".$mes_seleccionado."-".$ano_seleccionado;
if (($mes_hoy <> $mes) || ($ano_hoy <> $ano))
{
	$hoy=0;
}
else
{
	$hoy=date("d");
}

if($dia_seleccionado<=$hoy){
	$dia_seleccionado=$hoy;
}


	//tomo el nombre del mes que hay que imprimir
	$nombre_mes = dame_nombre_mes($mes);
	
	//construyo la cabecera de la tabla

	echo "<form action='alta_meapunto.php' method='POST'>";
	echo "<table width=200 cellspacing=3 cellpadding=2 border=0 id='calendario'><tr><td colspan=7 align=center class=tit>";
	echo "<table width=100% cellspacing=2 cellpadding=2 border=0><tr><td style=font-size:10pt;font-weight:bold;color:white>";
	//calculo el mes y ano del mes anterior
	$mes_anterior = $mes - 1;
	$ano_anterior = $ano;
	if ($mes_anterior==0){
		$ano_anterior--;
		$mes_anterior=12;
	}
	if($mes>$mes_hoy){
	$mes_anterior=$mes-1;
	echo "<input type='submit' name='enviar' value='&lt;&lt;'><input type='hidden' name='mes_actual' value='$mes_anterior'><input type='hidden' name='ano_actual' value='$ano'><input type='hidden' name='seleccionado' value='32'></form>";
	}else{
	echo "&nbsp;";
	}
		echo "</td>";
	   echo "<td align=center class=tit>$nombre_mes $ano</td>";
	   echo "<td align=right style=font-size:10pt;font-weight:bold;color:white>";
	//calculo el mes y ano del mes siguiente
	$mes_siguiente = $mes + 1;
	$ano_siguiente = $ano;
	if ($mes_siguiente==13){
		$ano_siguiente++;
		$mes_siguiente=1;
	}
	
	if($mes==$mes_hoy){	
	$mes_posterior=$mes+1;
	echo "<input type='submit' name='enviar' value='&gt;&gt;'><input type='hidden' name='mes_actual' value='$mes_posterior'><input type='hidden' name='ano_actual' value='$ano'><input type='hidden' name='seleccionado' value='32'></form>";
	}else{
	echo "&nbsp;";
	}
	echo "</td></tr></table></td></tr>";
	echo "<form action='alta_meapunto.php' method='POST'>";
	echo '<tr>
			    <td width=14% align=center class=altn>Lu</td>
			    <td width=14% align=center class=altn>Ma</td>
			    <td width=14% align=center class=altn>Mi</td>
			    <td width=14% align=center class=altn>Ju</td>
			    <td width=14% align=center class=altn>Vi</td>
			    <td width=14% align=center class=altn>Sa</td>
			    <td width=14% align=center class=altn>Do</td>
			</tr>';
	
	//Variable para llevar la cuenta del dia actual
	$dia_actual = 1;
	
	//calculo el numero del dia de la semana del primer dia
	$numero_dia = calcula_numero_dia_semana(1,$mes,$ano);
	//echo "Numero del dia de demana del primer: $numero_dia <br>";
	
	//calculo el último dia del mes
	$ultimo_dia = ultimoDia($mes,$ano);

	//calculo de los días que llevan enlace
$dias_enlace=100;

$ultimo_dia_enlace_mes2=date("d")+$dias_enlace-$ultimo_dia;

if($mes==$mes_hoy){
$ultimo_dia_enlace=date("d")+$dias_enlace;

}elseif($mes==$mes_hoy+1){
$ultimo_dia_enlace=date("d")+$dias_enlace-$ultimo_dia;
}
//echo $ultimo_dia_enlace;
echo "<br>";
//escribo la primera fila de la semana
	echo "<tr>";
	for ($i=0;$i<7;$i++){
		if ($i < $numero_dia){
			//si el dia de la semana i es menor que el numero del primer dia de la semana no pongo nada en la celda
			echo "<td></td>";
		} else {
		if (($i == 5) || ($i == 6))
		{
				if ($dia_actual == $hoy)
				{
					echo "<td class=da><input type='submit' name='seleccionado' value='$dia_actual' class=da></td>";
				}
				elseif ($dia_actual == $dia_seleccionado)
				{
					echo "<td class=ds>";
						if($dia_actual>=$hoy){
						echo "<input type='submit' name='seleccionado' value='$dia_actual' class=ds>";
						}
					echo "</td>";
				}
				elseif($dia_actual<$hoy)
				{
					echo "<td class=fs>$dia_actual</td>";
				}
				elseif($dia_actual>=$ultimo_dia_enlace){
					echo "<td class=fs>$dia_actual</td>";
				}
				else
				{
					echo "<td class=fs><input type='submit' name='seleccionado' value='$dia_actual' class=fs></td>";
				}
		}
		else
		{			
				if ($dia_actual == $dia_seleccionado)
				{
					echo "<td class=ds><input type='submit' name='seleccionado' value='$dia_actual' class=ds></td>";
				}
				elseif ($dia_actual == $hoy)
				{
					echo "<td class=da><input type='submit' name='seleccionado' value='$dia_actual' class=da></td>";
				}
				elseif($dia_actual<$hoy)
				{
					echo "<td align=center>$dia_actual</td>";
				}
				elseif($dia_actual>=$ultimo_dia_enlace){
					echo "<td align='center'>$dia_actual</td>";
				}
				else
				{
					echo "<td class=dl><input type='submit' name='seleccionado' value='$dia_actual' class=dl></td>";
				}
		}
			$dia_actual++;
		}
	}
	echo "</tr>";
	
	//recorro todos los demás días hasta el final del mes
	$numero_dia = 0;
	while ($dia_actual <= $ultimo_dia){
		//si estamos a principio de la semana escribo el <TR>
		if ($numero_dia == 0)
			echo "<tr>";
		//si es el uñtimo de la semana, me pongo al principio de la semana y escribo el </tr>

			if (($numero_dia == 5) || ($numero_dia == 6))
			{
				if ($dia_actual == $hoy)
				{
					echo "<td class=da><input type='submit' name='seleccionado' value='$dia_actual' class=da></td>";
				}
				elseif ($dia_actual == $dia_seleccionado)
				{
					echo "<td class=ds><input type='submit' name='seleccionado' value='$dia_actual' class=ds></td>";
				}
				elseif($dia_actual>=$ultimo_dia_enlace){
					echo "<td class=fs>$dia_actual</td>";
				}
				elseif($dia_actual<$hoy)
				{
					echo "<td class=fs>$dia_actual</td>";
				}
				else
				{
					echo "<td class=fs ><input type='submit' name='seleccionado' value='$dia_actual' class=fs></td>";
				}
			}
			else
			{		
				if ($dia_actual == $dia_seleccionado)
				{
					echo "<td class=ds><input type='submit' name='seleccionado' value='$dia_actual' class=ds></td>";
				}
				elseif ($dia_actual == $hoy)
				{
					echo "<td class=da><input type='submit' name='seleccionado' value='$dia_actual' class=da></td>";
				}			
				elseif($dia_actual<$hoy)
				{
					echo "<td align=center>$dia_actual</td>";
				}
				elseif($dia_actual>=$ultimo_dia_enlace){
					echo "<td align=center>$dia_actual</td>";
				}				
				else
				{
					echo "<td align=center><input type='submit' name='seleccionado' value='$dia_actual' class=dl></td>";
				}
			}

			$dia_actual++;
			$numero_dia++;
			if ($numero_dia == 7)
			{
				$numero_dia = 0;
				echo "</tr>";
			}

	}
	
	//compruebo que celdas me faltan por escribir vacias de la última semana del mes
	for ($i=$numero_dia;$i<7;$i++){
		echo "<td></td>";
	}
	
	echo "</tr>";
	echo "</table>";
	echo "<input type='hidden' name='mes_actual' value='$mes'>";
	echo "<input type='hidden' name='ano_actual' value='$ano'>";
	echo $pag;
	echo "</form>";

	
}



/*
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOo		MUESTRA PISTAS			OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOo
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
*/

function listaPistas($fecha){
include("../../conexion.php");
session_start();
	
	$f = explode("/", $_SERVER['PHP_SELF']);
	$enlace_seleccionado=$f[count($f)-1];

	$fecha_seg=explode("-",$fecha);
	$dia_select=$fecha_seg[2];
	$mes_select=$fecha_seg[1];
	$ano_select=$fecha_seg[0];
	$fecha_es=$dia_select . "-" . $mes_select . "-" . $ano_select;
	$numero_dia_semana=calcula_numero_dia_semana($dia_select,$mes_select,$ano_select);

/////////////////////////////////////////////////////////////
$ssql = "SELECT id_pista FROM `$tabla2`";
$resultado = mysql_query($ssql);
/////////////////////////////////////////////////////////////
echo "<table id='tabla_pistas' width='500'>";
echo "<tr><td colspan='4' align='center' id='cabecera'>HORARIOS DISPONIBLES</td></tr>";
echo "<tr>";

//Imprimimos los nombres de las pistas
$pag=$_SERVER['PHP_SELF'];  // el nombre y ruta de esta misma pÃ¡gina.

$i=1;
$usuario=$_SESSION['id'];
//echo "usuario: ".$usuario;
while ($registro=mysql_fetch_row($resultado)){

$id_pista=$registro[0];

echo "<td valign='top'>";

	//buscampos los datos y los horarios de cada pista
	/////////////////////////////////////////////////////////////
	$ssql_pista = "SELECT * FROM `$tabla2` WHERE id_pista=$registro[0]";
	$resultado_pista = mysql_query($ssql_pista);
	/////////////////////////////////////////////////////////////

	echo "<table id='subtabla_pistas' width='100%'>";
	
	while ($registro_pista=mysql_fetch_row($resultado_pista)){
		echo "<tr><td class='titulo'>";
		echo $registro_pista[1];
		echo "</td></tr>";
//imprimimos los horarios

$numero_dia_semana=calcula_numero_dia_semana($dia_select,$mes_select,$ano_select);

		if($numero_dia_semana==5 OR $numero_dia_semana==6){
			$bloque_hoy=$registro_pista[4];
		}else{
			$bloque_hoy=$registro_pista[3];
		}

		/////////////////////////////////////////////////////////////
		$ssql_horario = "SELECT * FROM `$tabla3` WHERE bloque=$bloque_hoy ORDER BY inicio";
		$resultado_horario = mysql_query($ssql_horario);
		/////////////////////////////////////////////////////////////

			while ($registro_horario=mysql_fetch_row($resultado_horario)){
				$hora_actual=substr($registro_horario[1],0,5);
				$id_hora=$registro_horario[0];
				echo "<tr><td valign='bottom'>";
			/////////////////////		SELECCIONA SI ESTA OCUPADA		////////////////////////////////////////
			$ssql_ocupada = "SELECT id_reserva,usuario FROM `$tabla5` WHERE pista='$id_pista' AND horario='$id_hora' AND dia='$fecha'"; //selecciona si la pista esta ocupada. 
			$resultado_ocupada = mysql_query($ssql_ocupada);
			$row = mysql_fetch_object($resultado_ocupada);
			$nr = mysql_num_rows($resultado_ocupada);
			//////////////////////////////////////////////////////////////////////////////////////////////////
			
			/////////////////////		SELECCIONA SI HAY MEAPUNTO		////////////////////////////////////////
			$ssql_meapunto = "SELECT id_meapunto FROM `$tabla8` WHERE pista='$id_pista' AND horario='$id_hora' AND dia='$fecha'"; //selecciona si la pista esta ocupada. 
			$resultado_meapunto = mysql_query($ssql_meapunto);
			$row_meapunto = mysql_fetch_object($resultado_meapunto);
			$id_meapunto=$row_meapunto->id_meapunto;
			$nr_meapunto = mysql_num_rows($resultado_meapunto);
			//////////////////////////////////////////////////////////////////////////////////////////////////
			
			if($nr==1){
				$usuario_pista=$row->usuario;
				$id_reserva=$row->id_reserva;
				$ssql_ocupante = "SELECT Nombre, Apellidos FROM `$tabla11` WHERE Id='$usuario_pista'"; //busca el nombre del usuario.
			$resultado_ocupante = mysql_query($ssql_ocupante);
			$row_ocupante = mysql_fetch_object($resultado_ocupante);
			echo "<div id='ocupada'>".$row_ocupante->Nombre." ".$row_ocupante->Apellidos;

			echo "<div id='hora'>$hora_actual</div><div id='anular_reserva'><a href='?accion=anular&id=$id_reserva'>anular </a>&nbsp;&nbsp;&nbsp;&nbsp;</div>";
			
			echo "<br></div>";
			}else{
				$hora_hoy=date('H:i');
				$hora_hoy_seg=time($hora_hoy);
				
				$fecha_seg=explode("-",$fecha);
				$dia_seg=$fecha_seg[2];
				$mes_seg=$fecha_seg[1];
				$ano_seg=$fecha_seg[0];
				
				$hora_div=explode(":",$registro_horario[1]);
				$hora_seg=$hora_div[0];
				$min_seg=$hora_div[1];
//				echo $min_seg;
//				echo "<br>$hora_seg,$min_seg,00,$mes_seg,$dia_seg,$ano_seg";
				$fecha_actual_seg=mktime($hora_seg,15,$min_seg,$mes_seg,$dia_seg,$ano_seg); //hora,minutos,segundos,mes,dia,año
//				echo "<br>".$fecha_actual_seg;
//				echo "<br>".time();

				$fecha_hoy_seg=time();
				if($fecha_actual_seg<=$fecha_hoy_seg){
					echo "<div id='pasado'>&nbsp;</div>";
				}else{
			/////////////////////////////////////////////////////////////
				
				if($enlace_seleccionado=='alta_meapunto.php'){
					echo "<form action='alta_meapunto2.php' method='POST'>";
					echo "<input type='hidden' name='meapunto' value='$id_meapunto'>";
				}elseif($enlace_seleccionado=='alta_reservas.php'){
					echo "<form action='alta_reservas2.php' method='POST'>";
				}
				if($nr_meapunto==1){
					$estilo='meapunto';
				}else{
					$estilo='reservar';
				}
				echo "<input type='submit' name='hora_actual' value='$hora_actual' id='$estilo'>";
				//echo $fecha_actual_seg."<br>".time();
				echo "<input type='hidden' name='hora' value='$id_hora'>";
//				echo "<input type='hidden' name='usuario' value='$usuario'>";
				echo "<input type='hidden' name='pista' value='$id_pista'>";
				echo "<input type='hidden' name='dia' value='$fecha'>";
				echo "<input type='hidden' name='pag' value='$pag'>";
				echo "<input type='hidden' name='fecha_seg' value='$fecha_actual_seg'>";
				echo "</form>";
				echo "</td></tr>";
				}
			}
		}		
		echo "</td></tr>";
	}
	echo "</table>";

echo "</td>";

}
		echo "</tr>";
	echo "</table>";

}

/*
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOo		ALTA DE CLIENTES			oOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOo
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
*/

function confirmar_usuarios(){

include("../conexion.php");
$id_solicitud=$_GET[id_solicitud];

/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla7` WHERE id_solicitud=$id_solicitud";
$resultado = mysql_query($ssql);
/////////////////////////////////////////////////////////////
while ($row=mysql_fetch_object($resultado)){

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

}

?>


<form action="alta_usuarios2.php" method="post" name="fcalen">

<fieldset id="alta_clientes">

	<legend>
<?php
	if($_SESSION['privilegios']=='1'){
		echo "ALTA DE USUARIOS";
	}else{
		echo "DATE DE ALTA";
	}

?>
	
	
	</legend>
	
<table border="0" id='tabla_altas'>
	
	<tr>
		<td>Nick:</td><td><input type="text" name="fecha1" value=<?php echo $nick; ?> readonly> *</td>
	</tr>
	<tr>
		<td>Nombre:</td><td><input type="text" name="nombre" value=<?php echo $nombre; ?>> *</td>
	</tr>
	<tr>
		<td>Primer apellido:</td><td><input type="text" name="apellido1" value=<?php echo $apellido1; ?>> *</td>
	</tr>

	<tr>		
		<td>Segundo apellido:</td><td><input type="text" name="apellido2" value=<?php echo $apellido2; ?>></td>
	</tr>
	<tr>
		<td>Correo electronico:</td><td><input type="text" name="mail" value=<?php echo $mail; ?>> *</td>
	</tr>
	<tr>
		<td>M&oacute;vil:</td><td><input type="text" name="telefono1" value=<?php echo $telefono1; ?>> *</td>
	</tr>

	<tr>
		<td colspan="2" align="center">Fecha de nacimiento: 
			<select name="dia"> <?php for ($i=1;$i<32;$i++){
				echo "<option ";
					if($fecha[2]==$i){
						echo "selected";
					}
				echo ">$i</option>";
				} ?>		
			</select>
		<select name="mes">
		
		<?php 
		
			$j[1]="Enero";
			$j[2]="Febrero";
			$j[3]="Marzo";
			$j[4]="Abril";
			$j[5]="Mayo";
			$j[6]="Junio";
			$j[7]="Julio";
			$j[8]="Agosto";
			$j[9]="Septiembre";
			$j[10]="Octubre";
			$j[11]="Noviembre";
			$j[12]="Diciembre";

			for ($i=1;$i<13;$i++){
				?> <option value=<?php echo $i; ?>
				<?php
				if($fecha[1]==$i){
						echo "selected";
					}
				?>
				 > <?php echo $j[$i]; ?> </option>;
			<?php 
			}			
	  ?>
			</select>
<?php 
$Fecha=getdate();
$ano=$Fecha["year"]; 

$inicio=$ano-10;
$fin=$ano-80;

?>
			<select name="ano">
				<?php	for ($i=$inicio;$i>$fin;$i--){
				echo "<option value=".$i;
				if($fecha[0]==$i){
						echo " selected";
					}
				echo ">".$i."</option>";
					}
				?>
			</select>
		
		
		</td>
	
	</tr>

	<tr>
		<td colspan="2" align="right"><br>
		<input type='hidden' name='aviso' value='on'>
		<input type='hidden' name='id_solicitud' value='<?php echo $id_solicitud; ?>'>
		<input type="submit" value="guardar" id="boton"> <input type="reset" value="borrar" id="boton"></td>
	</tr>
	
</table>

</form>
</fieldset>

<?php } ?>

<?php
function alta_usuarios(){
?>

<form action="alta_usuarios2.php" method="post" name="fcalen">

<fieldset id="alta_clientes">

	<legend>
<?php
	if($_SESSION['privilegios']=='1'){
		echo "ALTA DE USUARIOS";
	}else{
		echo "DATE DE ALTA";
	}

?>
	
	
	</legend>
	
<table border="0" id='tabla_altas'>
	
	<?php escribe_formulario_fecha_vacio("fecha1","fcalen"); ?>
	<tr>
		<td>Nombre:</td><td><input type="text" name="nombre"> *</td>
	</tr>
	<tr>
		<td>Primer apellido:</td><td><input type="text" name="apellido1"> *</td>
	</tr>

	<tr>		
		<td>Segundo apellido:</td><td><input type="text" name="apellido2"></td>
	</tr>
	<tr>
		<td>Correo electronico:</td><td><input type="text" name="mail"> *</td>
	</tr>
	<tr>
		<td>M&oacute;vil:</td><td><input type="text" name="telefono1"> *</td>
	</tr>

	<tr>
		<td colspan="2" align="center">Fecha de nacimiento: 
			<select name="dia"> <?php for ($i=1;$i<32;$i++){
				echo "<option>$i</option>";
				} ?>		
			</select>
		<select name="mes">
		
		<?php 
		
			$j[1]="Enero";
			$j[2]="Febrero";
			$j[3]="Marzo";
			$j[4]="Abril";
			$j[5]="Mayo";
			$j[6]="Junio";
			$j[7]="Julio";
			$j[8]="Agosto";
			$j[9]="Septiembre";
			$j[10]="Octubre";
			$j[11]="Noviembre";
			$j[12]="Diciembre";

			for ($i=1;$i<13;$i++){
				?> <option value=<?php echo $i; ?> > <?php echo $j[$i]; ?> </option>;
			<?php 
			}			
	  ?>
			</select>
<?php 
$Fecha=getdate();
$ano=$Fecha["year"]; 

$inicio=$ano-10;
$fin=$ano-80;

?>
			<select name="ano">
				<?php	for ($i=$inicio;$i>$fin;$i--){
				echo "<option value=".$i.">".$i."</option>";
					}
				?>
			</select>
		
		
		</td>
	
	</tr>
	
	<tr>
		<td colspan='2' class='aviso'><br><input type='checkbox' name='aviso'> He leido la <a href='nota.php' target="_blank" onClick="window.open(this.href, this.target, 'width=600,height=600'); return false;">nota legal</a> y acepto las condiciones.</td>
	</tr>

	<tr>
		<td colspan="2" align="right"><br><input type="submit" value="guardar" id="boton"> <input type="reset" value="borrar" id="boton"></td>
	</tr>
	
</table>

</form>
</fieldset>

<?php } 


/////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////	DATOS DE LOS JUGADORES ME APUNTO		///////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////

function datos_jugadores($id_meapunto){

	include("../../conexion.php");
	$ssql_datos_clientes = "SELECT id_cliente FROM `$tabla9` WHERE id_meapunto=$id_meapunto";
	$resultado_datos_clientes = mysql_query($ssql_datos_clientes);
	while ($row_datos_clientes=mysql_fetch_object($resultado_datos_clientes)){
//	echo $row_datos_clientes->id_cliente;	
	}

	////////////   CUENTA APUNTADOS   	/////////////////////////
	$ssql_apuntados = "SELECT id_cliente_meapunto FROM `$tabla9` WHERE id_meapunto=$id_meapunto";
	$resultado_apuntados = mysql_query($ssql_apuntados);
	$row_apuntados=mysql_num_rows($resultado_apuntados);
//	echo 'total: '.$row_apuntados;
	if($row_apuntados==0){
		echo "
			<img src='../../imagenes/libre.png' alt='libre'> <img src='../../imagenes/libre.png' alt='libre'> <img src='../../imagenes/libre.png' alt='libre'> <img src='../../imagenes/libre.png' alt='libre'>
		";
	}elseif($row_apuntados==1){
		echo "
			<img src='../../imagenes/jugador.png' alt='jugador'> <img src='../../imagenes/libre.png' alt='libre'> <img src='../../imagenes/libre.png' alt='libre'> <img src='../../imagenes/libre.png' alt='libre'>
		";	
	}elseif($row_apuntados==2){
		echo "
			<img src='../../imagenes/jugador.png' alt='jugador'> <img src='../../imagenes/jugador.png' alt='jugador'> <img src='../../imagenes/libre.png' alt='libre'> <img src='../../imagenes/libre.png' alt='libre'>";
	}elseif($row_apuntados==3){
		echo "
			<img src='../../imagenes/jugador.png' alt='jugador'> <img src='../../imagenes/jugador.png' alt='jugador'> <img src='../../imagenes/jugador.png' alt='jugador'> <img src='../../imagenes/libre.png' alt='libre'>";
	}elseif($row_apuntados==4){
		echo "
			<img src='../../imagenes/jugador.png' alt='jugador'> <img src='../../imagenes/jugador.png' alt='jugador'> <img src='../../imagenes/jugador.png' alt='jugador'> <img src='../../imagenes/jugador.png' alt='jugador'>";
	}
	/////////////////////////////////////////////////////////////

}
/////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////	TABLA DE APUNTADOS EN UN PARTIDO		///////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////
function tabla_apuntados($meapunto){
	include("../../conexion.php");

/////////////////////////////////////////////////////////////
$ssql_enlace = "select * from `$tabla9` WHERE id_meapunto=$meapunto";
$resultado_enlace = mysql_query($ssql_enlace);
$row_enlace = mysql_fetch_object($resultado_enlace);
/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla8` WHERE id_meapunto=$meapunto";
$resultado = mysql_query($ssql);
$row = mysql_fetch_object($resultado);
$pista=$row->pista;
$horario=$row->horario;
$nivel=$row->nivel_desde;
////////////////////////////////////////////////////////////
////////////   CUENTA APUNTADOS   	/////////////////////////
	$ssql_cuenta_apuntados = "SELECT id_cliente_meapunto FROM `$tabla9` WHERE id_meapunto=$meapunto";
	$resultado_cuenta_apuntados = mysql_query($ssql_cuenta_apuntados);
	$row_cuenta_apuntados=mysql_num_rows($resultado_cuenta_apuntados);
	$napuntados=$row_cuenta_apuntados;

echo "<div id='horario_pista'>";
datos_pista($pista);
datos_horario($horario);
echo "<br>";
niveles($nivel);
echo "</div>";

if($napuntados>=1){
/////////////////////////////////////////////////////////////
echo "<table border='2' id='tabla_reservas'>";
echo "<tr id='titulo'>
			<td>Jugador</td>
			<td>Nombre</td>

		</tr>";

/////////////////////////////////////////////////////////////
$ssql_enlace = "select * from `$tabla9` WHERE id_meapunto=$meapunto";
$resultado_enlace = mysql_query($ssql_enlace);
while ($row_enlace = mysql_fetch_object($resultado_enlace)){
/////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////
$jugador=$row_enlace->id_cliente;
$id_enlace=$row_enlace->id_cliente_meapunto;

$ssql_jugador = "select * from `$tabla11` WHERE Id=$jugador";
$resultado_jugador = mysql_query($ssql_jugador);
$row_jugador=mysql_fetch_object($resultado_jugador);
$id_jugador=$row_jugador->Id;
$nick=$row_jugador->Apodo;
$nivel=$row_jugador->Nivel;
$nombre_jugador=$row_jugador->Nombre." ".$row_jugador->Apellidos;
/////////////////////////////////////////////////////////////

$segundos_hoy=time();
//echo $segundos_hoy;

//echo $segundos_reserva." ";
$i++;
if($i%2==0){
	$estilo="fila_par";
}else{
	$estilo="fila_inpar";
	}


	
	echo "<tr id=$estilo>
				<td align='center' width='50'>";

	echo $i;

	echo "</td>

				<td>$nombre_jugador";
	if($id_jugador==$_SESSION['id'] AND $napuntados<=3){	
	echo " <a href='?accion=anular&id=$id_enlace'><img src='../../imagenes/delete.gif' border='0'></a>";
	}
	echo "</td>";
	//echo "<td>$nivel</td>";
	echo "</td>
			</tr>";


}
echo "</table>";

//		echo "<br><br><a href='?accion=apuntar&id=$meapunto'><img src='../../imagenes/ok-txt.png' border='0'></a>";
		
}else{
	echo "<div id='se_el_primero'>
			<span class='texto'>Aun no hay ning&uacute;n jugador apuntado de momento.</span><br><br>

			</div>";
}

}

/////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////

function datos_horario($horario){
	include("../../conexion.php");
	////////////   DATOS DEL HORARIO   	/////////////////////////
	$ssql_horario = "select inicio,fin FROM `$tabla3` WHERE id_horario=$horario";
	$resultado_horario = mysql_query($ssql_horario);
	$row_horario=mysql_fetch_object($resultado_horario);
	$dia_meapunto=$row_horario->dia;
	$inicio=substr($row_horario->inicio,0,5);
	$fin=substr($row_horario->fin,0,5);
	echo "<span class='hora'>".$inicio."</span>";
	/////////////////////////////////////////////////////////////
}

function datos_pista($pista){
	include("../../conexion.php");
	////////////   DATOS DE LA PISTA   	/////////////////////////
	$ssql_pista = "select nombre FROM `$tabla2` WHERE id_pista=$pista";
	$resultado_pista = mysql_query($ssql_pista);
	$row_pista=mysql_fetch_object($resultado_pista);
	$nombre_pista=$row_pista->nombre;
	echo "<span class='pista'>".$nombre_pista."</span>";
	/////////////////////////////////////////////////////////////
}


/*
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOo		INFORME DE CLIENTES			oOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOo
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
*/

function partidos_semana(){
include ("../../conexion.php");
$id_usuario=$_GET['id_usuario'];

$dia_semana=date(w); /* calcula los dias que han pasado de la semana */
$resta_dias=7-$dia_semana;/* calcula los dias que faltan hasta el domingo */
$ultimo_dia_semana=date(w)+$resta_dias; /* Calcula el dia del mes que sera el domingo */
$dia_hoy=date(d);
$mes_hoy=date(m);
$ano_hoy=date(Y);

$lunes= date('Y-m-d', strtotime('-'.$dia_semana.' day')); /* fecha del lunes */
$domingo=date('Y-m-d', strtotime('+'.$ultimo_dia_semana.' day')); /* fecha del domingo */

$ssql_partidos_semana="SELECT * FROM $tabla5 WHERE dia between '$lunes' AND '$domingo' AND usuario=$id_usuario";
$resultado_partidos_semana = mysql_query($ssql_partidos_semana);
$num_row_partidos_semana=mysql_num_rows($resultado_partidos_semana);
echo $num_row_partidos_semana;
}

function partidos_mes(){
include ("../../conexion.php");
$id_usuario=$_GET['id_usuario'];

$mes_hoy=date(m);
$ano_hoy=date(Y);
$desde="$ano_hoy-$mes_hoy-01";
$hasta= date('Y-m-01', strtotime('+1 month'));

$ssql_partidos_mes="SELECT * FROM $tabla5 WHERE dia between '$desde' AND '$hasta' AND usuario=$id_usuario";
$resultado_partidos_mes = mysql_query($ssql_partidos_mes);
$num_row_partidos_mes=mysql_num_rows($resultado_partidos_mes);
echo $num_row_partidos_mes;
}

function partidos_ano(){
include ("../../conexion.php");
$id_usuario=$_GET['id_usuario'];

$ano_hoy=date(Y);
$ano_siguiente=$ano_hoy+1;
$desde="$ano_hoy-01-01";
$hasta="$ano_siguiente-01-01";

$ssql_partidos_ano="SELECT * FROM $tabla5 WHERE dia between '$desde' AND '$hasta' AND usuario=$id_usuario";
$resultado_partidos_ano = mysql_query($ssql_partidos_ano);
$num_row_partidos_ano=mysql_num_rows($resultado_partidos_ano);
echo $num_row_partidos_ano;

}

function nombre_jugador($id_usuario){
include ('../../conexion.php');
	////////////////////  DATOS CLIENTE  ////////////////////////
	$ssql_usuario = "SELECT * FROM `$tabla11` WHERE Id=$id_usuario";
	$resultado_usuario = mysql_query($ssql_usuario);
	/////////////////////////////////////////////////////////////
	
	$row_usuario = mysql_fetch_object($resultado_usuario);
	$nombre_usuario=$row_usuario->Nombre;
	$apellido1=$row_usuario->Apellidos;
	$nombre_jugador=$nombre_usuario." ".$apellido1;
	
	echo $nombre_jugador;
	//global $nombre_jugador;
	//return $nombre_jugador;
}

///////////////////////////////////////////////////////////////////////////////////////
/////////////////////////   GENERAR LOS PRIVILEGIOS    ////////////////////////////////

function generaSelect_privi($privilegios){
include '../../conexion.php';

$consulta=mysql_query("SELECT id_privilegio, nombre FROM $tabla6");
echo "<select name='privilegios'>";

while($registro=mysql_fetch_row($consulta)){		
	echo "<option value='".$registro[0]."'";
		if($registro[0]==$privilegios){
			echo "selected";
		}
	echo ">".$registro[1]."</option>";
}

echo "</select>";
}

/////////////////////////////////////////////////////////////////////////////////

/*
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOo		INFORME DE NIVELES			oOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOo
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
*/

///////////////////////////////////////////////////////////////////////////////////////
/////////////////////////   GENERAR LOS NIVELES    ////////////////////////////////

function generaSelect_niveles($nivel){

include ('../../conexion.php');

$consulta=mysql_query("SELECT * FROM $tabla14");

echo "<select name='nivel' id='genera_niveles'>";


while($registro=mysql_fetch_object($consulta)){		

	echo "<option value='".$registro->nivel."'";
		if($registro->nivel==$nivel){
			echo "selected";
		}
	echo ">".$registro->nombre." [".$registro->abreviatura."]</option>";
}

echo "</select>";

}

function niveles($nivel){
	include("../../conexion.php");
	////////////   DATOS DE LOS NIVELES  	/////////////////////////
	$ssql_nivel = "SELECT nombre, abreviatura FROM `$tabla14` WHERE nivel=$nivel";

	$resultado_nivel = mysql_query($ssql_nivel);
	$row_nivel=mysql_fetch_object($resultado_nivel);
	$nombre_nivel=$row_nivel->nombre;
	$abreviatura_nivel=$row_nivel->abreviatura;
	echo "<span class='pista'>NIVEL: ".$nombre_nivel." [".$abreviatura_nivel."]</span>";
	/////////////////////////////////////////////////////////////
}

function niveles2($nivel){
	include("../../conexion.php");
	////////////   DATOS DE LOS NIVELES  	/////////////////////////
	$ssql_nivel2 = "SELECT nombre, abreviatura FROM `$tabla14` WHERE nivel=$nivel";

	$resultado_nivel2 = mysql_query($ssql_nivel2);
	$row_nivel2=mysql_fetch_object($resultado_nivel2);
	$nombre_nivel2=$row_nivel2->nombre;
	$abreviatura_nivel2=$row_nivel2->abreviatura;
	echo $nombre_nivel2." [".$abreviatura_nivel2."]";
	/////////////////////////////////////////////////////////////
}

function AbreviaturaNivel($nivel){
	include("../../conexion.php");
	////////////   DATOS DE LOS NIVELES  	/////////////////////////
	$ssql_abreviatura = "SELECT abreviatura FROM `$tabla14` WHERE nivel=$nivel";

	$resultado_abreviatura = mysql_query($ssql_abreviatura);
	$row_abreviatura=mysql_fetch_object($resultado_abreviatura);
	$abreviatura=$row_abreviatura->abreviatura;
	echo "<td>".$abreviatura."</td>";
	/////////////////////////////////////////////////////////////
}


/*
/////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////		NOMBRE DEL JUGADOR			/////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////

function nombre_jugador($id_usuario){
include ('../../conexion.php');
	////////////////////  DATOS CLIENTE  ////////////////////////
	$ssql_usuario = "SELECT * FROM `$tabla11` WHERE Id=$id_usuario";
	$resultado_usuario = mysql_query($ssql_usuario);
	/////////////////////////////////////////////////////////////
	
	$row_usuario = mysql_fetch_object($resultado_usuario);
	$nombre_usuario=$row_usuario->Nombre;
	$apellido1=$row_usuario->Apellidos;
	$nombre_jugador=$nombre_usuario." ".$apellido1;
	
	echo $nombre_jugador;
	//global $nombre_jugador;
	//return $nombre_jugador;
}
*/

function generaListaUsuarios(){
/////////////////////////////////////////////////////////////
include("../../conexion.php");
$ssql = "select * from `$tabla11` WHERE Historico=0 ORDER BY nombre";
$resultado = mysql_query($ssql);

while ($row=mysql_fetch_object($resultado)){
	$id_usuario=$row->Id;
	$nombre=$row->Nombre;
	$apellido1=$row->Apellidos;
	echo "<option value='".$id_usuario."'>".$nombre." ".$apellido1."</option>";
}

echo "</select>"; 

/////////////////////////////////////////////////////////////
}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////			TABLA PARA ASOCIAR JUGADORES		//////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function tabla_reservas2(){
	
include('../../conexion.php');

$usuario=$_SESSION['id'];
$pista=$_POST['pista'];
$horario=$_POST['hora'];
$dia=$_POST['dia'];
$pag=$_POST['pag'];
$fecha_seg=$_POST['fecha_seg'];
$meapunto=$_POST['meapunto'];
$fecha=explode("-",$dia);
$fecha_esp=$fecha[2]."-".$fecha[1]."-".$fecha[0]; 
$limpiar=$_POST['limpiar'];
$confirmar=$_POST['confirmar'];
//$precio_soc=$_POST['precio_soc'];
//$precio_nosoc=$_POST['precio_nosoc'];

/* recoge valores de los jugadores no socios */

$jugador1nosoc=$_POST['jugador1nosoc'];
$jugador2nosoc=$_POST['jugador2nosoc']; /* nombre del no socio */
$jugador3nosoc=$_POST['jugador3nosoc'];
$jugador4nosoc=$_POST['jugador4nosoc'];

if($jugador1nosoc=='nombre del no socio'){
	$jugador1nosoc='';
}
if($jugador2nosoc=='nombre del no socio'){
	$jugador2nosoc='';
}
if($jugador3nosoc=='nombre del no socio'){
	$jugador3nosoc='';
}
if($jugador4nosoc=='nombre del no socio'){
	$jugador4nosoc='';
}

/* recoge valores de los jugadores socios */


if($_POST['jugador1soc_select']==''){
	$jugador1soc=$_POST['jugador1soc'];
}else{
	$jugador1soc=$_POST['jugador1soc_select'];
}

if($_POST['jugador2soc_select']==''){
	$jugador2soc=$_POST['jugador2soc'];
}else{
	$jugador2soc=$_POST['jugador2soc_select'];
}

if($_POST['jugador3soc_select']==''){
	$jugador3soc=$_POST['jugador3soc'];
}else{
	$jugador3soc=$_POST['jugador3soc_select'];
}

if($_POST['jugador4soc_select']==''){
	$jugador4soc=$_POST['jugador4soc'];
}else{
	$jugador4soc=$_POST['jugador4soc_select'];
}

//----------------------------------------------------------------------------------------

if($jugador1soc=='id del socio'){
	$jugador1soc='';
}
if($jugador2soc=='id del socio'){
	$jugador2soc='';
}
if($jugador3soc=='id del socio'){
	$jugador3soc='';
}
if($jugador4soc=='id del socio'){
	$jugador4soc='';
}

$j1=$_POST['j1'];
$j2=$_POST['j2']; /* 1=socio    0=no socio */
$j3=$_POST['j3'];
$j4=$_POST['j4'];

$juega1=$_POST['juega1'];
$juega2=$_POST['juega2']; /* numero de partidos que juega */
$juega3=$_POST['juega3'];
$juega4=$_POST['juega4'];

/* aqui esta la madre del cordero, realiza la consulta de si existe el usuario justo antes de mostrar la tabla, dentro de la misma función */

if($j1==1 AND $jugador1soc!=''){
	$ssql_usuario1="SELECT * FROM `$tabla11` WHERE Id=$jugador1soc AND Historico=0";
	$resultado_usuario1=mysql_query($ssql_usuario1);
	/////////////////////////////////////////////////////////////
	$existe1=mysql_num_rows($resultado_usuario1);
}

if($j2==1 AND $jugador2soc!=''){
	$ssql_usuario2="SELECT * FROM `$tabla11` WHERE Id=$jugador2soc AND Historico=0";
	$resultado_usuario2=mysql_query($ssql_usuario2);
	/////////////////////////////////////////////////////////////
	$existe2=mysql_num_rows($resultado_usuario2);
}

if($j3==1 AND $jugador3soc!=''){
	$ssql_usuario3="SELECT * FROM `$tabla11` WHERE Id=$jugador3soc AND Historico=0";
	$resultado_usuario3=mysql_query($ssql_usuario3);
	/////////////////////////////////////////////////////////////
	$existe3=mysql_num_rows($resultado_usuario3);
}

if($j4==1 AND $jugador4soc!=''){
	$ssql_usuario4="SELECT * FROM `$tabla11` WHERE Id=$jugador4soc AND Historico=0";
	$resultado_usuario4=mysql_query($ssql_usuario4);
	/////////////////////////////////////////////////////////////
	$existe4=mysql_num_rows($resultado_usuario4);
}

/* ---------------------------------------------------------------------------------------------------- */

if($j1==1 AND $jugador1soc!='id del socio' AND $jugador1soc!='' AND $juega1!=1 AND $existe1==1){
		$jugador1='OK';
}elseif($j1==0 AND $jugador1nosoc!='nombre del no socio' AND $jugador1nosoc!=''){
		$jugador1='OK';
}else{
		$jugador1='NO';
}

if($j2==1 AND $jugador2soc!='id del socio' AND $jugador2soc!='' AND $juega2!=1 AND $existe2==1){
		$jugador2='OK';
}elseif($j2==0 AND $jugador2nosoc!='nombre del no socio' AND $jugador2nosoc!=''){
		$jugador2='OK';
}else{
		$jugador2='NO';
}

if($j3==1 AND $jugador3soc!='id del socio' AND $jugador3soc!='' AND $juega3!=1 AND $existe3==1){
		$jugador3='OK';
//		echo $jugador3soc;
}elseif($j3==0 AND $jugador3nosoc!='nombre del no socio' AND $jugador3nosoc!=''){
		$jugador3='OK';
}else{
		$jugador3='NO';
}

if($j4==1 AND $jugador4soc!='id del socio' AND $jugador4soc!='' AND $juega4!=1 AND $existe4==1){
		$jugador4='OK';
}elseif($j4==0 AND $jugador4nosoc!='nombre del no socio' AND $jugador4nosoc!=''){
		$jugador4='OK';
}else{
		$jugador4='NO';
}

if($limpiar=='limpiar'){
	$jugador1='NO';
	$jugador2='NO';
	$jugador3='NO';
	$jugador4='NO';
	}
	
if($jugador2=='OK' AND $jugador3=='OK' AND $jugador4=='OK' AND $jugador1=='OK'){
	$estado_partido="completo";
	}
	
if($estado_partido!="completo"){
?>

<form action='alta_reservas2.php' method='POST'>

<table border='0' id='reservas'>

<tr>
	<td colspan='2' class='titulo'>SELECCIONA LOS JUGADORES</td>
</tr>
<?php

if($jugador1soc=='' AND $jugador1nosoc=='' OR $jugador1=='NO'){

?>
<tr>
	<td class='subtitulo'>ID JUGADOR 1</td>
	<td>
		<input type='radio' name='j1' value='1' checked>
		<input type='text' name='jugador1soc' size='10' value="id del socio" onclick="this.value=''"> o b&uacute;scalo  
		<select name='jugador1soc_select' id='campo'>
		<option value=''>Elige el usuario</option>
			<?php
			generaListaUsuarios();
			?>
		<br>
		<input type='radio' name='j1' value='0'>
		<input type='text' name='jugador1nosoc' size='50' value="nombre del no socio" onclick="this.value=''">
	</td>
</tr>
<?php

}else{

?>
	<input type='hidden' name='j1' value='<?php echo $j1; ?>' >
	<input type='hidden' name='jugador1soc' value='<?php echo $jugador1soc; ?>' >
	<input type='hidden' name='jugador1nosoc' value='<?php echo $jugador1nosoc; ?>' >

<?php } ?>

<?php

if($jugador2soc=='' AND $jugador2nosoc=='' OR $jugador2=='NO'){

?>
<tr>
	<td class='subtitulo'>ID JUGADOR 2</td>
	<td>
		<input type='radio' name='j2' value='1' checked>
		<input type='text' name='jugador2soc' size='10' value="id del socio" onclick="this.value=''"> o b&uacute;scalo  
		<select name='jugador2soc_select' id='campo'>
		<option value=''>Elige el usuario</option>
			<?php
			generaListaUsuarios(); 
			?>
		<br>
		<input type='radio' name='j2' value='0'>
		<input type='text' name='jugador2nosoc' size='50' value="nombre del no socio" onclick="this.value=''">
	</td>
</tr>
<?php
}else{
?>
	<input type='hidden' name='j2' value='<?php echo $j2; ?>' >
	<input type='hidden' name='jugador2soc' value='<?php echo $jugador2soc; ?>' >
	<input type='hidden' name='jugador2nosoc' value='<?php echo $jugador2nosoc; ?>' >
<?php } ?>

<?php if($jugador3soc=='' AND $jugador3nosoc=='' OR $jugador3=='NO'){ ?>
<tr>
	<td class='subtitulo'>ID JUGADOR 3</td>
	<td>
		<input type='radio' name='j3' value='1' checked>
		<input type='text' name='jugador3soc' size='10' value="id del socio" onclick="this.value=''">  o b&uacute;scalo  
		<select name='jugador3soc_select' id='campo'>
		<option value=''>Elige el usuario</option>
			<?php 
			generaListaUsuarios(); 
			?>
		<br>
		<input type='radio' name='j3' value='0'>
		<input type='text' name='jugador3nosoc' size='50' value="nombre del no socio" onclick="this.value=''">
	</td>
</tr>
<?php 
}else{
?>
	<input type='hidden' name='j3' value='<?php echo $j3; ?>' >
	<input type='hidden' name='jugador3soc' value='<?php echo $jugador3soc; ?>' >
	<input type='hidden' name='jugador3nosoc' value='<?php echo $jugador3nosoc; ?>' >
<?php
}
?>

<?php if($jugador4soc=='' AND $jugador4nosoc=='' OR $jugador4=='NO'){ ?>
<tr>
	<td class='subtitulo'>ID JUGADOR 4</td>
	<td>
		<input type='radio' name='j4' value='1' checked>
		<input type='text' name='jugador4soc' size='10' value="id del socio" onclick="this.value=''">  o b&uacute;scalo  
		<select name='jugador4soc_select' id='campo'>
		<option value=''>Elige el usuario</option>
			<?php
			generaListaUsuarios(); 
			?>
		<br>
		<input type='radio' name='j4' value='0'>
		<input type='text' name='jugador4nosoc' size='50' value="nombre del no socio" onclick="this.value=''">
	</td>
</tr>
<?php 
}else{
?>
	<input type='hidden' name='j4' value='<?php echo $j4; ?>' >
	<input type='hidden' name='jugador4soc' value='<?php echo $jugador4soc; ?>' >
	<input type='hidden' name='jugador4nosoc' value='<?php echo $jugador4nosoc; ?>' >
<?php
}
?>
</table>

<table width='400' id='siguiente'>
	<tr><td align='right'><input type='submit' name='siguiente' value='SIGUIENTE >>' id='boton'></td></tr>
</table>
	<input type='hidden' name='hora' value='<?php echo $horario; ?>'>
	<input type='hidden' name='usuario' value='<?php echo $usuario; ?>'>
	<input type='hidden' name='pista' value='<?php echo $pista; ?>'>
	<input type='hidden' name='dia' value='<?php echo $dia; ?>'>
	<input type='hidden' name='pag' value='<?php echo $pag; ?>'>
	<input type='hidden' name='fecha_seg' value='<?php echo $fecha_seg; ?>'>
</form>

<?php
}

}


/////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////	ALTA RESERVA CON 4 JUGADORES		//////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////

function alta_reserva2(){
	include("../../conexion.php");
	$id_apuntar= $_GET['id'];
	$pag=$_SERVER['PHP_SELF'];	
	$cliente=$_SESSION['id'];
	$limpiar=$_POST['limpiar'];
	$pista=$_POST['pista'];
	$horario=$_POST['hora'];
	$dia=$_POST['dia'];
	$pag=$_POST['pag'];
	$fecha_seg=$_POST['fecha_seg'];
//	$precio_soc=$_POST['precio_soc'];
//	$precio_nosoc=$_POST['precio_nosoc'];

//////////////////////////////		GENERA LA ULTIMA RESERVA      ///////////////////////////
$napunto= mysql_query("SELECT MAX(id_reserva) FROM $tabla5");
	while ($registro=mysql_fetch_row($napunto)){
	       foreach($registro as $clave){ 
	       //echo $clave;
	 	}
	 }
$id_reserva=$clave+1;
////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////
$jugador1nosoc=$_POST['jugador1nosoc'];
$jugador2nosoc=$_POST['jugador2nosoc']; /* nombre del jugador no socio */
$jugador3nosoc=$_POST['jugador3nosoc'];
$jugador4nosoc=$_POST['jugador4nosoc'];

if($jugador1nosoc=='nombre del no socio'){
	$jugador1nosoc='';
}

if($jugador2nosoc=='nombre del no socio'){
	$jugador2nosoc='';
}
if($jugador3nosoc=='nombre del no socio'){
	$jugador3nosoc='';
}
if($jugador4nosoc=='nombre del no socio'){
	$jugador4nosoc='';
}

//----------------------------------------------------------------------------------------

//$jugador2soc=$_POST['jugador2soc']; /* id del socio */
//$jugador3soc=$_POST['jugador3soc'];
//$jugador4soc=$_POST['jugador4soc'];


if($_POST['jugador1soc_select']==''){
	$jugador1soc=$_POST['jugador1soc'];
}else{
	$jugador1soc=$_POST['jugador1soc_select'];
}

if($_POST['jugador2soc_select']==''){
	$jugador2soc=$_POST['jugador2soc'];
}else{
	$jugador2soc=$_POST['jugador2soc_select'];
}

if($_POST['jugador3soc_select']==''){
	$jugador3soc=$_POST['jugador3soc'];
}else{
	$jugador3soc=$_POST['jugador3soc_select'];
}

if($_POST['jugador4soc_select']==''){
	$jugador4soc=$_POST['jugador4soc'];
}else{
	$jugador4soc=$_POST['jugador4soc_select'];
}

//----------------------------------------------------------------------------------------

if($jugador1soc=='id del socio'){
	$jugador1soc='';
}
if($jugador2soc=='id del socio'){
	$jugador2soc='';
}
if($jugador3soc=='id del socio'){
	$jugador3soc='';
}
if($jugador4soc=='id del socio'){
	$jugador4soc='';
}

//-------------------------------------------------

if($jugador1soc=='' AND $jugador1nosoc==''){
	$j1='Null';
}else{
	$j1=$_POST['j1'];
}

if($jugador2soc=='' AND $jugador2nosoc==''){
	$j2='Null';
}else{
	$j2=$_POST['j2'];
}

if($jugador3soc=='' AND $jugador3nosoc==''){
	$j3='Null';
}else{
	$j3=$_POST['j3'];
}

if($jugador4soc=='' AND $jugador4nosoc==''){
	$j4='Null';
}else{
	$j4=$_POST['j4'];
}

//---------------------------------------------------

$juega1=$_POST['juega1'];
$juega2=$_POST['juega2'];
$juega3=$_POST['juega3'];
$juega4=$_POST['juega4'];

/* aqui esta la madre del cordero, realiza la consulta de si existe el usuario justo antes de mostrar la tabla, dentro de la misma función */

if($j1==1){
	$ssql_usuario1="SELECT * FROM `$tabla11` WHERE Id=$jugador1soc AND Historico=0";
	$resultado_usuario1=mysql_query($ssql_usuario1);
	/////////////////////////////////////////////////////////////
	$existe1=mysql_num_rows($resultado_usuario1);
}

if($j2==1){
	$ssql_usuario2="SELECT * FROM `$tabla11` WHERE Id=$jugador2soc AND Historico=0";
	$resultado_usuario2=mysql_query($ssql_usuario2);
	/////////////////////////////////////////////////////////////
	$existe2=mysql_num_rows($resultado_usuario2);
}

if($j3==1){
	$ssql_usuario3="SELECT * FROM `$tabla11` WHERE Id=$jugador3soc AND Historico=0";
	$resultado_usuario3=mysql_query($ssql_usuario3);
	/////////////////////////////////////////////////////////////
	$existe3=mysql_num_rows($resultado_usuario3);
}

if($j4==1){
	$ssql_usuario4="SELECT * FROM `$tabla11` WHERE Id=$jugador4soc AND Historico=0";
	$resultado_usuario4=mysql_query($ssql_usuario4);
	/////////////////////////////////////////////////////////////
	$existe4=mysql_num_rows($resultado_usuario4);
}

/* ---------------------------------------------------------------------------------------------------- */

//--------------------		avisos informativos de los jugadores     ------------------

if($juega1=='1'){
	?>
		<div id='error_jugador'><b> <?php nombre_jugador($jugador1soc); ?></b> ya tiene un partido programado y no puede programar otro.</div>
	<?php
}

if($juega2=='1'){
	?>
		<div id='error_jugador'><b> <?php nombre_jugador($jugador2soc); ?></b> ya tiene un partido programado y no puede programar otro.</div>
	<?php
}
if($juega3=='1'){
	?>
		<div id='error_jugador'><b> <?php nombre_jugador($jugador3soc); ?></b> ya tiene un partido programado y no puede programar otro.</div>
	<?php
}
if($juega4=='1'){
	?>
		<div id='error_jugador'><b> <?php nombre_jugador($jugador4soc); ?></b> ya tiene un partido programado y no puede programar otro.</div>
	<?php
}

//-------------------------------------------------------------------

if($existe1=='0'){
	?>
		<div id='error_jugador'><b> No existe ning&uacute;n jugador con el id <?php echo $jugador1soc; ?>.</div>
	<?php	
	}
if($existe2=='0'){
	?>
		<div id='error_jugador'><b> No existe ning&uacute;n jugador con el id <?php echo $jugador2soc; ?>.</div>
	<?php	
	}
if($existe3=='0'){
	?>
		<div id='error_jugador'><b> No existe ning&uacute;n jugador con el id <?php echo $jugador3soc; ?>.</div>
	<?php	
	}
if($existe4=='0'){
	?>
		<div id='error_jugador'><b> No existe ning&uacute;n jugador con el id <?php echo $jugador4soc; ?>.</div>
	<?php	
	}
//echo "$juega2 $juega3 $juega4";

if($j1==1 AND $jugador1soc!='id del socio' AND $jugador1soc!='' AND $juega1!=1 AND $existe1==1){
		$jugador1='OK';
}elseif($j1==0 AND $jugador1nosoc!='nombre del no socio' AND $jugador1nosoc!=''){
		$jugador1='OK';
}else{
		$jugador1='NO';
}

if($j2==1 AND $jugador2soc!='id del socio' AND $jugador2soc!='' AND $juega2!=1 AND $existe2==1){
		$jugador2='OK';
}elseif($j2==0 AND $jugador2nosoc!='nombre del no socio' AND $jugador2nosoc!=''){
		$jugador2='OK';
}else{
		$jugador2='NO';
}

if($j3==1 AND $jugador3soc!='id del socio' AND $jugador3soc!='' AND $juega3!='1' AND $existe3==1){
		$jugador3='OK';
}elseif($j3==0 AND $jugador3nosoc!='nombre del no socio' AND $jugador3nosoc!=''){
		$jugador3='OK';
}else{
		$jugador3='NO';
}

if($j4==1 AND $jugador4soc!='id del socio' AND $jugador4soc!='' AND $juega4!='1' AND $existe4==1){
		$jugador4='OK';
}elseif($j4==0 AND $jugador4nosoc!='nombre del no socio' AND $jugador4nosoc!=''){
		$jugador4='OK';
}else{
		$jugador4='NO';
}

if($limpiar=='limpiar'){
	$jugador1='NO';
	$jugador2='NO';
	$jugador3='NO';
	$jugador4='NO';
	}

tabla_reservas2(); /* METO LA TABLA DE AÑADIR JUGADORES */

	////////////   DATOS DEL HORARIO   	/////////////////////////
	$ssql_horario = "select inicio,precio_soc,precio_nosoc FROM `$tabla3` WHERE id_horario=$horario";
	$resultado_horario = mysql_query($ssql_horario);
	$row_horario=mysql_fetch_object($resultado_horario);
	$precio_soc=$row_horario->precio_soc;
	$precio_nosoc=$row_horario->precio_nosoc;
	$hora_inicio=$row_horario->inicio;

	////////////   DATOS DE LA PISTA   	/////////////////////////
	$ssql_pista = "select nombre,Tipopago FROM `$tabla2` WHERE id_pista=$pista";
	$resultado_pista = mysql_query($ssql_pista);
	$row_pista=mysql_fetch_object($resultado_pista);
	$nombre_pista=$row_pista->nombre;
	$tipo_pago=$row_pista->Tipopago;

/*   ///////// 	DATOS PARA CUANDO EL CLIENTE 1 ES EL AUTENTICADO 	////////// 
	////////////////////  DATOS CLIENTE  ////////////////////////
	$ssql_usuario1="SELECT * FROM `$tabla11` WHERE Id=$cliente";
	$resultado_usuario1=mysql_query($ssql_usuario1);
	/////////////////////////////////////////////////////////////
	$row_usuario1= mysql_fetch_object($resultado_usuario1);
	$nombre_usuario1=$row_usuario1->Nombre;
	$apellido1=$row_usuario1->Apellidos;
	$nombre_jugador1=$nombre_usuario1." ".$apellido1;
	$precio1=$precio_soc;
	$pago_cliente1=$row_usuario1->IdPago;
*/

if($j1==1){
	$id_jugador1=$jugador1soc;
	////////////////////  DATOS CLIENTE  ////////////////////////
	$ssql_usuario1="SELECT * FROM `$tabla11` WHERE Id=$id_jugador1";

	$resultado_usuario1=mysql_query($ssql_usuario1);
	/////////////////////////////////////////////////////////////
	$row_usuario1= mysql_fetch_object($resultado_usuario1);

	$nombre_usuario1=$row_usuario1->Nombre;
	$apellido1=$row_usuario1->Apellidos;
	$nombre_jugador1=$nombre_usuario1." ".$apellido1;
	$precio1=$precio_soc;
	$pago_cliente1=$row_usuario1->IdPago;
}elseif($j1==0){
	$nombre_jugador1=$jugador1nosoc;
	$id_jugador1=0;
	$precio1=$precio_nosoc;
}

if($j2==1){
	$id_jugador2=$jugador2soc;
	////////////////////  DATOS CLIENTE  ////////////////////////
	$ssql_usuario2="SELECT * FROM `$tabla11` WHERE Id=$id_jugador2";

	$resultado_usuario2=mysql_query($ssql_usuario2);
	/////////////////////////////////////////////////////////////
	$row_usuario2= mysql_fetch_object($resultado_usuario2);

	$nombre_usuario2=$row_usuario2->Nombre;
	$apellido2=$row_usuario2->Apellidos;
	$nombre_jugador2=$nombre_usuario2." ".$apellido2;
	$precio2=$precio_soc;
	$pago_cliente2=$row_usuario2->IdPago;
}elseif($j2==0){
	$nombre_jugador2=$jugador2nosoc;
	$id_jugador2=0;
	$precio2=$precio_nosoc;
}

if($j3==1){
	$id_jugador3=$jugador3soc;
	////////////////////  DATOS CLIENTE  ////////////////////////
	$ssql_usuario3="SELECT * FROM `$tabla11` WHERE Id=$id_jugador3";
	$resultado_usuario3=mysql_query($ssql_usuario3);
	/////////////////////////////////////////////////////////////
	$row_usuario3= mysql_fetch_object($resultado_usuario3);

	$nombre_usuario3=$row_usuario3->Nombre;
	$apellido3=$row_usuario3->Apellidos;
	$nombre_jugador3=$nombre_usuario3." ".$apellido3;
	$precio3=$precio_soc;
	$pago_cliente3=$row_usuario3->IdPago;
}elseif($j3==0){
	$nombre_jugador3=$jugador3nosoc;
	$id_jugador3=0;
	$precio3=$precio_nosoc;
}

if($j4==1){
	$id_jugador4=$jugador4soc;
	////////////////////  DATOS CLIENTE  ////////////////////////
	$ssql_usuario4="SELECT * FROM `$tabla11` WHERE Id=$id_jugador4";
	$resultado_usuario4=mysql_query($ssql_usuario4);
	/////////////////////////////////////////////////////////////
	$row_usuario4= mysql_fetch_object($resultado_usuario4);

	$nombre_usuario4=$row_usuario4->Nombre;
	$apellido4=$row_usuario4->Apellidos;
	$nombre_jugador4=$nombre_usuario4." ".$apellido4;
	$precio4=$precio_soc;
	$pago_cliente4=$row_usuario4->IdPago;
}elseif($j4==0){
	$nombre_jugador4=$jugador4nosoc;
	$id_jugador4=0;
	$precio4=$precio_nosoc;
}elseif($j4=='Null'){
	echo "";
}


//echo "socio: ".$jugador4soc." no socio: ".$jugador4nosoc." jugador: ".$j4;
?>
<form action='alta_reservas2.php' method='POST'>
<table border='2' id='reservas'>

	<tr>
		<td colspan='4' class='titulo'> JUGADORES CONFIRMADOS </td>
	</tr>
	
	<tr class='subtitulo'>
		<td>&nbsp;</td>
		<td> ID socio </td>
		<td> Nombre del jugador </td>
		<td> Precio </td>
	</tr>
	
<?php


/* ###### 		COMPRUEBA LOS PARTIDOS FUTUROS DEL JUGADOR		####### */  

$hoy=date('Y-m-d');
$hoy_esp=date('d-m-Y');


	////////////////////  DATOS CLIENTE  ////////////////////////
	$ssql_partidos_hoy_j1 = "SELECT id_reserva FROM `$tabla10` WHERE id_jugador=$id_jugador1 AND fecha='$hoy'";
	$resultado_partidos_hoy_j1 = mysql_query($ssql_partidos_hoy_j1);
	/////////////////////////////////////////////////////////////

	$numero_partidos_hoy_j1 = mysql_num_rows($resultado_partidos_hoy_j1);
/* ####################################################################### */
/*
echo "existe el 2 ".$existe2;
echo "<br> jugador 2 soc ".$jugador2soc;
echo "<br> jugador 2 nosoc ".$jugador2nosoc;
echo "<br> jugador 2 ".$jugador2;
*/
if($jugador1soc!='' || $jugador1nosoc!='' AND $jugador1!='NO'){ ?>

	<tr>
		<td class='subtitulo'>Jugador 1</td>
		<td align='center'><?php echo $id_jugador1; ?> </td>
		<td> <?php echo $nombre_jugador1; ?>  </td>
		<td align='center'> <?php echo $precio1; ?> &euro;</td>
		<input type='hidden' name='juega1' value=<?php echo $numero_partidos_hoy_j1; ?> >
		<input type='hidden' name='j1' value=<?php echo $j1; ?> >
		<input type='hidden' name='jugador1soc' value=<?php echo $jugador1soc; ?> >
		<input type='hidden' name='jugador1nosoc' value=<?php echo $jugador1nosoc; ?> >
		<input type='hidden' name='existe1' value=<?php echo $num_usuario1; ?> >		
	</tr>
<?php 
}else{
	$precio1=0;
}

	////////////////////  DATOS CLIENTE  ////////////////////////
	$ssql_partidos_hoy_j2 = "SELECT id_reserva FROM `$tabla10` WHERE id_jugador=$id_jugador2 AND fecha='$hoy'";
	$resultado_partidos_hoy_j2 = mysql_query($ssql_partidos_hoy_j2);
	/////////////////////////////////////////////////////////////

	$numero_partidos_hoy_j2 = mysql_num_rows($resultado_partidos_hoy_j2);
/* ####################################################################### */
/*
echo "existe el 2 ".$existe2;
echo "<br> jugador 2 soc ".$jugador2soc;
echo "<br> jugador 2 nosoc ".$jugador2nosoc;
echo "<br> jugador 2 ".$jugador2;
*/
if($jugador2soc!='' || $jugador2nosoc!='' AND $jugador2!='NO'){ ?>

	<tr>
		<td class='subtitulo'>Jugador 2</td>
		<td align='center'><?php echo $id_jugador2; ?> </td>
		<td> <?php echo $nombre_jugador2; ?>  </td>
		<td align='center'> <?php echo $precio2; ?> &euro;</td>
		<input type='hidden' name='juega2' value=<?php echo $numero_partidos_hoy_j2; ?> >
		<input type='hidden' name='j2' value=<?php echo $j2; ?> >
		<input type='hidden' name='jugador2soc' value=<?php echo $jugador2soc; ?> >
		<input type='hidden' name='jugador2nosoc' value=<?php echo $jugador2nosoc; ?> >
		<input type='hidden' name='existe2' value=<?php echo $num_usuario2; ?> >		
	</tr>
<?php 
}else{
	$precio2=0;
}
?>

<?php 

/* ###### 		COMPRUEBA LOS PARTIDOS FUTUROS DEL JUGADOR		####### */  

	////////////////////  DATOS CLIENTE  ////////////////////////
	$ssql_partidos_hoy_j3 = "SELECT id_reserva FROM `$tabla10` WHERE id_jugador=$id_jugador3 AND fecha='$hoy'";
	$resultado_partidos_hoy_j3 = mysql_query($ssql_partidos_hoy_j3);
	/////////////////////////////////////////////////////////////

	$numero_partidos_hoy_j3 = mysql_num_rows($resultado_partidos_hoy_j3);
//echo $ssql_partidos_hoy_j3;
/* ####################################################################### */

if($jugador3soc!='' || $jugador3nosoc!='' AND $jugador3!='NO'){ ?>
	<tr>
		<td class='subtitulo'>Jugador 3</td>
		<td align='center'><?php echo $id_jugador3; ?> </td>
		<td> <?php echo $nombre_jugador3; ?>  </td>
		<td align='center'> <?php echo $precio3; ?> &euro;</td>
		<input type='hidden' name='juega3' value=<?php echo $numero_partidos_hoy_j3; ?> >
		<input type='hidden' name='j3' value=<?php echo $j3; ?> >
		<input type='hidden' name='jugador3soc' value=<?php echo $jugador3soc; ?> >
		<input type='hidden' name='jugador3nosoc' value=<?php echo $jugador3nosoc; ?> >
</tr>
<?php 
}else{
	$precio3=0;
}


/* ###### 		COMPRUEBA LOS PARTIDOS FUTUROS DEL JUGADOR		####### */ 
	////////////////////  DATOS CLIENTE  ////////////////////////
	$ssql_partidos_hoy_j4 = "SELECT id_reserva FROM `$tabla10` WHERE id_jugador=$id_jugador4 AND fecha='$hoy'";
	$resultado_partidos_hoy_j4 = mysql_query($ssql_partidos_hoy_j4);
	/////////////////////////////////////////////////////////////

	$numero_partidos_hoy_j4 = mysql_num_rows($resultado_partidos_hoy_j4);
/* ####################################################################### */

if($jugador4soc!='' || $jugador4nosoc!='' AND $jugador4!='NO'){ ?>
	<tr>
		<td class='subtitulo'>Jugador 4</td>
		<td align='center'><?php echo $id_jugador4; ?> </td>
		<td> <?php echo $nombre_jugador4; ?>  </td>
		<td align='center'> <?php echo $precio4; ?> &euro;</td>
		<input type='hidden' name='juega4' value=<?php echo $numero_partidos_hoy_j4; ?> >
		<input type='hidden' name='j4' value=<?php echo $j4; ?> >
		<input type='hidden' name='jugador4soc' value=<?php echo $jugador4soc; ?> >
		<input type='hidden' name='jugador4nosoc' value=<?php echo $jugador4nosoc; ?> >
	</tr>
<?php 
}else{
	$precio4=0;
}
?>

	<tr>
		<td colspan='3' class='subtitulo' align='right'> TOTAL: &nbsp;&nbsp;&nbsp;</td>
		<td class='subtitulo'>
		<?php 
		$precio_total=$precio1+$precio2+$precio3+$precio4;
		echo $precio_total." &euro;"; 
		?>
		</td>
	</tr>

</table>
<?php
if($jugador1=='OK' AND $jugador2=='OK' AND $jugador3=='OK' AND $jugador4=='OK'){
	$estado_partido="completo";
	}
?>

	<input type='hidden' name='hora' value='<?php echo $horario; ?>'>
	<input type='hidden' name='usuario' value='<?php echo $usuario; ?>'>
	<input type='hidden' name='pista' value='<?php echo $pista; ?>'>
	<input type='hidden' name='dia' value='<?php echo $dia; ?>'>
	<input type='hidden' name='pag' value='<?php echo $pag; ?>'>
	<input type='hidden' name='fecha_seg' value='<?php echo $fecha_seg; ?>'>
<table width='400' id='siguiente'>
	<tr><td align='center'>
	<?php if($_POST['confirmar']!='confirmar'){ ?>
		<input type='submit' name='limpiar' value='limpiar' id='boton'>
		<?php if($estado_partido=='completo' AND $_POST['confirmar']!='confirmar'){ ?>
		<input type='submit' name='confirmar' value='confirmar' id='boton'>
		<?php } ?>
	<?php } ?>
	</td></tr>
</table>
</form>
<?php

if($estado_partido=='completo'){
//////////////////////////////		GENERA EL ULTIMO JUGADOR-RESERVA      ///////////////////////////
$njugador_reserva= mysql_query("SELECT MAX(id_jugador_reserva) FROM $tabla10");
	while ($registrojr=mysql_fetch_row($njugador_reserva)){
	       foreach($registrojr as $clavejr){ 
	       //echo $clave;
	 	}
	 }
$id_jugador_reserva1=$clavejr+1;
$id_jugador_reserva2=$clavejr+2;
$id_jugador_reserva3=$clavejr+3;
$id_jugador_reserva4=$clavejr+4;

$hoy=date('Y-m-d');

////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////
if($_POST['confirmar']=='confirmar'){
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////			GUARDA LOS JUGADORES ASOCIADOS			///////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* comprueba disponibilidad de la pista */

//$ssql_comprueba_pista="SELECT id_reserva FROM $tabla5 WHERE pista=$pista AND horario=$horario AND dia=$dia";
$ssql_comprueba_pista="SELECT id_reserva FROM $tabla5 WHERE pista=$pista AND hora_inicio=$fecha_seg";
$resultado_comprueba_pista=mysql_query($ssql_comprueba_pista);
$row_comprueba_pista=mysql_num_rows($resultado_comprueba_pista);
// echo $ssql_comprueba_pista;
if($row_comprueba_pista==0){

$fecha=date("Y-m-d H:i:s");

	/////////////////////////////////////////////////////////////
/* ------------------------------------  */

	$campos1="id_jugador_reserva,id_jugador,id_reserva,nombre_jugador,precio,socio,fecha";
	$datos1="'$id_jugador_reserva1','$cliente','$id_reserva','$nombre_jugador1','$precio1','1','$hoy'";
	$sentencia1="INSERT INTO $tabla10 ($campos1) VALUES ($datos1)";
	$inserta1=mysql_query($sentencia1,$conexion);
	
	$base1=$precio1/1.18;
	$iva1=$precio1-$base1;
	$concepto1="Reserva de la pista $nombre_pista el dia $hoy a las $hora_inicio";
	
	$campos_temporal1="IdPuesto,IdSocio,Vendedor,FechaEmisio,Concepto,Precio,Cantidad,Total,Formapago,Base,Iva,IvaVenta,IdSocioPago,Id_reserva,IdTipo,Fecha_seg";
	$datos_temporal1="'1','$cliente','1','$fecha','$concepto1','$precio1','1','$precio1','1','$base1','$iva1','18','$pago_cliente1','$id_reserva','$tipo_pago','$fecha_seg'";
	$sentencia_temporal1="INSERT INTO $tabla12 ($campos_temporal1) VALUES ($datos_temporal1)";
//	echo $sentencia_temporal1;
	$inserta_temporal1=mysql_query($sentencia_temporal1,$conexion);
	
//	echo "<br>sentencia jugador 1: ".$sentencia1."<br>";

	$campos2="id_jugador_reserva,id_jugador,id_reserva,nombre_jugador,precio,socio,fecha";
	$datos2="'$id_jugador_reserva2','$id_jugador2','$id_reserva','$nombre_jugador2','$precio2','$j2','$hoy'";
	$sentencia2="INSERT INTO $tabla10 ($campos2) VALUES ($datos2)";
	$inserta2=mysql_query($sentencia2,$conexion);
//	echo "<br>sentencia jugador 2: ".$sentencia2."<br>";

	$base2=$precio2/1.18;
	$iva2=$precio2-$base2;
	$concepto2="Reserva de la pista $nombre_pista el dia $hoy a las $hora_inicio";
	
	$campos_temporal2="IdPuesto,IdSocio,Vendedor,FechaEmisio,Concepto,Precio,Cantidad,Total,Formapago,Base,Iva,IvaVenta,IdSocioPago,Id_reserva,IdTipo,Fecha_seg";
	$datos_temporal2="'1','$id_jugador2','1','$fecha','$concepto2','$precio2','1','$precio2','1','$base2','$iva2','18','$pago_cliente2','$id_reserva','$tipo_pago','$fecha_seg'";
	$sentencia_temporal2="INSERT INTO $tabla12 ($campos_temporal2) VALUES ($datos_temporal2)";
//	echo $sentencia_temporal2;
	$inserta_temporal2=mysql_query($sentencia_temporal2,$conexion);

	$campos3="id_jugador_reserva,id_jugador,id_reserva,nombre_jugador,precio,socio,fecha";
	$datos3="'$id_jugador_reserva3','$id_jugador3','$id_reserva','$nombre_jugador3','$precio3','$j3','$hoy'";
	$sentencia3="INSERT INTO $tabla10 ($campos3) VALUES ($datos3)";
	$inserta3=mysql_query($sentencia3,$conexion);
//	echo "<br>sentencia jugador 3: ".$sentencia3."<br>";

	$base3=$precio3/1.18;
	$iva3=$precio3-$base3;
	$concepto3="Reserva de la pista $nombre_pista el dia $hoy a las $hora_inicio";
	
	$campos_temporal3="IdPuesto,IdSocio,Vendedor,FechaEmisio,Concepto,Precio,Cantidad,Total,Formapago,Base,Iva,IvaVenta,IdSocioPago,Id_reserva,IdTipo,Fecha_seg";
	$datos_temporal3="'1','$id_jugador3','1','$fecha','$concepto3','$precio3','1','$precio3','1','$base3','$iva3','18','$pago_cliente3','$id_reserva','$tipo_pago','$fecha_seg'";
	$sentencia_temporal3="INSERT INTO $tabla12 ($campos_temporal3) VALUES ($datos_temporal3)";
//	echo $sentencia_temporal3;
	$inserta_temporal3=mysql_query($sentencia_temporal3,$conexion);


	$campos4="id_jugador_reserva,id_jugador,id_reserva,nombre_jugador,precio,socio,fecha";
	$datos4="'$id_jugador_reserva4','$id_jugador4','$id_reserva','$nombre_jugador4','$precio4','$j4','$hoy'";
	$sentencia4="INSERT INTO $tabla10 ($campos4) VALUES ($datos4)";
	$inserta4=mysql_query($sentencia4,$conexion);
//	echo "<br>sentencia jugador 4: ".$sentencia4."<br>";

	$base4=$precio4/1.18;
	$iva4=$precio4-$base4;
	$concepto4="Reserva de la pista $nombre_pista el dia $hoy a las $hora_inicio";
	
	$campos_temporal4="IdPuesto,IdSocio,Vendedor,FechaEmisio,Concepto,Precio,Cantidad,Total,Formapago,Base,Iva,IvaVenta,IdSocioPago,Id_reserva,IdTipo,Fecha_seg";
	$datos_temporal4="'1','$id_jugador4','1','$fecha','$concepto4','$precio4','1','$precio4','1','$base4','$iva4','18','$pago_cliente4','$id_reserva','$tipo_pago','$fecha_seg'";
	$sentencia_temporal4="INSERT INTO $tabla12 ($campos_temporal4) VALUES ($datos_temporal4)";
//	echo $sentencia_temporal4;
	$inserta_temporal4=mysql_query($sentencia_temporal4,$conexion);


	$campos_reservas="id_reserva,usuario,pista,horario,dia,hora_inicio";
	$datos_reservas="'$id_reserva','$cliente','$pista','$horario','$dia','$fecha_seg'";	
	$sentencia_reservas="INSERT INTO $tabla5 ($campos_reservas) VALUES ($datos_reservas)";
	$inserta_reservas=mysql_query($sentencia_reservas,$conexion);
//	echo "<br>sentencia reserva: ".$sentencia_reservas;

?>

	<div id='reservada'><br><br>Gracias <b><?php nombre_jugador($cliente);?></b>. La reserva se ha realizado con &eacute;xito.<br> La pista <b><?php datos_pista($pista);?></b> estar&aacute; disponible para ti a las <b><?php datos_horario($horario);?></b></div>
<?php 
}else{
?>
	<br>Lo sentimos, la pista <b><?php datos_pista($pista);?></b> ya est&aacute; reservada el mismo d&iacute;a y a las <b><?php datos_horario($horario);?></b>.<br>Vuelva a la secci&oacute;n reservas y pruebe con otra pista u otra hora.<br>Gracias
<?php
}

}
}

} /* termina la función */

?>