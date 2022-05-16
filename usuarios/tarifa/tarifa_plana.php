<?php

session_start();
include("../../conexion.php");
include("../../seguridad.php");
$mes_actual=date(m);

//$pag='lista_alumnos.php';

if ($_GET['accion']=="borrar"){
	$id_borrar=$_GET['id'];
	mysqli_query($conexion, "DELETE FROM $tabla22 WHERE id='$id_borrar'") or die(mysqli_error());
	mysqli_close();
	//$pagina=$_GET['pagina'];
	header ('Location: tarifa_plana.php');
	exit;
}
if ($_GET['accion']=="modificar"){
	$id_modificar= $_GET['id'];
	header ("Location: modifica_alumnos.php?id=$id_modificar");
	exit;
}
/////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////      PAGINACIÓN     //////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////
include("../../includes.php");

$TAMANO_PAGINA = 40;

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
$ssql = "select * from `$tabla22` ";
$rs = mysqli_query($conexion, $ssql);
$num_total_registros = mysqli_num_rows($rs);
//calculo el total de páginas
$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);

/////////////////////////////CUENTA NUMERO DE ALUMNOS ////////////////////////////////////
$sql="SELECT COUNT(*) FROM `$tabla22` WHERE debaja=0 AND mes=$mes_actual";  
$consulta=mysqli_query($conexion,$sql); 
// $rcount=mysqli_result($consulta,0);
$rcount = mysqli_fetch_assoc($consulta);
/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////CUENTA NUMERO DE ALUMNOS DE BAJA/////////////////////////////
$ssql="SELECT COUNT(*) FROM `$tabla22` WHERE debaja=1";  
$consulta2=mysqli_query($conexion,$ssql); 
// $rcount2=mysqli_result($consulta2,0);
$rcount2 = mysqli_fetch_assoc($consulta2);
/////////////////////////////////////////////////////////////////////////////////////////
$suma=0;


$tabla12= mysqli_query($conexion,"select precio from `$tabla22` WHERE debaja=0");///// CONSULTA DEL TOTAL PRECIO DEL DIA

	while ($registro12 = mysqli_fetch_array($tabla12)) {
		
	$suma=$suma+$registro12['precio'];
	 
		
	}
$suma2=0;
$tabla122= mysqli_query($conexion,"select pagado from `$tabla22` WHERE debaja=0");///// CONSULTA DEL TOTAL PAGADO DEL DIA

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

<div id="cabecera_alumnos"> TARIFA PLANA PADEL MARCHENA</div>

<br />
 <br />
    
</div>
<div id="alumno_buscar">
<form action='buscar.php' method='POST'>
<b>Buscar: </b><input type='text' name='nombre_buscar' value=''  id="alumno_buscar" placeholder="...su nombre"/>
<br /><br /><br />
<button type='submit' name='id1'  value=""><img src="buscar.png" width="50px" height="50px"></img></button>
</div>
</form>
<div id='boton_nuevo'><a href='alta_tarifa_plana.php'>NUEVA TARIFA</a></div>
<br />
 <br />
 <div id='boton_nuevo'><a href='tarifas_debaja.php'>TARIFAS DE BAJA (<?php echo $rcount2 ?>)</a></div>
<br />
 <br />
<div id='boton_nuevo'><a href='pendiente.php'>PENDIENTE DE PAGO</a></div>
<br />
 <br />
<div id='numero_alumno'><a><?php echo "<b>N&deg; ALUMNOS: </b>".$rcount." "?></a></div>
<br />
<br />
<div id='total_precio'><a><?php echo "<b>Total Precio: </b>".$suma." &euro;"?></a></div>
<?php 
if ($suma>$suma2){ ?>
	<div id='total_precio_neg'><a><?php echo "<b>Total Pagado: </b>".$suma2." &euro;"?></a></div>
<? }else{ ?>

<div id='total_precio_pos'><a><?php echo "<b>Total Pagado: </b>".$suma2." &euro;"?></a></div>
<? }?>
<?

/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla22` WHERE debaja=0 AND mes=$mes_actual ORDER BY nombre limit " . $inicio . "," . $TAMANO_PAGINA ;
$resultado = mysqli_query($conexion,$ssql);
/////////////////////////////////////////////////////////////

echo "<table border='0' id='tabla_gestion' width='650'>";

echo "<tr id='cabecera_tabla'> <td> <div id='texto_titulo'> Nombre </div></td>
 <td><div id='texto_titulo'> Apellido </div></td>
  <td><div id='texto_titulo'> Telefono </div></td>
  <td align='center'><div id='texto_titulo'> Precio </div></td> 
  <td align='center'><div id='texto_titulo'> Pagado </div></td>  
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
$id=$row->id;
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
			
			echo "<td align='center'>".$fecha."</td>";  
			 
			echo "<td><a href='?accion=modificar&id=$id'><img src='../../imagenes/edit.gif' alt='editar' border='0'></a>";
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
echo "<a href='tarifa_plana.php?pagina=".$pag_anterior."'>P&aacute;gina anterior</a>";
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
          echo "<a href='tarifa_plana.php?pagina=" . $i . "'class=izquierda>" . $i . "</a> ";
    }
} 

?>
</td>

<td width="200" align="right">
	<?php
echo $mes;
echo "/".$mes_actual;
if($pagina==$total_paginas){
	echo "&nbsp;";
}else{
	echo "<a href='tarifa_plana.php?pagina=".$pag_siguiente."'>P&aacute;gina siguiente</a>";
	echo "<br>";
	echo "<br>";
}

///////////////////////////////////////////////////    COPIA AUTOMATICAMENTE SI EL MES ES DISTINTO, EN OTRA TABLA     ///////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*if ($mes!=$mes_actual){
	
$sentencia="insert into `$tabla23` (id,nombre,apellido,telefono,numero_alumno,horas,precio,f_semana,pagado,id_alumno,n_cuenta,n_cuenta2,n_cuenta3,n_cuenta4,fecha,debaja,mes) select * from `$tabla22`";
$copiar_datos=mysqli_query($sentencia);

////////////////////////////////////////    PONE AUTOMATICAMENTE LOS REGISTRO  DE LOS USUARIOS A 0 (pagado y fecha)   ///////////////////////////////////////////////////////////////
$pagado_actualiza=0;
$mes_actualiza=date(m);
$fecha_actualiza=0;

$datos2="pagado='$pagado_actualiza',fecha='$fecha_actualiza',mes='$mes_actualiza'";


$sentencia2="UPDATE $base . `$tabla22` SET $datos2 ";

$modifica2=mysqli_query($sentencia2,$conexion);

}*/
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

?>
</td>
</table>
<? ///////////////////////////////////////////////////////////////////////////////////////REGISTRO  POR MESES ?>
<hr />
<br />
<br />
<!--<form action='registro_meses.php' method='POST'>
<input type='hidden' name='mes' value='<?php echo $mes_actual; ?>'>

<table width="auto" border="1">
  <tr>
    <td><input type='submit' name='id01' value='ENERO' id='registro_meses'></td>
    <td><input type='submit' name='id02' value='FEBRERO' id='registro_meses'></td>
    <td><input type='submit' name='id03' value='MARZO' id='registro_meses'></td>
  </tr>
  <tr>
    <td><input type='submit' name='id04' value='ABRIL' id='registro_meses'></td>
    <td><input type='submit' name='id05' value='MAYO' id='registro_meses'></td>
    <td><input type='submit' name='id06' value='JUNIO' id='registro_meses'></td>
  </tr>
  <tr>
    <td><input type='submit' name='id07' value='JULIO' id='registro_meses'></td>
    <td><input type='submit' name='id08' value='AGOSTO' id='registro_meses'></td>
    <td><input type='submit' name='id09' value='SEPTIEMBRE' id='registro_meses'></td>
  </tr>
  <tr>
    <td><input type='submit' name='id10' value='OCTUBRE' id='registro_meses'></td>
    <td><input type='submit' name='id11' value='NOVIEMBRE' id='registro_meses'></td>
    <td><input type='submit' name='id12' value='DICIEMBRE' id='registro_meses'></td>
  </tr>
</table>
</form>-->


<br />
<br />
<br />



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