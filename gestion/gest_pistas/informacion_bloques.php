<?php
include ("../seguridad.php");
include("../../conexion.php");
//include ("../seguridad.php");
if ($_GET['accion']=="borrar_horario"){
	$id_borrar= $_GET['id_horario'];
	$id_bloque=$_GET['id_bloque'];
	mysqli_query($conexion,"DELETE FROM $tabla3 WHERE id_horario='$id_borrar'") or die(mysqli_error());
	mysqli_close();
	$pagina=$_GET['pagina'];
	header ("Location: $pag?bloque=$id_bloque");
	exit;
}
if($_POST['inicio']!='' AND $_POST['fin']!=''){
$bloque=$_POST['bloque'];
$inicio=$_POST['inicio'];
$fin=$_POST['fin'];
//////////////////////////////				GENERA LA ULTIMA HORA       ///////////////////////////
$ssql_horario="SELECT MAX(id_horario) FROM $tabla3";
$nhorario= mysqli_query($conexion,$ssql_horario);	while ($registro_horario=mysqli_fetch_row($nhorario)){
	       foreach($registro_horario as $clave_horario){ 
	       //echo $clave;
	 	}
	 }

$id_hora=$clave_horario+1;

/////////////////////////////////////////////////////////////////////////////////////////////////////

$campos="id_horario,inicio,fin,bloque";
$datos="'$id_hora','$inicio','$fin','$bloque'";

$sentencia="INSERT INTO $tabla3 ($campos) VALUES ($datos)";

$inserta=mysqli_query($conexion,$sentencia);
//	header ("Location: $pag?bloque=$bloque");
}

include("../../includes.php");
include("../includes_gestion.php");
//include("enlaces.php");
 
	echo "<link href='../../estilos.css' rel='stylesheet' type='text/css' />";

$inicio=$_POST['inicio'];
$fin=$_POST['fin'];



$pag=$_SERVER['PHP_SELF'];

if($_POST['bloque']!=''){
	$bloque=$_POST['bloque'];
}elseif($_GET['bloque']!=''){
	$bloque=$_GET['bloque'];
}


/////////////////////////////////////////////////////////////
$ssql_info_bloque = "select * from `$tabla4` WHERE id_bloque=$bloque";
$resultado_info_bloque = mysqli_query($ssql_info_bloque);
$row_info_bloque=mysqli_fetch_object($resultado_info_bloque);

/////////////////////////////////////////////////////////////
$nombre_bloque=$row_info_bloque->nombre;
$descripcion_bloque=$row_info_bloque->descripcion;

//echo $descripcion_bloque;

echo "<table border='0' id='tabla_horarios'>";

echo "<tr id='cabecera_tabla'> <td> <div id='texto_titulo'> $nombre_bloque </div></td> </tr>";
echo "<tr><td> $descripcion_bloque </td></tr>";

echo "</table><br><br>";

/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla3` WHERE bloque=$bloque ORDER BY inicio";
$resultado = mysqli_query($conexion,$ssql);
/////////////////////////////////////////////////////////////

echo "<table border='0' id='tabla_horarios'>";

echo "<tr id='cabecera_tabla'> <td> <div id='texto_titulo'> INICIO </div></td> <td><div id='texto_titulo'> FIN </div></td> <td><div id='texto_titulo'> &nbsp; </div></td> </tr>";

$i=1;
while ($row=mysqli_fetch_object($resultado)){

$id_horario=$row->id_horario;
$inicio=$row->inicio;
$fin=$row->fin;

$frag_inicio=explode(":",$inicio);
$hora_inicio=$frag_inicio[0].":".$frag_inicio[1];

$frag_fin=explode(":",$fin);
$hora_fin=$frag_fin[0].":".$frag_fin[1];



$i++;
if($i%2==0){
	$estilo="fila_par";
}else{
	$estilo="fila_inpar";
	}

		echo "<tr id='".$estilo."'>";

			echo "<td>".$hora_inicio."</td>";
			echo "<td>".$hora_fin."</td>";
			echo "<td><a href='?accion=borrar_horario&id_horario=$id_horario&id_bloque=$bloque'><img src='../../imagenes/delete.gif' name='borrar' alt='borrar' border='0'></a></div></td>";
	 echo "</tr>";
	}
	echo "</table>";

echo "<form action='informacion_bloques.php' method='POST'>";
echo "<br><br><table border='0' id='tabla_horarios'>";
echo "<tr id='cabecera_tabla'> <td colspan='2'> <div id='texto_titulo'> A&Ntilde;ADIR OTRA HORA </div></td> </tr>";
echo "<tr>
			<td> Inicio:<br><input type='text' name='inicio' size='15'> </td>
			<td> Fin:<br><input type='text' name='fin' size='15'> </td>
		</tr>";
echo "<tr><td colspan='2'><input type='submit' name='guardar' value='guardar' id='boton'></td></tr>";
echo "</table><br><br>";
echo "<input type='hidden' name='bloque' value='$bloque'>";
echo "</form>";


?>