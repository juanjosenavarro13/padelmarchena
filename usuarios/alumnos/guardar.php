<?php
include("../../conexion.php");
$alumnos='lista_alumnos.php';
session_start();

$nombre=$_POST['nombre'];

$apellido=$_POST['apellido'];

$telefono=$_POST['telefono'];

$monitor=$_POST['monitor'];

//$mes=$_POST['mes'];

$mes=date(m);

$ano=date('y');

$baja=" ";

$n_cuenta=$_POST['n_cuenta'];
$n_cuenta2=$_POST['n_cuenta2'];
$n_cuenta3=$_POST['n_cuenta3'];
$n_cuenta4=$_POST['n_cuenta4'];
$p_personalizada=$_POST['p_personalizada'];
/// INFANTIL
$id1=$_POST['id1'];
$id2=$_POST['id2'];
$id3=$_POST['id3'];
$id4=$_POST['id4'];
$id5=$_POST['id5'];
$id6=$_POST['id6'];
$id7=$_POST['id7'];
$id8=$_POST['id8'];
/// ADULTO
$id9=$_POST['id9'];
$id10=$_POST['id10'];
$id11=$_POST['id11'];
/// PERSONALIZADA
$id12=$_POST['id12'];

$nreserva= mysql_query("SELECT MAX(id_alumno) FROM $tabla14");

	while ($registro=mysql_fetch_row($nreserva)){
	       foreach($registro as $clave){ 
	       //echo $clave;
	 	}
	 }



if ($id1>=1){
	
		$id='1';
		$numero_alumno='2';
		$horas='1';
		$precio='30';
		$f_semana='NO';
			
	$id_alumno=$clave+1;
	
		$campos="id,nombre,apellido,telefono,numero_alumno,horas,precio,f_semana,id_alumno,n_cuenta,n_cuenta2,n_cuenta3,n_cuenta4,mes,debaja,ano";
		$datos="'$id','$nombre','$apellido','$telefono','$numero_alumno','$horas','$precio','$f_semana','$id_alumno','$n_cuenta','$n_cuenta2','$n_cuenta3','$n_cuenta4','$mes','$baja',$ano";
	
		$sentencia="INSERT INTO $tabla14 ($campos) VALUES ($datos) ";
	
		$inserta=mysql_query($sentencia,$conexion);
		
	
	header ("Location: ".$alumnos);
	
}

if ($id2>=1){
	
		$id='2';
		$numero_alumno='3';
		$horas='1';
		$precio='20';
		$f_semana='NO';
	
	$id_alumno=$clave+1;
	
		$campos="id,nombre,apellido,telefono,numero_alumno,horas,precio,f_semana,id_alumno,n_cuenta,n_cuenta2,n_cuenta3,n_cuenta4,mes,debaja";
		$datos="'$id','$nombre','$apellido','$telefono','$numero_alumno','$horas','$precio','$f_semana','$id_alumno','$n_cuenta','$n_cuenta2','$n_cuenta3','$n_cuenta4','$mes','$baja'";
		
		$sentencia="INSERT INTO $tabla14 ($campos) VALUES ($datos) ";
	
		$inserta=mysql_query($sentencia,$conexion);
		
	
	header ("Location: ".$alumnos);
}
if ($id3>=1){
	
		$id='3';
		$numero_alumno='3';
		$horas='2';
		$precio='40';
		$f_semana='SI';
	
	$id_alumno=$clave+1;
	
		$campos="id,nombre,apellido,telefono,numero_alumno,horas,precio,f_semana,id_alumno,n_cuenta,n_cuenta2,n_cuenta3,n_cuenta4,mes,debaja";
		$datos="'$id','$nombre','$apellido','$telefono','$numero_alumno','$horas','$precio','$f_semana','$id_alumno','$n_cuenta','$n_cuenta2','$n_cuenta3','$n_cuenta4','$mes',$baja";
	
		$sentencia="INSERT INTO $tabla14 ($campos) VALUES ($datos) ";
	
		$inserta=mysql_query($sentencia,$conexion);
		
	
	header ("Location: ".$alumnos);
}
if ($id4>=1){
	
		$id='4';
		$numero_alumno='4 o 5';
		$horas='1';
		$precio='15';
		$f_semana='NO';
	
	$id_alumno=$clave+1;
	
		$campos="id,nombre,apellido,telefono,numero_alumno,horas,precio,f_semana,id_alumno,n_cuenta,n_cuenta2,n_cuenta3,n_cuenta4,mes,debaja";
		$datos="'$id','$nombre','$apellido','$telefono','$numero_alumno','$horas','$precio','$f_semana','$id_alumno','$n_cuenta','$n_cuenta2','$n_cuenta3','$n_cuenta4','$mes','$baja'";
	
		$sentencia="INSERT INTO $tabla14 ($campos) VALUES ($datos) ";
	
		$inserta=mysql_query($sentencia,$conexion);
		
	
	header ("Location: ".$alumnos);
}
if ($id5>=1){
	
		$id='5';
		$numero_alumno='4 o 5';
		$horas='1';
		$precio='20';
		$f_semana='SI';
	
	$id_alumno=$clave+1;
	
		$campos="id,nombre,apellido,telefono,numero_alumno,horas,precio,f_semana,id_alumno,n_cuenta,n_cuenta2,n_cuenta3,n_cuenta4,mes,debaja";
		$datos="'$id','$nombre','$apellido','$telefono','$numero_alumno','$horas','$precio','$f_semana','$id_alumno','$n_cuenta','$n_cuenta2','$n_cuenta3','$n_cuenta4','$mes','$baja'";
	
		$sentencia="INSERT INTO $tabla14 ($campos) VALUES ($datos) ";
	
		$inserta=mysql_query($sentencia,$conexion);
		
	
	header ("Location: ".$alumnos);
}
if ($id6>=1){
	
		$id='6';
		$numero_alumno='4 o 5';
		$horas='2';
		$precio='30';
		$f_semana='SI';
	
	$id_alumno=$clave+1;
	
		$campos="id,nombre,apellido,telefono,numero_alumno,horas,precio,f_semana,id_alumno,n_cuenta,n_cuenta2,n_cuenta3,n_cuenta4,mes,debaja";
		$datos="'$id','$nombre','$apellido','$telefono','$numero_alumno','$horas','$precio','$f_semana','$id_alumno','$n_cuenta','$n_cuenta2','$n_cuenta3','$n_cuenta4','$mes',$baja";
	
		$sentencia="INSERT INTO $tabla14 ($campos) VALUES ($datos) ";
	
		$inserta=mysql_query($sentencia,$conexion);
		
	
	header ("Location: ".$alumnos);
}
if ($id7>=1){
	
		$id='7';
		$numero_alumno='6 o 8';
		$horas='1';
		$precio='10';
		$f_semana='NO';
		
	$id_alumno=$clave+1;
	
		$campos="id,nombre,apellido,telefono,numero_alumno,horas,precio,f_semana,id_alumno,n_cuenta,n_cuenta2,n_cuenta3,n_cuenta4,mes,debaja";
		$datos="'$id','$nombre','$apellido','$telefono','$numero_alumno','$horas','$precio','$f_semana','$id_alumno','$n_cuenta','$n_cuenta2','$n_cuenta3','$n_cuenta4','$mes','$baja'";
	
		$sentencia="INSERT INTO $tabla14 ($campos) VALUES ($datos) ";
	
		$inserta=mysql_query($sentencia,$conexion);
		
	
	header ("Location: ".$alumnos);
}
if ($id8>=1){
	
		$id='8';
		$numero_alumno='6 o 8';
		$horas='2';
		$precio='20';
		$f_semana='SI';
	
	$id_alumno=$clave+1;
	
		$campos="id,nombre,apellido,telefono,numero_alumno,horas,precio,f_semana,id_alumno,n_cuenta,n_cuenta2,n_cuenta3,n_cuenta4,debaja,mes";
		$datos="'$id','$nombre','$apellido','$telefono','$numero_alumno','$horas','$precio','$f_semana','$id_alumno','$n_cuenta','$n_cuenta2','$n_cuenta3','$n_cuenta4','$baja','$mes'";
	
		$sentencia="INSERT INTO $tabla14 ($campos) VALUES ($datos) ";
	
		$inserta=mysql_query($sentencia,$conexion);
		
	
	header ("Location: ".$alumnos);
}
if ($id9>=1){
	
		$id='9';
		$numero_alumno='4';
		$horas='1';
		$precio='20';
		$f_semana='NO';
	
	$id_alumno=$clave+1;
	
		$campos="id,nombre,apellido,telefono,numero_alumno,horas,precio,f_semana,id_alumno,n_cuenta,n_cuenta2,n_cuenta3,n_cuenta4,debaja,mes";
		$datos="'$id','$nombre','$apellido','$telefono','$numero_alumno','$horas','$precio','$f_semana','$id_alumno','$n_cuenta','$n_cuenta2','$n_cuenta3','$n_cuenta4','$baja','$mes'";
	
		$sentencia="INSERT INTO $tabla14 ($campos) VALUES ($datos) ";
	
		$inserta=mysql_query($sentencia,$conexion);
		
	
	header ("Location: ".$alumnos);
}
if ($id10>=1){
	
		$id='10';
		$numero_alumno='3';
		$horas='1';
		$precio='25';
		$f_semana='NO';
	
	$id_alumno=$clave+1;
	
		$campos="id,nombre,apellido,telefono,numero_alumno,horas,precio,f_semana,id_alumno,n_cuenta,n_cuenta2,n_cuenta3,n_cuenta4,debaja,mes";
		$datos="'$id','$nombre','$apellido','$telefono','$numero_alumno','$horas','$precio','$f_semana','$id_alumno','$n_cuenta','$n_cuenta2','$n_cuenta3','$n_cuenta4','$baja','$mes'";
	
		$sentencia="INSERT INTO $tabla14 ($campos) VALUES ($datos) ";
	
		$inserta=mysql_query($sentencia,$conexion);
		
	
	header ("Location: ".$alumnos);
}
if ($id11>=1){
	
		$id='11';
		$numero_alumno='3';
		$horas='1';
		$precio='50';
		$f_semana='SI';
	
	$id_alumno=$clave+1;
	
		$campos="id,nombre,apellido,telefono,numero_alumno,horas,precio,f_semana,id_alumno,n_cuenta,n_cuenta2,n_cuenta3,n_cuenta4,debaja,mes";
		$datos="'$id','$nombre','$apellido','$telefono','$numero_alumno','$horas','$precio','$f_semana','$id_alumno','$n_cuenta','$n_cuenta2','$n_cuenta3','$n_cuenta4','$baja','$mes'";
	
		$sentencia="INSERT INTO $tabla14 ($campos) VALUES ($datos) ";
	
		$inserta=mysql_query($sentencia,$conexion);
		
	
	header ("Location: ".$alumnos);
}

if ($id12=='GUARDAR'){
	
		$id='12';
		$numero_alumno='0';
		$horas='0';
		$precio=$p_personalizada;
		$f_semana='';
	
	$id_alumno=$clave+1;
	
		$campos="id,nombre,apellido,telefono,numero_alumno,horas,precio,f_semana,id_alumno,n_cuenta,n_cuenta2,n_cuenta3,n_cuenta4,monitor,debaja,mes,ano";
		$datos="'$id','$nombre','$apellido','$telefono','$numero_alumno','$horas','$precio','$f_semana','$id_alumno','$n_cuenta','$n_cuenta2','$n_cuenta3','$n_cuenta4','$monitor','$baja','$mes','$ano'";
	
		$sentencia="INSERT INTO $tabla14 ($campos) VALUES ($datos) ";
	
		$inserta=mysql_query($sentencia,$conexion);
		
	
	header ("Location: ".$alumnos);
}
	
?>