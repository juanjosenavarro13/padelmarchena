<?php

#$servidor='db76.1and1.es';
#$usuario='dbo363268920';
#$contrasena='canal54';
#$base='db363268920';

$servidor='localhost';
$usuario='c13padelmarchena';
$contrasena='n6ayC#CD';
$base='c13padelmarchena1';

$tabla1='usuarios';
$tabla2='pistas';
$tabla3='horarios';
$tabla4='bloque';
$tabla5='reservas';
$tabla6='privilegios';
$tabla7='solicitud';
$tabla8='meapunto';
$tabla9='reservas_meapunto';
$tabla10='jugador_reserva';
$tabla11='pistas_bloques';
$tabla12='estado';
$tabla13='reservas_temporal';
$tabla14='alumnos_nuevos';
$tabla15='envios_meapunto';
$tabla16='registro_alumnos';
$tabla17='modulo_inscripcion';
$tabla18='clasificacion';
$tabla19='clasificacion_fecha';
$tabla20='clasificacion_tercera';
$tabla21='clasificacion_tercera_fecha';
$tabla22='tarifa_plana';
$tabla23='registro_tarifa';
$tabla24='abono';
$tabla25='registro_abono';
$tabla26='estipulado';

$tabla31='bono';
$tabla32='bono_partidos';
$tabla33='bono_fecha';

$tabla35='padelgym_partidos';
$tabla36='padelgym_fecha';
$tabla37='padelgym';

$tabla39='post_it';
$tabla40='reto_liga';

$tabla41='clases';
$tabla42='clases_partidos';
$tabla43='clases_fecha';
$tabla44='eliminatoria1';
$tabla45='eliminatoria1fecha';
$tabla46='eliminatoria2';
$tabla47='eliminatoria2fecha';
$tabla48='eliminatoria3';
$tabla49='eliminatoria3fecha';
$tabla50='partido_liga';
$tabla51='post_it2';


if($conexion=mysqli_connect($servidor,$usuario,$contrasena)){
//	echo "<h2>conexión establecida con el servidor</h2><br>";
mysqli_select_db($base, $conexion);
	
}else{
//	echo "<h2>no ha sido posible conectar con el servidor</h2>";
	}
	
?>
