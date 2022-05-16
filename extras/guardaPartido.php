<?php
include("../conexion.php");
$volver='reto_liga.php';
session_start();


/////////////////////////////////////////////////////////////
$ssql_consu = "select * from `$tabla50` WHERE id=1";
$resultado_consu = mysql_query($ssql_consu);
while ($row=mysql_fetch_object($resultado_consu)){

$id_consulta1=$row->id;
$pareja_uno1=$row->parejauno;
$pareja_dos1=$row->parejados;
$fecha_1=$row->fecha;

}
/////////////////////////////////////////////////////////////
$ssql_consu2 = "select * from `$tabla50` WHERE id=2";
$resultado_consu2 = mysql_query($ssql_consu2);
while ($row=mysql_fetch_object($resultado_consu2)){

$id_consulta2=$row->id;
$pareja_uno2=$row->parejauno;
$pareja_dos2=$row->parejados;
$fecha_2=$row->fecha;

}
/////////////////////////////////////////////////////////////
$ssql_consu3 = "select * from `$tabla50` WHERE id=3";
$resultado_consu3 = mysql_query($ssql_consu3);
while ($row=mysql_fetch_object($resultado_consu3)){

$id_consulta3=$row->id;
$pareja_uno3=$row->parejauno;
$pareja_dos3=$row->parejados;
$fecha_3=$row->fecha;

}
/////////////////////////////////////////////////////////////
$ssql_consu4 = "select * from `$tabla50` WHERE id=4";
$resultado_consu4 = mysql_query($ssql_consu4);
while ($row=mysql_fetch_object($resultado_consu4)){

$id_consulta4=$row->id;
$pareja_uno4=$row->parejauno;
$pareja_dos4=$row->parejados;
$fecha_4=$row->fecha;

}
/////////////////////////////////////////////////////////////
$ssql_consu5 = "select * from `$tabla50` WHERE id=5";
$resultado_consu5 = mysql_query($ssql_consu5);
while ($row=mysql_fetch_object($resultado_consu5)){

$id_consulta5=$row->id;
$pareja_uno5=$row->parejauno;
$pareja_dos5=$row->parejados;
$fecha_5=$row->fecha;

}

if ($id_consulta1==1){ /// si existe una id = 1 actuliza UPDATE
	
		$parejauno1=$_POST['parejauno1'];
		$parejados1=$_POST['parejados1'];
		$fecha=$_POST['fecha1'];

////////////////////////////////////
$id=1;
	
$datos2="id='$id',parejauno='$parejauno1',parejados='$parejados1',fecha='$fecha'";

$sentencia2="UPDATE $base . `$tabla50` SET $datos2 WHERE id=1"; //guarda donde id sea igual a 1

$modifica2=mysql_query($sentencia2,$conexion);

}else{ /// SINO CREA CAMPO NUEVO INSERT INTO 


		$parejauno1=$_POST['parejauno1'];
		$parejados1=$_POST['parejados1'];
		$fecha=$_POST['fecha1'];
		
		
	
		$id=1;	
		$campos="id,parejauno,parejados,fecha";
		$datos="'$id','$parejauno1','$parejados1','$fecha'";
	
		$sentencia="INSERT INTO $tabla50 ($campos) VALUES ($datos)  ";
	
		$inserta=mysql_query($sentencia,$conexion);
		
}



if ($id_consulta2==2){ /// si existe una id = 2 actuliza UPDATE
	
		$parejauno2=$_POST['parejauno2'];
		$parejados2=$_POST['parejados2'];
		$fecha=$_POST['fecha2'];

////////////////////////////////////
$id=2;
	
$datos2="id='$id',parejauno='$parejauno2',parejados='$parejados2',fecha='$fecha'";

$sentencia2="UPDATE $base . `$tabla50` SET $datos2 WHERE id=2"; //guarda donde id sea igual a 2

$modifica2=mysql_query($sentencia2,$conexion);

}else{ /// SINO CREA CAMPO NUEVO INSERT INTO 


		$parejauno2=$_POST['parejauno2'];
		$parejados2=$_POST['parejados2'];
		$fecha=$_POST['fecha2'];
		
		
	
		$id=2;	
		$campos="id,parejauno,parejados,fecha";
		$datos="'$id','$parejauno2','$parejados2','$fecha'";
	
		$sentencia="INSERT INTO $tabla50 ($campos) VALUES ($datos)  ";
	
		$inserta=mysql_query($sentencia,$conexion);
		
}


if ($id_consulta3==3){ /// si existe una id = 2 actuliza UPDATE3
	
		$parejauno3=$_POST['parejauno3'];
		$parejados3=$_POST['parejados3'];
		$fecha=$_POST['fecha3'];

////////////////////////////////////
$id=3;
	
$datos2="id='$id',parejauno='$parejauno3',parejados='$parejados3',fecha='$fecha'";

$sentencia2="UPDATE $base . `$tabla50` SET $datos2 WHERE id=3"; //guarda donde id sea igual a 3

$modifica2=mysql_query($sentencia2,$conexion);

}else{ /// SINO CREA CAMPO NUEVO INSERT INTO 


		$parejauno3=$_POST['parejauno3'];
		$parejados3=$_POST['parejados3'];
		$fecha=$_POST['fecha3'];
		
		
	
		$id=3;	
		$campos="id,parejauno,parejados,fecha";
		$datos="'$id','$parejauno3','$parejados3','$fecha'";
	
		$sentencia="INSERT INTO $tabla50 ($campos) VALUES ($datos)  ";
	
		$inserta=mysql_query($sentencia,$conexion);
		
}


if ($id_consulta4==4){ /// si existe una id = 2 actuliza UPDATE3
	
		$parejauno4=$_POST['parejauno4'];
		$parejados4=$_POST['parejados4'];
		$fecha=$_POST['fecha4'];

////////////////////////////////////
$id=4;
	
$datos2="id='$id',parejauno='$parejauno4',parejados='$parejados4',fecha='$fecha'";

$sentencia2="UPDATE $base . `$tabla50` SET $datos2 WHERE id=4"; //guarda donde id sea igual a 3

$modifica2=mysql_query($sentencia2,$conexion);

}else{ /// SINO CREA CAMPO NUEVO INSERT INTO 


		$parejauno4=$_POST['parejauno4'];
		$parejados4=$_POST['parejados4'];
		$fecha=$_POST['fecha4'];
		
		
	
		$id=3;	
		$campos="id,parejauno,parejados,fecha";
		$datos="'$id','$parejauno4','$parejados4','$fecha'";
	
		$sentencia="INSERT INTO $tabla50 ($campos) VALUES ($datos)  ";
	
		$inserta=mysql_query($sentencia,$conexion);
		
}


if ($id_consulta5==5){ /// si existe una id = 2 actuliza UPDATE3
	
		$parejauno5=$_POST['parejauno5'];
		$parejados5=$_POST['parejados5'];
		$fecha=$_POST['fecha5'];

////////////////////////////////////
$id=5;
	
$datos2="id='$id',parejauno='$parejauno5',parejados='$parejados5',fecha='$fecha'";

$sentencia2="UPDATE $base . `$tabla50` SET $datos2 WHERE id=5"; //guarda donde id sea igual a 3

$modifica2=mysql_query($sentencia2,$conexion);

}else{ /// SINO CREA CAMPO NUEVO INSERT INTO 


		$parejauno5=$_POST['parejauno5'];
		$parejados5=$_POST['parejados5'];
		$fecha=$_POST['fecha5'];
		
		
	
		$id=5;	
		$campos="id,parejauno,parejados,fecha";
		$datos="'$id','$parejauno5','$parejados5','$fecha'";
	
		$sentencia="INSERT INTO $tabla50 ($campos) VALUES ($datos)  ";
	
		$inserta=mysql_query($sentencia,$conexion);
		
}


/*
echo 'Consulta 1, id1='.$id_consulta1.' / ID1_POST='.$_POST['id1'].'<br>';

echo 'Parejauno1='.$pareja_uno1.'<br>';

echo 'Parejados1='.$pareja_dos1.'<br>';

echo 'Fecha1='.$fecha_1.'<br>';

echo '<br><br>';

echo 'Consulta 2, id2='.$id_consulta2.' / ID2_POST='.$_POST['id2'].'<br>';

echo 'Parejauno2='.$pareja_uno2.'<br>';

echo 'Parejados2='.$pareja_dos2.'<br>';

echo 'Fecha2='.$fecha_2.'<br>';

echo '<br><br>';

echo 'Consulta 3, id3='.$id_consulta3.' / ID3_POST='.$_POST['id3'].'<br>';

echo 'Parejauno3='.$pareja_uno3.'<br>';

echo 'Parejados3='.$pareja_dos3.'<br>';

echo 'Fecha3='.$fecha_3.'<br>';

echo '<br><br>';

echo 'Consulta 4, id4='.$id_consulta4.' / ID4_POST='.$_POST['id4'].'<br>';

echo 'Parejauno4='.$pareja_uno4.'<br>';

echo 'Parejados4='.$pareja_dos4.'<br>';

echo 'Fecha4='.$fecha_4.'<br>';

echo '<br><br>';

echo 'Consulta 5, id5='.$id_consulta5.' / ID5_POST='.$_POST['id5'].'<br>';

echo 'Parejauno5='.$pareja_uno5.'<br>';

echo 'Parejados5='.$pareja_dos5.'<br>';

echo 'Fecha5='.$fecha_5.'<br>';

*/




	header ("Location: ".$volver);
?>