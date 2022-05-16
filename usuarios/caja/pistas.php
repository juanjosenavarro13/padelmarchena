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
	$ano_select2=$ano_select-2000;
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
$resultado = mysqli_query($conexion, $ssql);
/////////////////////////////////////////////////////////////
echo "<table id='tabla_pistas' width='500'>";
echo "<tr><td colspan='4' align='center' id='cabecera'>HORARIOS DISPONIBLES PARA EL $dia_semana $fecha_es</td></tr>";
echo "<tr>";

//Imprimimos los nombres de las pistas
$pag=$_SERVER['PHP_SELF'];  // el nombre y ruta de esta misma pÃ¡gina.

$i=1;
$usuario=$_SESSION['id'];
//echo "usuario: ".$usuario;
while ($registro=mysqli_fetch_row($resultado)){

$id_pista=$registro[0];

echo "<td valign='top' >";

	//buscampos los datos y los horarios de cada pista
	/////////////////////////////////////////////////////////////
	$ssql_pista = "SELECT * FROM `$tabla2` WHERE id_pista=$registro[0]";
	$resultado_pista = mysqli_query($conexion, $ssql_pista);
	/////////////////////////////////////////////////////////////

/* oOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
	oOoOoOoOoOoOoOoOoOoO		VAMOS A BUSCAR EL BLOQUE DE HOY		oOoOoOoOoOoOoOoOoOoO
	oOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO */

	$fecha_unix = strtotime( date($fecha) );

	$ssql_bloque = "SELECT * FROM `$tabla11` WHERE id_pista=$registro[0] AND fecha_inicio<=$fecha_unix AND fecha_fin>=$fecha_unix AND $campo_bd='1' AND activo='1' ORDER BY tipo LIMIT 1";
	$resultado_bloque = mysqli_query($conexion, $ssql_bloque);
	$registro_bloque = mysqli_fetch_object($resultado_bloque);
	
	$bloque_hoy=$registro_bloque->id_bloque;

/* oOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
	oOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO
	oOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoOoO */

	echo "<table id='subtabla_pistas' width='100%'>";
	
	while ($registro_pista=mysqli_fetch_row($resultado_pista)){
		echo "<tr><td class='titulo'>";
		echo $registro_pista[1];
		echo "</td></tr>";
//imprimimos los horarios


		/////////////////////////////////////////////////////////////
		$ssql_horario = "SELECT * FROM `$tabla3` WHERE bloque=$bloque_hoy ORDER BY inicio";
		$resultado_horario = mysqli_query($conexion, $ssql_horario);
		/////////////////////////////////////////////////////////////

			while ($registro_horario=mysqli_fetch_row($resultado_horario)){
				$hora_actual=substr($registro_horario[1],0,5);
				$id_hora=$registro_horario[0];
				echo "<tr><td valign='bottom'>";
			/////////////////////////////////////////////////////////////
			$dia_segundos=86400;
			$ssql_ocupada = "SELECT id_reserva,usuario,hora_inicio FROM `$tabla5` WHERE pista='$id_pista' AND horario='$id_hora' AND dia='$fecha'"; //selecciona si la pista esta ocupada. 
			$resultado_ocupada = mysqli_query($conexion, $ssql_ocupada);
			$row = mysqli_fetch_object($resultado_ocupada);
			$nr = mysqli_num_rows($resultado_ocupada);
			
			$ssql_meapunto = "SELECT id_meapunto,completo FROM `$tabla8` WHERE pista='$id_pista' AND horario='$id_hora' AND dia='$fecha'"; //selecciona si la pista esta ocupada. 

			$resultado_meapunto = mysqli_query($conexion, $ssql_meapunto);
			$row_meapunto = mysqli_fetch_object($resultado_meapunto);
			$nr_meapunto = mysqli_num_rows($resultado_meapunto);
			
			$id_meapunto=$row_meapunto->id_meapunto;
			/*echo $id_pista;
			echo "|";
			echo $hora_actual;
			echo "|";
			echo $fecha;*/
			
			//////////////////////////////////////////////////////////////////////////////////////  RESERVA TEMPORAL  //////////////////////////

			$ssql_temporal = "SELECT nombre1 FROM `$tabla13` WHERE pista='$id_pista' AND hora='$hora_actual' AND dia='$fecha'"; //selecciona si la pista esta ocupada TEMPORAL. 

			$resultado_temporal = mysqli_query($conexion, $ssql_temporal);
			$row_temporal = mysqli_fetch_object($resultado_temporal);
			$nr_temporal = mysqli_num_rows($resultado_temporal);
			
		
			$nombre1=$row_temporal->nombre1;
			//echo $nr_temporal;
			
			//////////////////////////////////////////////////////////////////////////////////////  CAJA TEMPORAL  //////////////////////////

			$ssql_caja = "select * from `$tabla13` WHERE pista='$id_pista' AND hora='$hora_actual' AND dia='$fecha'";
			$resultado_caja= mysqli_query($conexion, $ssql_caja);
			$row_caja= mysqli_fetch_object($resultado_caja);
			
			$total=$row_caja->total;
			
			//echo $row_caja;
			
			/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			
	if($nr==1){
				$limite_anular=$row->hora_inicio-$dia_segundos;

				$usuario_pista=$row->usuario;
				$id_reserva=$row->id_reserva;
			$ssql_ocupante = "SELECT nombre, apellido1 FROM `$tabla1` WHERE id_usuario='$usuario_pista'"; //busca el nombre del usuario.
			$resultado_ocupante = mysqli_query($conexion, $ssql_ocupante);
			$row_ocupante = mysqli_fetch_object($resultado_ocupante);
			
			echo "<div id='ocupada'>";
			if($_SESSION['privilegios']==1 OR $usuario_pista==$usuario){
				echo $row_ocupante->nombre." ".$row_ocupante->apellido1;
			}
			
			//<br><br>ID: $id_reserva
			if($usuario_pista==$usuario OR $_SESSION['privilegios']==1){
					
				if ($total<='0'){
					echo "<div id='hora'>&nbsp; - &nbsp; &euro;</div>";
				}else{
					echo "<div id='hora'>$total &euro;</div>";
					//if($limite_anular>=time()){
				}
					
			echo "<form action='caja2.php' method='POST'>";	
				echo "<br>";
				echo "<div align='left'><input type='submit' name='hora_actual' value='VER' align='left' class='ver'><div>";///BOTON DE VER
			
				echo "<input type='hidden' name='hora' value='$id_hora'>";
				echo "<input type='hidden' name='usuario' value='$usuario'>";
				echo "<input type='hidden' name='pista' value='$id_pista'>";
				echo "<input type='hidden' name='dia' value='$fecha'>";
				echo "<input type='hidden' name='pag' value='$pag'>";
				echo "<input type='hidden' name='fecha_seg' value='$fecha_actual_seg'>";
				
			echo "</form>";
			
			
			echo "</form>";
					
			
				//}
			}
			
			echo "</div><hr></hr>";
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

				/*$fecha_hoy_seg=time();
			if($fecha_actual_seg<=$fecha_hoy_seg){
					echo "<div id='pasado'>&nbsp;</div>";
			}else{*/
			/////////////////////////////////////////////////////////////				
				echo "<form action='caja2.php' method='POST'>";
				
			if($nr_meapunto==1){
					echo "<input type='submit' name='hora_actual' value='$total' id='meapunto'>";
					echo "<input type='hidden' name='meapunto' value='$id_meapunto'>";
					
			}
						
			if($_SESSION['privilegios']==1){////////////////////////// SI ERES ADMINISTRADOR  //////////
					
				if($nr_temporal>=1){///////////// SI ESTA PISTA Y HORA TIENE ALGUN TEMPORAL  //////////////////
					
					
					 echo "<input type='submit' name='hora_actual' value='$total &euro;(*)' id='reservar'>"; 
					 
				 }else{echo "<input type='submit' name='hora_actual' value='0 &euro;' id='reservar'>";}/// SI NO TIENE TEMPORAL
					 

			}else{echo "<input type='submit' name='hora_actual' value='0 &euro;' id='reservar'>";}/// SI NO ES ADMINISTRADOR
	
			
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
			echo "</td>";
		}		
	
	
	echo "</table>";



}
		echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>";
	echo "</table>";
	
////////////////////////////////////////        CAJA TEMPORAL DIA             ///////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$suma_03=0;

$tabla_03= mysqli_query($conexion, "select pagado from `$tabla22` WHERE fecha='$fecha'");///// CONSULTA DEL TOTAL DEL DIA de T.PLANA

	while ($registro_03 = mysqli_fetch_array($tabla_03)) {
		
	$suma_03=$suma_03+$registro_03['pagado'];
	 
		
	}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$suma_02=0;

$tabla_02= mysqli_query($conexion, "select precio1, precio2, precio3, precio4 from `$tabla24` WHERE fecha='$fecha'");///// CONSULTA DEL TOTAL DEL DIA de ABONOS

	while ($registro_02 = mysqli_fetch_array($tabla_02)) {
		
	$suma_02=$suma_02+$registro_02['precio1']+$registro_02['precio2']+$registro_02['precio3']+$registro_02['precio4'];
	 
		
	}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$suma_01=0;

$tabla_01= mysqli_query($conexion, "select pagado from `$tabla14` WHERE fecha='$fecha'");///// CONSULTA DEL TOTAL DEL DIA de CLASES

	while ($registro_01 = mysqli_fetch_array($tabla_01)) {
		
	$suma_01=$suma_01+$registro_01['pagado'];
	 
		
	}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
$suma=0;

$tabla12= mysqli_query($conexion, "select pagado1, pagado2, pagado3, pagado4 from `$tabla13` WHERE dia='$fecha'");///// CONSULTA DEL TOTAL DEL DIA PISTA

	while ($registro12 = mysqli_fetch_array($tabla12)) {
		
	$suma=$suma+$registro12['pagado1']+$registro12['pagado2']+$registro12['pagado3']+$registro12['pagado4'];
	 
		
	}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
$suma_total_dia=0;

$tabla122= mysqli_query($conexion, "select total from `$tabla13` WHERE dia='$fecha'");///// CONSULTA DEL TOTAL DEL DIA 

	while ($registro122 = mysqli_fetch_array($tabla122)) {
		
	$suma_total_dia=$suma_total_dia+$registro122['total'];	
	}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
$suma_cervezas=0;

$tabla_cervezas= mysqli_query($conexion, "select cervezas from `$tabla13` WHERE dia='$fecha'");///// CONSULTA DEL TOTAL DEL DIA EN CERVEZAS

	while ($registro_cervezas = mysqli_fetch_array($tabla_cervezas)) {
		
	$suma_cervezas=$suma_cervezas+$registro_cervezas['cervezas'];
	 
		
	}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
$suma_agua=0;

$tabla_agua= mysqli_query($conexion, "select agua from `$tabla13` WHERE dia='$fecha'");///// CONSULTA DEL TOTAL DEL DIA EN AGUA

	while ($registro_agua = mysqli_fetch_array($tabla_agua)) {
		
	$suma_agua=$suma_agua+$registro_agua['agua'];
	 
		
	}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
$suma_tienda=0;

$tabla_tienda= mysqli_query($conexion, "select tienda from `$tabla13` WHERE dia='$fecha'");///// CONSULTA DEL TOTAL DEL DIA EN TIENDA

	while ($registro_tienda = mysqli_fetch_array($tabla_tienda)) {
		
	$suma_tienda=$suma_tienda+$registro_tienda['tienda'];
	 
		
	}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
//$separar=explode('0',$mes_select);
//if($separar[0]==0){ $mes_select_1=$seprar[1];}else{ $mes_select_1='0'.$mes_select;} // MODIFICADO EN GUARDAR.PHP, guarda la fecha sin 0 delantes!!

$suma_bono=0;

$tabla_bono= mysqli_query($conexion, "SELECT precio FROM `$tabla31` WHERE dia='$dia_select' AND mes='$mes_select' AND ano='$ano_select2'");///// CONSULTA DEL TOTAL DEL DIA EN BONO

	while ($registro_bono = mysqli_fetch_array($tabla_bono)) {
		
	$suma_bono=$suma_bono+$registro_bono['precio'];	 
		
	}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
			
$dia_estipulado=0;
$dia_actual=date("d");

$consulta_dia= mysqli_query($conexion, "select estipulado from `$tabla26` WHERE dia='$dia_select'");///// CONSULTA DEL TOTAL DEL DIA ESTIPULADO

	while ($consulta_dia_estipulado = mysqli_fetch_array($consulta_dia)) {
		
	$dia_estipulado=$dia_estipulado+$consulta_dia_estipulado['estipulado'];
	 
		
	}
echo "<hr></hr>";
echo "<div align='center'><b><u>TOTAL DEL DIA</u></b></div>";
echo "<br>";
echo '<b>PISTAS: '.$suma.' &euro; | CLASES: '.$suma_01.' &euro; | ABONO: '.$suma_02.' &euro;| BONO: '.$suma_bono.' &euro;| T.PLANA: '
.$suma_03.'&euro;</b> <b>|<br> CERVEZAS: '.$suma_cervezas.' &euro; | AGUA: '.$suma_agua.' &euro; | TIENDA: '.$suma_tienda.' &euro;</b>';
echo "<br><br>";
$sumatotaldeldia=$suma_02+$suma_01+$suma_03+$suma+$suma_bono+$suma_cervezas+$suma_agua+$suma_tienda;
echo '<b>TOTAL DEL DIA: '.$sumatotaldeldia.' &euro;</b>';
echo "<br><br>";
/*if ($suma!=$dia_estipulado){ // COLORES ESTIPULADO
	echo '<b>Total estipulado del dia: <div style="color:red; margin-left:240px; margin-top:-16px" >'.$dia_estipulado.' &euro; </div>';
}else{
	echo '<b>Total estipulado del dia: <div style="color:green; margin-left:240px; margin-top:-16px"> '.$dia_estipulado.' &euro; </div>';
}
echo "<br>";*/
echo "<br>";
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<hr></hr>";
echo "<br>";
$ano=date('y');
$suma2=0;
$mes_actual="0$mes_select";
$tabla122= mysqli_query($conexion, "SELECT `pagado1`,`pagado2`,`pagado3`,`pagado4` FROM `$tabla13` WHERE mes='$mes_select' AND ano='$ano_select2'");///// CONSULTA DEL TOTAL DEL MES PISTAS

	while ($registro122 = mysqli_fetch_array($tabla122)) {
		
	$suma2=$suma2+$registro122['pagado1']+$registro122['pagado2']+$registro122['pagado3']+$registro122['pagado4'];
	 
		
	}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
$suma266=0;

$tabla266= mysqli_query($conexion, "select pagado from `$tabla22` WHERE mes='$mes_actual' AND ano='$ano_select2'");///// CONSULTA DEL TOTAL DEL MES T.PLANA

	while ($registro266 = mysqli_fetch_array($tabla266)) {
		
	$suma266=$suma266+$registro266['pagado'];
	 
		
	}
	
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
$suma25=0;

$tabla25= mysqli_query($conexion, "select precio1, precio2, precio3, precio4 from `$tabla24` WHERE mes='$mes_actual' AND ano='$ano_select2'");///// CONSULTA DEL TOTAL DEL MES ABONOS

	while ($registro25 = mysqli_fetch_array($tabla25)) {
		
	$suma25=$suma25+$registro25['precio1']+$registro25['precio2']+$registro25['precio3']+$registro25['precio4'];
	 
		
	}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	

$suma23=0;
$tabla1223= mysqli_query($conexion, "select pagado from `$tabla14` WHERE mes='$mes_actual' AND ano='$ano_select2'");///// CONSULTA DEL TOTAL DEL MES CLASES

	while ($registro1223 = mysqli_fetch_array($tabla1223)) {
		
	$suma23=$suma23+$registro1223['pagado'];
	 
		$suma24=$suma23+$suma2+$suma25+$suma266;
	}
	
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
$suma_cervezas_mes=0;
$tabla_cervezas_mes= mysqli_query($conexion, "select cervezas from `$tabla13` WHERE mes='$mes_actual' AND ano='$ano_select2'");///// CONSULTA DEL TOTAL DEL MES CERVEZAS

		
	while ($registro_cervezas_mes = mysqli_fetch_array($tabla_cervezas_mes)) {
		
	$suma_cervezas_mes=$suma_cervezas_mes+$registro_cervezas_mes['cervezas'];
	 	
	}	
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
$suma_agua_mes=0;
$tabla_agua_mes= mysqli_query($conexion, "select agua from `$tabla13` WHERE mes='$mes_actual' AND ano='$ano_select2'");///// CONSULTA DEL TOTAL DEL MES AGUA

		
	while ($registro_agua_mes = mysqli_fetch_array($tabla_agua_mes)) {
		
	$suma_agua_mes=$suma_agua_mes+$registro_agua_mes['agua'];
	 	
	}	
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
$bono=0;
$tabla_bono_mes= mysqli_query($conexion, "select precio from `$tabla31` WHERE mes='$mes_select' AND ano='$ano_select2'");///// CONSULTA DEL TOTAL DEL MES BONO

		
	while ($registro_bono_mes = mysqli_fetch_array($tabla_bono_mes)) {
		
	$bono=$bono+$registro_bono_mes['precio'];
	 	
	}	
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
$suma_tienda_mes=0;
$tabla_tienda_mes= mysqli_query($conexion, "select tienda from `$tabla13` WHERE mes='$mes_actual' AND ano='$ano_select2'");///// CONSULTA DEL TOTAL DEL MES TIENDA

		
	while ($registro_tienda_mes = mysqli_fetch_array($tabla_tienda_mes)) {
		
	$suma_tienda_mes=$suma_tienda_mes+$registro_tienda_mes['tienda'];
	 	
	}	
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
$total_totales_mes=$suma2+$suma23+$suma25+$suma266+$suma_cervezas_mes+$suma_agua_mes+$suma_tienda_mes+$bono;

echo "<div align='center'><b><u>TOTAL DEL MES</u></b></div>";
echo "<br>";
echo '<b>Pistas: '.$suma2.' &euro; | Clases: '.$suma23.' &euro; | Abonos: '.$suma25.' &euro; | Bono: '.$bono.' &euro; | T.Plana: '.$suma266.' &euro; |<br> Cervezas: '.$suma_cervezas_mes.' &euro; | Agua: '.$suma_agua_mes.' &euro; | Tienda: '.$suma_tienda_mes.' &euro;</b>';
echo "<br>";
echo "<br>";
echo "<hr></hr>";
echo "<br>";
echo "<br>";
echo '<b>TOTAL : '.$total_totales_mes.' &euro;</b>';
echo "<br>";

}

?>