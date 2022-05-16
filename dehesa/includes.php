<?php function encabezado(){ ?>


<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1"/>
	<title>LA DEHESA centro deportivo - RESERVAS ONLINE DE PISTAS DE PADEL</title>
	<link href="estilos.css" rel="stylesheet" type="text/css" />
	<link rel="icon" type="image/ico" href="../imagenes/icono_dehesa.ico" />
	
	<meta name="google-site-verification" content="OxJ60NtIuQTT7z3kpGfI06d5dIGavDyfcjwrmCG8qcg" />
	<meta name="keywords" content="padel cordoba,padel pozoblanco,padel cubierto,padel,pozoblanco,pistas pozoblanco,paddle,pistas padel,pistas cubiertas"/>
	<meta name="description" content="Tu centro deportivo cubierto en Pozoblanco"/>

<?php } ?>

<?php function cabecera(){ ?>
</head>

<body>

<table border='0' width='100%' height='100%' id='pagina'>

	<tr>
		<td id='franja_izda'>&nbsp;</td>
		
		<td width='1000' id='contenido' align='center' valign='top'>

<?php /* oOoOoOoOoOoOoOoOoOoO		AQUÍ EMPIEZA LA PÁGINA  oOoOoOoOoOoOoOoOoOoOoOoO */ ?>

<table border="0" width='100%' height='100%'>
<tr>
	<td colspan='3' height='50' id='cabecera' align='center'>
		<table border='0' height='100%'>
			<tr>
				<td>
<?php
$f = explode("/", $_SERVER['PHP_SELF']);
$directorio=$f[count($f)-2];

	if($directorio=='sistema'){
		echo "<img src='logo.png'>";
	}elseif($directorio=='dehesa'){
		echo "<img src='logo.png'>";
	}else{
		echo "<img src='../../logo.png'>";
	}

?>
				</td>
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
		<table border='0' id='enlaces' width='100%'>
			<tr>
				<td>
				<?php
				include("conexion.php");
				$nsocio=$_SESSION['id']; 
				$ssql_usuario = "SELECT Nombre, Apellidos, Id FROM `$tabla11` WHERE Id=$_SESSION[id]";
				$resultado_usuario = mysql_query($ssql_usuario);
				$row_usuario = mysql_fetch_object($resultado_usuario);
				$ssql_privi = "SELECT nombre FROM `$tabla6` WHERE id_privilegio=$_SESSION[privilegios]";
				$resultado_privi = mysql_query($ssql_privi);
				$row_privi = mysql_fetch_object($resultado_privi);
				echo "<div id='nombre_usuario'><hr>";
				echo strtoupper($row_privi->nombre)."<hr><br>";
				echo $row_usuario->Nombre." ".$row_usuario->Apellidos."<br>";
				
				if($_SESSION['privilegios']==1 OR $_SESSION['privilegios']==2){
				echo "Socio n&ordm;: ";
				printf("%03d", $row_usuario->Id);
				}
				echo "<br><div id='enlace_salir'><a href='../../salir.php'>Salir</a></div>";
				echo "</div>";
				?>
				
				</td>
			</tr>
			<tr>
				<td <?php if($directorio=="padelmarchena" AND $enlace_seleccionado!="index.php"){echo "id='seleccionado'";} ?>><a href='../../usuarios/reservas/reservas.php'>INICIO</a></td>
			</tr>
			<tr>
				<td <?php if($enlace_seleccionado=="reservas.php"){echo "id='seleccionado'";} ?>><a href='../../usuarios/reservas/reservas.php'>RESERVAR</a></td>
			</tr>
			<tr>

				<td <?php if($enlace_seleccionado=="mis_reservas.php"){echo "id='seleccionado'";} ?>><a href='../../usuarios/reservas/mis_reservas.php'>MIS RESERVAS</a>

				</td>
			</tr>
			<tr>
				<td <?php if($enlace_seleccionado=="perfil.php"){echo "id='seleccionado'";} ?>><a href='../../usuarios/datos/perfil.php'>PERFIL</a></td>
			</tr>
			<tr>
				<td <?php if($directorio=="meapunto"){echo "id='seleccionado_nuevo'";}else{echo "id='enlace_nuevo'";} ?>><a href='../../usuarios/meapunto/gestion_meapunto.php'>BUSCADORES DE PARTIDOS</a></td>
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
		<table border='0' id='enlaces' width='100%'>
			<tr>
				<td>
				<?php 
				include("conexion.php");
				$ssql_usuario = "SELECT Nombre, Apellidos, Id FROM `$tabla11` WHERE Id=$_SESSION[id]";
				$resultado_usuario = mysql_query($ssql_usuario);
				$row_usuario = mysql_fetch_object($resultado_usuario);
				$ssql_privi = "SELECT nombre FROM `$tabla6` WHERE id_privilegio=$_SESSION[privilegios]";
				$resultado_privi = mysql_query($ssql_privi);
				$row_privi = mysql_fetch_object($resultado_privi);
				echo "<div id='nombre_usuario'><hr>";
				echo strtoupper($row_privi->nombre)."<hr><br>";
				echo "<div id='nombre_usuario'>".$row_usuario->Nombre." ".$row_usuario->Apellidos;
					echo "<br>Socio n&ordm;: ";
					printf("%03d", $row_usuario->Id);
				echo "<br><div id='enlace_salir'><a href='salir.php'>Salir</a></div>";
				echo "</div>"; 
				?>
				
				</td>
			</tr>
			<tr>
				<td <?php if($enlace_seleccionado=="index.php"){echo "id='seleccionado'";} ?>><a href='usuarios/reservas/reservas.php'>INICIO</a></td>
			</tr>
			<tr>
				<td <?php if($enlace_seleccionado=="reservas.php"){echo "id='seleccionado'";} ?>><a href='usuarios/reservas/reservas.php'>RESERVAR</a></td>
			</tr>
			<tr>
				<td <?php if($enlace_seleccionado=="mis_reservas.php"){echo "id='seleccionado'";} ?>><a href='usuarios/reservas/mis_reservas.php'>MIS RESERVAS</a>
				</td>
			</tr>
			<tr>
				<td <?php if($enlace_seleccionado=="perfil.php"){echo "id='seleccionado'";} ?>><a href='usuarios/datos/perfil.php'>PERFIL</a></td>
			</tr>
			<tr>
				<td <?php if($directorio=="meapunto"){echo "id='seleccionado_nuevo'";}else{echo "id='enlace_nuevo'";} ?>><a href='../../usuarios/meapunto/gestion_meapunto.php'>BUSCADORES DE PARTIDOS</a></td>
			</tr>			
		</table>
<?php 
	}
} ?>

<?php function administrar(){ 
	
	if($_SESSION['privilegios']=='1' OR $_SESSION['privilegios']=='2'){
	$f = explode("/", $_SERVER['PHP_SELF']);
	$enlace_seleccionado=$f[count($f)-1];
	$directorio=$f[count($f)-2];
	//	ROLES
	// 0 SOCIO
	// 1 ADMINISTRADOR
	// 2 EMPLEADO

?>
		<table border='0' id='enlaces' width='100%'>
			<tr>
				<td><hr></td>
			</tr>
			<tr>
				<td class='titulo'>ADMINISTRA EL SISTEMA</td>
			</tr>
			<?php if($_SESSION['privilegios']==1){ ?>
			<tr>
				<td <?php if($directorio=="gest_usuarios" AND $enlace_seleccionado!='solicitud.php'){echo "id='seleccionado'";} ?>><a href='../../gestion/gest_usuarios/usuarios.php'>USUARIOS</a></td>
			</tr>
			<?php } ?>
			<?php if($_SESSION['privilegios']==1){ ?>
			<tr>
				<td <?php if($directorio=="gest_pistas"){echo "id='seleccionado'";} ?>><a href='../../gestion/gest_pistas/pistas.php'>PISTAS</a></td>
			</tr>
			<?php } ?>
			<tr>
				<td <?php if($directorio=="gest_reservas"){echo "id='seleccionado'";} ?>><a href='../../gestion/gest_reservas/gestion_reservas.php'>RESERVAS</a></td>
			</tr>
			<tr>
				<td <?php if($directorio=="gest_meapunto"){echo "id='seleccionado'";} ?>><a href='../../gestion/gest_meapunto/gestion_meapunto.php'>BUSCADORES DE PARTIDOS</a></td>
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
	
	if($_SESSION['privilegios']=='1' OR $_SESSION['privilegios']=='2'){
	$f = explode("/", $_SERVER['PHP_SELF']);
	$enlace_seleccionado=$f[count($f)-1];
	$directorio=$f[count($f)-2];

?>
		<table border='0' id='enlaces' width='100%'>
			<tr>
				<td><hr></td>
			</tr>
			<tr>
				<td class='titulo'>ADMINISTRA EL SISTEMA</td>
			</tr>
			<?php if($_SESSION['privilegios']==1){ ?>
			<tr>
				<td <?php if($directorio=="gest_usuarios" AND $enlace_seleccionado!='solicitud.php'){echo "id='seleccionado'";} ?>><a href='gestion/gest_usuarios/usuarios.php'>USUARIOS</a></td>
			</tr>
			<?php } ?>
			<?php if($_SESSION['privilegios']==1){ ?>
			<tr>
				<td <?php if($directorio=="gest_pistas"){echo "id='seleccionado'";} ?>><a href='gestion/gest_pistas/pistas.php'>PISTAS</a></td>
			</tr>
			<?php } ?>
			<tr>
				<td <?php if($directorio=="gest_reservas"){echo "id='seleccionado'";} ?>><a href='gestion/gest_reservas/gestion_reservas.php'>RESERVAS</a></td>
			</tr>
			<tr>
				<td <?php if($directorio=="gest_meapunto"){echo "id='seleccionado'";} ?>><a href='gestion/gest_meapunto/gestion_meapunto.php'>BUSCADORES DE PARTIDOS</a></td>
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



<?php function col_izda2(){ ?>
	</td>
<?php } ?>

<?php function cuerpo1(){ 
if($_SESSION['autenticado']=='si'){
?>
	<td valign='top' align='center' id='muro' width='800'>
<?php
}else{
	echo "<td valign='top' align='center' id='muro' width='100%'>";
}
?>
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

<?php function eventos1(){ ?>

<?php } ?>

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
		<div id='pie'>LA DEHESA Centro deportivo ::: Todos los derechos reservados ::: <a href='http://www.ladehesacd.com/'>Ir a la principal</a>&nbsp;&nbsp;&nbsp;&nbsp; <a href='http://www.gesimar.es'>desing by gesimar.</a></div>
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