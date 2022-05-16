<?php

session_start();
include("../../conexion.php");
include("../../seguridad.php");
$mes_actual=date(m);

//$pag='lista_alumnos.php';

if ($_GET['accion']=="borrar"){
	$id_borrar=$_GET['id'];
	mysql_query("DELETE FROM $tabla22 WHERE id='$id_borrar'") or die(mysql_error());
	mysql_close();
	//$pagina=$_GET['pagina'];
	header ('Location: lista_bono.php');
	exit;
}
if ($_GET['accion']=="modificar"){
	$id_modificar= $_GET['id'];
	header ("Location: ?id=$id_modificar");
	exit;
}
/////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////      PAGINACIÓN     //////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////
include("../../includes.php");

$TAMANO_PAGINA = 20;

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
$ssql = "select * from `$tabla41` ";
$rs = mysql_query($ssql,$conexion);
$num_total_registros = mysql_num_rows($rs);
//calculo el total de páginas
$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);

/////////////////////////////CUENTA NUMERO DE ALUMNOS ////////////////////////////////////
$sql="SELECT COUNT(*) FROM `$tabla41`";  
$consulta=mysql_query($sql); 
$rcount=mysql_result($consulta,0);
/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////CUENTA NUMERO DE ALUMNOS DE BAJA/////////////////////////////
$ssql="SELECT COUNT(*) FROM `$tabla41`";  
$consulta2=mysql_query($ssql); 
$rcount2=mysql_result($consulta2,0);
/////////////////////////////////////////////////////////////////////////////////////////
$suma=0;

$tabla12= mysql_query("select precio from `$tabla41` ");///// CONSULTA DEL TOTAL PRECIO DEL 

	while ($registro12 = mysql_fetch_array($tabla12)) {
		
	$suma=$suma+$registro12['precio'];
	 
		
	}
$suma2=0;
$tabla122= mysql_query("select precio from `$tabla41`");///// CONSULTA DEL TOTAL PAGADO DEL 

	while ($registro122 = mysql_fetch_array($tabla122)) {
		
	$suma2=$suma2+$registro122['precio'];
	 
		
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

<div id="cabecera_alumnos"> BONOS PADEL MARCHENA</div>

<br />
 <br />
    
</div>

<br />
 <br />
<div id='numero_alumno'><a><?php echo "<b>N&deg; BONOS: </b>".$rcount." "?></a></div>
<br />
<br />
<div id='total_precio'><a><?php echo "<b>Total Precio: </b>".$suma." &euro;"?></a></div>
<?php 
if ($suma>$suma2){ ?>
	<div id='total_precio_neg'><a><?php echo "<b>Total Pagado : </b>".$suma2." &euro;"?></a></div>
<? }else{ ?>

<div id='total_precio_pos'><a><?php echo "<b>Total Pagado: </b>".$suma2." &euro;"?></a></div>
<? }?>
<?

/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla41` ORDER BY nombre limit " . $inicio . "," . $TAMANO_PAGINA ;
$resultado = mysql_query($ssql);
/////////////////////////////////////////////////////////////
echo "<br><br><br>";
echo "<table border='0' id='tabla_gestion' width='650'>";

echo "<tr id='cabecera_tabla'> <td> <div id='texto_titulo'> Nombre </div></td>
  <td><div id='texto_titulo'> Apellido </div></td>
  <td><div id='texto_titulo'> Telefono </div></td>
  <td><div id='texto_titulo'> Fecha de pago </div></td>
  <td><div id='texto_titulo'> N&deg; Partidos </div></td>
  <td></td>";

$i=1;
	

while ($row=mysql_fetch_object($resultado)){
	
	
$id_usuario=$row->id_usuario;	
$nombre=$row->nombre;
$apellido=$row->apellido;
$telefono=$row->telefono;
$fecha=$row->fecha;
$i++;
		
	$ssql_partidos = "SELECT SUM(b1+b2+b3+b4+b5+b6+b7+b8+b9+b10) as total FROM `$tabla42` WHERE id_usuario=$id_usuario" ;
	$resultado_partidos = mysql_query($ssql_partidos);
	
	while ($row_partidos=mysql_fetch_array($resultado_partidos, MYSQL_ASSOC)){
	$partidos=$row_partidos["total"];
	
	
if($i%2==0){
	$estilo="fila_par";
}else{
	$estilo="fila_inpar";
	}

		echo "<tr id='".$estilo."'>";
			echo "<td align='center'>".$nombre."</td>";
			echo "<td align='left'>".$apellido."</td>";
			echo "<td align='left'>".$telefono."</td>";
			echo "<td align='center'>".$fecha."</td>"; 
			echo "<td align='center'>";
			if ($partidos=='5'){
				echo "<a style='color:red; cursor:point'><b>".$partidos."</b></a> "; 
				
				}else{
				
				echo "<a style='color:green; cursor:point'><b>".$partidos."</b></a>";
				
				}
			
			echo "</td>";
	
			echo "<td><a href='bono.php?accion=modificar&id=$id_usuario'><img src='../../imagenes/edit.gif' alt='editar' border='0'></a>";
			//echo "|<a href='?accion=borrar&id=$id_alumno'><img src='../../imagenes/delete.gif' name='borrar' alt='borrar' border='0'></a></div></td>";
	 echo "</tr>";
	}
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
echo "<a href='lista_bono.php?pagina=".$pag_anterior."'>P&aacute;gina anterior</a>";
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
          echo "<a href='lista_bono.php?pagina=" . $i . "'class=izquierda>" . $i . "</a> ";
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
	echo "<a href='lista_bono.php?pagina=".$pag_siguiente."'>P&aacute;gina siguiente</a>";
	echo "<br>";
	echo "<br>";
}

?>
</td>
</table>
<? ///////////////////////////////////////////////////////////////////////////////////////REGISTRO  POR MESES ?>
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