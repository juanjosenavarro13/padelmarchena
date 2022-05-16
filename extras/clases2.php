<?php
session_start();
include("../includes.php");

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
$apellidos=$_POST['apellidos'];
$mail=$_POST['mail'];
$telefono=$_POST['telefono'];

$mail_destino='info@padelmarchena.es';

$destino=$mail_destino;
 
$remite=$mail;

$asunto="Solicitud de CLASES DE PADEL";

$mensaje="El se&ntilde;or <b>".$nombre." ".$apellidos.".</b><br><br>";
$mensaje.="Desea recibir clases de padel<br><br>";
$mensaje.="Su n&uacute;mero de tel&eacute;fono es el<b>".$telefono." y su e-mail es ".$mail."<br><br>";

mail($destino, $asunto, $mensaje,'Content-type: text/html');


?>
	<table border='0' id='tabla_reservas'>
			<div id='titulo'>ME APUNTO</div><br>
			<div id='texto'>
				<?php echo "Gracias se&ntilde;or ".$nombre.". Su solicitud ha sido enviada al administrador de las pistas<br>";
						echo "Pronto recibir&aacute; en su correo electr&oacute;nico un mensaje de confirmaci&oacute;n.";
				 ?>
			</div>
			<br>
	</div>
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