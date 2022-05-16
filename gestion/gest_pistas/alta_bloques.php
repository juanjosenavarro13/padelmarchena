<?php
session_start();
include("../../includes.php");
include("../includes_gestion.php");
include("../seguridad.php");
encabezado();
?>
	<link href='../../estilos.css' rel='stylesheet' type='text/css' />
<?php
cabecera();
col_izda1();
enlaces_izda();
administrar();
col_izda2();
cuerpo1();

altaBloques();

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