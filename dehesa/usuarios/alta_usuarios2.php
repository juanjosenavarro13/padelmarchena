<?php
session_start();
include("../conexion.php"); //Nos conectamos a la base de datos 
?>
<?php

$nombre=strtoupper($_POST['nombre']);
$apellido1=strtoupper($_POST['apellido1']);
$apellido2=strtoupper($_POST['apellido2']);
$dni=strtoupper($_POST['dni']);
$mail=$_POST['mail'];
$pass=$_POST['pass'];
$telefono1=$_POST['telefono1'];
$telefono2=$_POST['telefono2'];
$calle=strtoupper($_POST['calle']);
$numero=$_POST['numero'];
$bloque=$_POST['bloque'];
$puerta=$_POST['puerta'];
$ano=$_POST['ano'];
$mes=$_POST['mes'];
$dia=$_POST['dia'];
$fecha_nacimiento=$ano."-".$mes."-".$dia;
$diaalta=date("Y-m-d");
$horaalta=date("H:i:s");
$nota=$_POST['aviso'];
$nick=$_POST['nickname'];

///////////////////////////////////////////////////////////////////////////////////
/////////////////////////   GENERAR CONTRASEÑA ALEATORIA    ////////////////////////////////

$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
$cad = "";
for($i=0;$i<6;$i++) {
$cad .= substr($str,rand(0,62),1);
}
$pass_enc=md5($cad);
//////////////////////////////				GENERA LA ULTIMA SOLICITUD       ///////////////////////////

$nsolicitud= mysql_query("SELECT MAX(id_usuario) FROM $tabla1");
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
}elseif($_POST['dni']==""){
	echo "<script>alert('El DNI es un campo obligatorio');</script>"; 
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
}elseif($numero_dni>0){
	echo "<script>alert('El DNI ya esta en uso');</script>"; 
   echo "<script type=\"text/javascript\">
	   history.go(-1);
      </script>";
}elseif($numero_mail>0){
	echo "<script>alert('El Correo electronico ya esta en uso');</script>"; 
   echo "<script type=\"text/javascript\">
	   history.go(-1);
      </script>"; 
}elseif($numero_metre>0){
	echo "<script>alert('Ese Numero de metre ya esta en uso');</script>"; 
   echo "<script type=\"text/javascript\">
	   history.go(-1);
      </script>"; 
}else{

?>


<fieldset id="solicitud_clientes">
	<legend>DATOS DE LA SOLICITUD DE ALTA</legend>
<?php
	
echo "nombre: ".$nombre."<br>";
echo "nick: ".$nick."<br>";
echo "primer apellido: ".$apellido1."<br>";
echo "segundo pellido: ".$apellido2."<br>";
echo "DNI: ".$dni."<br>";
echo "numero en metre: ".$id_metre."<br>";
echo "correo: ".$mail."<br>";
echo "movil: ".$telefono1."<br>";
echo "otro numero: ".$telefono2."<br>";
echo "calle: ".$calle."<br>";
echo "numero: ".$numero."<br>";
echo "bloque: ".$bloque."<br>";
echo "puerta: ".$puerta."<br>";
echo "pass: ".$cad."<br>";
echo "Fecha de nacimiento: ".$fecha_nacimiento."<br><br>";
$campos="id_usuario,nombre,nick,pass,apellido1,apellido2,dni,mail,telefono1,telefono2,calle,numero,bloque,puerta,fecha_nacimiento,dia_alta,hora_alta";
$datos="'$num_solicitud','$nombre','$nick','$pass_enc','$apellido1','$apellido2','$dni','$mail','$telefono1','$telefono2','$calle','$numero','$bloque','$puerta','$fecha_nacimiento','$diaalta','$horaalta'";

$sentencia="INSERT INTO $tabla1 ($campos) VALUES ($datos)";
echo $sentencia;
$inserta=mysql_query($sentencia,$conexion);

if($inserta==1){
	echo "<div id='correcto'><b>Gracias por darse de alta. En 24 o 48 horas recibir&aacute; su contrase&ntilde;a en su correo electronico.</b><br><br></div>";
}else{
	echo "<div id='error'>No ha sido registrar su solicitud de alta. Por favor, pongase en contacto con el aministrador del portal.</div>";
	}

}

?>

</fieldset>
