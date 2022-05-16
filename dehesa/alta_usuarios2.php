<?php
session_start();
include("conexion.php"); //Nos conectamos a la base de datos 
include("includes.php");

encabezado();
?>
	<script language="JavaScript" src="calendario/javascripts.js"></script>
<?php
cabecera();
col_izda1();
enlaces_izda();
administrar();
col_izda2();
cuerpo1();

$nombre=strtoupper($_POST['nombre']);
$apellido1=strtoupper($_POST['apellido1']);
$apellido2=strtoupper($_POST['apellido2']);
$mail=$_POST['mail'];
$telefono1=$_POST['telefono1'];
$ano=$_POST['ano'];
$mes=$_POST['mes'];
$dia=$_POST['dia'];
$fecha_nacimiento=$ano."-".$mes."-".$dia;
$diaalta=date("Y-m-d");
$horaalta=date("H:i:s");
$nota=$_POST['aviso'];
$nick=$_POST['fecha1'];

///////////////////////////////////////////////////////////////////////////////////
/////////////////////////   GENERAR CONTRASEÑA ALEATORIA    ////////////////////////////////

$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
$cad = "";
for($i=0;$i<6;$i++) {
$cad .= substr($str,rand(0,62),1);
}
$pass_enc=md5($cad);
//////////////////////////////				GENERA LA ULTIMA SOLICITUD       ///////////////////////////

$nsolicitud= mysql_query("SELECT MAX(id_solicitud) FROM $tabla7");
	while ($registro=mysql_fetch_row($nsolicitud)){
	       foreach($registro as $clave){ 
	       //echo $clave;
	 	}
	 }

$num_solicitud=$clave+1;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////        	GENERA SI EL DNI ES UNICO     ///////////////////////////////////

$prueba_dni= mysql_query("SELECT COUNT(id_usuario) FROM $tabla1 WHERE dni='$dni'");
	while ($prueba2=mysql_fetch_row($prueba_dni)){
	       foreach($prueba2 as $numero_dni){ 
	 	}
	 }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////        	GENERA SI EL NICK ES UNICO     ///////////////////////////////////

$prueba_nick= mysql_query("SELECT COUNT(id_usuario) FROM $tabla1 WHERE nick='$nick'");
	while ($prueba3=mysql_fetch_row($prueba_nick)){
	       foreach($prueba3 as $numero_nick){ 
	 	}
	 }


//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////        	GENERA SI EL MAIL ES UNICO     ///////////////////////////////////

$prueba_mail= mysql_query("SELECT COUNT(id_usuario) FROM $tabla1 WHERE mail='$mail'");
	while ($mail2=mysql_fetch_row($prueba_mail)){
	       foreach($mail2 as $numero_mail){ 
	 	}
	 }
	 
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

if($_POST['nombre']==""){
	echo "<script>alert('El nombre es un campo obligatorio');</script>"; 
   echo "<script type=\"text/javascript\">
	   history.go(-1);
      </script>";
	exit;
}elseif($_POST['apellido1']==""){
	echo "<script>alert('El primer apellido es un campo obligatorio');</script>"; 
   echo "<script type=\"text/javascript\">
	   history.go(-1);
      </script>";
	exit;
}elseif($_POST['mail']==""){
	echo "<script>alert('El correo electronico es un campo obligatorio');</script>"; 
   echo "<script type=\"text/javascript\">
	   history.go(-1);
      </script>";
	exit;
}elseif($_POST['aviso']!="on"){
	echo "<script>alert('Debe aceptar las condiciones de uso');</script>"; 
   echo "<script type=\"text/javascript\">
	   history.go(-1);
      </script>";
	exit;
}elseif($_POST['telefono1']==""){
	echo "<script>alert('Al menos debe poner un numero de movil');</script>"; 
   echo "<script type=\"text/javascript\">
	   history.go(-1);
      </script>";
	exit;
}elseif($numero_nick>0){
	echo "<script>alert('El nick escogido ya esta en uso');</script>"; 
   echo "<script type=\"text/javascript\">
	   history.go(-1);
      </script>"; 
}elseif($numero_mail>0){
	echo "<script>alert('El Correo electronico ya esta en uso');</script>"; 
   echo "<script type=\"text/javascript\">
	   history.go(-1);
      </script>"; 
}else{

?>


<fieldset id="alta_clientes">
	<legend>DATOS DE LA SOLICITUD DE ALTA</legend>
<?php
	echo "<div id='datos_cliente'>
			Nombre:<b> $nombre </b><br>
			Nick:<b> $nick </b><br>
			Apellido:<b> $apellido1 $apellido2 </b><br>
			E-mail:<b> $mail </b><br>
			M&oacute;vil:<b> $telefono1 </b><br>
			</div>";

$campos="id_solicitud,nombre,nick,pass,apellido1,apellido2,mail,telefono1,fecha_nacimiento,dia_alta,hora_alta,estado_solicitud";
$datos="'$num_solicitud','$nombre','$nick','$pass_enc','$apellido1','$apellido2','$mail','$telefono1','$fecha_nacimiento','$diaalta','$horaalta','1'";

$sentencia="INSERT INTO $tabla7 ($campos) VALUES ($datos)";
//echo $sentencia;
$inserta=mysql_query($sentencia,$conexion);

if($inserta==1){
	echo "<div id='correcto'><b>Gracias por su solicitud de alta. En 24 o 48 horas recibir&aacute; su contrase&ntilde;a en su correo electr&oacute;nico.</b><br><br></div>";

/*
$destino=$mail;

$remite="From: info@padelmarchena.com;";

$asunto="Bienvenido a Padel Marchena online";

$mensaje="Hola <b>".$nombre.".</b><br><br>";
$mensaje.="Le damos la bienvenida al portal de <b>Padel Marchena</b>.<br><br>";
$mensaje.="Sus claves de acceso son:<br><br>";
$mensaje.="Nick: <b>".$nick."</b><br>";
$mensaje.="Contrase&ntilde;a: <b>".$cad."</b><br><br>";
$mensaje.="Puede entrar en su perfil y cambiarla y as&iacute; le resultar&aacute; m&aacute;s f&aacute;cil memorizarla.<br><br>";
$mensaje.="Le damos la bienvenida al portal de <b>Padel Marchena</b>.<br><br>
				Desde ahora podr&aacute; disfrutar las ventajas que te damos.<br><br>
				estre otras opcion, podr&aacute;s:<br><br>
				- Hacer tu <b>reservas</b> de pista online.<br>
				- Conocer <b>qui&oacute;n ocupa</b> las pistas.<br>
				- Saber <b>cuanto falta</b> para tu pr&oacute;ximo partido.<br><br>
				Y adem&aacute;, en el futuro dispodt&aacute;s de m&aacute; ventajas como:<br><br>
				- Sistema <b>ME APUNTO!!</b> para jugar partidos en los que falte alguien.<br>
				- Pago con <b>tarjeta de credito</b> para las reservas de pistas.<br>
				- Estar al tanto de los <b>torneos</b> organizados por el club.<br>
				- Y muchas cosas m&aacute;s.<br><br>";
$mensaje.="Para cualquier consulta sobre nuestros servicios, por favor escriba a: info@padelmarchena.com.<br><br>";
$mensaje.="Nota: Esta direccion fue suministrada por uno de nuestros clientes. Si usted no se ha suscrito como socio, por favor comuniquelo a info@padelmarchena.com.<br>";

mail($destino, $asunto, $mensaje,'Content-type: text/html');				
*/
}else{
	echo "<div id='error'>No ha sido registrar su solicitud de alta. Por favor, p&oacute;ngase en contacto con el aministrador del portal.</div>";
	}

}

?>

</fieldset>

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