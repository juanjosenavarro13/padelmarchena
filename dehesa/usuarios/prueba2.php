<?php


	$campos1="id_jugador_reserva,id_jugador,id_reserva,nombre_jugador,precio,socio,fecha";
	$datos1="'$id_jugador_reserva1','$cliente','$id_reserva','$nombre_jugador1','$precio1','1','$hoy'";
	$sentencia1="INSERT INTO $tabla10 ($campos1) VALUES ($datos1)";
	$inserta1=mysql_query($sentencia1,$conexion);
	
	$base1=$precio1/1.18;
	$iva1=$precio1-$base1;
	$concepto1="Reserva de la pista $nombre_pista el dia $hoy a las $hora_inicio";
	
	$campos_temporal1="IdPuesto,IdSocio,Vendedor,FechaEmisio,Concepto,Precio,Cantidad,Total,Formapago,Base,Iva,IvaVenta,IdSocioPago";
	$datos_temporal1="'1','$cliente','1','$fecha','$concepto1','$precio1','1','$precio1','1','$base1','$iva1','18','$pago_cliente1'";
	$sentencia_temporal1="INSERT INTO $tabla12 ($campos_temporal1) VALUES ($datos_temporal1)";
//	echo $sentencia_temporal1;
	$inserta_temporal1=mysql_query($sentencia_temporal1,$conexion);
	
//	echo "<br>sentencia jugador 1: ".$sentencia1."<br>";

	$campos2="id_jugador_reserva,id_jugador,id_reserva,nombre_jugador,precio,socio,fecha";
	$datos2="'$id_jugador_reserva2','$id_jugador2','$id_reserva','$nombre_jugador2','$precio2','$j2','$hoy'";
	$sentencia2="INSERT INTO $tabla10 ($campos2) VALUES ($datos2)";
	$inserta2=mysql_query($sentencia2,$conexion);
//	echo "<br>sentencia jugador 2: ".$sentencia2."<br>";

	$base2=$precio2/1.18;
	$iva2=$precio2-$base2;
	$concepto2="Reserva de la pista $nombre_pista el dia $hoy a las $hora_inicio";
	
	$campos_temporal2="IdPuesto,IdSocio,Vendedor,FechaEmisio,Concepto,Precio,Cantidad,Total,Formapago,Base,Iva,IvaVenta,IdSocioPago";
	$datos_temporal2="'1','$id_jugador2','1','$fecha','$concepto2','$precio2','1','$precio2','1','$base2','$iva2','18','$pago_cliente2'";
	$sentencia_temporal2="INSERT INTO $tabla12 ($campos_temporal2) VALUES ($datos_temporal2)";
//	echo $sentencia_temporal2;
	$inserta_temporal2=mysql_query($sentencia_temporal2,$conexion);



	$campos3="id_jugador_reserva,id_jugador,id_reserva,nombre_jugador,precio,socio,fecha";
	$datos3="'$id_jugador_reserva3','$id_jugador3','$id_reserva','$nombre_jugador3','$precio3','$j3','$hoy'";
	$sentencia3="INSERT INTO $tabla10 ($campos3) VALUES ($datos3)";
	$inserta3=mysql_query($sentencia3,$conexion);
//	echo "<br>sentencia jugador 3: ".$sentencia3."<br>";

	$base3=$precio3/1.18;
	$iva3=$precio3-$base3;
	$concepto3="Reserva de la pista $nombre_pista el dia $hoy a las $hora_inicio";
	
	$campos_temporal3="IdPuesto,IdSocio,Vendedor,FechaEmisio,Concepto,Precio,Cantidad,Total,Formapago,Base,Iva,IvaVenta,IdSocioPago";
	$datos_temporal3="'1','$id_jugador3','1','$fecha','$concepto3','$precio3','1','$precio3','1','$base3','$iva3','18','$pago_cliente3'";
	$sentencia_temporal3="INSERT INTO $tabla12 ($campos_temporal3) VALUES ($datos_temporal3)";
//	echo $sentencia_temporal3;
	$inserta_temporal3=mysql_query($sentencia_temporal3,$conexion);


	$campos4="id_jugador_reserva,id_jugador,id_reserva,nombre_jugador,precio,socio,fecha";
	$datos4="'$id_jugador_reserva4','$id_jugador4','$id_reserva','$nombre_jugador4','$precio4','$j4','$hoy'";
	$sentencia4="INSERT INTO $tabla10 ($campos4) VALUES ($datos4)";
	$inserta4=mysql_query($sentencia4,$conexion);
//	echo "<br>sentencia jugador 4: ".$sentencia4."<br>";

	$base4=$precio4/1.18;
	$iva4=$precio4-$base4;
	$concepto4="Reserva de la pista $nombre_pista el dia $hoy a las $hora_inicio";
	
	$campos_temporal4="IdPuesto,IdSocio,Vendedor,FechaEmisio,Concepto,Precio,Cantidad,Total,Formapago,Base,Iva,IvaVenta,IdSocioPago";
	$datos_temporal4="'1','$id_jugador4','1','$fecha','$concepto4','$precio4','1','$precio4','1','$base4','$iva4','18','$pago_cliente4'";
	$sentencia_temporal4="INSERT INTO $tabla12 ($campos_temporal4) VALUES ($datos_temporal4)";
//	echo $sentencia_temporal4;
	$inserta_temporal4=mysql_query($sentencia_temporal4,$conexion);


	$campos_reservas="id_reserva,usuario,pista,horario,dia,hora_inicio";
	$datos_reservas="'$id_reserva','$cliente','$pista','$horario','$dia','$fecha_seg'";	
	$sentencia_reservas="INSERT INTO $tabla5 ($campos_reservas) VALUES ($datos_reservas)";
	$inserta_reservas=mysql_query($sentencia_reservas,$conexion);
//	echo "<br>sentencia reserva: ".$sentencia_reservas;

?>