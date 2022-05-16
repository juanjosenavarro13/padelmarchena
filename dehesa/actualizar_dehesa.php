<?php
include("includes.php");
encabezado();
?>
	<script language="JavaScript" src="calendario/javascripts.js"></script>
<?php
cabecera();

if($_SESSION['autenticado']=='si'){

col_izda1();
enlaces_izda_portada();
administrar_portada();
col_izda2();
}
cuerpo1();

$correo=$_POST['mail'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$nif=$_POST['nif'];
$mail=$_POST['mail'];

/////////////////////////   GENERAR CONTRASEÑA ALEATORIA    ////////////////////////////////

$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
$cad = "";
for($i=0;$i<6;$i++) {
$cad .= substr($str,rand(0,62),1);
}
$pass_enc=md5($cad);

////////////////////  FUNCION MAIL    ////////////////////

$destino=$correo;
$remite="From: info@ladehesacd.com;";

$asunto="Bienvenido a La Dehesa Centro Deportivo online";

$mensaje="Hola <b>".$nombre.".</b><br><br>";
$mensaje.="Le damos la bienvenida al portal de <b>La Dehesa Centro Deportivo</b>.<br><br>";
$mensaje.="Sus claves de acceso son:<br><br>";
$mensaje.="NIF: <b>".$nif."</b><br>";
$mensaje.="Contrase&ntilde;a: <b>".$cad."</b><br><br>";
$mensaje.="Puede entrar en su perfil y cambiarla y as&iacute; le resultar&aacute; m&aacute;s f&aacute;cil memorizarla.<br><br>";
$mensaje.="Le damos la bienvenida al portal de <b>La Dehesa Centro Deportivo</b>.<br><br>
				Desde ahora podr&aacute; disfrutar las ventajas que te ofrecemos.<br><br>
				entre otras opcion, podr&aacute;s:<br><br>
				- Hacer tu <b>reservas</b> de pista online.<br>
				- Conocer <b>qui&eacute;n ocupa</b> las pistas.<br>
				- Saber <b>cuanto falta</b> para tu pr&oacute;ximo partido.<br><br>
				- <b>BUSCADOR DE PARTIDOS ONLINE!!</b> para jugar partidos en los que falte alguien.<br>
				Y adem&aacute;, en el futuro dispodt&aacute;s de m&aacute; ventajas como:<br><br>
				- Pago con <b>tarjeta de cr&eacute;dito</b> para las reservas de pistas.<br>
				- Estar al tanto de los <b>torneos</b> organizados por el club.<br>
				- Y muchas cosas m&aacute;s.<br><br>";
$mensaje.="Para cualquier consulta sobre nuestros servicios, por favor escriba a: info@ladehesacd.com.<br><br>";
$mensaje.="Nota: Esta direccion fue suministrada por uno de nuestros clientes. Si usted no se ha suscrito como socio, por favor comuniquelo a info@ladehesacd.com.<br>";
;



mail($destino, $asunto, $mensaje, 'Content-type: text/html');

echo "
	<br><br>
	Ya casi hemos terminado,<br>ahora solo tienes que pulsar el boton siguiente<br>y te mandaremos un correo electr&oacute;nico con tu contrase&ntilde;a de acceso<br>para que puedas disfrutar de todas las ventajas que te ofrece este nuevo sistema.<br><br>
		<form action='http://37.61.153.53/sistema/guardar_pass.php' method='POST'>
			<input type='hidden' name='nombre' value='$nombre'>
			<input type='hidden' name='apellidos' value='$apellidos'>
			<input type='hidden' name='nif' value='$nif'>
			<input type='hidden' name='mail' value='$mail'>
			<input type='hidden' name='pass_enc' value='$pass_enc'>
			<input type='submit' name='enviar' value='Siguiente >>'>
		</form>
		<br><br>

";



cuerpo2();

pie();

?>