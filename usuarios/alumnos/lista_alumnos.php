<?php

session_start();
include("../../conexion.php");
include("../../seguridad.php");
$mes_actual=date(m);
$ano=date(y);

//$pag='lista_alumnos.php';

if ($_GET['accion']=="borrar"){
	$id_borrar=$_GET['id'];
	mysql_query("DELETE FROM $tabla14 WHERE id_alumno='$id_borrar'") or die(mysql_error());
	mysql_close();
	//$pagina=$_GET['pagina'];
	header ('Location: lista_alumnos.php');
	exit;
}
if ($_GET['accion']=="modificar"){
	$id_modificar= $_GET['id'];
	header ("Location: modifica_alumnos.php?id_alumno=$id_modificar");
	exit;
}
/////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////      PAGINACIÓN     //////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////
include("../../includes.php");

$TAMANO_PAGINA = 1000;

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
$ssql = "select * from `$tabla14` ";
$rs = mysql_query($ssql,$conexion);
$num_total_registros = mysql_num_rows($rs);
//calculo el total de páginas
$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);

/////////////////////////////CUENTA NUMERO DE ALUMNOS ////////////////////////////////////
$sql="SELECT COUNT(*) FROM `$tabla14` WHERE debaja=0 AND mes=$mes_actual";  
$consulta=mysql_query($sql); 
$rcount=mysql_result($consulta,0);
/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////CUENTA NUMERO DE ALUMNOS DE BAJA/////////////////////////////
$ssql="SELECT COUNT(*) FROM `$tabla14` WHERE debaja=1";  
$consulta2=mysql_query($ssql); 
$rcount2=mysql_result($consulta2,0);
/////////////////////////////////////////////////////////////////////////////////////////
$suma=0;

$tabla12= mysql_query("select precio from `$tabla14` WHERE debaja=0");///// CONSULTA DEL TOTAL PRECIO DEL DIA

	while ($registro12 = mysql_fetch_array($tabla12)) {
		
	$suma=$suma+$registro12['precio'];
	 
		
	}
$suma2=0;
$tabla122= mysql_query("select pagado from `$tabla14` WHERE debaja=0");///// CONSULTA DEL TOTAL PAGADO DEL DIA

	while ($registro122 = mysql_fetch_array($tabla122)) {
		
	$suma2=$suma2+$registro122['pagado'];
	 
		
}

$suma3=0;
$tabla123= mysql_query("select `pagado` from `$tabla14` WHERE `debaja`='' AND `mes`='$mes_actual' AND `ano`='$ano' AND `monitor`='Beni'");///// CONSULTA DEL TOTAL PAGADO DEL DIA

	while ($registro123 = mysql_fetch_array($tabla123)) {
		
	$suma3=$suma3+$registro123['pagado'];
	 
		
}


$suma4=0;
$tabla124= mysql_query("select `pagado` from `$tabla14` WHERE `debaja`='' AND `mes`='$mes_actual' AND `ano`='$ano' AND `monitor`='Raul'");///// CONSULTA DEL TOTAL PAGADO DEL DIA

	while ($registro124 = mysql_fetch_array($tabla124)) {
		
	$suma4=$suma4+$registro124['pagado'];
	 
		
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
<div id="alumno_buscar">
<form action='buscar.php' method='POST'>
<b>Buscar Alumno: </b><input type='text' name='nombre_buscar' value=''  id="alumno_buscar">
<br /><br /><br />
<button type='submit' name='id1'  value=""><img src="buscar.png" width="50px" height="50px"></img></button>
</div>
</form>
<div id='boton_nuevo'><a href='alumnos.php'>NUEVO ALUMNO</a></div>
<br />
 <br />
 <div id='boton_nuevo'><a href='alumnos_debaja.php'>ALUMNOS DE BAJA (<?php echo $rcount2 ?>)</a></div>
<br />
 <br />
 <br />
<div id='boton_nuevo'><a href='pendiente.php'>PENDIENTE DE PAGO</a></div>
<br />
 <br />
 <div id='boton_nuevo'><a href='cuentas_bancarias.php'>ALUMNOS CON N&ordm; CUENTA</a></div>
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
<br><br>
<div id='total_precio'><a><?php echo "<b>Total Beni: </b>".$suma3." &euro;"?></a></div>
<div id='total_precio'><a><?php echo "<b>Total Raul: </b>".$suma4." &euro;"?></a></div>
<?

/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla14` WHERE debaja=0 AND mes=$mes_actual ORDER BY apellido limit " . $inicio . "," . $TAMANO_PAGINA ;
$resultado = mysql_query($ssql);
/////////////////////////////////////////////////////////////

echo "<table border='0' id='tabla_gestion' width='650'>";

echo "<tr id='cabecera_tabla'> <td> <div id='texto_titulo'> Nombre </div></td>
 <td><div id='texto_titulo'> Apellido </div></td>
  <td><div id='texto_titulo'> Telefono </div></td>
  <td align='center'><div id='texto_titulo'> Precio </div></td> 
  <td align='center'><div id='texto_titulo'> Pagado </div></td> 
  <td align='center'><div id='texto_titulo'> Monitor </div></td> 
  <td align='center'><div id='texto_titulo'> Fecha Ultimo pago </div></td> 
  <td></td>";

$i=1;

while ($row=mysql_fetch_object($resultado)){

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
$monitor=$row->monitor;
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
			echo "<td align='center'>".$monitor."</td>";
			/*echo "<td align='center'>";
			
			if($n_cuenta4>1){
					echo "SI";
				}else{
					echo "NO";
				}
			echo "</td>";*/
			echo "<td align='center'>".$fecha."</td>";  
			 
			echo "<td><a href='?accion=modificar&id=$id_alumno'><img src='../../imagenes/edit.gif' alt='editar' border='0'></a>";
			//echo "|<a href='?accion=borrar&id=$id_alumno'><img src='../../imagenes/delete.gif' name='borrar' alt='borrar' border='0'></a></div></td>";
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
echo "<a href='lista_alumnos.php?pagina=".$pag_anterior."'>P&aacute;gina anterior</a>";
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
          echo "<a href='lista_alumnos.php?pagina=" . $i . "'class=izquierda>" . $i . "</a> ";
    }
} 

?>
</td>

<td width="200" align="right">
	<?php
//echo $mes;
//echo "/".$mes_actual;
if($pagina==$total_paginas){
	echo "&nbsp;";
}else{
	echo "<a href='lista_alumnos.php?pagina=".$pag_siguiente."'>P&aacute;gina siguiente</a>";
	echo "<br>";
	echo "<br>";
}

///////////////////////////////////////////////////    COPIA AUTOMATICAMENTE SI EL MES ES DISTINTO, EN OTRA TABLA     ///////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ($mes!=$mes_actual){
	
$sentencia="insert into `$tabla16` (id,nombre,apellido,telefono,numero_alumno,horas,precio,f_semana,pagado,id_alumno,n_cuenta,n_cuenta2,n_cuenta3,n_cuenta4,fecha,debaja,mes) select * from `$tabla14`";
$copiar_datos=mysql_query($sentencia);

////////////////////////////////////////    PONE AUTOMATICAMENTE LOS REGISTRO  DE LOS USUARIOS A 0 (pagado y fecha)   ///////////////////////////////////////////////////////////////
$pagado_actualiza=0;
$mes_actualiza=date(m);
$fecha_actualiza=0;

$datos2="pagado='$pagado_actualiza',fecha='$fecha_actualiza',mes='$mes_actualiza'";


$sentencia2="UPDATE $base . `$tabla14` SET $datos2 ";

$modifica2=mysql_query($sentencia2,$conexion);

}
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