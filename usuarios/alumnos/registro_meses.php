<?php
include("../../conexion.php");
$alumnos='lista_alumnos.php';
session_start();

$mes_actual=$_POST['mes_actual'];


$id01=$_POST['id01'];
$id02=$_POST['id02'];
$id03=$_POST['id03'];
$id04=$_POST['id04'];
$id05=$_POST['id05'];
$id06=$_POST['id06'];
$id07=$_POST['id07'];
$id08=$_POST['id08'];
$id09=$_POST['id09'];
$id10=$_POST['id10'];
$id11=$_POST['id11'];
$id12=$_POST['id12'];
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
$ssql = "select * from `$tabla14` ";
$rs = mysql_query($ssql,$conexion);
$num_total_registros = mysql_num_rows($rs);
//calculo el total de páginas
$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);
if ($id01=='ENERO'){
	
	$mes_consulta=01;
	
}elseif ($id02=='FEBRERO'){
	
	$mes_consulta=02;

	
}elseif ($id03=='MARZO'){
	
	$mes_consulta=03;

	
}elseif($id04=='ABRIL'){
	$mes_consulta=04;

	
}elseif($id05=='MAYO'){
	$mes_consulta=05;

}

elseif($id06=='JUNIO'){
	$mes_consulta=06;
	echo "<br><br>";
	echo "<b>MES DE JUNIO</b>";	
}

elseif($id07=='JULIO'){
	$mes_consulta=07;

}
elseif($id08=='AGOSTO'){
	$mes_consulta=08;

}
elseif($id09=='SEPTIEMBRE'){
	$mes_consulta=09;
	
}
elseif($id10=='OCTUBRE'){
	$mes_consulta=04;

}
elseif($id11=='NOVIEMBRE'){
	$mes_consulta=11;

}
elseif($id12=='DICIEMBRE'){
	$mes_consulta=12;

}
/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////CUENTA NUMERO DE ALUMNOS PENDIENTE DE PAGO//////////////////
$ssql2="SELECT COUNT(*) FROM `$tabla16` WHERE pagado=0 AND debaja=0 AND mes=$mes_consulta";  
$consulta2=mysql_query($ssql2); 
$rcount2=mysql_result($consulta2,0);
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

if ($id01=='ENERO'){
	
	$mes_consulta=01;
	echo "<br><br>";
	echo "<div id='nombre_mes'>MES DE ENERO</div>";
	
}elseif ($id02=='FEBRERO'){
	
	$mes_consulta=02;
	echo "<br><br>";
	echo "<b>MES DE FEBRERO</b>";
	
}elseif ($id03=='MARZO'){
	
	$mes_consulta=03;
	echo "<br><br>";
	echo "<b>MES DE MARZO</b>";
	
}elseif($id04=='ABRIL'){
	$mes_consulta=04;
	echo "<br><br>";
	echo "<b>MES DE ABRIL</b>";	
	
}elseif($id05=='MAYO'){
	$mes_consulta=05;
	echo "<br><br>";
	echo "<b>MES DE MAYO</b>";	
}

elseif($id06=='JUNIO'){
	$mes_consulta=06;
	echo "<br><br>";
	echo "<b>MES DE JUNIO</b>";	
}

elseif($id07=='JULIO'){
	$mes_consulta=07;
	echo "<br><br>";
	echo "<b>MES DE JULIO</b>";	
}
elseif($id08=='AGOSTO'){
	$mes_consulta=08;
	echo "<br><br>";
	echo "<b>MES DE AGOSTO</b>";	
}
elseif($id09=='SEPTIEMBRE'){
	$mes_consulta=09;
	echo "<br><br>";
	echo "<b>MES DE SEPTIEMBRE</b>";	
}
elseif($id10=='OCTUBRE'){
	$mes_consulta=04;
	echo "<br><br>";
	echo "<b>MES DE OCTUBRE</b>";	
}
elseif($id11=='NOVIEMBRE'){
	$mes_consulta=11;
	echo "<br><br>";
	echo "<b>MES DE NOVIEMBRE</b>";	
}
elseif($id12=='DICIEMBRE'){
	$mes_consulta=12;
	echo "<br><br>";
	echo "<b>MES DE DICIEMBRE</b>";	
}
?>
<form action="pendiente_registro.php" method="POST">
<input type='hidden' name="mes_consulta" value='<?php echo $mes_consulta; ?>'>
<br><input type="submit" id="boton_nuevo" value="PENDIENTE DE PAGO(<?php echo $rcount2?>)" style="height:30px" />
<br />
</form>
<?php
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla16` WHERE debaja=0 AND mes=$mes_consulta ORDER BY apellido limit " . $inicio . "," . $TAMANO_PAGINA ;
$resultado = mysql_query($ssql);
////////////////////////////////tabla 16/////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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

if($pagina==$total_paginas){
	echo "&nbsp;";
}else{
	echo "<a href='lista_alumnos.php?pagina=".$pag_siguiente."'>P&aacute;gina siguiente</a>";
	echo "<br>";
	echo "<br>";
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