<?php
session_start();
include("../includes.php");
?>
	<link href="../estilos.css" rel="stylesheet" type="text/css" />
<?php
encabezado();
cabecera();
col_izda1();
enlaces_izda_portada();
administrar_portada();
col_izda2();
cuerpo1();

$nombre1=$_POST['nombre1'];
$nombre2=$_POST['nombre2'];
$apellidos1=$_POST['apellidos1'];
$apellidos2=$_POST['apellidos2'];
$telefono1=$_POST['telefono1'];
$telefono2=$_POST['telefono2'];
$talla1=$_POST['talla1'];
$talla2=$_POST['talla2'];
$email1=$_POST['email1'];
$email2=$_POST['email2'];

if($nombre1=='' OR $nombre2=='' OR $apellidos1=='' OR $apellidos2=='' OR $telefono1=='' OR $telefono2=='' OR $email1==''){
	echo "<script>alert('Falta alguno de los campos obligatorios');</script>"; 
   echo "<script type=\"text/javascript\">
	   history.go(-1);
      </script>";
	exit;
}else{

$texto_administrador="
<b>Inscripci&oacute;n para el I TORNEO ANIVERSARIO PADEL MARCHENA.</b><br><br>
JUGADOR 1<hr>
$nombre1<br>
$apellidos1<br>
$telefono1<br><br>
$talla1<br>
$email1<br><br><br>

JUGADOR 2<hr>
$nombre2<br>
$apellidos2<br>
$telefono2<br><br>
$talla2<br>
$email2<br>
";

$talla_alumno1="Talla c.: <br> 
$talla1<br>";

////////////////////  FUNCION MAIL ADMINISTRADOR    ////////////////////

$destino="info@padelmarchena.es";
$remite="From: $mail1;";

$asunto="Inscripcion para el I TORNEO ANIVERSARIO PADEL MARCHENA";

/*if(mail($destino, $asunto, $texto_administrador, 'Content-type: text/html')){
echo "<br><br><div id='texto'>Gracias, se han inscrito correctamente al I TORNEO ANIVERSARIO PADEL MARCHENA</div>";
echo "<br> <br><a href='../index.php'>VOLVER</a>";
}
*/

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