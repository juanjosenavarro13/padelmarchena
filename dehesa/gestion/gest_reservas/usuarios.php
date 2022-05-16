<html>

<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1"/><title>LISTA DE USUARIOS - LA DEHESA CLUB DEPORTIVO</title>
<link href="../../estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id='lista_usuarios'>
<?php
session_start();
include ("../seguridad.php");
include("../../conexion.php");

echo "
<br>
<form action='#' method='GET'>
Bucar por 
<select name='campo'>
	<option value='0'>Nombre</option>
	<option value='1'>Apellidos</option>
</select>
: 
<input type='text' name='dato'>
<input type='submit' value='Buscar'>
</form>
";

$campo=$_GET['campo'];
$dato=$_GET['dato'];

if($dato==''){
	$dato='%';	
}

if($campo==''){
	$busqueda='Nombre';
}elseif($campo=='0'){
	$busqueda='Nombre';
}elseif($campo=='1'){
	$busqueda='Apellidos';
}

	$f = explode("/", $_SERVER['PHP_SELF']);
	$enlace_seleccionado=$f[count($f)-1];
	$pag=$enlace_seleccionado."?campo=".$campo."&dato=".$dato;


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
$ssql = "select * from `$tabla11` WHERE historico='0' AND $busqueda LIKE '%".$dato."%'";
$rs = mysql_query($ssql,$conexion);
$num_total_registros = mysql_num_rows($rs);
//calculo el total de páginas
$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);

/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla11` WHERE historico='0' AND $busqueda LIKE '%".$dato."%' limit " . $inicio . "," . $TAMANO_PAGINA;

$resultado = mysql_query($ssql);
/////////////////////////////////////////////////////////////

echo "<table border='0' id='tabla_gestion' width='650'>";

echo "<tr id='cabecera_tabla'> <td> <div id='texto_titulo'> ID </div></td> <td><div id='texto_titulo'> Nombre </div></td> <td><div id='texto_titulo'> Apellidos </div></td>  <td><div id='texto_titulo'> Tel&eacute;fono </div></td> <td><div id='texto_titulo'> Email </div></td> </tr>";

$i=1;
while ($row=mysql_fetch_object($resultado)){

$id_usuario=$row->Id;
$mail=$row->Email;
$nombre=$row->Nombre;
$apellido1=$row->Apellidos;
$telefono1=$row->Telefono;

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
			echo "<td>".$movil."</td>";
			echo "<td>".$mail."</td>";
	 echo "</tr>";
	}
	echo "</table>";

//cerramos el conjunto de resultado y la conexión con la base de datos
mysql_free_result($rs);

//muestro los distintos índices de las páginas, si es que hay varias páginas
$pag_anterior=$pagina-1;
$pag_siguiente=$pagina+1;
?>
<br><br><br><br>
<table border="0" width="600">
<tr>
	<td width="200" align="left">

<?php
if($pagina<=1){
	echo "&nbsp;";
}else{
echo "<a href='".$pag."&pagina=".$pag_anterior."'>P&aacute;gina anterior</a>";
}
echo "</td>";

echo "<td align='center'>";

if ($total_paginas >= 1){
    for ($i=1;$i<=$total_paginas;$i++){
       if ($pagina == $i)
          //si muestro el índice de la página actual, no coloco enlace
          echo $pagina . " ";
       else
          //si el índice no corresponde con la página mostrada actualmente, coloco el enlace para ir a esa página
          echo "<a href='".$pag."&pagina=" . $i . "'class=izquierda>" . $i . "</a> ";
    }
} 

?>
</td>

<td width="200" align="right">
	<?php

if($pagina>=$total_paginas){
	echo "&nbsp;";
}else{
	echo "<a href='".$pag."&pagina=".$pag_siguiente."'>P&aacute;gina siguiente</a>";
}

	?>
</td>
</table>
<?php
///////////////////////////////////////		AKI TERMINA LA WEB 		/////////////////////////////
?>

</div>
</body>
</html>
