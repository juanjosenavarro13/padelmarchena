<?php
include ("../seguridad.php");
include("../../conexion.php");

function generaTarifas(){
/////////////////////////////////////////////////////////////
include("../../conexion.php");
$ssql = "select * from `$tabla15`";
$resultado = mysql_query($ssql);

echo "<select name='tarifa'>";
echo "<option value=''>Elige la tarifa</option>";

while ($row=mysql_fetch_object($resultado)){
	$id_tarifa=$row->id_tarifa;
	$precio_soc=$row->precio_soc;
	$precio_nosoc=$row->precio_nosoc;
	$descripcion=$row->descripcion;
	echo "<option value='".$id_tarifa."'>".$descripcion."</option>";
}

echo "</select>"; 
/////////////////////////////////////////////////////////////
}



if ($_GET['accion']=="borrar_horario"){
	$id_borrar= $_GET['id_horario'];
	$id_bloque=$_GET['id_bloque'];
	mysql_query("DELETE FROM $tabla3 WHERE id_horario='$id_borrar'") or die(mysql_error());
	mysql_close();
	$pagina=$_GET['pagina'];
	header ("Location: $pag?bloque=$id_bloque");
	exit;
}

if($_POST['inicio']!='' AND $_POST['fin']!=''){
$bloque=$_POST['bloque'];
$inicio=$_POST['inicio'];
$fin=$_POST['fin'];
$tarifa=$_POST['tarifa'];

//////////////////////////////				GENERA LA ULTIMA HORA       ///////////////////////////
$ssql_horario="SELECT MAX(id_horario) FROM $tabla3";
$nhorario= mysql_query($ssql_horario);	while ($registro_horario=mysql_fetch_row($nhorario)){
	       foreach($registro_horario as $clave_horario){ 
	       //echo $clave;
	 	}
	 }

$id_hora=$clave_horario+1;
/////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////				GENERA LOS PRECIOS DE LAS TARIFAS       ///////////////////////////
$ssql_tarifa="SELECT * FROM $tabla15 WHERE id_tarifa='$tarifa'";
$ntarifa= mysql_query($ssql_tarifa);$registro_tarifa=mysql_fetch_object($ntarifa);

$precio_soc=$registro_tarifa->precio_soc;
$precio_nosoc=$registro_tarifa->precio_nosoc;


$id_hora=$clave_horario+1;
/////////////////////////////////////////////////////////////////////////////////////////////////////


$campos="id_horario,inicio,fin,bloque,precio_soc,precio_nosoc";
$datos="'$id_hora','$inicio','$fin','$bloque','$precio_soc','$precio_nosoc'";

$sentencia="INSERT INTO $tabla3 ($campos) VALUES ($datos)";

$inserta=mysql_query($sentencia,$conexion);
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
$resultado_info_bloque = mysql_query($ssql_info_bloque);
$row_info_bloque=mysql_fetch_object($resultado_info_bloque);

/////////////////////////////////////////////////////////////
$nombre_bloque=$row_info_bloque->nombre;
$descripcion_bloque=$row_info_bloque->descripcion;

//echo $descripcion_bloque;
echo "<div id='horarios'>";
echo "<table border='0' id='tabla_horarios'>";

echo "<tr id='cabecera_tabla'> <td> <div id='texto_titulo'> $nombre_bloque </div></td> </tr>";
echo "<tr><td> $descripcion_bloque </td></tr>";

echo "</table><br><br>";

/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla3` WHERE bloque=$bloque ORDER BY inicio";
$resultado = mysql_query($ssql);
/////////////////////////////////////////////////////////////

echo "<table border='0' id='tabla_horarios'>";

echo "<tr id='cabecera_tabla'> <td> <div id='texto_titulo'> INICIO </div></td> <td><div id='texto_titulo'> FIN </div></td> <td><div id='texto_titulo'> Precio Socio </div></td> <td><div id='texto_titulo'> Precio no socio </div></td> <td><div id='texto_titulo'> &nbsp; </div></td> </tr>";

$i=1;
while ($row=mysql_fetch_object($resultado)){

$id_horario=$row->id_horario;
$inicio=$row->inicio;
$fin=$row->fin;
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
			echo "<td>".$precio_soc." &euro;</td>";
			echo "<td>".$precio_nosoc." &euro;</td>";
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
echo "<tr>";
echo "<td colspan='2'> Tarifa ";
generaTarifas();
echo "</td>";
echo "<tr><td colspan='2'><input type='submit' name='guardar' value='guardar' id='boton'></td></tr>";
echo "</table><br><br>";
echo "<input type='hidden' name='bloque' value='$bloque'>";
echo "</form>";
echo "</div>";

?>