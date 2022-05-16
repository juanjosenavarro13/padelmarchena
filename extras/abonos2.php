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
$mail=$_POST['mail'];
$dia=$_POST['dia'];
$hora=$_POST['hora'];
$jugadores=$_POST['jugadores'];
$nombres=$_POST['nombres'];

$mail_destino='info@padelmarchena.es';

$destino=$mail_destino;
 
$remite=$mail;

$asunto="Reservas de abonos padel marchena";

$mensaje="El se&ntilde;or <b>".$nombre.".</b><br><br>";
$mensaje.="Desea solicitar una pista de padel para los <b>".$dia."</b> a las <b>".$hora."</b><br><br>";
$mensaje.="Ir&aacute; acompa&ntilde;ado de <b>".$jugadores."</b> jugadores cuyos nombres son:<br><br>";
$mensaje.="<b>".$nombres."</b><br>";

mail($destino, $asunto, $mensaje,'Content-type: text/html');


?>
	<div id='tabla_contenido_abonos'>

		<div id='titulo'>SOLICITUD DE RESERVA</div><br>
			<div id='texto'>
				<?php echo "Gracias se&ntilde;or ".$nombre.". Su solicitud ha sido enviada al administrador de las pistas<br>";
						echo "Pronto recibir&aacute; en su correo electr&oacute;nico un mensaje de confirmaci&oacute;n.";
				 ?>
		</div>
	</div>
			<br>
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