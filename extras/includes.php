<?php function encabezado(){ ?>

<html>
<head>
	<title>BIENVENIDO A PADEL MARCHENA</title>
	<link href="estilos.css" rel="stylesheet" type="text/css" />
	<link rel="icon" type="image/ico" href="../imagenes/logo_grande.ico" />
	<meta name="google-site-verification" content="OxJ60NtIuQTT7z3kpGfI06d5dIGavDyfcjwrmCG8qcg" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22367458-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php  		 //     POSICIONAMIENTO ENLACES


$directorio_actual=$_SERVER['PHP_SELF'];    

//echo $_SERVER['PHP_SELF'];
//inicio variable	

$palabras=explode("/",$directorio_actual);
$palabras_contadas=count($palabras);
//muestra por pantalla
//echo "El directorio <b>".$_GET['directorio_actual']."</b> tiene ".count($palabras)." /";

if ($palabras_contadas==4){
	$directorio_padre='../../';
}elseif($palabras_contadas==3){
	$directorio_padre='';
}

    		  // FIN POSICIONAMIENTO  ?>    
<?php
	$f = explode("/", $_SERVER['PHP_SELF']);
	$enlace_seleccionado=$f[count($f)-1];
	$directorio_actual=$f[count($f)-3];
	if($directorio_actual=='usuarios' OR $directorio_actual=='gestion'){
?>
	<link rel="stylesheet" href="<?php echo $directorio_padre; ?>css/lightbox.css" type="text/css" media="screen" />
	<script src="<?php echo $directorio_padre; ?>js/prototype.js" type="text/javascript"></script>
	<script src="<?php echo $directorio_padre; ?>js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
	<script src="<?php echo $directorio_padre; ?>js/lightbox.js" type="text/javascript"></script>
<?php
	}else{
?>
	<link rel="stylesheet" href="<?php echo $directorio_padre; ?>css/lightbox.css" type="text/css" media="screen" />
	<script src="<?php echo $directorio_padre; ?>js/prototype.js" type="text/javascript"></script>
	<script src="<?php echo $directorio_padre; ?>js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
	<script src="<?php echo $directorio_padre; ?>js/lightbox.js" type="text/javascript"></script>
<?php 
	}
} ?>


<?php function cabecera(){ ?>
</head>

<body>

<table border='0' width='100%' height='100%' id='pagina'>

	<tr>
		<td id='franja_izda'>&nbsp;</td>
		
		<td width='1400' id='contenido' align='center' valign='top'>

<?php /* oOoOoOoOoOoOoOoOoOoO		AQUÍ EMPIEZA LA PÁGINA  oOoOoOoOoOoOoOoOoOoOoOoO */ ?>

<table border="0" width='100%' height='100%'>
<tr>
	<td colspan='3' height='50' id='cabecera' align='center'>
		<table border='0' height='100%'>
			<tr>
			<?php
			$f = explode("/", $_SERVER['PHP_SELF']);
			$directorio=$f[count($f)-2];
				if($directorio=="padelmarchena"){
					echo "<td><a href='index.php'><img src='logo.png'></a></td>";
				}else{
					echo "<td><a href='../../../index.php'><img src='../logo.png'></a></td>";
				}
			?>
			</tr>
		</table>
	</td>
</tr>
<?php } ?>

<?php function col_izda1(){ ?>

<tr>
	<td width='200' id='col_izquierda' valign='top'>
<?php } ?>

<?php function enlaces_izda(){
	if($_SESSION['autenticado']=='si'){
	
	$f = explode("/", $_SERVER['PHP_SELF']);
	$enlace_seleccionado=$f[count($f)-1];
	$directorio=$f[count($f)-2];
	$directorio_padre=$f[1];
	//echo $directorio_padre;

?>
<?php  		 //     POSICIONAMIENTO ENLACES


$directorio_actual=$_SERVER['PHP_SELF'];    

//echo $_SERVER['PHP_SELF'];
//inicio variable	

$palabras=explode("/",$directorio_actual);
$palabras_contadas=count($palabras);
//muestra por pantalla
//echo "El directorio <b>".$_GET['directorio_actual']."</b> tiene ".count($palabras)." /";

if ($palabras_contadas==4){
	$directorio_padre='../../';
}elseif($palabras_contadas==3){
	$directorio_padre='';
}

    		  // FIN POSICIONAMIENTO  ?>    
		<table border='0' id='enlaces' width='100%'>
			<tr>
				<td>
				<?php 
				include("conexion.php");
				$ssql_usuario = "SELECT nombre, apellido1 FROM `$tabla1` WHERE id_usuario=$_SESSION[id]";
				$resultado_usuario = mysql_query($ssql_usuario);
				$row_usuario = mysql_fetch_object($resultado_usuario);
				echo "<div id='nombre_usuario'>".$row_usuario->nombre." ".$row_usuario->apellido1;
				echo "<br><div id='enlace_salir'><a href='../../salir.php'>Salir</a></div>";
				echo "</div>"; 
				?>
				
				</td>
			</tr>
			<tr>
				<td <?php if($directorio=="padelmarchena" AND $enlace_seleccionado!="index.php"){echo "id='seleccionado'";} ?>><a href='<?php echo $directorio_padre; ?>index.php'>INICIO</a></td>
			</tr>
			<tr>
				<td <?php if($enlace_seleccionado=="reservas.php"){echo "id='seleccionado'";} ?>><a href='<?php echo $directorio_padre; ?>usuarios/reservas/reservas.php'>RESERVAR</a></td>
			</tr>
			<tr>

				<td <?php if($enlace_seleccionado=="mis_reservas.php"){echo "id='seleccionado'";} ?>><a href='<?php echo $directorio_padre; ?>usuarios/reservas/mis_reservas.php'>MIS RESERVAS</a>

				</td>
			</tr>
			<tr>
				<td <?php if($enlace_seleccionado=="perfil.php"){echo "id='seleccionado'";} ?>><a href='<?php echo $directorio_padre; ?>usuarios/datos/perfil.php'>PERFIL</a></td>
			</tr>
			<tr>
				<td <?php if($directorio=="meapunto"){echo "id='seleccionado_nuevo'";}else{echo "id='enlace_nuevo'";} ?>><a href='<?php echo $directorio_padre; ?>usuarios/meapunto/gestion_meapunto.php'>ME APUNTO!!</a></td>
			</tr>			
		</table>
<?php 
	}
} ?>


<?php function enlaces_izda_portada(){ 
	if($_SESSION['autenticado']=='si'){
	
	$f = explode("/", $_SERVER['PHP_SELF']);
	$enlace_seleccionado=$f[count($f)-1];

	$d = explode("/", $_SERVER['PHP_SELF']);
	$directorio=$f[count($d)-2];

?>
<?php  		 //     POSICIONAMIENTO ENLACES


$directorio_actual=$_SERVER['PHP_SELF'];    

//echo $_SERVER['PHP_SELF'];
//inicio variable	

$palabras=explode("/",$directorio_actual);
$palabras_contadas=count($palabras);
//muestra por pantalla
//echo "El directorio <b>".$_GET['directorio_actual']."</b> tiene ".count($palabras)." /";

if ($palabras_contadas==4){
	$directorio_padre='../../';
}elseif($palabras_contadas==3){
	$directorio_padre='../';
}

    		  // FIN POSICIONAMIENTO  ?> 
		<table border='0' id='enlaces' width='100%'>
			<tr>
				<td>
				<?php 
				include("conexion.php");
				$ssql_usuario = "SELECT nombre, apellido1 FROM `$tabla1` WHERE id_usuario=$_SESSION[id]";
				$resultado_usuario = mysql_query($ssql_usuario);
				$row_usuario = mysql_fetch_object($resultado_usuario);
				echo "<div id='nombre_usuario'>".$row_usuario->nombre." ".$row_usuario->apellido1;
				echo "<br><div id='enlace_salir'><a href='salir.php'>Salir</a></div>";
				echo "</div>"; 
				?>
				
				</td>
			</tr>
			<tr>
				<td <?php if($enlace_seleccionado=="index.php"){echo "id='seleccionado'";} ?>><a href='<?php echo $directorio_padre; ?>index.php'>INICIO</a></td>
			</tr>
			<tr>
				<td <?php if($enlace_seleccionado=="reservas.php"){echo "id='seleccionado'";} ?>><a href='<?php echo $directorio_padre; ?>usuarios/reservas/reservas.php'>RESERVAR</a></td>
			</tr>
			<tr>
				<td <?php if($enlace_seleccionado=="mis_reservas.php"){echo "id='seleccionado'";} ?>><a href='<?php echo $directorio_padre; ?>usuarios/reservas/mis_reservas.php'>MIS RESERVAS</a>
				</td>
			</tr>
			<tr>
				<td <?php if($enlace_seleccionado=="perfil.php"){echo "id='seleccionado'";} ?>><a href='<?php echo $directorio_padre; ?>usuarios/datos/perfil.php'>PERFIL</a></td>
			</tr>
		</table>
<?php 
	}
} ?>

<?php function administrar(){ 
	
	if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){
	$f = explode("/", $_SERVER['PHP_SELF']);
	$enlace_seleccionado=$f[count($f)-1];
	$directorio=$f[count($f)-2];

?>
<?php  		 //     POSICIONAMIENTO ENLACES


$directorio_actual=$_SERVER['PHP_SELF'];    

//echo $_SERVER['PHP_SELF'];
//inicio variable	

$palabras=explode("/",$directorio_actual);
$palabras_contadas=count($palabras);
//muestra por pantalla
//echo "El directorio <b>".$_GET['directorio_actual']."</b> tiene ".count($palabras)." /";

if ($palabras_contadas==4){
	$directorio_padre='../../';
}elseif($palabras_contadas==3){
	$directorio_padre='../';
}

    		  // FIN POSICIONAMIENTO  ?> 
		<table border='0' id='enlaces' width='100%'>
			<tr>
				<td><hr></td>
			</tr>
			<tr>
				<td class='titulo'>ADMINISTRA EL SISTEMA</td>
			</tr>
			<tr>
				<td <?php if($directorio=="gest_usuarios" AND $enlace_seleccionado!='solicitud.php'){echo "id='seleccionado'";} ?>><a href='<?php echo $directorio_padre; ?>gestion/gest_usuarios/usuarios.php'>USUARIOS</a></td>
			</tr>
			<tr>
				<td <?php if($directorio=="gest_pistas"){echo "id='seleccionado'";} ?>><a href='<?php echo $directorio_padre; ?>gestion/gest_pistas/pistas.php'>PISTAS</a></td>
			</tr>
			<tr>
				<td <?php if($directorio=="gest_reservas"){echo "id='seleccionado'";} ?>><a href='<?php echo $directorio_padre; ?>gestion/gest_reservas/gestion_reservas.php'>RESERVAS</a></td>
			</tr>
			<tr>
				<td <?php if($enlace_seleccionado=='solicitud.php'){echo "id='seleccionado'";} ?>><a href='<?php echo $directorio_padre; ?>gestion/gest_usuarios/solicitud.php'>SOLICITUD</a></td>
			</tr>
			<tr>
				<td <?php if($directorio=="gest_meapunto"){echo "id='seleccionado'";} ?>><a href='<?php echo $directorio_padre; ?>gestion/gest_meapunto/alta_meapunto.php'>ME APUNTO!!</a></td>
			</tr>
            <tr>
				<td <?php if($enlace_seleccionado=="caja.php"){echo "id='seleccionado'";} ?>><a href='<?php echo $directorio_padre1; ?>../../usuarios/caja/caja.php'>CAJA!!</a></td>
			</tr>
              <tr>
				<td <?php if($enlace_seleccionado=="lista_alumnos.php"){echo "id='seleccionado'";} ?>><a href='<?php echo $directorio_padre1; ?>../../usuarios/alumnos/lista_alumnos.php'>ALUMNOS</a></td>
			</tr>
              <tr>
				<td <?php if($enlace_seleccionado=="alumnos.php"){echo "id='seleccionado'";} ?>><a href='<?php echo $directorio_padre1; ?>../../usuarios/alumnos/alumnos.php'>NUEVOS ALUMNOS</a></td>
			</tr>

<?php
/*
			<tr>
				<td><a href='http://www.google.es'>TORNEOS</a></td>
			</tr>
*/ 
?>			
		</table>	
<?php 
	}
} ?>


<?php function administrar_portada(){ 
	
	if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){
	$f = explode("/", $_SERVER['PHP_SELF']);
	$enlace_seleccionado=$f[count($f)-1];
	$directorio=$f[count($f)-2];

?>
<?php  		 //     POSICIONAMIENTO ENLACES


$directorio_actual=$_SERVER['PHP_SELF'];    

//echo $_SERVER['PHP_SELF'];
//inicio variable	

$palabras=explode("/",$directorio_actual);
$palabras_contadas=count($palabras);
//muestra por pantalla
//echo "El directorio <b>".$_GET['directorio_actual']."</b> tiene ".count($palabras)." /";

if ($palabras_contadas==4){
	$directorio_padre1='../../';
}elseif($palabras_contadas==3){
	$directorio_padre1='../';
}

    		  // FIN POSICIONAMIENTO  ?> 
		<table border='0' id='enlaces' width='100%'>
			<tr>
				<td><hr></td>
			</tr>
			<tr>
				<td class='titulo'>ADMINISTRA EL SISTEMA</td>
			</tr>
			<tr>
				<td <?php if($directorio=="gest_usuarios" AND $enlace_seleccionado!='solicitud.php'){echo "id='seleccionado'";} ?>><a href='<?php echo $directorio_padre1; ?>gestion/gest_usuarios/usuarios.php'>USUARIOS</a></td>
			</tr>
			<tr>
				<td <?php if($directorio=="gest_pistas"){echo "id='seleccionado'";} ?>><a href='<?php echo $directorio_padre1; ?>gestion/gest_pistas/pistas.php'>PISTAS</a></td>
			</tr>
			<tr>
				<td <?php if($directorio=="gest_reservas"){echo "id='seleccionado'";} ?>><a href='<?php echo $directorio_padre1; ?>gestion/gest_reservas/gestion_reservas.php'>RESERVAS</a></td>
			</tr>
			<tr>
				<td <?php if($enlace_seleccionado=='solicitud.php'){echo "id='seleccionado'";} ?>><a href='<?php echo $directorio_padre1; ?>gestion/gest_usuarios/solicitud.php'>SOLICITUD</a></td>
			</tr>
			<tr>
				<td <?php if($directorio=="gest_meapunto"){echo "id='seleccionado'";} ?>><a href='<?php echo $directorio_padre1; ?>gestion/gest_meapunto/alta_meapunto.php'>ME APUNTO!!</a></td>
			</tr>
             <tr>
				<td <?php if($enlace_seleccionado=="lista_alumnos.php"){echo "id='seleccionado'";} ?>><a href='<?php echo $directorio_padre1; ?>../../usuarios/alumnos/lista_alumnos.php'>ALUMNOS</a></td>
			</tr>
            <tr>
				<td <?php if($enlace_seleccionado=="alumnos.php"){echo "id='seleccionado'";} ?>><a href='<?php echo $directorio_padre; ?>usuarios/alumnos/alumnos.php'>NUEVOS ALUMNOS</a></td>
			</tr>

<?php
/*
			<tr>
				<td><a href='http://www.google.es'>ME APUNTO!!</a></td>
			</tr>
			<tr>
				<td><a href='http://www.google.es'>TORNEOS</a></td>
			</tr>
*/ 
?>			
		</table>	
<?php 
	}
} ?>



<?php function col_izda2(){ ?>
	</td>
<?php } ?>

<?php function cuerpo1(){ ?>
	<td valign='top' align='center' id='muro' width='100%'>
	<table border='0' width='100%'>
		<tr>
			<td align='center'>
<?php } ?>

<?php function noticias1(){ ?>

				<div id='caja'>
					<div class='titulo'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noticias</div>
					<div id='texto_caja'>
						<div class='texto'>

<?php } ?>

<?php function noticias2(){ ?>

						</div>
					</div>
				</div>

			</td>		
		</tr>
<?php } ?>

<?php function muro1(){ ?>
		<tr>
			<td align='center'>
				<div id='caja'>
					<div class='titulo'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mi muro</div>
					<div id='texto_caja'>
						<div class='texto'>
<?php } ?>

<?php function muro2(){ ?>
						</div>
					</div>
				</div>	
			</td>		
		</tr>
<?php } ?>

<?php function partidos1(){ ?>
		<tr>
			<td align='center'>
				<div id='caja'>
					<div class='titulo'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pr&oacute;ximos partidos</div>
					<div id='texto_caja'>
						<div class='texto'>
<?php } ?>

<?php function partidos2(){ ?>						
						</div>
					</div>
				</div>	
<?php } ?>

<?php function cuerpo2(){ ?>
			</td>		
		</tr>	
</table>

	</td>
<?php } ?>

<?php function col_derecha1(){ ?>	
	<td width='200' id='col_derecha' valign='top' align='center'>
<?php } ?>

<?php function eventos1(){ 

	//$f = explode("/", $_SERVER['PHP_SELF']);
	//$enlace_seleccionado=$f[count($f)-1];
	//$directorio_actual=$f[count($f)-2];
	
	//if($directorio_actual=='usuarios' OR $directorio_actual=='gestion' OR $directorio_actual=='extras'){
?>
<?php  		 //     POSICIONAMIENTO ENLACES


$directorio_actual=$_SERVER['PHP_SELF'];    

//echo $_SERVER['PHP_SELF'];
//inicio variable	

$palabras=explode("/",$directorio_actual);
$palabras_contadas=count($palabras);
//muestra por pantalla
//echo "El directorio <b>".$_GET['directorio_actual']."</b> tiene ".count($palabras)." /";

if ($palabras_contadas==4){
	$directorio_padre='../../';
}elseif($palabras_contadas==3){
	$directorio_padre='../';
}


    		  // FIN POSICIONAMIENTO  ?>    
      
<table border='2' id='enlaces_derecha'>

	<tr>				
		<td><a href='<?php echo $directorio_padre; ?>extras/abonos.php'>Reserva de abonos</a></td>
	</tr>	
	<tr>
		<td><a href='<?php echo $directorio_padre; ?>extras/meapunto.php'>Me apunto!</a></td>
	</tr>
	<tr>
		<td><a href='<?php echo $directorio_padre; ?>extras/escuela_padel.pdf' target='_blank'>Escuela de padel</a></td>
	</tr>

	<tr>
		<td><a href='<?php echo $directorio_padre; ?>extras/iii_torneo.php'>III Torneo Padel Marchena</a></td>
	</tr>
     <tr>
		<td><a href='<?php echo $directorio_padre; ?>extras/clasificacion.php'>Clasificacion y horario Torneo </a></td>
        
	</tr>
<?php 	/*
	<tr>
		<td><a href='<?php echo $directorio_padre; ?>extras/torneo_2categoria.php'>Torneo 2&ordf; Categor&iacute;a</a></td>
	</tr>
*/ ?>
	<tr>
	<td><a href='<?php echo $directorio_padre; ?>extras/retos_liga.php'>Retos Liga</a></td>
	</tr>
	<tr>
		<td><a href='<?php echo $directorio_padre; ?>extras/clasificacion.pdf' target='_blank'>Clasificacion Retos Liga</a></td>
	</tr>
    <tr>
		<td><a href='<?php echo $directorio_padre; ?>extras/articulos.php'>Palas Varlion</a></td>
	</tr>
      <tr>
		<td><a href='<?php echo $directorio_padre; ?>extras/catalogo.pdf'>Drop Shot</a></td>
        
	</tr>

</table>
<br></br>
<a href="<?php echo $directorio_padre; ?>images/image-4.jpg" rel="lightbox"><img src="<?php echo $directorio_padre; ?>images/thumb-4.jpg" width="200" height="280" alt="" id='cartel' /></a>

<!--<a href="<?php echo $directorio_padre; ?>images/image-3.jpg" rel="lightbox"><img src="<?php echo $directorio_padre; ?>images/thumb-3.jpg" width="200" height="280" alt="" id='cartel' /></a>
-->
<br>
<br></br>
<a href="<?php echo $directorio_padre; ?>images/image-1.jpg" rel="lightbox"><img src="<?php echo $directorio_padre; ?>images/thumb-1.jpg" width="200" height="280" alt="" id='cartel' /></a>
<br>
<br>


<?php
	}
?>


<?php function eventos2(){ ?>
<?php } ?>

<?php function saldo1(){ ?>
<?php } ?>

<?php function saldo2(){ ?>
<?php } ?>

<?php function torneos1(){ ?>
<?php } ?>

<?php function torneos2(){ ?>
<?php } ?>

<?php function actividades1(){ ?>
<?php } ?>

<?php function actividades2(){ ?>
<?php } ?>

<?php function col_derecha2(){ ?>
	</td>
</tr>
<?php } ?>

<?php function pie(){ ?>
<tr>
	<td colspan='3' height='30'>
		<div id='pie'>
			<table border='0' width='100%' id='pie_pagina'>
				<tr>
					<td ><a href='nota.php'>Aviso legal</a></td>
					<td class='telefono' align='center'>Tel&eacute;fono: 653 68 38 21</td>
					<td align='right'><a href='http://www.gesimar.es'>Desing by Gesimar Inform&aacute;tica</a></td>
				</tr>
			</table>
		
		</div>	
	</td>
</tr>
</table>
		
<?php /* oOoOoOoOoOoOoOoOoOoO		AQUÍ TERMINA LA PÁGINA  oOoOoOoOoOoOoOoOoOoOoOoO */ ?>

		</td>
		<td id='franja_derecha'>&nbsp;</td>			
	</tr>

</table>

</body>

</html>
<?php } ?>