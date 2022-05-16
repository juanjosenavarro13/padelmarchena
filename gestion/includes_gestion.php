<?php
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
$rs = mysqli_query($ssql);
$num_total_registros = mysqli_num_rows($rs);
//calculo el total de páginas
$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);

/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////

echo "<div id='boton_nuevo'><a href='alta_pistas.php'>NUEVA PISTA</a></div>";

/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla2` limit " . $inicio . "," . $TAMANO_PAGINA;
$resultado = mysqli_query($conexion,$ssql);
/////////////////////////////////////////////////////////////

echo "<table border='0' id='tabla_gestion' width='650'>";

echo "<tr id='cabecera_tabla'> <td> <div id='texto_titulo'> ID </div></td> <td><div id='texto_titulo'> Nombre </div></td> <td><div id='texto_titulo'> Descripcion </div></td>  <td><div id='texto_titulo'> Bloque </div></td> <td><div id='texto_titulo'> Bloque FS</div></td> <td><div id='texto_titulo'> Acci&oacute;n </div></td> </tr>";

$i=1;
while ($row=mysqli_fetch_object($resultado)){

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
<a target="_blank" onClick="window.open(this.href, this.target, 'width=300,height=600'); return false;" id="enlace_bloque" href="informacion_bloques.php?bloque=<?php echo $bloque; ?>"><?php echo $bloque; ?></a>	
<?php
			echo "</td>";
			
			echo "<td align='center'>";
?>			
<a target="_blank" onClick="window.open(this.href, this.target, 'width=300,height=600'); return false;" id="enlace_bloque" href="informacion_bloques.php?bloque=<?php echo $bloque_fs; ?>"><?php echo $bloque_fs; ?></a>	
<?php
			echo "</td>";
			echo "<td>"; 
			echo "<a href='?accion=modificar&id=$id_pista'><img src='../../imagenes/edit.gif' alt='editar' border='0'></a>";
			echo "|<a href='?accion=borrar&id=$id_pista'><img src='../../imagenes/delete.gif' name='borrar' alt='borrar' border='0'></a></div></td>";
	 echo "</tr>";
	}
	echo "</table>";

//cerramos el conjunto de resultado y la conexión con la base de datos
mysqli_free_result($rs);

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
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////        GENERA LISTADO BLOQUES      //////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

function generaBloques()
{
	include("../../conexion.php"); //Nos conectamos a la base de datos
	$consulta=mysqli_query($conexion,"SELECT * FROM $tabla4");
	echo "<select name='bloque' id='campo'>";
	echo "<option value='0'>Elige el bloque horario</option>";
	while($registro=mysqli_fetch_row($consulta))
	{
		echo "<option value='".$registro[0]."'>".$registro[1]." [bloque ".$registro[0]."]</option>";
	}
	echo "</select>";
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////        GENERA LISTADO PISTAS       //////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

function generaPistas()
{
	include("../../conexion.php"); //Nos conectamos a la base de datos
	$consulta=mysqli_query($conexion,"SELECT * FROM $tabla2");
	echo "<select name='pista' id='campo'>";
	echo "<option value='0'>Elige la pista</option>";
	while($registro=mysqli_fetch_row($consulta))
	{
		echo "<option value='".$registro[0]."'>".$registro[1]."</option>";
	}
	echo "</select>";
}
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
$rs = mysqli_query($conexion,$ssql);
$num_total_registros = mysqli_num_rows($rs);
//calculo el total de páginas
$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);

/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////

echo "<div id='boton_nuevo'><a href='alta_bloques.php'>NUEVO BLOQUE</a></div>";

/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla4` limit " . $inicio . "," . $TAMANO_PAGINA;
$resultado = mysqli_query($conexion,$ssql);
/////////////////////////////////////////////////////////////

echo "<table border='0' id='tabla_gestion' width='650'>";

echo "<tr id='cabecera_tabla'> <td> <div id='texto_titulo'> ID </div></td> <td><div id='texto_titulo'> Nombre </div></td> <td><div id='texto_titulo'> Descripcion </div></td>  <td><div id='texto_titulo'> Detalles </div></td> </tr>";

$i=1;
while ($row=mysqli_fetch_object($resultado)){

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
mysqli_free_result($rs);

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

<?php } 


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
		<td align='left' valign='top'><input type='text' name='nombre'></td><td colspan='2'>
		<textarea name='descripcion' cols='50' rows='6'></textarea></td>
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
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOo		RELACION PISTAS-BLOQUES		oOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
*/

function relacionBloquesPistas(){
include ("../../conexion.php");

/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla11` ORDER BY id_pista";
$resultado = mysqli_query($conexion,$ssql);
/////////////////////////////////////////////////////////////

echo "<div id='boton_nuevo'><a href='alta_relaciones.php'>NUEVA RELACI&Oacute;N</a></div>";

echo "<form action='alta_bloques2.php' method='post' name='alta_bloques'>
	
<table border='0' id='tabla_relaciones' width='680' height='auto'>

	<tr id='tabla_altas'> 
		<td > Pista </div></td>
		<td > Bloque </div></td>
		<td > L </div></td>
		<td > M </div></td>
		<td > X </div></td>
		<td > J </div></td>
		<td > V </div></td>
		<td > S </div></td>
		<td > D </div></td>
		<td > Tipo </div></td>
		<td > Fecha inicio </div></td>
		<td > Fecha fin </div></td>
		<td > Acci&oacute;n </div></td>
		
	</tr>";

while ($row=mysqli_fetch_object($resultado)){

$id_relacion=$row->id_pista_bloque;
$id_pista=$row->id_pista;
$id_bloque=$row->id_bloque;
$fecha_inicio=$row->fecha_inicio;
$fecha_fin=$row->fecha_fin;
$lunes=$row->lunes;
$martes=$row->martes;
$miercoles=$row->miercoles;
$jueves=$row->jueves;
$viernes=$row->viernes;
$sabado=$row->sabado;
$domingo=$row->domingo;
$tipo=$row->tipo;
$activo=$row->activo;

$i++;
if($i%2==0){
	$estilo="fila_par";
}else{
	$estilo="fila_inpar";
	}

		echo "<tr id='".$estilo."'>";
			echo "<td>";
				nombre_pista($id_pista);
			echo "</td>";
			echo "<td>";
			?>			
				<a target="_blank" onClick="window.open(this.href, this.target, 'width=300,height=600'); return false;" id="enlace_bloque" href="informacion_bloques.php?bloque=<?php echo $id_bloque; ?>"><?php echo $id_bloque; ?></a>	
			<?php
			echo "</td>";
			echo "<td><input type='checkbox' name='lunes'"; //LUNES
				if($lunes==1){
					echo 'checked';
				}
				echo "></td>";
			echo "<td><input type='checkbox' name='martes'"; //MARTES
				if($martes==1){
					echo 'checked';
				}
				echo "></td>";
			echo "<td><input type='checkbox' name='miercoles'"; //MIERCOLES
				if($miercoles==1){
					echo 'checked';
				}
				echo "></td>";
			echo "<td><input type='checkbox' name='jueves'"; //JUEVES
				if($jueves==1){
					echo 'checked';
				}
				echo "></td>";
			echo "<td><input type='checkbox' name='viernes'"; //VIERNES
				if($viernes==1){
					echo 'checked';
				}
				echo "></td>";
			echo "<td><input type='checkbox' name='sabado'"; //SABADO
				if($sabado==1){
					echo 'checked';
				}
				echo "></td>";
			echo "<td><input type='checkbox' name='domingo'"; //DOMINGO
				if($domingo==1){
					echo 'checked';
				}
				echo "></td>";
			echo "<td>";
				if($tipo==1){
					echo "Temporal";
				}else{
					echo "Permanente";
				}
			echo "</td>";
			echo "<td>";
				calcula_fecha_normal($fecha_inicio);
			echo "</td>";
			echo "<td>";
				calcula_fecha_normal($fecha_fin);
			echo "</td>";
			
			echo "<td>";
			echo "<a href='?accion=modificar_relacion&id=$id_relacion'><img src='../../imagenes/edit.gif' alt='editar' border='0'></a>";
			echo "|<a href='?accion=borrar_relacion&id=$id_relacion'><img src='../../imagenes/delete.gif' name='borrar' alt='borrar' border='0'></a></div></td>";
			echo "</td>";

		echo "</tr>";

}

echo "</table>";


}

/*
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOo		FECHA DE UNIX A CRISTIANO		oOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOo
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
*/

function calcula_fecha_normal($segundos){
	$fecha_esp=date("d-m-Y", $segundos);
	echo $fecha_esp;
	
}

function nombre_pista($pista){
	include("../../conexion.php");
	$ssql = "select nombre from `$tabla2` WHERE id_pista=$pista";
	$resultado = mysqli_query($conexion,$ssql);
	$row=mysqli_fetch_object($resultado);
	echo $row->nombre;
	
	
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
	echo "<input type='submit' name='enviar' value='&lt;&lt;'>
	<input type='hidden' name='mes_actual' value='$mes_anterior'>
	<input type='hidden' name='ano_actual' value='$ano_anterior'>
	<input type='hidden' name='seleccionado' value='1'></form>";
	
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
	echo "<input type='submit' name='enviar' value='&gt;&gt;'>
	<input type='hidden' name='mes_actual' value='$mes_siguiente'>
	<input type='hidden' name='ano_actual' value='$ano_siguiente'>
	<input type='hidden' name='seleccionado' value='1'></form>";
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
	echo "<input type='submit' name='enviar' value='&lt;&lt;'>
	<input type='hidden' name='mes_actual' value='$mes_anterior'>
	<input type='hidden' name='ano_actual' value='$ano'>
	<input type='hidden' name='seleccionado' value='1'></form>";
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
	echo "<input type='submit' name='enviar' value='&gt;&gt;'>
	<input type='hidden' name='mes_actual' value='$mes_posterior'>
	<input type='hidden' name='ano_actual' value='$ano'>
	<input type='hidden' name='seleccionado' value='1'>
	</form>";
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

$dia_ingles=date(l);
$numero_dia_semana=date(w);

	$fecha_seg=explode("-",$fecha);
	$dia_select=$fecha_seg[2];
	$mes_select=$fecha_seg[1];
	$ano_select=$fecha_seg[0];
	$fecha_es=$dia_select . "-" . $mes_select . "-" . $ano_select;
	$numero_dia_semana=calcula_numero_dia_semana($dia_select,$mes_select,$ano_select);
	
if($numero_dia_semana==0){
	$dia_semana="LUNES";
	$campo_bd="lunes";
}elseif($numero_dia_semana==1){
	$dia_semana="MARTES";
	$campo_bd="martes";
}elseif($numero_dia_semana==2){
	$dia_semana="MI&Eacute;RCOLES";
	$campo_bd="miercoles";
}elseif($numero_dia_semana==3){
	$dia_semana="JUEVES";
	$campo_bd="jueves";
}elseif($numero_dia_semana==4){
	$dia_semana="VIERNES";
	$campo_bd="viernes";
}elseif($numero_dia_semana==5){
	$dia_semana="S&Aacute;BADO";
	$campo_bd="sabado";
}elseif($numero_dia_semana==6){
	$dia_semana="DOMINGO";
	$campo_bd="domingo";
}


/////////////////////////////////////////////////////////////
$ssql = "SELECT id_pista FROM `$tabla2`";
$resultado = mysqli_query($conexion,$ssql);
/////////////////////////////////////////////////////////////
echo "<table id='tabla_pistas' width='500'>";
echo "<tr><td colspan='4' align='center' id='cabecera'>HORARIOS DISPONIBLES</td></tr>";
echo "<tr>";

//Imprimimos los nombres de las pistas
$pag=$_SERVER['PHP_SELF'];  // el nombre y ruta de esta misma pÃ¡gina.

$i=1;
$usuario=$_SESSION['id'];
//echo "usuario: ".$usuario;
while ($registro=mysqli_fetch_row($resultado)){

$id_pista=$registro[0];

echo "<td valign='top'>";

	//buscampos los datos y los horarios de cada pista
	/////////////////////////////////////////////////////////////
	$ssql_pista = "SELECT * FROM `$tabla2` WHERE id_pista=$registro[0]";
	$resultado_pista = mysqli_query($conexion,$ssql_pista);
	/////////////////////////////////////////////////////////////

/* oOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
	oOoOoOoOoOoOoOoOoOoO		VAMOS A BUSCAR EL BLOQUE DE HOY		oOoOoOoOoOoOoOoOoOoO
	oOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO */

$fecha_unix = strtotime( date($fecha) );

	$ssql_bloque = "SELECT * FROM `$tabla11` WHERE id_pista=$registro[0] AND fecha_inicio<=$fecha_unix AND fecha_fin>=$fecha_unix AND $campo_bd='1' AND activo='1' ORDER BY tipo LIMIT 1";
	$resultado_bloque = mysqli_query($conexion,$ssql_bloque);
	$registro_bloque = mysqli_fetch_object($resultado_bloque);
	
	$bloque_hoy=$registro_bloque->id_bloque;

/* oOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
	oOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
	oOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO */

	echo "<table id='subtabla_pistas' width='100%'>";
	
	while ($registro_pista=mysqli_fetch_row($resultado_pista)){
		echo "<tr><td class='titulo'>";
		echo $registro_pista[1];
		echo "</td></tr>";
//imprimimos los horarios


		/////////////////////////////////////////////////////////////
		$ssql_horario = "SELECT * FROM `$tabla3` WHERE bloque=$bloque_hoy ORDER BY inicio";
		$resultado_horario = mysqli_query($conexion,$ssql_horario);
		/////////////////////////////////////////////////////////////
			while ($registro_horario=mysqli_fetch_row($resultado_horario)){
				$hora_actual=substr($registro_horario[1],0,5);
				$id_hora=$registro_horario[0];
				echo "<tr><td valign='bottom'>";
			/////////////////////		SELECCIONA SI ESTA OCUPADA		////////////////////////////////////////
			$ssql_ocupada = "SELECT id_reserva,usuario FROM `$tabla5` WHERE pista='$id_pista' AND horario='$id_hora' AND dia='$fecha'"; //selecciona si la pista esta ocupada. 
			$resultado_ocupada = mysqli_query($conexion,$ssql_ocupada);
			$row = mysqli_fetch_object($resultado_ocupada);
			$nr = mysqli_num_rows($resultado_ocupada);
			//////////////////////////////////////////////////////////////////////////////////////////////////
			
			/////////////////////		SELECCIONA SI HAY MEAPUNTO		////////////////////////////////////////
			$ssql_meapunto = "SELECT id_meapunto FROM `$tabla8` WHERE pista='$id_pista' AND horario='$id_hora' AND dia='$fecha'"; //selecciona si la pista esta ocupada. 
			$resultado_meapunto = mysqli_query($conexion,$ssql_meapunto);
			$row_meapunto = mysqli_fetch_object($resultado_meapunto);
			$id_meapunto=$row_meapunto->id_meapunto;
			$nr_meapunto = mysqli_num_rows($resultado_meapunto);
			//////////////////////////////////////////////////////////////////////////////////////////////////
			
			if($nr==1){
				$usuario_pista=$row->usuario;
				$id_reserva=$row->id_reserva;
				$ssql_ocupante = "SELECT nombre, apellido1 FROM `$tabla1` WHERE id_usuario='$usuario_pista'"; //busca el nombre del usuario.
			$resultado_ocupante = mysqli_query($conexion,$ssql_ocupante);
			$row_ocupante = mysqli_fetch_object($resultado_ocupante);
			echo "<div id='ocupada'>".$row_ocupante->nombre." ".$row_ocupante->apellido1;

			if($usuario_pista==$usuario OR $_SESSION['privilegios']==1){
			echo "<div id='hora'>$hora_actual</div><div id='anular_reserva'><a href='?accion=anular&id=$id_reserva'>anular </a>&nbsp;&nbsp;&nbsp;&nbsp;</div>";
			}
			
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

include("../../conexion.php");
$id_solicitud=$_GET[id_solicitud];

/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla7` WHERE id_solicitud=$id_solicitud";
$resultado = mysqli_query($conexion,$ssql);
/////////////////////////////////////////////////////////////
while ($row=mysqli_fetch_object($resultado)){

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
$calle=$row->calle;
$numero=$row->numero;
$dni=$row->dni;
$localidad=$row->localidad;
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
		<td>Nick:</td><td><input type="text" name="fecha1" value='<?php echo $nick; ?>' readonly> *</td>
	</tr>
	<tr>
		<td>Nivel:</td><td><input type='text' name='nivel' value='<?php echo $nivel; ?>'></td>
	</tr>
	<tr>
		<td>Nombre:</td><td><input type="text" name="nombre" value=<?php echo $nombre; ?>> *</td>
	</tr>
	<tr>
		<td>Primer apellido:</td><td><input type="text" name="apellido1" value='<?php echo $apellido1; ?>'> *</td>
	</tr>
	<tr>		
		<td>Segundo apellido:</td><td><input type="text" name="apellido2" value='<?php echo $apellido2; ?>'></td>
	</tr>
	<tr>		
		<td>DNI:</td><td><input type="text" name="dni" value='<?php echo $dni; ?>' > *</td>
	</tr>
	<tr>
		<td>Correo electronico:</td><td><input type="text" name="mail" value='<?php echo $mail; ?>'> *</td>
	</tr>
	<tr>
		<td>M&oacute;vil:</td><td><input type="text" name="telefono1" value='<?php echo $telefono1; ?>'> *</td>
	</tr>
	<tr>		
		<td>Direcci&oacute;n:</td><td><input type="text" name="calle" size='15' value='<?php echo $calle; ?>' ><input type='text' name='numero' size='2' value=<?php echo $numero; ?>>&nbsp;*</td>
	</tr>
	<tr>		
		<td>Localidad:</td><td><input type="text" name="localidad" value='<?php echo $localidad; ?>'> *</td>
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
		<td>Tipo de usuario: </td>
		<td>
			<?php generaSelect_privi($privilegios); ?>
		</td>
	</tr>

	<tr>
		<td>N&uacute;mero socio:<sub>(1)</sub></td>
		<td><input type='text' name='nsocio'></td>
	</tr>

	<tr>
		<td colspan="2" align="right"><br>
		<input type='hidden' name='aviso' value='on'>
		<input type='hidden' name='id_solicitud' value='<?php echo $id_solicitud; ?>'>
		<input type="submit" value="guardar" id="boton"> <input type="reset" value="borrar" id="boton"></td>
	</tr>

	<tr>
		<td colspan='2' class='nota'>(1) El n&uacute;mero de socio se pondr&aacute; cuando el socio est&eacute; tambien en la base de datos de las pistas y pague su cuota. Este n&uacute;mero ser&aacute; el mismo que el de la ficha de inscripci&oacute;n.</td>
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
		<td>Nivel:</td><td><input type='text' name='nivel' value='<?php echo $nivel; ?>'></td>
	</tr>
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
		<td>DNI:</td><td><input type="text" name="dni"> *</td>
	</tr>
	<tr>
		<td>Correo electronico:</td><td><input type="text" name="mail"> *</td>
	</tr>
	<tr>
		<td>M&oacute;vil:</td><td><input type="text" name="telefono1"> *</td>
	</tr>
	<tr>		
		<td>Direcci&oacute;n:</td><td><input type="text" name="calle" size='15'><input type='text' name='numero' size='2'>&nbsp;*</td>
	</tr>
	<tr>		
		<td>Localidad:</td><td><input type="text" name="localidad"> *</td>
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
		<td>Tipo de usuario: </td>
		<td>
			<?php generaSelect_privi($privilegios); ?>
		</td>
	</tr>

	<tr>
		<td>N&uacute;mero socio:<sub>(1)</sub></td>
		<td><input type='text' name='nsocio'></td>
	</tr>
	
	<tr>
		<td colspan='2' class='aviso'><br><input type='checkbox' name='aviso'> He leido la <a href='nota.php' target="_blank" onClick="window.open(this.href, this.target, 'width=600,height=600'); return false;">nota legal</a> y acepto las condiciones.</td>
	</tr>

	<tr>
		<td colspan="2" align="right"><br><input type="submit" value="guardar" id="boton"> <input type="reset" value="borrar" id="boton"></td>
	</tr>
	
	<tr>
		<td colspan='2' class='nota'>(1) El n&uacute;mero de socio se pondr&aacute; cuando el socio est&eacute; tambien en la base de datos de las pistas y pague su cuota. Este n&uacute;mero ser&aacute; el mismo que el de la ficha de inscripci&oacute;n.</td>
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
	$resultado_datos_clientes = mysqli_query($conexion,$ssql_datos_clientes);
	while ($row_datos_clientes=mysqli_fetch_object($resultado_datos_clientes)){
//	echo $row_datos_clientes->id_cliente;	
	}

	////////////   CUENTA APUNTADOS   	/////////////////////////
	$ssql_apuntados = "SELECT id_cliente_meapunto FROM `$tabla9` WHERE id_meapunto=$id_meapunto";
	$resultado_apuntados = mysqli_query($conexion,$ssql_apuntados);
	$row_apuntados=mysqli_num_rows($resultado_apuntados);
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
$resultado_enlace = mysqli_query($conexion,$ssql_enlace);
$row_enlace = mysqli_fetch_object($resultado_enlace);
/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla8` WHERE id_meapunto=$meapunto";
$resultado = mysqli_query($conexion,$ssql);
$row = mysqli_fetch_object($resultado);
$pista=$row->pista;
$horario=$row->horario;
////////////////////////////////////////////////////////////
////////////   CUENTA APUNTADOS   	/////////////////////////
	$ssql_cuenta_apuntados = "SELECT id_cliente_meapunto FROM `$tabla9` WHERE id_meapunto=$meapunto";
	$resultado_cuenta_apuntados = mysqli_query($conexion,$ssql_cuenta_apuntados);
	$row_cuenta_apuntados=mysqli_num_rows($resultado_cuenta_apuntados);
	$napuntados=$row_cuenta_apuntados;

echo "<div id='horario_pista'>";
datos_pista($pista);
datos_horario($horario);
echo "</div>";

if($napuntados>=1){
/////////////////////////////////////////////////////////////
echo "<table border='2' id='tabla_reservas'>";
echo "<tr id='titulo'>
			<td>Jugador</td>
			<td>Nick</td>
			<td colspan='2'>Nombre</td>

		</tr>";

/////////////////////////////////////////////////////////////
$ssql_enlace = "select * from `$tabla9` WHERE id_meapunto=$meapunto";
$resultado_enlace = mysqli_query($conexion,$ssql_enlace);
while ($row_enlace = mysqli_fetch_object($resultado_enlace)){
/////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////
$jugador=$row_enlace->id_cliente;
$id_enlace=$row_enlace->id_cliente_meapunto;

$ssql_jugador = "select * from `$tabla1` WHERE id_usuario=$jugador";
$resultado_jugador = mysqli_query($conexion,$ssql_jugador);
$row_jugador=mysqli_fetch_object($resultado_jugador);
$id_jugador=$row_jugador->id_usuario;
$nick=$row_jugador->nick;
$nivel=$row_jugador->nivel;
$nombre_jugador=$row_jugador->nombre." ".$row_jugador->apellido1;
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
				<td>$nick</td>
				<td colspan='2'>$nombre_jugador";
	if($id_jugador==$_SESSION['id'] AND $napuntados<=3){	
	echo "<a href='?accion=anular&id=$id_enlace'> <img src='../../imagenes/delete.gif' border='0'> </a>";
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
	$resultado_horario = mysqli_query($conexion,$ssql_horario);
	$row_horario=mysqli_fetch_object($resultado_horario);
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
	$resultado_pista = mysqli_query($conexion,$ssql_pista);
	$row_pista=mysqli_fetch_object($resultado_pista);
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

$ssql_partidos_semana="SELECT * FROM $tabla10 WHERE fecha between '$lunes' AND '$domingo' AND id_jugador=$id_usuario";
$resultado_partidos_semana = mysqli_query($conexion,$ssql_partidos_semana);
$num_row_partidos_semana=mysqli_num_rows($resultado_partidos_semana);
echo $num_row_partidos_semana;
}

function partidos_mes(){
include ("../../conexion.php");
$id_usuario=$_GET['id_usuario'];

$mes_hoy=date(m);
$ano_hoy=date(Y);
$desde="$ano_hoy-$mes_hoy-01";
$hasta= date('Y-m-01', strtotime('+1 month'));

$ssql_partidos_mes="SELECT * FROM $tabla10 WHERE fecha between '$desde' AND '$hasta' AND id_jugador=$id_usuario";
$resultado_partidos_mes = mysqli_query($conexion,$ssql_partidos_mes);
$num_row_partidos_mes=mysqli_num_rows($resultado_partidos_mes);
echo $num_row_partidos_mes;
}

function partidos_ano(){
include ("../../conexion.php");
$id_usuario=$_GET['id_usuario'];

$ano_hoy=date(Y);
$ano_siguiente=$ano_hoy+1;
$desde="$ano_hoy-01-01";
$hasta="$ano_siguiente-01-01";

$ssql_partidos_ano="SELECT * FROM $tabla10 WHERE fecha between '$desde' AND '$hasta' AND id_jugador=$id_usuario";
$resultado_partidos_ano = mysqli_query($conexion,$ssql_partidos_ano);
$num_row_partidos_ano=mysqli_num_rows($resultado_partidos_ano);
echo $num_row_partidos_ano;

}

function nombre_jugador($id_usuario){
include ('../../conexion.php');
	////////////////////  DATOS CLIENTE  ////////////////////////
	$ssql_usuario = "SELECT * FROM `$tabla1` WHERE id_usuario=$id_usuario";
	$resultado_usuario = mysqli_query($conexion,$ssql_usuario);
	/////////////////////////////////////////////////////////////
	
	$row_usuario = mysqli_fetch_object($resultado_usuario);
	$nombre_usuario=$row_usuario->nombre;
	$apellido1=$row_usuario->apellido1;
	$nombre_jugador=$nombre_usuario." ".$apellido1;
	
	echo $nombre_jugador;
	//global $nombre_jugador;
	//return $nombre_jugador;
}

///////////////////////////////////////////////////////////////////////////////////////
/////////////////////////   GENERAR LOS PRIVILEGIOS    ////////////////////////////////

function generaSelect_privi($privilegios){
include '../../conexion.php';

$consulta=mysqli_query($conexion,"SELECT id_privilegio, nombre FROM $tabla6");
echo "<select name='privilegios'>";

while($registro=mysqli_fetch_row($consulta)){		
	echo "<option value='".$registro[0]."'";
		if($registro[0]==$privilegios){
			echo "selected";
		}
	echo ">".$registro[1]."</option>";
}

echo "</select>";
}

/////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////
/////////////////////////   NOMBRE PRIVILEGIOS    ////////////////////////////////

function generaNombre_privi($privilegios){
include '../../conexion.php';
$ssql="SELECT nombre FROM $tabla6 WHERE id_privilegio=$privilegios";
$consulta=mysqli_query($conexion,$ssql);

while($registro=mysqli_fetch_row($consulta)){		
$resto = substr ($registro[0], 0,3);
	echo "<td>".$resto."</td>";
}


}

/////////////////////////////////////////////////////////////////////////////////


?>