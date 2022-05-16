<?php
/////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////	DATOS DE LOS JUGADORES ME APUNTO		///////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////

function datos_jugadores($id_meapunto){

	include("../../conexion.php");
	$ssql_datos_clientes = "SELECT id_cliente FROM `$tabla9` WHERE id_meapunto=$id_meapunto";
	$resultado_datos_clientes = mysql_query($ssql_datos_clientes);
	while ($row_datos_clientes=mysql_fetch_object($resultado_datos_clientes)){
//	echo $row_datos_clientes->id_cliente;	
	}

	////////////   CUENTA APUNTADOS   	/////////////////////////
	$ssql_apuntados = "SELECT id_cliente_meapunto FROM `$tabla9` WHERE id_meapunto=$id_meapunto";
	$resultado_apuntados = mysql_query($ssql_apuntados);
	$row_apuntados=mysql_num_rows($resultado_apuntados);
//	echo 'total: '.$row_apuntados;
	if($row_apuntados==0){
		echo "
			<img src='../../imagenes/libre.png' alt='libre'> <img src='../../imagenes/libre.png' alt='libre'> <img src='../../imagenes/libre.png' alt='libre'> <img src='../../imagenes/libre.png' alt='libre'>
		";
	}elseif($row_apuntados==1){
		echo "
			<img src='../../imagenes/jugador.png' alt='jugador'> <img src='../../imagenes/libre.png' alt='libre'> <img src='../../imagenes/libre.png' alt='libre'> <img src='../../imagenes/libre.png' alt='libre'>
		";	
	}elseif($row_apuntados==2){
		echo "
			<img src='../../imagenes/jugador.png' alt='jugador'> <img src='../../imagenes/jugador.png' alt='jugador'> <img src='../../imagenes/libre.png' alt='libre'> <img src='../../imagenes/libre.png' alt='libre'>";
	}elseif($row_apuntados==3){
		echo "
			<img src='../../imagenes/jugador.png' alt='jugador'> <img src='../../imagenes/jugador.png' alt='jugador'> <img src='../../imagenes/jugador.png' alt='jugador'> <img src='../../imagenes/libre.png' alt='libre'>";
	}elseif($row_apuntados==4){
		echo "
			<img src='../../imagenes/jugador.png' alt='jugador'> <img src='../../imagenes/jugador.png' alt='jugador'> <img src='../../imagenes/jugador.png' alt='jugador'> <img src='../../imagenes/jugador.png' alt='jugador'>";
	}
	/////////////////////////////////////////////////////////////

}
/////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////	TIEMPO PARA EL PROXIMO PARTIDO		///////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////
function rel_time($from, $to = null)
 {
  $to = (($to === null) ? (time()) : ($to));
  $to = ((is_int($to)) ? ($to) : (strtotime($to)));
  $from = ((is_int($from)) ? ($from) : (strtotime($from)));

  $units = array
  (
   "a&ntilde;o"   => 29030400, // seconds in a year   (12 months)
   "mes"  => 2419200,  // seconds in a month  (4 weeks)
   "semana"   => 604800,   // seconds in a week   (7 days)
   "dia"    => 86400,    // seconds in a day    (24 hours)
   "hora"   => 3600,     // seconds in an hour  (60 minutes)
   "minuto" => 60,       // seconds in a minute (60 seconds)
//   "segundo" => 1         // 1 second
  );

  $diff = abs($from - $to);
//  $suffix = (($from > $to) ? ("from now") : ("ago"));

  foreach($units as $unit => $mult)
   if($diff >= $mult)
   {
    $and = (($mult != 60) ? ("") : (" "));
    $output .= " ".$and.intval($diff / $mult)." ".$unit.((intval($diff / $mult) == 1) ? ("") : ("s"));
    $diff -= intval($diff / $mult) * $mult;
   }
  $output .= " ".$suffix;
  $output = substr($output, strlen(" "));
  
  return $output;
}


/////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////	APUNTAR JUGADORES A UN PARTIDO		///////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////

function apuntar(){
	include("../../conexion.php");
	$id_apuntar= $_GET['id'];
	$pag=$_SERVER['PHP_SELF'];	
	$cliente=$_SESSION['id'];

function mensaje(){
?>
<script language='JavaScript'>
alert("No puede estar mas de una vez en el mismo partido");
window.location="../meapunto/gestion_meapunto.php";
</script>
<?php 
}

function mensaje_nivel(){
?>
<script language='JavaScript'>
alert("Lo sentimos, no tiene nivel suficiente para jugar en este ME APUNTO!!");
window.location="../meapunto/gestion_meapunto.php";
</script>
<?php 
}

function mensaje_completo(){
?>
<script language='JavaScript'>
alert("El partido ya esta completo");
</script>
<?php 
}

//////////////////////////////				GENERA EL ULTIMO ME APUNTO       ///////////////////////////
$napunto= mysql_query("SELECT MAX(id_cliente_meapunto) FROM $tabla9");
	while ($registro=mysql_fetch_row($napunto)){
	       foreach($registro as $clave){ 
	       //echo $clave;
	 	}
	 }

$id_cliente_meapunto=$clave+1;
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////		GENERA EL NIVEL DEL JUGADOR		///////////////////////////////
$ssql_nivel="SELECT Nivel FROM $tabla11 WHERE Id=$cliente";

$resultado_nivel=mysql_query($ssql_nivel);
$row_nivel=mysql_fetch_object($resultado_nivel);
$nivel_usuario=$row_nivel->Nivel;

/////////////////////////////		GENERA SI EL JUGADOR YA ESTA		///////////////////////////////
$ssql_comprueba="SELECT id_cliente FROM $tabla9 WHERE id_cliente=$cliente AND id_meapunto=$id_apuntar";
$resultado_comprueba=mysql_query($ssql_comprueba);
$row_comprueba=mysql_num_rows($resultado_comprueba);

/////////////////////////////		GENERA SI EL PARTIDO ESTA COMPLETO		///////////////////////////////
$ssql_apuntados = "SELECT id_cliente_meapunto FROM `$tabla9` WHERE id_meapunto=$id_apuntar";
$resultado_apuntados = mysql_query($ssql_apuntados);
$row_apuntados=mysql_num_rows($resultado_apuntados);

/////////////////////////////		GENERA NIVELES DEL MEAPUNTO		///////////////////////////////
$ssql_niveles = "SELECT nivel_desde, nivel_hasta FROM `$tabla8` WHERE id_meapunto=$id_apuntar";
$resultado_niveles = mysql_query($ssql_niveles);
$row_niveles=mysql_fetch_object($resultado_niveles);

$nivel_meapunto_desde=$row_niveles->nivel_desde;
$nivel_meapunto_hasta=$row_niveles->nivel_hasta;

	if($row_comprueba>=1){
		mensaje();
	}elseif($row_apuntados>=4){
		mensaje_completo();
	}elseif($nivel_usuario!=$nivel_meapunto_desde){
		mensaje_nivel();
	}else{
////////////////////////////////////////////////////////////////////////////////////////////////

		$campos="id_cliente_meapunto,id_cliente,id_meapunto";
		$datos="'$id_cliente_meapunto','$cliente','$id_apuntar'";
		$sentencia="INSERT INTO $tabla9 ($campos) VALUES ($datos)";
		$inserta=mysql_query($sentencia,$conexion);

		if($row_apuntados==3){
			$campos="completo='1'";
			$sentencia_modifica="UPDATE $base . `$tabla8` SET $campos WHERE $tabla8 . id_meapunto=$id_apuntar ";
			$modifica=mysql_query($sentencia_modifica,$conexion);
			//echo $sentencia;

			//////////////////////////////				GENERA LA ULTIMA RESERVA       ///////////////////////////

			$nreserva= mysql_query("SELECT MAX(id_reserva) FROM $tabla5");

				while ($registro=mysql_fetch_row($nreserva)){
	      		foreach($registro as $clave){ 
	       		//echo $clave;
	 				}
	 			}

			$id_reserva=$clave+1;

			//////////////////////////////////////////////////////////////////////////////////////////////////////
			//////////////////////////////////////////////////////////////////////////////////////////////////////


//////////////////////////////		GENERA EL ULTIMO JUGADOR-RESERVA      ///////////////////////////
$njugador_reserva= mysql_query("SELECT MAX(id_jugador_reserva) FROM $tabla10");
	while ($registrojr=mysql_fetch_row($njugador_reserva)){
	       foreach($registrojr as $clavejr){ 
	       //echo $clave;
	 	}
	 }

$hoy=date('Y-m-d');
$hoy_esp=date('d-m-Y');
////////////////////////////////////////////////////////////////////////////////////////////////

$ssql_datos_jugadores="SELECT * FROM $tabla9 WHERE id_meapunto='$id_apuntar'";
$resultado_datos_apuntados = mysql_query($ssql_datos_jugadores);
$i=1;

$fecha=date("Y-m-d H:i:s");

////////////	DATOS DEL ME APUNTO	/////////////////////////////
$ssql = "select * from `$tabla8` WHERE id_meapunto=$id_apuntar";
$resultado = mysql_query($ssql);
$row = mysql_fetch_object($resultado);
$pista=$row->pista;
$horario=$row->horario;
$dia=$row->dia;
$fecha_seg=$row->hora_inicio;
////////////////////////////////////////////////////////////
///////////   DATOS DEL HORARIO   	/////////////////////////
$ssql_horario = "select inicio,precio_soc,precio_nosoc FROM `$tabla3` WHERE id_horario=$horario";
$resultado_horario = mysql_query($ssql_horario);
$row_horario=mysql_fetch_object($resultado_horario);
$precio1=$row_horario->precio_soc;
$hora_inicio=$row_horario->inicio;
///////////////////////////////////////////////////////////////
////////////   DATOS DE LA PISTA   	/////////////////////////
$ssql_pista = "select nombre,Tipopago FROM `$tabla2` WHERE id_pista=$pista";
$resultado_pista = mysql_query($ssql_pista);
$row_pista=mysql_fetch_object($resultado_pista);
$nombre_pista=$row_pista->nombre;
$tipo_pago=$row_pista->Tipopago;

while ($row_datos_apuntados = mysql_fetch_object($resultado_datos_apuntados)){

$i++;
$clavejr=$id_jugador_reserva+$i;
$id_cliente=$row_datos_apuntados->id_cliente;

//////////////////////////////////////////////////////////////
////////////////////  DATOS CLIENTE  ////////////////////////
$ssql_usuario="SELECT * FROM `$tabla11` WHERE Id=$id_cliente";
//echo "<br>".$ssql_usuario."<br>";
$resultado_usuario=mysql_query($ssql_usuario);
/////////////////////////////////////////////////////////////
$row_usuario= mysql_fetch_object($resultado_usuario);
$nombre_usuario=$row_usuario->Nombre;
$apellido=$row_usuario->Apellidos;
$pago_cliente1=$row_usuario->IdPago;
$nombre_jugador=$nombre_usuario." ".$apellido;
//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////

	$campos="id_jugador_reserva,id_jugador,id_reserva,nombre_jugador,precio,socio,fecha,tipo_partido";
	$datos="'$clavejr','$id_cliente','$id_reserva','$nombre_jugador','1','1','$hoy','1'";
	$sentencia="INSERT INTO $tabla10 ($campos) VALUES ($datos)";
//	echo "<br>".$sentencia."<br>";
	$inserta=mysql_query($sentencia,$conexion);

	$base1=$precio1/1.18;
	$iva1=$precio1-$base1;
	$concepto1="Reserva de la pista $nombre_pista el dia $hoy_esp a las $hora_inicio mediante ME APUNTO!!";
	
	$campos_temporal1="IdPuesto,IdSocio,Vendedor,FechaEmisio,Concepto,Precio,Cantidad,Total,Formapago,Base,Iva,IvaVenta,IdSocioPago,IdTipo";
	$datos_temporal1="'1','$id_cliente','1','$fecha','$concepto1','$precio1','1','$precio1','1','$base1','$iva1','18','$pago_cliente1','$tipo_pago'";
	$sentencia_temporal1="INSERT INTO $tabla12 ($campos_temporal1) VALUES ($datos_temporal1)";
//	echo "<br>".$sentencia_temporal1."<br>";
	$inserta_temporal1=mysql_query($sentencia_temporal1,$conexion);

}

	$campos_reserva="id_reserva,usuario,pista,horario,dia,hora_inicio";
	$datos_reserva="'$id_reserva','0','$pista','$horario','$dia','$fecha_seg'";

	$sentencia_reserva="INSERT INTO $tabla5 ($campos_reserva) VALUES ($datos_reserva)";
	$inserta_reserva=mysql_query($sentencia_reserva,$conexion);


		}
		mysql_close();
		header ("Location: ../meapunto/info_meapunto.php?id_meapunto=$id_apuntar");
		exit;
	}

}

/////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////

function datos_horario($horario){
	include("../../conexion.php");
	////////////   DATOS DEL HORARIO   	/////////////////////////
	$ssql_horario = "select inicio,fin FROM `$tabla3` WHERE id_horario=$horario";
	$resultado_horario = mysql_query($ssql_horario);
	$row_horario=mysql_fetch_object($resultado_horario);
	$dia_meapunto=$row_horario->dia;
	$inicio=substr($row_horario->inicio,0,5);
	$fin=substr($row_horario->fin,0,5);
	echo "<span class='hora'>".$inicio."</span>";
	/////////////////////////////////////////////////////////////
}

function datos_pista($pista){
	include("../../conexion.php");
	////////////   DATOS DE LA PISTA   	/////////////////////////
	$ssql_pista = "select nombre FROM `$tabla2` WHERE id_pista=$pista";
	$resultado_pista = mysql_query($ssql_pista);
	$row_pista=mysql_fetch_object($resultado_pista);
	$nombre_pista=$row_pista->nombre;
	echo "<span class='pista'>".$nombre_pista."</span>";
	/////////////////////////////////////////////////////////////
}

/////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////	TABLA DE APUNTADOS EN UN PARTIDO		///////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////
function tabla_apuntados($meapunto){
	include("../../conexion.php");
/////////////////////////////////////////////////////////////
$ssql_enlace = "select * from `$tabla9` WHERE id_meapunto=$meapunto";
$resultado_enlace = mysql_query($ssql_enlace);
$row_enlace = mysql_fetch_object($resultado_enlace);
/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla8` WHERE id_meapunto=$meapunto";
$resultado = mysql_query($ssql);
$row = mysql_fetch_object($resultado);
$pista=$row->pista;
$horario=$row->horario;
////////////////////////////////////////////////////////////
////////////   CUENTA APUNTADOS   	/////////////////////////
	$ssql_cuenta_apuntados = "SELECT id_cliente_meapunto FROM `$tabla9` WHERE id_meapunto=$meapunto";
	$resultado_cuenta_apuntados = mysql_query($ssql_cuenta_apuntados);
	$row_cuenta_apuntados=mysql_num_rows($resultado_cuenta_apuntados);
	$napuntados=$row_cuenta_apuntados;

echo "<div id='horario_pista'>";
datos_pista($pista);
datos_horario($horario);
echo "</div>";

if($napuntados>=1){
/////////////////////////////////////////////////////////////
echo "<table border='2' id='tabla_reservas'>";
echo "<tr id='titulo'>
			<td>Jugador</td>
			<td colspan='2'>Nombre</td>
			<td>Nivel</td>
		</tr>";

/////////////////////////////////////////////////////////////
$ssql_enlace = "select * from `$tabla9` WHERE id_meapunto=$meapunto";
$resultado_enlace = mysql_query($ssql_enlace);
while ($row_enlace = mysql_fetch_object($resultado_enlace)){
/////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////
$jugador=$row_enlace->id_cliente;
$id_enlace=$row_enlace->id_cliente_meapunto;
$ssql_jugador = "select * from `$tabla11` WHERE Id=$jugador";
$resultado_jugador = mysql_query($ssql_jugador);
$row_jugador=mysql_fetch_object($resultado_jugador);
$id_jugador=$row_jugador->Id;
$nivel=$row_jugador->Nivel;
$nombre_jugador=$row_jugador->Nombre." ".$row_jugador->Apellidos;
/////////////////////////////////////////////////////////////

$segundos_hoy=time();
//echo $segundos_hoy;

//echo $segundos_reserva." ";
$i++;
if($i%2==0){
	$estilo="fila_par";
}else{
	$estilo="fila_inpar";
	}
	
	echo "<tr id=$estilo>
				<td align='center' width='50'>";

	echo $i;

	echo "</td>
				<td colspan='2'>$nombre_jugador";
	if($id_jugador==$_SESSION['id'] AND $napuntados<=3){	
	echo "<a href='?accion=anular&id=$id_enlace'> <img src='../../imagenes/delete.gif' border='0'> </a>";
	}
	AbreviaturaNivel($nivel);
	echo "</tr>";

}
echo "</table>";

		echo "<br><br><a href='?accion=apuntar&id=$meapunto'><img src='../../imagenes/ok-txt.png' border='0'></a>";
		
}else{
	echo "<div id='se_el_primero'>
			<span class='texto'>Aun no hay ning&uacute;n jugador.<br>Se el primero en apuntarte.</span><br><br>
			<a href='?accion=apuntar&id=$meapunto'><img src='../../imagenes/ok-txt.png' border='0'></a>
			</div>";
}

}

/////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////		NOMBRE DEL JUGADOR			/////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////

function nombre_jugador($id_usuario){
include ('../../conexion.php');
	////////////////////  DATOS CLIENTE  ////////////////////////
	$ssql_usuario = "SELECT * FROM `$tabla11` WHERE Id=$id_usuario";
	$resultado_usuario = mysql_query($ssql_usuario);
	/////////////////////////////////////////////////////////////
	
	$row_usuario = mysql_fetch_object($resultado_usuario);
	$nombre_usuario=$row_usuario->Nombre;
	$apellido1=$row_usuario->Apellidos;
	$nombre_jugador=$nombre_usuario." ".$apellido1;
	
	echo $nombre_jugador;
	//global $nombre_jugador;
	//return $nombre_jugador;
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////			TABLA PARA ASOCIAR JUGADORES		//////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function tabla_reservas(){
	
include('../../conexion.php');

$usuario=$_SESSION['id'];
$pista=$_POST['pista'];
$horario=$_POST['hora'];
$dia=$_POST['dia'];
$pag=$_POST['pag'];
$fecha_seg=$_POST['fecha_seg'];
$meapunto=$_POST['meapunto'];
$fecha=explode("-",$dia);
$fecha_esp=$fecha[2]."-".$fecha[1]."-".$fecha[0]; 
$limpiar=$_POST['limpiar'];
$confirmar=$_POST['confirmar'];

/* recoge valores de los jugadores no socios */

$jugador2nosoc=$_POST['jugador2nosoc']; /* nombre del no socio */
$jugador3nosoc=$_POST['jugador3nosoc'];
$jugador4nosoc=$_POST['jugador4nosoc'];

if($jugador2nosoc=='nombre del no socio'){
	$jugador2nosoc='';
}
if($jugador3nosoc=='nombre del no socio'){
	$jugador3nosoc='';
}
if($jugador4nosoc=='nombre del no socio'){
	$jugador4nosoc='';
}

/* recoge valores de los jugadores socios */

$jugador2soc=$_POST['jugador2soc']; /* id del socio */
$jugador3soc=$_POST['jugador3soc'];
$jugador4soc=$_POST['jugador4soc'];

if($jugador2soc=='id del socio'){
	$jugador2soc='';
}
if($jugador3soc=='id del socio'){
	$jugador3soc='';
}
if($jugador4soc=='id del socio'){
	$jugador4soc='';
}
$j2=$_POST['j2']; /* 1=socio    0=no socio */
$j3=$_POST['j3'];
$j4=$_POST['j4'];

$juega2=$_POST['juega2']; /* numero de partidos que juega */
$juega3=$_POST['juega3'];
$juega4=$_POST['juega4'];

/* numero de partidos que puede jugar en la misma semana */

	$fecha_seg=explode("-",$dia);
	$dia_ds=$fecha_seg[2];
	$mes_ds=$fecha_seg[1];
	$ano_ds=$fecha_seg[0];
	$fecha_es=$dia_ds . "-" . $mes_ds . "-" . $ano_ds;
	
	$numero_dia_semana=calcula_numero_dia_semana($dia_ds,$mes_ds,$ano_ds);

if($numero_dia_semana==0 OR $numero_dia_semana==1 OR $numero_dia_semana==2 OR $numero_dia_semana==3 OR $numero_dia_semana==4){
	$npartidos='3';
}elseif($numero_dia_semana==5 OR $numero_dia_semana==6){
	$npartidos='100';
}


/* ----------------------------------------------------- */

/* aqui esta la madre del cordero, realiza la consulta de si existe el usuario justo antes de mostrar la tabla, dentro de la misma función */


if($j2==1 AND $jugador2soc!=''){
	$ssql_usuario2="SELECT * FROM `$tabla11` WHERE Id=$jugador2soc AND Historico=0";
	$resultado_usuario2=mysql_query($ssql_usuario2);
	/////////////////////////////////////////////////////////////
	$existe2=mysql_num_rows($resultado_usuario2);
}

if($j3==1 AND $jugador3soc!=''){
	$ssql_usuario3="SELECT * FROM `$tabla11` WHERE Id=$jugador3soc AND Historico=0";
	$resultado_usuario3=mysql_query($ssql_usuario3);
	/////////////////////////////////////////////////////////////
	$existe3=mysql_num_rows($resultado_usuario3);
}

if($j4==1 AND $jugador4soc!=''){
	$ssql_usuario4="SELECT * FROM `$tabla11` WHERE Id=$jugador4soc AND Historico=0";
	$resultado_usuario4=mysql_query($ssql_usuario4);
	/////////////////////////////////////////////////////////////
	$existe4=mysql_num_rows($resultado_usuario4);
}

/* ---------------------------------------------------------------------------------------------------- */

if($j2==1 AND $jugador2soc!='id del socio' AND $jugador2soc!='' AND $juega2!=$npartidos AND $existe2==1){
		$jugador2='OK';
}elseif($j2==0 AND $jugador2nosoc!='nombre del no socio' AND $jugador2nosoc!=''){
		$jugador2='OK';
}else{
		$jugador2='NO';
}

if($j3==1 AND $jugador3soc!='id del socio' AND $jugador3soc!='' AND $juega3!=1 AND $existe3==1){
		$jugador3='OK';
//		echo $jugador3soc;
}elseif($j3==0 AND $jugador3nosoc!='nombre del no socio' AND $jugador3nosoc!=''){
		$jugador3='OK';
}else{
		$jugador3='NO';
}

if($j4==1 AND $jugador4soc!='id del socio' AND $jugador4soc!='' AND $juega4!=1 AND $existe4==1){
		$jugador4='OK';
//		echo $jugador3soc;
}elseif($j4==0 AND $jugador4nosoc!='nombre del no socio' AND $jugador4nosoc!=''){
		$jugador4='OK';
}else{
		$jugador4='NO';
}

if($limpiar=='limpiar'){
	$jugador2='NO';
	$jugador3='NO';
	$jugador4='NO';
	}
	
if($jugador2=='OK' AND $jugador3=='OK' AND $jugador4=='OK'){
	$estado_partido="completo";
	}
	
if($estado_partido!="completo"){
?>

<form action='reservas2.php' method='POST'>

<table border='0' id='reservas'>

<tr>
	<td colspan='2' class='titulo'>SELECCIONA LOS JUGADORES</td>
</tr>

<tr>
	<td class='subtitulo'>JUGADOR 1</td>
	<td><input type='text' name='jugador1' size='50' value='<?php nombre_jugador($usuario); ?>' readonly></td>
</tr>

<?php

if($jugador2soc=='' AND $jugador2nosoc=='' OR $jugador2=='NO'){

?>
<tr>
	<td class='subtitulo'>JUGADOR 2</td>
	<td>
		<input type='radio' name='j2' value='1' checked><input type='text' name='jugador2soc' size='10' value="id del socio" onclick="this.value=''"> &oacute;<br>
		<input type='radio' name='j2' value='0'><input type='text' name='jugador2nosoc' size='50' value="nombre del no socio" onclick="this.value=''">
	</td>
</tr>
<?php
}else{
?>
	<input type='hidden' name='j2' value=<?php echo $j2 ?> >
	<input type='hidden' name='jugador2soc' value=<?php echo $jugador2soc ?> >
	<input type='hidden' name='jugador2nosoc' value=<?php echo $jugador2nosoc ?> >
<?php } ?>

<?php if($jugador3soc=='' AND $jugador3nosoc=='' OR $jugador3=='NO'){ ?>
<tr>
	<td class='subtitulo'>JUGADOR 3</td>
	<td>
		<input type='radio' name='j3' value='1' checked><input type='text' name='jugador3soc' size='10' value="id del socio" onclick="this.value=''"> &oacute;<br>
		<input type='radio' name='j3' value='0'><input type='text' name='jugador3nosoc' size='50' value="nombre del no socio" onclick="this.value=''">
	</td>
</tr>
<?php 
}else{
?>
	<input type='hidden' name='j3' value=<?php echo $j3 ?> >
	<input type='hidden' name='jugador3soc' value=<?php echo $jugador3soc ?> >
	<input type='hidden' name='jugador3nosoc' value=<?php echo $jugador3nosoc ?> >
<?php
}
?>

<?php if($jugador4soc=='' AND $jugador4nosoc=='' OR $jugador4=='NO'){ ?>
<tr>
	<td class='subtitulo'>JUGADOR 4</td>
	<td>
		<input type='radio' name='j4' value='1' checked><input type='text' name='jugador4soc' size='10' value="id del socio" onclick="this.value=''"> &oacute;<br>
		<input type='radio' name='j4' value='0'><input type='text' name='jugador4nosoc' size='50' value="nombre del no socio" onclick="this.value=''">
	</td>
</tr>
<?php 
}else{
?>
	<input type='hidden' name='j4' value=<?php echo $j4 ?> >
	<input type='hidden' name='jugador4soc' value=<?php echo $jugador4soc ?> >
	<input type='hidden' name='jugador4nosoc' value=<?php echo $jugador4nosoc ?> >
<?php
}
?>
</table>

<table width='400' id='siguiente'>
	<tr><td align='right'><input type='submit' name='siguiente' value='SIGUIENTE >>' id='boton'></td></tr>
</table>
	<input type='hidden' name='hora' value='<?php echo $horario; ?>'>
	<input type='hidden' name='usuario' value='<?php echo $usuario; ?>'>
	<input type='hidden' name='pista' value='<?php echo $pista; ?>'>
	<input type='hidden' name='dia' value='<?php echo $dia; ?>'>
	<input type='hidden' name='pag' value='<?php echo $pag; ?>'>
	<input type='hidden' name='fecha_seg' value='<?php echo $fecha_seg; ?>'>
	<input type='hidden' name='tipo_reserva' value='4jugadores'>
</form>

<?php
}

}

/////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////	ALTA RESERVA CON 4 JUGADORES		//////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////

function alta_reserva(){
	include("../../conexion.php");
	$id_apuntar= $_GET['id'];
	$pag=$_SERVER['PHP_SELF'];	
	$cliente=$_SESSION['id'];
	$limpiar=$_POST['limpiar'];
	$pista=$_POST['pista'];
	$horario=$_POST['hora'];
	$dia=$_POST['dia'];
	$pag=$_POST['pag'];
	$fecha_seg=$_POST['fecha_seg'];

//	$precio_soc=$_POST['precio_soc'];
//	$precio_nosoc=$_POST['precio_nosoc'];

//////////////////////////////		GENERA LA ULTIMA RESERVA      ///////////////////////////
$napunto= mysql_query("SELECT MAX(id_reserva) FROM $tabla5");
	while ($registro=mysql_fetch_row($napunto)){
	       foreach($registro as $clave){ 
	       //echo $clave;
	 	}
	 }
$id_reserva=$clave+1;
////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////

$jugador2nosoc=$_POST['jugador2nosoc']; /* nombre del jugador no socio */
$jugador3nosoc=$_POST['jugador3nosoc'];
$jugador4nosoc=$_POST['jugador4nosoc'];

if($jugador2nosoc=='nombre del no socio'){
	$jugador2nosoc='';
}
if($jugador3nosoc=='nombre del no socio'){
	$jugador3nosoc='';
}
if($jugador4nosoc=='nombre del no socio'){
	$jugador4nosoc='';
}

$jugador2soc=$_POST['jugador2soc']; /* id del jugador socio */
$jugador3soc=$_POST['jugador3soc'];
$jugador4soc=$_POST['jugador4soc'];

if($jugador2soc=='id del socio'){
	$jugador2soc='';
}
if($jugador3soc=='id del socio'){
	$jugador3soc='';
}
if($jugador4soc=='id del socio'){
	$jugador4soc='';
}

//-------------------------------------------------

if($jugador2soc=='' AND $jugador2nosoc==''){
	$j2='Null';
}else{
	$j2=$_POST['j2'];
}

if($jugador3soc=='' AND $jugador3nosoc==''){
	$j3='Null';
}else{
	$j3=$_POST['j3'];
}

if($jugador4soc=='' AND $jugador4nosoc==''){
	$j4='Null';
}else{
	$j4=$_POST['j4'];
}

//---------------------------------------------------

$juega2=$_POST['juega2'];
$juega3=$_POST['juega3'];
$juega4=$_POST['juega4'];

	$fecha_seg=explode("-",$dia);
	$dia_ds=$fecha_seg[2];
	$mes_ds=$fecha_seg[1];
	$ano_ds=$fecha_seg[0];
	$fecha_es=$dia_ds . "-" . $mes_ds . "-" . $ano_ds;
	
	$numero_dia_semana=calcula_numero_dia_semana($dia_ds,$mes_ds,$ano_ds);

if($numero_dia_semana==0 OR $numero_dia_semana==1 OR $numero_dia_semana==2 OR $numero_dia_semana==3 OR $numero_dia_semana==4){
	$npartidos='3';
}elseif($numero_dia_semana==5 OR $numero_dia_semana==6){
	$npartidos='100';
}

/* aqui esta la madre del cordero, realiza la consulta de si existe el usuario justo antes de mostrar la tabla, dentro de la misma función */

if($j2==1){
	$ssql_usuario2="SELECT * FROM `$tabla11` WHERE Id=$jugador2soc AND Historico=0";
	$resultado_usuario2=mysql_query($ssql_usuario2);
	/////////////////////////////////////////////////////////////
	$existe2=mysql_num_rows($resultado_usuario2);
}

if($j3==1){
	$ssql_usuario3="SELECT * FROM `$tabla11` WHERE Id=$jugador3soc AND Historico=0";
	$resultado_usuario3=mysql_query($ssql_usuario3);
	/////////////////////////////////////////////////////////////
	$existe3=mysql_num_rows($resultado_usuario3);
}

if($j4==1){
	$ssql_usuario4="SELECT * FROM `$tabla11` WHERE Id=$jugador4soc AND Historico=0";
	$resultado_usuario4=mysql_query($ssql_usuario4);
	/////////////////////////////////////////////////////////////
	$existe4=mysql_num_rows($resultado_usuario4);
}

/* ---------------------------------------------------------------------------------------------------- */


//--------------------		avisos informativos de los jugadores     ------------------


if($juega2==$npartidos){
	?>
		<div id='error_jugador'><b> <?php nombre_jugador($jugador2soc); ?></b> ya tiene un partido programado y no puede programar otro.</div>
	<?php
}
if($juega3==$npartidos){
	?>
		<div id='error_jugador'><b> <?php nombre_jugador($jugador3soc); ?></b> ya tiene un partido programado y no puede programar otro.</div>
	<?php
}
if($juega4==$npartidos){
	?>
		<div id='error_jugador'><b> <?php nombre_jugador($jugador4soc); ?></b> ya tiene un partido programado y no puede programar otro.</div>
	<?php
}

if($existe2=='0'){
	?>
		<div id='error_jugador'><b> No existe ning&uacute;n jugador con el id <?php echo $jugador2soc; ?>.</div>
	<?php	
	}
if($existe3=='0'){
	?>
		<div id='error_jugador'><b> No existe ning&uacute;n jugador con el id <?php echo $jugador3soc; ?>.</div>
	<?php	
	}
if($existe4=='0'){
	?>
		<div id='error_jugador'><b> No existe ning&uacute;n jugador con el id <?php echo $jugador4soc; ?>.</div>
	<?php	
	}
//echo "$juega2 $juega3 $juega4";

if($j2==1 AND $jugador2soc!='id del socio' AND $jugador2soc!='' AND $juega2!=$npartidos AND $existe2==1){
		$jugador2='OK';
}elseif($j2==0 AND $jugador2nosoc!='nombre del no socio' AND $jugador2nosoc!=''){
		$jugador2='OK';
}else{
		$jugador2='NO';
}

if($j3==1 AND $jugador3soc!='id del socio' AND $jugador3soc!='' AND $juega3!='1' AND $existe3==1){
		$jugador3='OK';
}elseif($j3==0 AND $jugador3nosoc!='nombre del no socio' AND $jugador3nosoc!=''){
		$jugador3='OK';
}else{
		$jugador3='NO';
}

if($j4==1 AND $jugador4soc!='id del socio' AND $jugador4soc!='' AND $juega4!='1' AND $existe4==1){
		$jugador4='OK';
}elseif($j4==0 AND $jugador4nosoc!='nombre del no socio' AND $jugador4nosoc!=''){
		$jugador4='OK';
}else{
		$jugador4='NO';
}

if($limpiar=='limpiar'){
	$jugador2='NO';
	$jugador3='NO';
	$jugador4='NO';
	}

tabla_reservas(); /* METO LA TABLA DE AÑADIR JUGADORES */

	////////////   DATOS DEL HORARIO   	/////////////////////////
	$ssql_horario = "select inicio,precio_soc,precio_nosoc FROM `$tabla3` WHERE id_horario=$horario";
	$resultado_horario = mysql_query($ssql_horario);
	$row_horario=mysql_fetch_object($resultado_horario);
	$precio_soc=$row_horario->precio_soc;
	$precio_nosoc=$row_horario->precio_nosoc;
	$hora_inicio=$row_horario->inicio;

	////////////   DATOS DE LA PISTA   	/////////////////////////
	$ssql_pista = "select nombre,Tipopago FROM `$tabla2` WHERE id_pista=$pista";
	$resultado_pista = mysql_query($ssql_pista);
	$row_pista=mysql_fetch_object($resultado_pista);
	$nombre_pista=$row_pista->nombre;
	$tipo_pago=$row_pista->Tipopago;

	////////////////////  DATOS CLIENTE  ////////////////////////
	$ssql_usuario1="SELECT * FROM `$tabla11` WHERE Id=$cliente";
	$resultado_usuario1=mysql_query($ssql_usuario1);
	/////////////////////////////////////////////////////////////
	$row_usuario1= mysql_fetch_object($resultado_usuario1);
	$nombre_usuario1=$row_usuario1->Nombre;
	$apellido1=$row_usuario1->Apellidos;
	$nombre_jugador1=$nombre_usuario1." ".$apellido1;
	$precio1=$precio_soc;
	$pago_cliente1=$row_usuario1->IdPago;

if($j2==1){
	$id_jugador2=$jugador2soc;
	////////////////////  DATOS CLIENTE  ////////////////////////
	$ssql_usuario2="SELECT * FROM `$tabla11` WHERE Id=$id_jugador2";

	$resultado_usuario2=mysql_query($ssql_usuario2);
	/////////////////////////////////////////////////////////////
	$row_usuario2= mysql_fetch_object($resultado_usuario2);

	$nombre_usuario2=$row_usuario2->Nombre;
	$apellido2=$row_usuario2->Apellidos;
	$nombre_jugador2=$nombre_usuario2." ".$apellido2;
	$precio2=$precio_soc;
	$pago_cliente2=$row_usuario2->IdPago;
}elseif($j2==0){
	$nombre_jugador2=$jugador2nosoc;
	$id_jugador2=0;
	$precio2=$precio_nosoc;
}

if($j3==1){
	$id_jugador3=$jugador3soc;
	////////////////////  DATOS CLIENTE  ////////////////////////
	$ssql_usuario3="SELECT * FROM `$tabla11` WHERE Id=$id_jugador3";
	$resultado_usuario3=mysql_query($ssql_usuario3);
	/////////////////////////////////////////////////////////////
	$row_usuario3= mysql_fetch_object($resultado_usuario3);

	$nombre_usuario3=$row_usuario3->Nombre;
	$apellido3=$row_usuario3->Apellidos;
	$nombre_jugador3=$nombre_usuario3." ".$apellido3;
	$precio3=$precio_soc;
	$pago_cliente3=$row_usuario3->IdPago;
}elseif($j3==0){
	$nombre_jugador3=$jugador3nosoc;
	$id_jugador3=0;
	$precio3=$precio_nosoc;
}

if($j4==1){
	$id_jugador4=$jugador4soc;
	////////////////////  DATOS CLIENTE  ////////////////////////
	$ssql_usuario4="SELECT * FROM `$tabla11` WHERE Id=$id_jugador4";
	$resultado_usuario4=mysql_query($ssql_usuario4);
	/////////////////////////////////////////////////////////////
	$row_usuario4= mysql_fetch_object($resultado_usuario4);

	$nombre_usuario4=$row_usuario4->Nombre;
	$apellido4=$row_usuario4->Apellidos;
	$nombre_jugador4=$nombre_usuario4." ".$apellido4;
	$precio4=$precio_soc;
	$pago_cliente4=$row_usuario4->IdPago;
}elseif($j4==0){
	$nombre_jugador4=$jugador4nosoc;
	$id_jugador4=0;
	$precio4=$precio_nosoc;
}

//echo "socio: ".$jugador4soc." no socio: ".$jugador4nosoc." jugador: ".$j4;
?>
<form action='reservas2.php' method='POST'>
<table border='2' id='reservas'>

	<tr>
		<td colspan='4' class='titulo'> JUGADORES CONFIRMADOS </td>
	</tr>
	
	<tr class='subtitulo'>
		<td>&nbsp;</td>
		<td> ID socio </td>
		<td> Nombre del jugador </td>
		<td> Precio </td>
	</tr>
	
	<tr>
		<td class='subtitulo'>Jugador 1</td>
		<td align='center'><?php echo $cliente; ?> </td>
		<td> <?php echo $nombre_jugador1; ?>  </td>
		<td align='center'> <?php echo $precio1; ?> &euro;</td>
	</tr>

<?php


/* ###### 		COMPRUEBA LOS PARTIDOS FUTUROS DEL JUGADOR		####### */  
$hoy=date('Y-m-d');

	////////////////////  DATOS CLIENTE  ////////////////////////
	$ssql_partidos_hoy_j2 = "SELECT id_reserva FROM `$tabla10` WHERE id_jugador=$id_jugador2 AND fecha='$hoy'";
	$resultado_partidos_hoy_j2 = mysql_query($ssql_partidos_hoy_j2);
	/////////////////////////////////////////////////////////////

	$numero_partidos_hoy_j2 = mysql_num_rows($resultado_partidos_hoy_j2);
/* ####################################################################### */
/*
echo "existe el 2 ".$existe2;
echo "<br> jugador 2 soc ".$jugador2soc;
echo "<br> jugador 2 nosoc ".$jugador2nosoc;
echo "<br> jugador 2 ".$jugador2;
*/
if($jugador2soc!='' || $jugador2nosoc!='' AND $jugador2!='NO'){ ?>

	<tr>
		<td class='subtitulo'>Jugador 2</td>
		<td align='center'><?php echo $id_jugador2; ?> </td>
		<td> <?php echo $nombre_jugador2; ?>  </td>
		<td align='center'> <?php echo $precio2; ?> &euro;</td>
		<input type='hidden' name='juega2' value=<?php echo $numero_partidos_hoy_j2; ?> >
		<input type='hidden' name='j2' value=<?php echo $j2; ?> >
		<input type='hidden' name='jugador2soc' value=<?php echo $jugador2soc; ?> >
		<input type='hidden' name='jugador2nosoc' value=<?php echo $jugador2nosoc; ?> >
		<input type='hidden' name='existe2' value=<?php echo $num_usuario2; ?> >		
	</tr>
<?php 
}else{
	$precio2=0;
}
?>

<?php 

/* ###### 		COMPRUEBA LOS PARTIDOS FUTUROS DEL JUGADOR		####### */  

	////////////////////  DATOS CLIENTE  ////////////////////////
	$ssql_partidos_hoy_j3 = "SELECT id_reserva FROM `$tabla10` WHERE id_jugador=$id_jugador3 AND fecha='$hoy'";
	$resultado_partidos_hoy_j3 = mysql_query($ssql_partidos_hoy_j3);
	/////////////////////////////////////////////////////////////

	$numero_partidos_hoy_j3 = mysql_num_rows($resultado_partidos_hoy_j3);
//echo $ssql_partidos_hoy_j3;
/* ####################################################################### */

if($jugador3soc!='' || $jugador3nosoc!='' AND $jugador3!='NO'){ ?>
	<tr>
		<td class='subtitulo'>Jugador 3</td>
		<td align='center'><?php echo $id_jugador3; ?> </td>
		<td> <?php echo $nombre_jugador3; ?>  </td>
		<td align='center'> <?php echo $precio3; ?> &euro;</td>
		<input type='hidden' name='juega3' value=<?php echo $numero_partidos_hoy_j3; ?> >
		<input type='hidden' name='j3' value=<?php echo $j3; ?> >
		<input type='hidden' name='jugador3soc' value=<?php echo $jugador3soc; ?> >
		<input type='hidden' name='jugador3nosoc' value=<?php echo $jugador3nosoc; ?> >
</tr>
<?php 
}else{
	$precio3=0;
}


/* ###### 		COMPRUEBA LOS PARTIDOS FUTUROS DEL JUGADOR		####### */  

	////////////////////  DATOS CLIENTE  ////////////////////////
	$ssql_partidos_hoy_j4 = "SELECT id_reserva FROM `$tabla10` WHERE id_jugador=$id_jugador4 AND fecha='$hoy'";
	$resultado_partidos_hoy_j4 = mysql_query($ssql_partidos_hoy_j4);
	/////////////////////////////////////////////////////////////

	$numero_partidos_hoy_j4 = mysql_num_rows($resultado_partidos_hoy_j4);
//echo $ssql_partidos_hoy_j3;
/* ####################################################################### */

if($jugador4soc!='' || $jugador4nosoc!='' AND $jugador4!='NO'){ ?>
	<tr>
		<td class='subtitulo'>Jugador 4</td>
		<td align='center'><?php echo $id_jugador4; ?> </td>
		<td> <?php echo $nombre_jugador4; ?>  </td>
		<td align='center'> <?php echo $precio4; ?> &euro;</td>
		<input type='hidden' name='juega4' value=<?php echo $numero_partidos_hoy_j4; ?> >
		<input type='hidden' name='j4' value=<?php echo $j4; ?> >
		<input type='hidden' name='jugador4soc' value=<?php echo $jugador4soc; ?> >
		<input type='hidden' name='jugador4nosoc' value=<?php echo $jugador4nosoc; ?> >
</tr>
<?php 
}else{
	$precio4=0;
}
?>

	<tr>
		<td colspan='3' class='subtitulo' align='right'> TOTAL: &nbsp;&nbsp;&nbsp;</td>
		<td class='subtitulo'>
		<?php 
		$precio_total=$precio1+$precio2+$precio3+$precio4;
		echo $precio_total." &euro;"; 
		?>
		</td>
	</tr>

</table>
<?php
if($jugador2=='OK' AND $jugador3=='OK' AND $jugador4=='OK'){
	$estado_partido="completo";
	}
?>

	<input type='hidden' name='hora' value='<?php echo $horario; ?>'>
	<input type='hidden' name='usuario' value='<?php echo $usuario; ?>'>
	<input type='hidden' name='pista' value='<?php echo $pista; ?>'>
	<input type='hidden' name='dia' value='<?php echo $dia; ?>'>
	<input type='hidden' name='pag' value='<?php echo $pag; ?>'>
	<input type='hidden' name='fecha_seg' value='<?php echo $fecha_seg; ?>'>
	<input type='hidden' name='tipo_reserva' value='4jugadores'>
	
<table width='400' id='siguiente'>
	<tr><td align='center'>
	<?php if($_POST['confirmar']!='confirmar'){ ?>
		<input type='submit' name='limpiar' value='limpiar' id='boton'>
		<?php if($estado_partido=='completo' AND $_POST['confirmar']!='confirmar'){ ?>
		<input type='submit' name='confirmar' value='confirmar' id='boton'>
		<?php } ?>
	<?php } ?>
	</td></tr>
</table>
</form>
<?php

if($estado_partido=='completo'){
//////////////////////////////		GENERA EL ULTIMO JUGADOR-RESERVA      ///////////////////////////
$njugador_reserva= mysql_query("SELECT MAX(id_jugador_reserva) FROM $tabla10");
	while ($registrojr=mysql_fetch_row($njugador_reserva)){
	       foreach($registrojr as $clavejr){ 
	       //echo $clave;
	 	}
	 }
$id_jugador_reserva1=$clavejr+1;
$id_jugador_reserva2=$clavejr+2;
$id_jugador_reserva3=$clavejr+3;
$id_jugador_reserva4=$clavejr+4;

$hoy=date('Y-m-d');
$hoy_esp=date('d-m-Y');

////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////
if($_POST['confirmar']=='confirmar'){
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////			GUARDA LOS JUGADORES ASOCIADOS			///////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* comprueba disponibilidad de la pista */
$fecha_unix = strtotime( date($dia." ".$hora_inicio) );

//$ssql_comprueba_pista="SELECT id_reserva FROM $tabla5 WHERE pista=$pista AND horario=$horario AND dia=$dia";
$ssql_comprueba_pista="SELECT id_reserva FROM $tabla5 WHERE pista=$pista AND hora_inicio=$fecha_seg";
$resultado_comprueba_pista=mysql_query($ssql_comprueba_pista);
$row_comprueba_pista=mysql_num_rows($resultado_comprueba_pista);
// echo $ssql_comprueba_pista;
if($row_comprueba_pista==0){

$fecha=date("Y-m-d H:i:s");
$fecha_seg=time();
/////////////////////////////////////////////////////////////
/* ------------------------------------  */

	$campos1="id_jugador_reserva,id_jugador,id_reserva,nombre_jugador,precio,socio,fecha";
	$datos1="'$id_jugador_reserva1','$cliente','$id_reserva','$nombre_jugador1','$precio1','1','$hoy'";
	$sentencia1="INSERT INTO $tabla10 ($campos1) VALUES ($datos1)";
	$inserta1=mysql_query($sentencia1,$conexion);
	
	$base1=$precio1/1.18;
	$iva1=$precio1-$base1;
	$concepto1="Reserva de la pista $nombre_pista el dia $hoy_esp a las $hora_inicio";
	
	$campos_temporal1="IdPuesto,IdSocio,Vendedor,FechaEmisio,Concepto,Precio,Cantidad,Total,Formapago,Base,Iva,IvaVenta,IdSocioPago,Id_reserva,IdTipo,Fecha_seg";
	$datos_temporal1="'1','$cliente','1','$fecha','$concepto1','$precio1','1','$precio1','1','$base1','$iva1','18','$pago_cliente1','$id_reserva','$tipo_pago','$fecha_seg'";
	$sentencia_temporal1="INSERT INTO $tabla12 ($campos_temporal1) VALUES ($datos_temporal1)";
//	echo $sentencia_temporal1;
	$inserta_temporal1=mysql_query($sentencia_temporal1,$conexion);
	
//	echo "<br>sentencia jugador 1: ".$sentencia1."<br>";

	$campos2="id_jugador_reserva,id_jugador,id_reserva,nombre_jugador,precio,socio,fecha";
	$datos2="'$id_jugador_reserva2','$id_jugador2','$id_reserva','$nombre_jugador2','$precio2','$j2','$hoy'";
	$sentencia2="INSERT INTO $tabla10 ($campos2) VALUES ($datos2)";
	$inserta2=mysql_query($sentencia2,$conexion);
//	echo "<br>sentencia jugador 2: ".$sentencia2."<br>";

	$base2=$precio2/1.18;
	$iva2=$precio2-$base2;
	$concepto2="Reserva de la pista $nombre_pista el dia $hoy_esp a las $hora_inicio";
	
	$campos_temporal2="IdPuesto,IdSocio,Vendedor,FechaEmisio,Concepto,Precio,Cantidad,Total,Formapago,Base,Iva,IvaVenta,IdSocioPago,Id_reserva,IdTipo,Fecha_seg";
	$datos_temporal2="'1','$id_jugador2','1','$fecha','$concepto2','$precio2','1','$precio2','1','$base2','$iva2','18','$pago_cliente2','$id_reserva','$tipo_pago','$fecha_seg'";
	$sentencia_temporal2="INSERT INTO $tabla12 ($campos_temporal2) VALUES ($datos_temporal2)";
//	echo $sentencia_temporal2;
	$inserta_temporal2=mysql_query($sentencia_temporal2,$conexion);

	$campos3="id_jugador_reserva,id_jugador,id_reserva,nombre_jugador,precio,socio,fecha";
	$datos3="'$id_jugador_reserva3','$id_jugador3','$id_reserva','$nombre_jugador3','$precio3','$j3','$hoy'";
	$sentencia3="INSERT INTO $tabla10 ($campos3) VALUES ($datos3)";
	$inserta3=mysql_query($sentencia3,$conexion);
//	echo "<br>sentencia jugador 3: ".$sentencia3."<br>";

	$base3=$precio3/1.18;
	$iva3=$precio3-$base3;
	$concepto3="Reserva de la pista $nombre_pista el dia $hoy_esp a las $hora_inicio";
	
	$campos_temporal3="IdPuesto,IdSocio,Vendedor,FechaEmisio,Concepto,Precio,Cantidad,Total,Formapago,Base,Iva,IvaVenta,IdSocioPago,Id_reserva,IdTipo,Fecha_seg";
	$datos_temporal3="'1','$id_jugador3','1','$fecha','$concepto3','$precio3','1','$precio3','1','$base3','$iva3','18','$pago_cliente3','$id_reserva','$tipo_pago','$fecha_seg'";
	$sentencia_temporal3="INSERT INTO $tabla12 ($campos_temporal3) VALUES ($datos_temporal3)";
//	echo $sentencia_temporal3;
	$inserta_temporal3=mysql_query($sentencia_temporal3,$conexion);


	$campos4="id_jugador_reserva,id_jugador,id_reserva,nombre_jugador,precio,socio,fecha";
	$datos4="'$id_jugador_reserva4','$id_jugador4','$id_reserva','$nombre_jugador4','$precio4','$j4','$hoy'";
	$sentencia4="INSERT INTO $tabla10 ($campos4) VALUES ($datos4)";
	$inserta4=mysql_query($sentencia4,$conexion);
//	echo "<br>sentencia jugador 4: ".$sentencia4."<br>";

	$base4=$precio4/1.18;
	$iva4=$precio4-$base4;
	$concepto4="Reserva de la pista $nombre_pista el dia $hoy_esp a las $hora_inicio";
	
	$campos_temporal4="IdPuesto,IdSocio,Vendedor,FechaEmisio,Concepto,Precio,Cantidad,Total,Formapago,Base,Iva,IvaVenta,IdSocioPago,Id_reserva,IdTipo,Fecha_seg";
	$datos_temporal4="'1','$id_jugador4','1','$fecha','$concepto4','$precio4','1','$precio4','1','$base4','$iva4','18','$pago_cliente4','$id_reserva','$tipo_pago','$fecha_seg'";
	$sentencia_temporal4="INSERT INTO $tabla12 ($campos_temporal4) VALUES ($datos_temporal4)";
//	echo $sentencia_temporal4;
	$inserta_temporal4=mysql_query($sentencia_temporal4,$conexion);


	$campos_reservas="id_reserva,usuario,pista,horario,dia,hora_inicio";
	$datos_reservas="'$id_reserva','$cliente','$pista','$horario','$dia','$fecha_unix'";	
	$sentencia_reservas="INSERT INTO $tabla5 ($campos_reservas) VALUES ($datos_reservas)";
	$inserta_reservas=mysql_query($sentencia_reservas,$conexion);
//	echo "<br>sentencia reserva: ".$sentencia_reservas;

?>

	<div id='reservada'><br><br>Gracias <b><?php nombre_jugador($cliente);?></b>. La reserva se ha realizado con &eacute;xito.<br> La pista <b><?php datos_pista($pista);?></b> estar&aacute; disponible para ti a las <b><?php datos_horario($horario);?></b></div>
<?php 
}else{
?>
	<br>Lo sentimos, la pista <b><?php datos_pista($pista);?></b> ya est&aacute; reservada el mismo d&iacute;a y a las <b><?php datos_horario($horario);?></b>.<br>Vuelva a la secci&oacute;n reservas y pruebe con otra pista u otra hora.<br>Gracias
<?php
}

}
}

} /* termina la función */


/////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////	BORRAR RESERVAS 4 JUGADORES			///////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////

function borrar_reserva(){
include("../../conexion.php");
$usuario=$_SESSION['id'];
//echo $usuario;
	$id_anular= $_GET['id'];
	if($_SESSION['privilegios']==1 OR $_SESSION['privilegios']==2){
		$sentencia="DELETE FROM $tabla5 WHERE id_reserva='$id_anular'";
		$sentencia_jugadores="DELETE FROM $tabla10 WHERE Id_reserva='$id_anular'";
		$sentencia_temporal="DELETE FROM $tabla12 WHERE Id_reserva='$id_anular'";
//		echo $sentencia."<br>";
//		echo $sentencia_jugadores;
		mysql_query($sentencia_jugadores) or die(mysql_error());
		mysql_query($sentencia) or die(mysql_error());
		mysql_query($sentencia_temporal) or die(mysql_error());
	}else{
		$sentencia="DELETE FROM $tabla5 WHERE id_reserva='$id_anular' AND usuario='$usuario'";
		$sentencia_jugadores="DELETE FROM $tabla10 WHERE Id_reserva='$id_anular'";
		$sentencia_temporal="DELETE FROM $tabla12 WHERE Id_reserva='$id_anular'";
		mysql_query($sentencia_jugadores) or die(mysql_error());
		mysql_query($sentencia) or die(mysql_error());
		mysql_query($sentencia_temporal) or die(mysql_error());
//		echo $sentencia;
	}
	mysql_close();
$pag=$_SERVER['PHP_SELF'];
	//echo "DELETE FROM $tabla5 WHERE id_reserva='$id_anular'";
	//echo "pagina: ".$pag;
	header ("Location: $pag");
	exit;
}

/*
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOo		INFORME DE NIVELES			oOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOo
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
OoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
*/

///////////////////////////////////////////////////////////////////////////////////////
/////////////////////////   GENERAR LOS NIVELES    ////////////////////////////////

function generaSelect_niveles($nivel){

include ('../../conexion.php');

$consulta=mysql_query("SELECT * FROM $tabla14");

echo "<select name='nivel' id='genera_niveles'>";


while($registro=mysql_fetch_object($consulta)){		

	echo "<option value='".$registro->nivel."'";
		if($registro->nivel==$nivel){
			echo "selected";
		}
	echo ">".$registro->nombre." [".$registro->abreviatura."]</option>";
}

echo "</select>";

}

function AbreviaturaNivel($nivel){
	include("../../conexion.php");
	////////////   DATOS DE LOS NIVELES  	/////////////////////////
	$ssql_abreviatura = "SELECT abreviatura FROM `$tabla14` WHERE nivel=$nivel";

	$resultado_abreviatura = mysql_query($ssql_abreviatura);
	$row_abreviatura=mysql_fetch_object($resultado_abreviatura);
	$abreviatura=$row_abreviatura->abreviatura;
	echo "<td>".$abreviatura."</td>";
	/////////////////////////////////////////////////////////////
}
