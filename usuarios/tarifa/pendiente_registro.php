<?php

session_start();
include("../../conexion.php");
include("../../seguridad.php");
$mes_actual=date(m);
//$pag='lista_alumnos.php';

$mes_consulta=$_POST['mes_consulta'];

if ($_GET['accion']=="borrar"){
	$id_borrar=$_GET['id'];
	mysqli_query($conexion, "DELETE FROM $tabla14 WHERE id_alumno='$id_borrar'") or die(mysqli_error());
	mysqli_close();
	//$pagina=$_GET['pagina'];
	header ('Location: lista_alumnos.php');
	exit;
}
if ($_GET['accion']=="modificar"){
	$id_modificar= $_GET['id'];
	header ("Location: modifica_alumnos_registro.php?id_alumno=$id_modificar");
	exit;
}
/////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////      PAGINACIÓN     //////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////
include("../../includes.php");

$TAMANO_PAGINA = 100;

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
$ssql = "select * from `$tabla16` WHERE debaja=0 AND mes=$mes_consulta AND pagado!=precio";
$rs = mysqli_query($conexion, $ssql);
$num_total_registros = mysqli_num_rows($rs);
//calculo el total de páginas
$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);

/////////////////////////////////////////////////////////////////////////////////////////
$suma=0;

$tabla12= mysqli_query($conexion, "select precio from `$tabla16` WHERE debaja=0 AND mes=$mes_consulta");///// CONSULTA DEL TOTAL PRECIO DEL DIA

	while ($registro12 = mysqli_fetch_array($tabla12)) {
		
	$suma=$suma+$registro12['precio'];
	 
		
	}
$suma2=0;
$tabla122= mysqli_query($conexion, "select pagado from `$tabla16` WHERE debaja=0 AND mes=$mes_consulta");///// CONSULTA DEL TOTAL PAGADO DEL DIA

	while ($registro122 = mysqli_fetch_array($tabla122)) {
		
	$suma2=$suma2+$registro122['pagado'];
	 
		
}
encabezado();
	echo "<link href='../../estilos.css' rel='stylesheet' type='text/css' />";
cabecera();
col_izda1();
enlaces_izda();
administrar();
col_izda2();
cuerpo1();
///////////////////////////////////////		AKI COMIENZA LA WEB 		/////////////////////////////
?>

<div id="cabecera_alumnos"> ALUMNOS PADEL MARCHENA</div>

<br />
 <br />
    
</div>

<!--<div id='boton_nuevo'><a href='registro_meses.php'>VOLVER</a></div>-->
<br />
 <br />
<!--<div id='boton_nuevo'><a href='pendiente.php'>PENDIENTE DE PAGO</a></div>-->

<div id='total_precio'><a><?php echo "<b>Total Precio: </b>".$suma." &euro;"?></a></div>

<?php 
if ($suma>$suma2){ ?>
	<div id='total_precio_neg'><a><?php echo "<b>Total Pagado: </b>".$suma2." &euro;"?></a></div>
<? }else{ ?>

<div id='total_precio_pos'><a><?php echo "<b>Total Pagado: </b>".$suma2." &euro;"?></a></div>
<? }?>
<?

/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla16` WHERE pagado!=precio AND debaja=0 AND mes=$mes_consulta ORDER BY apellido limit " . $inicio . "," . $TAMANO_PAGINA;
$resultado = mysqli_query($conexion, $ssql);
/////////////////////////////////////////////////////////////

echo "<table border='0' id='tabla_gestion' width='650'>";

echo "<tr id='cabecera_tabla'> <td> <div id='texto_titulo'> Nombre </div></td>
 <td><div id='texto_titulo'> Apellido </div></td>
  <td><div id='texto_titulo'> Telefono </div></td>
  <td align='center'><div id='texto_titulo'> Precio </div></td> 
  <td align='center'><div id='texto_titulo'> Pagado </div></td> 
  <td align='center'><div id='texto_titulo'> Con cuenta Bancaria </div></td> 
  <td align='center'><div id='texto_titulo'> Fecha Ultimo pago </div></td> 
  <td></td>";

$i=1;
while ($row=mysqli_fetch_object($resultado)){

$nombre=$row->nombre;
$apellido=$row->apellido;
$telefono=$row->telefono;
$numero_alumno=$row->numero_alumno;
$horas=$row->horas;
$precio=$row->precio;
$f_semana=$row->f_semana;
$pagado=$row->pagado;
$id_alumno=$row->id_alumno;
$n_cuenta4=$row->n_cuenta4;
$fecha=$row->fecha;
$mes=$row->mes;

$i++;
if($i%2==0){
	$estilo="fila_par";
}else{
	$estilo="fila_inpar";
	}

		echo "<tr id='".$estilo."'>";
			echo "<td align='center'>".$nombre."</td>";
			echo "<td align='left'>".$apellido."</td>";
			echo "<td align='left'>".$telefono."</td>";
			echo "<td align='center'>".$precio." &euro;</td>"; 
			echo "<td align='center'>".$pagado." &euro;</td>";
			echo "<td align='center'>";
			
			if($n_cuenta4>1){
					echo "SI";
				}else{
					echo "NO";
				}
			echo "</td>";
			echo "<td align='center'>".$fecha."</td>";  
			 
			echo "<td><a href='?accion=modificar&id=$id_alumno'><img src='../../imagenes/edit.gif' alt='editar' border='0'></a>";
			//echo "|<a href='?accion=borrar&id=$id_alumno'><img src='../../imagenes/delete.gif' name='borrar' alt='borrar' border='0'></a></div></td>";
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
echo "<a href='pendiente_registro.php?pagina=".$pag_anterior."'>P&aacute;gina anterior</a>";
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
          echo "<a href='pendiente_registro.php?pagina=" . $i . "'class=izquierda>" . $i . "</a> ";
    }
} 

?>
</td>

<td width="200" align="right">
	<?php

if($pagina==$total_paginas){
	echo "&nbsp;";
}else{
	echo "<a href='pendiente_registro.php?pagina=".$pag_siguiente."'>P&aacute;gina siguiente</a>";
}

	?>
</td>
</table>
<?php
cuerpo2();
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
pie();

?>