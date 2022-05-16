<?php

session_start();
include("../../conexion.php");
include("../../seguridad.php");
$mes_actual=date(m);

//$pag='lista_alumnos.php';
if ($_GET['accion']=="borrar"){
	
	
	
	//echo "<script type='text/javascript'>if(confirm('Deseas continuar?');){}else{ alert('Operacion Cancelada');}</script>";	
	$id_borrar=$_GET['id'];
	mysqli_query($conexion, "DELETE FROM `$tabla31` WHERE `id_usuario`='$id_borrar'") or die(mysqli_error());
	mysqli_close();
	$pagina=$_GET['pagina'];
	header ('Location: lista_bono.php?pagina=1');
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
$ssql = "select * from `$tabla31` ";
$rs = mysqli_query($conexion, $ssql);
$num_total_registros = mysqli_num_rows($rs);
//calculo el total de páginas
$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);

/////////////////////////////CUENTA NUMERO DE ALUMNOS ////////////////////////////////////
$sql="SELECT COUNT(*) FROM `$tabla31`";  
$consulta=mysqli_query($conexion, $sql); 
//$rcount=mysqli_result($consulta,0);
$rcount= mysqli_fetch_assoc($consulta);

/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////CUENTA NUMERO DE ALUMNOS DE BAJA/////////////////////////////
$ssql="SELECT COUNT(*) FROM `$tabla31`";  
$consulta2=mysqli_query($conexion, $ssql); 
//$rcount2=mysqli_result($consulta2,0);
$rcount2 = mysqli_fetch_assoc($consulta2);
/////////////////////////////////////////////////////////////////////////////////////////
$suma=0;

$tabla12= mysqli_query($conexion, "select precio from `$tabla31` ");///// CONSULTA DEL TOTAL PRECIO DEL 

	while ($registro12 = mysqli_fetch_array($tabla12)) {
		
	$suma=$suma+$registro12['precio'];
	 
		
	}
$suma2=0;
$tabla122= mysqli_query($conexion, "select precio from `$tabla31`");///// CONSULTA DEL TOTAL PAGADO DEL 

	while ($registro122 = mysqli_fetch_array($tabla122)) {
		
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
<div id='numero_alumno'><a><?php echo "<b>N&deg; BONOS: </b>".$rcount['COUNT(*)']." "?></a></div>
<br />
<br />
<div id='total_precio'><a><?php echo "<b>Total Precio: </b>".$suma." &euro;"?></a></div>
<?php 
if ($suma>$suma2){ ?>
	<div id='total_precio_neg'><a><?php echo "<b>Total Pagado : </b>".$suma2." &euro;"?></a></div>
<? }else{ ?>

<div id='total_precio_pos'><a><?php echo "<b>Total Pagado: </b>".$suma2." &euro;"?></a></div>
<? }?>

<div id='boton_nuevo'><a href='alta_bono.php'>NUEVO BONO</a></div>

<?

/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla31` ORDER BY nombre limit " . $inicio . "," . $TAMANO_PAGINA ;
$resultado = mysqli_query($conexion, $ssql);
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
	

while ($row=mysqli_fetch_assoc($resultado)){

	
$id_usuario=$row['id_usuario'];	
$nombre=$row['nombre'];
$apellido=$row['apellido'];
$telefono=$row['telefono'];
$fecha=$row['fecha'];
$i++;
		
	$ssql_partidos = "SELECT SUM(b1+b2+b3+b4+b5+b6+b7+b8+b9+b10) as total FROM `$tabla32` WHERE id_usuario=$id_usuario" ;
	$resultado_partidos = mysqli_query($conexion, $ssql_partidos);
	while ($row_partidos=mysqli_fetch_assoc($resultado_partidos)){
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
			
			echo  "&nbsp;&nbsp;|&nbsp;&nbsp;<a href='datosBono.php?id=$id_usuario'><img src='../../imagenes/add.gif' name='borrar' alt='borrar' border='0'></a></div>";
			
			echo  "&nbsp;&nbsp;|&nbsp;&nbsp;<a href='lista_bono.php?accion=borrar&id=$id_usuario'><img src='../../imagenes/delete.gif' name='borrar' alt='borrar' border='0'></a></div></td>";
	
	 echo "</tr>";
	}
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