<?php

function listaPistas($fecha){

include("../../conexion.php");
session_start();
$dia_ingles=date(l);
$numero_dia_semana=date(w);

	$fecha_seg=explode("-",$fecha);
	$dia_select=$fecha_seg[2];
	$mes_select=$fecha_seg[1];
	$ano_select=$fecha_seg[0];
	$fecha_es=$dia_select . "-" . $mes_select . "-" . $ano_select;
	$numero_dia_semana=calcula_numero_dia_semana($dia_select,$mes_select,$ano_select);
	
if($numero_dia_semana==0){
	$dia_semana="LUNES";
	$campo_bd="lunes";
}elseif($numero_dia_semana==1){
	$dia_semana="MARTES";
	$campo_bd="martes";
}elseif($numero_dia_semana==2){
	$dia_semana="MI&Eacute;RCOLES";
	$campo_bd="miercoles";
}elseif($numero_dia_semana==3){
	$dia_semana="JUEVES";
	$campo_bd="jueves";
}elseif($numero_dia_semana==4){
	$dia_semana="VIERNES";
	$campo_bd="viernes";
}elseif($numero_dia_semana==5){
	$dia_semana="S&Aacute;BADO";
	$campo_bd="sabado";
}elseif($numero_dia_semana==6){
	$dia_semana="DOMINGO";
	$campo_bd="domingo";
}

/////////////////////////////////////////////////////////////
$ssql = "SELECT id_pista FROM `$tabla2`";
$resultado =  mysqli_query($conexion, $ssql);
/////////////////////////////////////////////////////////////
echo "<table id='tabla_pistas' width='500'>";
echo "<tr><td colspan='4' align='center' id='cabecera'>HORARIOS DISPONIBLES PARA EL $dia_semana $fecha_es</td></tr>";
echo "<tr>";

//Imprimimos los nombres de las pistas
$pag=$_SERVER['PHP_SELF'];  // el nombre y ruta de esta misma pÃ¡gina.

$i=1;
$usuario=$_SESSION['id'];
//echo "usuario: ".$usuario;
while ($registro= mysqli_fetch_row($resultado)){

$id_pista=$registro[0];

echo "<td valign='top'>";

	//buscampos los datos y los horarios de cada pista
	/////////////////////////////////////////////////////////////
	$ssql_pista = "SELECT * FROM `$tabla2` WHERE id_pista=$registro[0]";
	$resultado_pista =  mysqli_query($conexion, $ssql_pista);
	/////////////////////////////////////////////////////////////

/* oOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
	oOoOoOoOoOoOoOoOoOoO		VAMOS A BUSCAR EL BLOQUE DE HOY		oOoOoOoOoOoOoOoOoOoO
	oOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO */

	$fecha_unix = strtotime( date($fecha) );

	$ssql_bloque = "SELECT * FROM `$tabla11` WHERE id_pista=$registro[0] AND fecha_inicio<=$fecha_unix AND fecha_fin>=$fecha_unix AND $campo_bd='1' AND activo='1' ORDER BY tipo LIMIT 1";
	$resultado_bloque =  mysqli_query($conexion, $ssql_bloque);
	$registro_bloque =  mysqli_fetch_object($resultado_bloque);
	
	$bloque_hoy=$registro_bloque->id_bloque;

/* oOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
	oOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
	oOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO */

	echo "<table id='subtabla_pistas' width='100%'>";
	
	while ($registro_pista= mysqli_fetch_row($resultado_pista)){
		echo "<tr><td class='titulo'>";
		echo $registro_pista[1];
		echo "</td></tr>";
//imprimimos los horarios


		/////////////////////////////////////////////////////////////
		$ssql_horario = "SELECT * FROM `$tabla3` WHERE bloque=$bloque_hoy ORDER BY inicio";
		$resultado_horario =  mysqli_query($conexion, $ssql_horario);
		/////////////////////////////////////////////////////////////

			while ($registro_horario= mysqli_fetch_row($resultado_horario)){
				$hora_actual=substr($registro_horario[1],0,5);
				$id_hora=$registro_horario[0];
				echo "<tr><td valign='bottom'>";
			/////////////////////////////////////////////////////////////
			$dia_segundos=86400;
			$ssql_ocupada = "SELECT id_reserva,usuario,hora_inicio FROM `$tabla5` WHERE pista='$id_pista' AND horario='$id_hora' AND dia='$fecha'"; //selecciona si la pista esta ocupada. 
			$resultado_ocupada =  mysqli_query($conexion, $ssql_ocupada);
			$row =  mysqli_fetch_object($resultado_ocupada);
			$nr =  mysqli_num_rows($resultado_ocupada);
			
			$ssql_meapunto = "SELECT id_meapunto,completo FROM `$tabla8` WHERE pista='$id_pista' AND horario='$id_hora' AND dia='$fecha'"; //selecciona si la pista esta ocupada. 

			$resultado_meapunto =  mysqli_query($conexion, $ssql_meapunto);
			$row_meapunto =  mysqli_fetch_object($resultado_meapunto);
			$nr_meapunto =  mysqli_num_rows($resultado_meapunto);
			
			$id_meapunto=$row_meapunto->id_meapunto;
			/*echo $id_pista;
			echo "|";
			echo $hora_actual;
			echo "|";
			echo $fecha;*/
			
			//////////////////////////////////////////////////////////////////////////////////////  RESERVA ABONO  ///////////////////////////////
			$ssql_abono = "SELECT * FROM `$tabla24` WHERE pista='$id_pista' AND horario='$hora_actual' AND debaja='0' AND dia='$campo_bd' "; //selecciona si la pista esta ocupada. 

			$resultado_abono =  mysqli_query($conexion, $ssql_abono);
			$row_abono =  mysqli_fetch_object($resultado_abono);
			$nr_abono =  mysqli_num_rows($resultado_abono);
			
			$id_abono=$row_abono->id;
			$nombre_abono=$row_abono->nombre1;
			
			//////////////////////////////////////////////////////////////////////////////////////  RESERVA TEMPORAL  //////////////////////////

			$ssql_temporal = "SELECT nombre1 FROM `$tabla13` WHERE pista='$id_pista' AND hora='$hora_actual' AND dia='$fecha'"; //selecciona si la pista esta ocupada TEMPORAL. 

			$resultado_temporal =  mysqli_query($conexion, $ssql_temporal);
			$row_temporal =  mysqli_fetch_object($resultado_temporal);
			$nr_temporal =  mysqli_num_rows($resultado_temporal);
			
		
			$nombre1=$row_temporal->nombre1;
			//echo $nr_temporal;

			
	if($nr==1){
				$limite_anular=$row->hora_inicio-$dia_segundos;

				$usuario_pista=$row->usuario;
				$id_reserva=$row->id_reserva;
				$ssql_ocupante = "SELECT nombre, apellido1 FROM `$tabla1` WHERE id_usuario='$usuario_pista'"; //busca el nombre del usuario.
			$resultado_ocupante =  mysqli_query($conexion, $ssql_ocupante);
			$row_ocupante =  mysqli_fetch_object($resultado_ocupante);
			
	echo "<div id='ocupada'>";
			if($_SESSION['privilegios']==1 OR $usuario_pista==$usuario){
				echo $row_ocupante->nombre." ".$row_ocupante->apellido1;
			}
			
			//<br><br>ID: $id_reserva
			if($usuario_pista==$usuario OR $_SESSION['privilegios']==1){
			echo "<div id='hora'>$hora_actual </div>";
				//if($limite_anular>=time()){
		
					
			echo "<form action='reservas2.php' method='POST'>";	
			
				echo "<input type='submit' name='hora_actual' value='VER' align='left' class='ver'>";////////////BOTON DE VER
				echo "<input type='hidden' name='hora' value='$id_hora'>";
				echo "<input type='hidden' name='usuario' value='$usuario'>";
				echo "<input type='hidden' name='pista' value='$id_pista'>";
				echo "<input type='hidden' name='dia' value='$fecha'>";
				echo "<input type='hidden' name='pag' value='$pag'>";
				echo "<input type='hidden' name='fecha_seg' value='$fecha_actual_seg'>";
				
			echo "</form>";
			
			
			echo "</form>";
					
			echo "<div id='anular_reserva'><a href='?accion=anular&id=$id_reserva'>anular</a></div>";
				//}
			}
			
	echo "</div><hr></hr>";
	}elseif($nr_abono==1){ // SI HAY ABONO MARCA COMO RESERVADO 
	
		echo "<div id='ocupada'>";
		
		if($_SESSION['privilegios']==1 OR $_SESSION['privilegios']=='522959'){
				echo "<div id='hora'>$hora_actual </div>";
				echo "<b>ABONO </b>";
				echo "<form action='../abono/modifica_alumnos.php?id=$id_abono' method='POST'>";	
				echo "<input type='submit' name='hora_actual' value='VER' align='left' class='ver'>";////////////BOTON DE VER
				echo "<a style='font-size:9px; margin-top:10px'> ($nombre_abono ...)</a>";
				echo "<input type='hidden' name='hora' value='$id_hora'>";
				echo "<input type='hidden' name='usuario' value='$usuario'>";
				echo "<input type='hidden' name='pista' value='$id_pista'>";
				echo "<input type='hidden' name='dia' value='$fecha'>";
				echo "<input type='hidden' name='pag' value='$pag'>";
				echo "<input type='hidden' name='fecha_seg' value='$fecha_actual_seg'>";
				echo "</form>";
				}
				
		echo "</div><hr>";
		
	}else{
				$hora_hoy=date('H:i');
				$hora_hoy_seg=time($hora_hoy);
				
				$fecha_seg=explode("-",$fecha);
				$dia_seg=$fecha_seg[2];
				$mes_seg=$fecha_seg[1];
				$ano_seg=$fecha_seg[0];
				
				$hora_div=explode(":",$registro_horario[1]);
				$hora_seg=$hora_div[0];
				$min_seg=$hora_div[1];
//				echo $min_seg;
//				echo "<br>$hora_seg,$min_seg,00,$mes_seg,$dia_seg,$ano_seg";
				$fecha_actual_seg=mktime($hora_seg,15,$min_seg,$mes_seg,$dia_seg,$ano_seg); //hora,minutos,segundos,mes,dia,año
//				echo "<br>".$fecha_actual_seg;
//				echo "<br>".time();

				$fecha_hoy_seg=time();
			if($fecha_actual_seg<=$fecha_hoy_seg){
					echo "<div id='pasado'>&nbsp;</div>";
			}else{
			/////////////////////////////////////////////////////////////				
				echo "<form action='reservas2.php' method='POST'>";
				
			if($nr_meapunto==1){
					echo "<input type='submit' name='hora_actual' value='$hora_actual' id='meapunto'>";
					echo "<input type='hidden' name='meapunto' value='$id_meapunto'>";
					
			}
						
			if($_SESSION['privilegios']==1){////////////////////////// SI ERES ADMINISTRADOR  //////////
					
				if($nr_temporal>=1){///////////// SI ESTA PISTA Y HORA TIENE ALGUN TEMPORAL  //////////////////
					
					 echo "<input type='submit' name='hora_actual' value='$hora_actual (*)' id='reservar'>"; 
					 
				 }else{echo "<input type='submit' name='hora_actual' value='$hora_actual' id='reservar'>";}/// SI NO TIENE TEMPORAL
					 

			}else{echo "<input type='submit' name='hora_actual' value='$hora_actual' id='reservar'>";}/// SI NO ES ADMINISTRADOR
	
			
				//echo $fecha_actual_seg."<br>".time();
				echo "<input type='hidden' name='hora' value='$id_hora'>";
				echo "<input type='hidden' name='usuario' value='$usuario'>";
				echo "<input type='hidden' name='pista' value='$id_pista'>";
				echo "<input type='hidden' name='dia' value='$fecha'>";
				echo "<input type='hidden' name='pag' value='$pag'>";
				echo "<input type='hidden' name='fecha_seg' value='$fecha_actual_seg'>";
				echo "</form>";
				
				echo "</td></tr>";
				}
			
			}
		}		
		echo "</td></tr>";
	}
	echo "</table>";

echo "</td>";

}
		echo "</tr>";
	echo "</table>";

	

}



?>