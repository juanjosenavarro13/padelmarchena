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
}elseif($numero_dia_semana==1){
	$dia_semana="MARTES";
}elseif($numero_dia_semana==2){
	$dia_semana="MI&Eacute;RCOLES";
}elseif($numero_dia_semana==3){
	$dia_semana="JUEVES";
}elseif($numero_dia_semana==4){
	$dia_semana="VIERNES";
}elseif($numero_dia_semana==5){
	$dia_semana="S&Aacute;BADO";
}elseif($numero_dia_semana==6){
	$dia_semana="DOMINGO";
}

/////////////////////////////////////////////////////////////
$ssql = "SELECT id_pista FROM `$tabla2`";
$resultado = mysql_query($ssql);
/////////////////////////////////////////////////////////////
echo "<table id='tabla_pistas' width='500'>";
echo "<tr><td colspan='4' align='center' id='cabecera'>HORARIOS DISPONIBLES PARA EL $dia_semana $fecha_es</td></tr>";
echo "<tr>";

//Imprimimos los nombres de las pistas
$pag=$_SERVER['PHP_SELF'];  // el nombre y ruta de esta misma pÃ¡gina.

$i=1;
$usuario=$_SESSION['id'];
//echo "usuario: ".$usuario;
while ($registro=mysql_fetch_row($resultado)){

$id_pista=$registro[0];

echo "<td valign='top'>";

	//buscampos los datos y los horarios de cada pista
	/////////////////////////////////////////////////////////////
	$ssql_pista = "SELECT * FROM `$tabla2` WHERE id_pista=$registro[0]";
	$resultado_pista = mysql_query($ssql_pista);
	/////////////////////////////////////////////////////////////

	echo "<table id='subtabla_pistas' width='100%'>";
	
	while ($registro_pista=mysql_fetch_row($resultado_pista)){
		echo "<tr><td class='titulo'>";
		echo $registro_pista[1];
		echo "</td></tr>";
//imprimimos los horarios

$numero_dia_semana=calcula_numero_dia_semana($dia_select,$mes_select,$ano_select);

		if($numero_dia_semana==5 OR $numero_dia_semana==6){
			$bloque_hoy=$registro_pista[4];
		}else{
			$bloque_hoy=$registro_pista[3];
		}

		/////////////////////////////////////////////////////////////
		$ssql_horario = "SELECT * FROM `$tabla3` WHERE bloque=$bloque_hoy ORDER BY inicio";
		$resultado_horario = mysql_query($ssql_horario);
		/////////////////////////////////////////////////////////////

			while ($registro_horario=mysql_fetch_row($resultado_horario)){
				$hora_actual=substr($registro_horario[1],0,5);
				$id_hora=$registro_horario[0];
				echo "<tr><td valign='bottom'>";
			/////////////////////////////////////////////////////////////
			$dia_segundos=86400;
			$ssql_ocupada = "SELECT id_reserva,usuario,hora_inicio FROM `$tabla5` WHERE pista='$id_pista' AND horario='$id_hora' AND dia='$fecha'"; //selecciona si la pista esta ocupada. 
			$resultado_ocupada = mysql_query($ssql_ocupada);
			$row = mysql_fetch_object($resultado_ocupada);
			$nr = mysql_num_rows($resultado_ocupada);
			
			$ssql_meapunto = "SELECT id_meapunto,completo FROM `$tabla8` WHERE pista='$id_pista' AND horario='$id_hora' AND dia='$fecha'"; //selecciona si la pista esta ocupada. 

			$resultado_meapunto = mysql_query($ssql_meapunto);
			$row_meapunto = mysql_fetch_object($resultado_meapunto);
			$nr_meapunto = mysql_num_rows($resultado_meapunto);
			$id_meapunto=$row_meapunto->id_meapunto;

			
			if($nr==1){
				$limite_anular=$row->hora_inicio-$dia_segundos;

				$usuario_pista=$row->usuario;
				$id_reserva=$row->id_reserva;
				$ssql_ocupante = "SELECT Nombre, Apellidos FROM `$tabla11` WHERE Id='$usuario_pista'"; //busca el nombre del usuario.
			$resultado_ocupante = mysql_query($ssql_ocupante);
			$row_ocupante = mysql_fetch_object($resultado_ocupante);
			
			echo "<div id='ocupada'>";
			if($_SESSION['privilegios']==1 OR $usuario_pista==$usuario OR $_SESSION['privilegios']==2){
				echo $row_ocupante->Nombre." ".$row_ocupante->Apellidos;
			}
			
			if($usuario_pista==$usuario OR $_SESSION['privilegios']==1 OR $_SESSION['privilegios']==2){
			echo "<div id='hora'>$hora_actual</div>";
				if($limite_anular>=time()){
			echo "<div id='anular_reserva'><a href='?accion=anular&id=$id_reserva'>anular </a>&nbsp;&nbsp;&nbsp;&nbsp;</div>";
				}
			}
			
			echo "<br></div>";
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
				$precio_soc=$registro_horario[4];
				$precio_nosoc=$registro_horario[5];
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
					}else{
					echo "<input type='submit' name='hora_actual' value='$hora_actual' id='reservar'>";
					}
				//echo $fecha_actual_seg."<br>".time();
				echo "<input type='hidden' name='hora' value='$id_hora'>";
				echo "<input type='hidden' name='usuario' value='$usuario'>";
				echo "<input type='hidden' name='pista' value='$id_pista'>";
				echo "<input type='hidden' name='dia' value='$fecha'>";
				echo "<input type='hidden' name='pag' value='$pag'>";
				echo "<input type='hidden' name='fecha_seg' value='$fecha_actual_seg'>";
				echo "<input type='hidden' name='precio_soc' value='$precio_soc'>";
				echo "<input type='hidden' name='precio_nosoc' value='$precio_nosoc'>";
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