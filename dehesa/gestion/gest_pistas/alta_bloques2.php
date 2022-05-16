<?php
session_start();
include ("../seguridad.php");
include("../../conexion.php"); //Nos conectamos a la base de datos 
include("../../includes.php");

encabezado();
echo "<link href='../../estilos.css' rel='stylesheet' type='text/css' />";
cabecera();
col_izda1();
enlaces_izda();
administrar();
col_izda2();
cuerpo1();

function insertaHoras($inicio,$fin,$bloque){

include('../../conexion.php');

//////////////////////////////				GENERA LA ULTIMA HORA       ///////////////////////////
$ssql_horario="SELECT MAX(id_horario) FROM $tabla3";
$nhorario= mysql_query($ssql_horario);
	while ($registro_horario=mysql_fetch_row($nhorario)){
	       foreach($registro_horario as $clave_horario){ 
	       //echo $clave;
	 	}
	 }

$id_hora=$clave_horario+1;

/////////////////////////////////////////////////////////////////////////////////////////////////////

$campos="id_horario,inicio,fin,bloque";
$datos="'$id_hora','$inicio','$fin','$bloque'";

$sentencia="INSERT INTO $tabla3 ($campos) VALUES ($datos)";
//echo $sentencia."<br>";
$inserta=mysql_query($sentencia,$conexion);

}

//////////////////////////////				GENERA EL ULTIMO BLOQUE       ///////////////////////////

$nbloque= mysql_query("SELECT MAX(id_bloque) FROM $tabla4");
	while ($registro=mysql_fetch_row($nbloque)){
	       foreach($registro as $clave){ 
	       //echo $clave;
	 	}
	 }

$num_bloque=$clave+1;

/////////////////////////////////////////////////////////////////////////////////////////////////////

$nombre=strtoupper($_POST['nombre']);
$descripcion=$_POST['descripcion'];
$desde1=$_POST['desde1'];
$hasta1=$_POST['hasta1'];
$desde2=$_POST['desde2'];
$hasta2=$_POST['hasta2'];
$desde3=$_POST['desde3'];
$hasta3=$_POST['hasta3'];

$desde4=$_POST['desde4'];
$hasta4=$_POST['hasta4'];
$desde5=$_POST['desde5'];
$hasta5=$_POST['hasta5'];
$desde6=$_POST['desde6'];
$hasta6=$_POST['hasta6'];

$desde7=$_POST['desde7'];
$hasta7=$_POST['hasta7'];
$desde8=$_POST['desde8'];
$hasta8=$_POST['hasta8'];
$desde9=$_POST['desde9'];
$hasta9=$_POST['hasta9'];

$cuenta_total=0;

if($desde9!='' AND $hasta9!=''){
	$cuenta_total=9;
}elseif($desde8!='' AND $hasta8!=''){
	$cuenta_total=8;
}elseif($desde7!='' AND $hasta7!=''){
	$cuenta_total=7;
}elseif($desde6!='' AND $hasta6!=''){
	$cuenta_total=6;
}elseif($desde5!='' AND $hasta5!=''){
	$cuenta_total=5;
}elseif($desde4!='' AND $hasta4!=''){
	$cuenta_total=4;
}elseif($desde3!='' AND $hasta3!=''){
	$cuenta_total=3;
}elseif($desde2!='' AND $hasta2!=''){
	$cuenta_total=2;
}elseif($desde1!='' AND $hasta1!=''){
	$cuenta_total=1;
}


if($desde9!='' AND $hasta9!=''){
	insertaHoras($desde9,$hasta9,$num_bloque);
}

if($desde8!='' AND $hasta8!=''){
	insertaHoras($desde8,$hasta8,$num_bloque);
}

if($desde7!='' AND $hasta7!=''){
	insertaHoras($desde7,$hasta7,$num_bloque);
}

if($desde6!='' AND $hasta6!=''){
	insertaHoras($desde6,$hasta6,$num_bloque);
}

if($desde5!='' AND $hasta5!=''){
	insertaHoras($desde5,$hasta5,$num_bloque);
}

if($desde4!='' AND $hasta4!=''){
	insertaHoras($desde4,$hasta4,$num_bloque);
}

if($desde3!='' AND $hasta3!=''){
	insertaHoras($desde3,$hasta3,$num_bloque);
}

if($desde2!='' AND $hasta2!=''){
	insertaHoras($desde2,$hasta2,$num_bloque);
}

if($desde1!='' AND $hasta1!=''){
	insertaHoras($desde1,$hasta1,$num_bloque);
}


?>


<fieldset id="alta_clientes">
	<legend>DATOS DE LA SOLICITUD DE ALTA</legend>
<?php
	echo "<div id='datos_cliente'>
			ID:<b> $num_bloque </b><br>
			Nombre:<b> $nombre </b><br>
			Descripcion:<b> $descripcion </b><br>

			</div>";


$campos="id_bloque,nombre,descripcion";
$datos="'$num_bloque','$nombre','$descripcion'";

$sentencia="INSERT INTO $tabla4 ($campos) VALUES ($datos)";
//echo $sentencia;
$inserta=mysql_query($sentencia,$conexion);


if($inserta==1){
	echo "<br><div id='correcto'><b>Bloque horario guardado con &eacute;xito.</b><br><br></div>";
}else{
	echo "<br><div id='error'>No ha sido registrar su solicitud de alta. Por favor, p&oacute;ngase en contacto con el aministrador del portal.</div>";
	}



?>

</fieldset>

<?php
cuerpo2();
col_derecha1();
eventos1();
?>
texto
<?php
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