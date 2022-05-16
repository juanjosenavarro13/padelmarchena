<?php
session_start();
include("../includes.php");
include("../conexion.php");

encabezado();
?>
<link href="../estilos.css" rel="stylesheet" type="text/css" />
<?php 
cabecera();
col_izda1();
enlaces_izda();
administrar();
col_izda2();
cuerpo1();

$nombre=$_POST['nombre'];
$mail=$_POST['mail'];

$hora_desde=$_POST['hora_desde'];
$hora_hasta=$_POST['hora_hasta'];
$jugadores=$_POST['jugadores'];
$telefono=$_POST['telefono'];
$lunes=$_POST['lunes'];
$martes=$_POST['martes'];
$miercoles=$_POST['miercoles'];
$jueves=$_POST['jueves'];
$viernes=$_POST['viernes'];
$sabados=$_POST['sabados'];

if(empty($_POST['telefono'])) { ///////////////////////////////////////////campos obligatorios  /////
     echo "<br></br><br></br>";
	 echo "<b>Introduce tu numero de telefono, campo obligatorio<b>"; 
	 echo "<br>";
	 echo "<br>";
	 echo "<br>";
	 echo "<a href='meapunto.php'>VOLVER</a>";
}elseif(empty($_POST['mail'])){
	 echo "<br></br><br></br>";
	 echo "<b>Introduce tu direccion de correo, campo obligatorio<b>"; 
	 echo "<br>";
	 echo "<br>";
	 echo "<br>";
	 echo "<a href='meapunto.php'>VOLVER</a>";
}elseif(empty($_POST['nombre'])){
	 echo "<br></br><br></br>";
	 echo "<b>Introduce tu nombre, campo obligatorio<b>"; 
	 echo "<br>";
	 echo "<br>";
	 echo "<br>";
	 echo "<a href='meapunto.php'>VOLVER</a>";
}else{

$nreserva= mysql_query("SELECT MAX(id_usuario) FROM $tabla15");

	while ($registro=mysql_fetch_row($nreserva)){
	       foreach($registro as $clave){ 
	       //echo $clave;
	 	}
	

///////////////////////////////// Guardando en la base de datos  //////////////////////
$id_usuario=$clave+1;

$campos="id_usuario,nombre,mail,telefono,lunes,martes,miercoles,jueves,viernes,sabados,horadesde,horahasta";
$datos="'$id_usuario','$nombre','$mail','$telefono','$lunes','$martes','$miercoles','$jueves','$viernes','$sabados','$hora_desde','$hora_hasta'";

$sentencia="INSERT INTO $tabla15 ($campos) VALUES ($datos) ";

$inserta=mysql_query($sentencia,$conexion);
	 }	
///////////////////////////////////////////////////////////////////////////////////////

$dias=$lunes." ".$martes." ".$miercoles." ".$jueves." ".$viernes." ".$sabados;

$mail_destino='info@padelmarchena.es';
//$mail_destino='benjumea.jose@gmail.com';
$destino=$mail_destino;
 
$remite=$mail;

$asunto="Solicitud de ME APUNTO";

$mensaje="El se&ntilde;or <b>".$nombre.".</b><br><br>";
$mensaje.="Desea usar el servicio 'me apunto' para los <b>".$dias."</b> desde a las <b>".$hora_desde." hasta las ".$hora_hasta."</b><br><br>";
$mensaje.="Su n&uacute;mero de tel&eacute;fono es el<b> ".$telefono."<br><br>";

mail($destino, $asunto, $mensaje,'Content-type: text/html');


?>
	<div id='tabla_contenido_abonos'>
			<div id='titulo'>ME APUNTO</div><br>
			<div id='texto'>
				<?php echo "Gracias se&ntilde;or ".$nombre.". Su solicitud ha sido enviada al administrador de las pistas<br>";
						echo "Pronto recibir&aacute; en su correo electr&oacute;nico un mensaje de confirmaci&oacute;n.";
				 ?>
			</div>
			<br>
	</div>
<?php
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