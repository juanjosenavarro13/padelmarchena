<?php
include ("../../seguridad.php");
include("../funciones.php");
include("../../conexion.php");
session_start();

include("../../includes.php");
encabezado();
	echo "<link href='../../estilos.css' rel='stylesheet' type='text/css' />";
cabecera();
col_izda1();
enlaces_izda();
administrar();
col_izda2();
cuerpo1();
///////////////////////////////////////		AKI COMIENZA LA WEB 		/////////////////////////////

$confirmado=$_POST['confirmado'];

$usuario=$_POST['usuario'];
$pista=$_POST['pista'];
$horario=$_POST['hora'];
$dia=$_POST['dia'];
$pag=$_POST['pag'];
$fecha_seg=$_POST['fecha_seg'];
$meapunto=$_POST['meapunto'];
$fecha=explode("-",$dia);
$fecha_esp=$fecha[2]."-".$fecha[1]."-".$fecha[0]; 

///////////////////////////////////////////////////////////////
////////////   DATOS DE LA PISTA   	/////////////////////////
$ssql_pista = "select nombre,Tipopago FROM `$tabla2` WHERE id_pista=$pista";
$resultado_pista = mysql_query($ssql_pista);
$row_pista=mysql_fetch_object($resultado_pista);
$nombre_pista=$row_pista->nombre;
$tipo_pago=$row_pista->Tipopago;
	
	////////////////////  DATOS CLIENTE  ////////////////////////
	$ssql_usuario = "SELECT * FROM `$tabla11` WHERE Id=$usuario";
	$resultado_usuario = mysql_query($ssql_usuario);
	$row_usuario= mysql_fetch_object($resultado_usuario);
	$nombre_usuario=$row_usuario->Nombre;
	$apellido=$row_usuario->Apellidos;
	$pago_cliente1=$row_usuario->IdPago;
	$nombre_jugador1=$nombre_usuario." ".$apellido;
	/////////////////////////////////////////////////////////////
	
	////////////   DATOS DEL HORARIO   	/////////////////////////
	$ssql_horario = "select inicio,precio_soc,precio_nosoc FROM `$tabla3` WHERE id_horario=$horario";
	$resultado_horario = mysql_query($ssql_horario);
	$row_horario=mysql_fetch_object($resultado_horario);
	$precio_soc=$row_horario->precio_soc;
	$precio_nosoc=$row_horario->precio_nosoc;
	$hora_inicio=$row_horario->inicio;
	
	////////////////////  HORARIOS FUTUROS DEL USUARIO  ////////////////////////
	$ssql_futuros = "SELECT MAX(hora_inicio) FROM `$tabla5` WHERE usuario=$usuario";
	$resultado_futuros = mysql_query($ssql_futuros);
	$row_futuros = mysql_fetch_row($resultado_futuros);
	if($_SESSION['privilegios']==1){
		$partidos_futuros=0;
	}else{
		$partidos_futuros=$row_futuros[0];
	}
	$segundos_hoy=time();

	/////////////////////////////////////////////////////////////
	//////////////////////////////		GENERA EL ULTIMO JUGADOR-RESERVA      ///////////////////////////
$njugador_reserva= mysql_query("SELECT MAX(id_jugador_reserva) FROM $tabla10");
	while ($registrojr=mysql_fetch_row($njugador_reserva)){
	       foreach($registrojr as $clavejr){ 
	       //echo $clave;
	 	}
	 }
$id_jugador_reserva1=$clavejr+1;
	
//////////////////////////////				GENERA LA ULTIMA RESERVA       ///////////////////////////

$nreserva= mysql_query("SELECT MAX(id_reserva) FROM $tabla5");

	while ($registro=mysql_fetch_row($nreserva)){
	       foreach($registro as $clave){ 
	       //echo $clave;
	 	}
	 }

$id_reserva=$clave+1;


	$campos="id_reserva,usuario,pista,horario,dia,hora_inicio";
	$datos="'$id_reserva','$usuario','$pista','$horario','$dia','$fecha_seg'";

	$sentencia="INSERT INTO $tabla5 ($campos) VALUES ($datos)";
//	echo "<br>$sentencia<br>";
	$inserta=mysql_query($sentencia,$conexion);

	$campos1="id_jugador_reserva,id_jugador,id_reserva,nombre_jugador,precio,socio,fecha";
	$datos1="'$id_jugador_reserva1','$usuario','$id_reserva','$nombre_jugador1','$precio_soc','1','$dia'";
	$sentencia1="INSERT INTO $tabla10 ($campos1) VALUES ($datos1)";
	$inserta1=mysql_query($sentencia1,$conexion);
//	echo "<br>$sentencia1<br>";
	
	$base1=$precio_soc/1.18;
	$iva1=$precio_soc-$base1;
	$concepto1="Reserva de la pista $nombre_pista el dia $fecha_esp a las $hora_inicio";
	
	$campos_temporal1="IdPuesto,IdSocio,Vendedor,FechaEmisio,Concepto,Precio,Cantidad,Total,Formapago,Base,Iva,IvaVenta,IdSocioPago,Id_reserva,IdTipo,Fecha_seg";
	$datos_temporal1="'1','$usuario','1','$dia','$concepto1','$precio_soc','1','$precio_soc','1','$base1','$iva1','18','$pago_cliente1','$id_reserva','$tipo_pago','$fecha_seg'";
	$sentencia_temporal1="INSERT INTO $tabla12 ($campos_temporal1) VALUES ($datos_temporal1)";
//	echo "<br>$sentencia_temporal1<br>";
	$inserta_temporal1=mysql_query($sentencia_temporal1,$conexion);


		if($inserta==1){
			echo "<div id='mensaje_reserva'>Gracias <b>$nombre_jugador1</b>. La reserva se ha realizado con &eacute;xito.<br>
			La p&iacute;sta <b>$nombre_pista</b> estar&aacute; disponible para t&iacute; el d&iacute;a <b>$fecha_esp</b> desde las <b>$hora_inicio</b> hasta las <b>$hora_fin</b>.<br><br>
			<form action='gestion_reservas.php' method='POST'>
			<input type='submit' name='volver' value='volver' id='boton'>
			<input type='hidden' name='seleccionado' value='$fecha[2]'>
			<input type='hidden' name='mes_actual' value='$fecha[1]'>
			<input type='hidden' name='ano_actual' value='$fecha[0]'>
			</form> 
			</div>";
	}
///////////////////////////////////////		AKI TERMINA LA WEB 		/////////////////////////////

cuerpo2();

pie();

?>