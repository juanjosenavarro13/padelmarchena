<?php
session_start();
include ("../seguridad.php");
include("../../conexion.php");
include("../includes_gestion.php");
$pag=$_SERVER['PHP_SELF'];
if ($_GET['accion']=="borrar"){
	$id_borrar= $_GET['id'];
	mysqli_query($conexion,"DELETE FROM $tabla2 WHERE id_pista='$id_borrar'") or die(mysqli_error());
	mysqli_close();
	$pagina=$_GET['pagina'];
	header ("Location: $pag");
	exit;
}
include("../../includes.php");
encabezado();
	echo "<link href='../../estilos.css' rel='stylesheet' type='text/css' />";
cabecera();
col_izda1();
enlaces_izda();
administrar();
col_izda2();
cuerpo1();

$pista=$_POST['pista'];
$bloque=$_POST['bloque'];
$tipo=$_POST['tipo'];

if($_POST['lunes']==''){
	$lunes='0';
	$nombra_dias="";
}elseif($_POST['lunes']=='on'){
	$lunes='1';	
	$nombra_dias="Lunes, ";
}

if($_POST['martes']==''){
	$martes='0';
}elseif($_POST['martes']=='on'){
	$martes='1';
	$nombra_dias.="Martes, ";	
}

if($_POST['miercoles']==''){
	$miercoles='0';
}elseif($_POST['miercoles']=='on'){
	$miercoles='1';
	$nombra_dias.="Miercoles, ";
}

if($_POST['jueves']==''){
	$jueves='0';
}elseif($_POST['jueves']=='on'){
	$jueves='1';
	$nombra_dias.="Jueves, ";
}

if($_POST['viernes']==''){
	$viernes='0';
}elseif($_POST['viernes']=='on'){
	$viernes='1';
	$nombra_dias.="Viernes, ";
}

if($_POST['sabado']==''){
	$sabado='0';
}elseif($_POST['sabado']=='on'){
	$sabado='1';
	$nombra_dias.="S&aacute;bados, ";
}

if($_POST['domingo']==''){
	$domingo='0';
}elseif($_POST['domingo']=='on'){
	$domingo='1';
	$nombra_dias.="Domingos, ";
}

$dia_inicio=$_POST['dia_desde'];
$mes_inicio=$_POST['mes_desde'];
$ano_inicio=$_POST['ano_desde'];

$dia_fin=$_POST['dia_hasta'];
$mes_fin=$_POST['mes_hasta'];
$ano_fin=$_POST['ano_hasta'];

$fecha_inicio = $ano_inicio."-".$mes_inicio."-".$dia_inicio;
$fecha_fin = $ano_fin."-".$mes_fin."-".$dia_fin;

$fecha_inicio_esp=$dia_inicio."-".$mes_inicio."-".$ano_inicio;
$fecha_fin_esp=$dia_fin."-".$mes_fin."-".$ano_fin;

$fecha_inicio_unix = strtotime( date($fecha_inicio) );
$fecha_fin_unix = strtotime( date($fecha_fin) );


//////////////////////////////			GENERA EL ULTIMO BLOQUE-PISTA       ///////////////////////////

$nrelacion= mysqli_query($conexion,"SELECT MAX(id_pista_bloque) FROM $tabla11");

	while ($registro=mysqli_fetch_row($nrelacion)){
	       foreach($registro as $clave){ 
	       //echo $clave;
	 	}
	 }

$id_relacion=$clave+1;
//////////////////////////////////////////////////////////////////////////////////////////////////////


	$campos="id_pista_bloque,id_pista,id_bloque,fecha_inicio,fecha_fin,lunes,martes,miercoles,jueves,viernes,sabado,domingo,tipo,activo";
	$datos="'$id_relacion','$pista','$bloque','$fecha_inicio_unix','$fecha_fin_unix','$lunes','$martes','$miercoles','$jueves','$viernes','$sabado','$domingo','$tipo','1'";
	
	$sentencia="INSERT INTO $tabla11 ($campos) VALUES ($datos)";
	//echo $sentencia;
	if($inserta=mysqli_query($conexion,$sentencia)){

	echo "
	<fieldset id=alta_clientes>
		<legend>RELACIONES PISTAS-BLOQUES</legend>
		La pista ";
	nombre_pista($pista);
	echo " estar&aacute; ocupada todos los ".$nombra_dias." a partir del d&iacute;a ".$fecha_inicio_esp." hasta el d&iacute;a ". $fecha_fin_esp." con el";
?>	
<a target="_blank" onClick="window.open(this.href, this.target, 'width=300,height=600'); return false;" href="informacion_bloques.php?bloque=<?php echo $bloque; ?>"><?php echo "bloque ".$bloque; ?></a>
<?php	
	echo "
	 de forma ";
	 if($tipo==1){
	 	echo "temporal";
	 }elseif($tipo==2){
	 	echo "permanente.";
	 }
	echo "</fieldset>
	";
	}

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