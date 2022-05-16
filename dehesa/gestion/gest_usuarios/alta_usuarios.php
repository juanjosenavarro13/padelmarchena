<?php
include ("../seguridad.php");
include("../../includes.php");
include("../../conexion.php");
include("../includes_gestion.php");
include ("calendario/calendario.php");
session_start();

encabezado();

?>
	<script language="JavaScript" src="calendario/javascripts.js"></script>
	<link href='../../estilos.css' rel='stylesheet' type='text/css' />
<?php
cabecera();
col_izda1();
enlaces_izda();
administrar();
col_izda2();
cuerpo1();
enlaces_usuarios();

if($_GET['id_solicitud']==''){
alta_usuarios();
}else{
confirmar_usuarios();
}

cuerpo2();
pie();




?>