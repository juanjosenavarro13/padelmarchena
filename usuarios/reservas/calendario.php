<?php
function calcula_numero_dia_semana($dia,$mes,$ano){
	$numerodiasemana = date('w', mktime(0,0,0,$mes,$dia,$ano));
	if ($numerodiasemana == 0) 
		$numerodiasemana = 6;
	else
		$numerodiasemana--;
	return $numerodiasemana;
}

//funcion que devuelve el �ltimo d�a de un mes y a�o dados
function ultimoDia($mes,$ano){ 
    $ultimo_dia=28; 
    while (checkdate($mes,$ultimo_dia + 1,$ano)){ 
       $ultimo_dia++; 
    } 
    return $ultimo_dia; 
    
} 

function dame_nombre_mes($mes){
	 switch ($mes){
	 	case 1:
			$nombre_mes="Enero";
			break;
	 	case 2:
			$nombre_mes="Febrero";
			break;
	 	case 3:
			$nombre_mes="Marzo";
			break;
	 	case 4:
			$nombre_mes="Abril";
			break;
	 	case 5:
			$nombre_mes="Mayo";
			break;
	 	case 6:
			$nombre_mes="Junio";
			break;
	 	case 7:
			$nombre_mes="Julio";
			break;
	 	case 8:
			$nombre_mes="Agosto";
			break;
	 	case 9:
			$nombre_mes="Septiembre";
			break;
	 	case 10:
			$nombre_mes="Octubre";
			break;
	 	case 11:
			$nombre_mes="Noviembre";
			break;
	 	case 12:
			$nombre_mes="Diciembre";
			break;
	}
	return $nombre_mes;
}

function mostrar_calendario($dia,$mes,$ano){
	

	
	
$mes_hoy=date("m");
$ano_hoy=date("Y");

$dia_seleccionado=$_POST['seleccionado'];
$mes_seleccionado=$_POST['nuevo_mes'];
$ano_seleccionado=$_POST['nuevo_ano'];
//echo $dia_seleccionado."-".$mes_seleccionado."-".$ano_seleccionado;
if (($mes_hoy <> $mes) || ($ano_hoy <> $ano))
{
	$hoy=0;
}
else
{
	$hoy=date("d");
}

if($dia_seleccionado<=$hoy){
	$dia_seleccionado=$hoy;
}

	//tomo el nombre del mes que hay que imprimir
	$nombre_mes = dame_nombre_mes($mes);
	
	//construyo la cabecera de la tabla

	echo "<table width=200 cellspacing=3 cellpadding=2 border=0 id='calendario'><tr><td colspan=7 align=center class=tit>";
	echo "<table width=100% cellspacing=2 cellpadding=2 border=0><tr><td style=font-size:10pt;font-weight:bold;color:white>";
	//calculo el mes y ano del mes anterior
	
	if ($mes==1){
		$ano_anterior = $ano - 1;
		$mes_anterior=12;
	}else{
		$mes_anterior = $mes - 1;
		$ano_anterior = $ano;
	}

	if($mes>$mes_hoy OR $ano>$ano_hoy){
	//$mes_anterior=$mes-1;
	echo "<form action='reservas.php' method='POST'>";
	echo "<input type='submit' name='enviar' value='&lt;&lt;'>
	<input type='hidden' name='mes_actual' value='$mes_anterior'>
	<input type='hidden' name='ano_actual' value='$ano_anterior'>
	<input type='hidden' name='seleccionado' value='1'></form>";
	
	}else{
	//$mes_anterior=$mes-1;
	echo "&nbsp;";
	}
		echo "</td>";
	   echo "<td align=center class=tit>$nombre_mes $ano</td>";
	   echo "<td align=right style=font-size:10pt;font-weight:bold;color:white>";
	//calculo el mes y ano del mes siguiente
	//$mes_siguiente = $mes + 1;

	if ($mes==12){
		$ano_siguiente = $ano + 1;
		$mes_siguiente=1;
	}else{
		$ano_siguiente = $ano;
		$mes_siguiente=$mes+1;
	}
	
if($mes==$mes_hoy and $hoy>=24){	
	
		echo "<form action='reservas.php' method='POST'>";
		echo "<input type='submit' name='enviar' value='&gt;&gt;'>
		<input type='hidden' name='mes_actual' value='$mes_siguiente'>
		<input type='hidden' name='ano_actual' value='$ano_siguiente'>
		<input type='hidden' name='seleccionado' value='1'></form>";
		
		

}else{
			if($_SESSION['privilegios']==1){
				echo "<form action='reservas.php' method='POST'>";
				echo "<input type='submit' name='enviar' value='&gt;&gt;'>
				<input type='hidden' name='mes_actual' value='$mes_siguiente'>
				<input type='hidden' name='ano_actual' value='$ano_siguiente'>
				<input type='hidden' name='seleccionado' value='1'></form>";		
			}
			
	echo "<form action='reservas.php' method='POST'>";
	echo "
	<input type='hidden' name='mes_actual' value='$mes_siguiente'>
	<input type='hidden' name='ano_actual' value='$ano_siguiente'>
	<input type='hidden' name='seleccionado' value='1'></form>";
//	echo "&nbsp;";
}
	echo "</td></tr></table></td></tr>";
	echo "<form action='reservas.php' method='POST'>";
	echo '<tr>
			    <td width=14% align=center class=altn>Lu</td>
			    <td width=14% align=center class=altn>Ma</td>
			    <td width=14% align=center class=altn>Mi</td>
			    <td width=14% align=center class=altn>Ju</td>
			    <td width=14% align=center class=altn>Vi</td>
			    <td width=14% align=center class=altn>Sa</td>
			    <td width=14% align=center class=altn>Do</td>
			</tr>';
	
	//Variable para llevar la cuenta del dia actual
	$dia_actual = 1;
	
	//calculo el numero del dia de la semana del primer dia
	$numero_dia = calcula_numero_dia_semana(1,$mes,$ano);
	//echo "Numero del dia de demana del primer: $numero_dia <br>";
	
	//calculo el �ltimo dia del mes
	$ultimo_dia = ultimoDia($mes,$ano);

	//calculo de los d�as que llevan enlace
if($_SESSION['privilegios']==1){
	$dias_enlace=100;
	}else{
	$dias_enlace=7;
	}

$ultimo_dia_enlace_mes2=date("d")+$dias_enlace-$ultimo_dia;

if($mes==$mes_hoy){
$ultimo_dia_enlace=date("d")+$dias_enlace;

}else{
$ultimo_dia_enlace=date("d")+$dias_enlace-$ultimo_dia-2;
}
//echo $ultimo_dia_enlace;
echo "<br>";

//escribo la primera fila de la semana
	echo "<tr>";
	for ($i=0;$i<7;$i++){
		if ($i < $numero_dia){
			//si el dia de la semana i es menor que el numero del primer dia de la semana no pongo nada en la celda
			echo "<td></td>";
		} else {
		if (($i == 5) || ($i == 6))
		{
				if ($dia_actual == $hoy)
				{
					echo "<td class=da><input type='submit' name='seleccionado' value='$dia_actual' class=da></td>";
				}
				elseif ($dia_actual == $dia_seleccionado)
				{
					echo "<td class=ds>";
						if($dia_actual>=$hoy){
						echo "<input type='submit' name='seleccionado' value='$dia_actual' class=ds>";
						}
					echo "</td>";
				}
				elseif($dia_actual<$hoy)
				{
					echo "<td class=fs>$dia_actual</td>";
				}
				elseif($dia_actual>=$ultimo_dia_enlace){
					echo "<td class=fs>$dia_actual</td>";
				}
				else
				{
					echo "<td class=fs><input type='submit' name='seleccionado' value='$dia_actual' class=fs></td>";
				}
		}
		else
		{			
				if ($dia_actual == $dia_seleccionado)
				{
					echo "<td class=ds><input type='submit' name='seleccionado' value='$dia_actual' class=ds></td>";
				}
				elseif ($dia_actual == $hoy)
				{
					echo "<td class=da><input type='submit' name='seleccionado' value='$dia_actual' class=da></td>";
				}
				elseif($dia_actual<$hoy)
				{
					echo "<td align=center>$dia_actual</td>";
				}
				elseif($dia_actual>=$ultimo_dia_enlace){
					echo "<td align='center'>$dia_actual</td>";
				}
				else
				{
					echo "<td class=dl><input type='submit' name='seleccionado' value='$dia_actual' class=dl></td>";
				}
		}
			$dia_actual++;
		}
	}
	echo "</tr>";
	
	//recorro todos los dem�s d�as hasta el final del mes
	$numero_dia = 0;
	while ($dia_actual <= $ultimo_dia){
		//si estamos a principio de la semana escribo el <TR>
		if ($numero_dia == 0)
			echo "<tr>";
		//si es el u�timo de la semana, me pongo al principio de la semana y escribo el </tr>

			if (($numero_dia == 5) || ($numero_dia == 6))
			{
				if ($dia_actual == $hoy)
				{
					echo "<td class=da><input type='submit' name='seleccionado' value='$dia_actual' class=da></td>";
				}
				elseif ($dia_actual == $dia_seleccionado)
				{
					echo "<td class=ds><input type='submit' name='seleccionado' value='$dia_actual' class=ds></td>";
				}
				elseif($dia_actual>=$ultimo_dia_enlace){
					echo "<td class=fs>$dia_actual</td>";
				}
				elseif($dia_actual<$hoy)
				{
					echo "<td class=fs>$dia_actual</td>";
				}
				else
				{
					echo "<td class=fs ><input type='submit' name='seleccionado' value='$dia_actual' class=fs></td>";
				}
			}
			else
			{		
				if ($dia_actual == $dia_seleccionado)
				{
					echo "<td class=ds><input type='submit' name='seleccionado' value='$dia_actual' class=ds></td>";
				}
				elseif ($dia_actual == $hoy)
				{
					echo "<td class=da><input type='submit' name='seleccionado' value='$dia_actual' class=da></td>";
				}			
				elseif($dia_actual<$hoy)
				{
					echo "<td align=center>$dia_actual</td>";
				}
				elseif($dia_actual>=$ultimo_dia_enlace){
					echo "<td align=center>$dia_actual</td>";
				}				
				else
				{
					echo "<td align=center><input type='submit' name='seleccionado' value='$dia_actual' class=dl></td>";
				}
			}

			$dia_actual++;
			$numero_dia++;
			if ($numero_dia == 7)
			{
				$numero_dia = 0;
				echo "</tr>";
			}

	}
	
	//compruebo que celdas me faltan por escribir vacias de la �ltima semana del mes
	for ($i=$numero_dia;$i<7;$i++){
		echo "<td></td>";
	}
	
	echo "</tr>";
	echo "</table>";
	echo "<input type='hidden' name='mes_actual' value='$mes'>";
	echo "<input type='hidden' name='ano_actual' value='$ano'>";
	echo $pag;
	echo "</form>";
/*
echo $mes;
echo "|";
echo $mes_hoy;
echo "|";
echo $dia;
echo "|";
echo $dia_actual;
echo "|";
echo $dias_enlace;	
echo "|";
echo $dia_seleccionado;
echo "|";
echo $ultimo_dia_enlace;
echo "|";
echo $ultimo_dia;
echo "|";
echo $ultimo_dia_enlace_mes2;
*/
}

function mostrar_calendario_meapunto($dia,$mes,$ano){
$mes_hoy=date("m");
$ano_hoy=date("Y");

$dia_seleccionado=$_POST['seleccionado'];
$mes_seleccionado=$_POST['nuevo_mes'];
$ano_seleccionado=$_POST['nuevo_ano'];
//echo $dia_seleccionado."-".$mes_seleccionado."-".$ano_seleccionado;
if (($mes_hoy <> $mes) || ($ano_hoy <> $ano))
{
	$hoy=0;
}
else
{
	$hoy=date("d");
}

if($dia_seleccionado<=$hoy){
	$dia_seleccionado=$hoy;
}


	//tomo el nombre del mes que hay que imprimir
	$nombre_mes = dame_nombre_mes($mes);
	
	//construyo la cabecera de la tabla

	echo "<form action='alta_meapunto.php' method='POST'>";
	echo "<table width=200 cellspacing=3 cellpadding=2 border=0 id='calendario'><tr><td colspan=7 align=center class=tit>";
	echo "<table width=100% cellspacing=2 cellpadding=2 border=0><tr><td style=font-size:10pt;font-weight:bold;color:white>";
	//calculo el mes y ano del mes anterior
	$mes_anterior = $mes - 1;
	$ano_anterior = $ano;
	if ($mes_anterior==0){
		$ano_anterior--;
		$mes_anterior=12;
	}
	if($mes>$mes_hoy){
	$mes_anterior=$mes-1;
	echo "<input type='submit' name='enviar' value='&lt;&lt;'>
	<input type='hidden' name='mes_actual' value='$mes_anterior'>
	<input type='hidden' name='ano_actual' value='$ano'>
	<input type='hidden' name='seleccionado' value='1'></form>";
	}else{
	echo "&nbsp;";
	}
		echo "</td>";
	   echo "<td align=center class=tit>$nombre_mes $ano</td>";
	   echo "<td align=right style=font-size:10pt;font-weight:bold;color:white>";
	//calculo el mes y ano del mes siguiente
	$mes_siguiente = $mes + 1;
	$ano_siguiente = $ano;
	if ($mes_siguiente==13){
		$ano_siguiente++;
		$mes_siguiente=1;
	}
	
	if($mes==$mes_hoy){	
	$mes_posterior=$mes+1;
	echo "<input type='submit' name='enviar' value='&gt;&gt;'>
	<input type='hidden' name='mes_actual' value='$mes_posterior'>
	<input type='hidden' name='ano_actual' value='$ano'>
	<input type='hidden' name='seleccionado' value='1'>
	</form>";
	}else{
	echo "&nbsp;";
	}
	echo "</td></tr></table></td></tr>";
	echo "<form action='alta_meapunto.php' method='POST'>";
	echo '<tr>
			    <td width=14% align=center class=altn>Lu</td>
			    <td width=14% align=center class=altn>Ma</td>
			    <td width=14% align=center class=altn>Mi</td>
			    <td width=14% align=center class=altn>Ju</td>
			    <td width=14% align=center class=altn>Vi</td>
			    <td width=14% align=center class=altn>Sa</td>
			    <td width=14% align=center class=altn>Do</td>
			</tr>';
	
	//Variable para llevar la cuenta del dia actual
	$dia_actual = 1;
	
	//calculo el numero del dia de la semana del primer dia
	$numero_dia = calcula_numero_dia_semana(1,$mes,$ano);
	//echo "Numero del dia de demana del primer: $numero_dia <br>";
	
	//calculo el �ltimo dia del mes
	$ultimo_dia = ultimoDia($mes,$ano);

	//calculo de los d�as que llevan enlace
$dias_enlace=100;

$ultimo_dia_enlace_mes2=date("d")+$dias_enlace-$ultimo_dia;

if($mes==$mes_hoy){
$ultimo_dia_enlace=date("d")+$dias_enlace;

}elseif($mes==$mes_hoy+1){
$ultimo_dia_enlace=date("d")+$dias_enlace-$ultimo_dia;
}
//echo $ultimo_dia_enlace;
echo "<br>";
//escribo la primera fila de la semana
	echo "<tr>";
	for ($i=0;$i<7;$i++){
		if ($i < $numero_dia){
			//si el dia de la semana i es menor que el numero del primer dia de la semana no pongo nada en la celda
			echo "<td></td>";
		} else {
		if (($i == 5) || ($i == 6))
		{
				if ($dia_actual == $hoy)
				{
					echo "<td class=da><input type='submit' name='seleccionado' value='$dia_actual' class=da></td>";
				}
				elseif ($dia_actual == $dia_seleccionado)
				{
					echo "<td class=ds>";
						if($dia_actual>=$hoy){
						echo "<input type='submit' name='seleccionado' value='$dia_actual' class=ds>";
						}
					echo "</td>";
				}
				elseif($dia_actual<$hoy)
				{
					echo "<td class=fs>$dia_actual</td>";
				}
				elseif($dia_actual>=$ultimo_dia_enlace){
					echo "<td class=fs>$dia_actual</td>";
				}
				else
				{
					echo "<td class=fs><input type='submit' name='seleccionado' value='$dia_actual' class=fs></td>";
				}
		}
		else
		{			
				if ($dia_actual == $dia_seleccionado)
				{
					echo "<td class=ds><input type='submit' name='seleccionado' value='$dia_actual' class=ds></td>";
				}
				elseif ($dia_actual == $hoy)
				{
					echo "<td class=da><input type='submit' name='seleccionado' value='$dia_actual' class=da></td>";
				}
				elseif($dia_actual<$hoy)
				{
					echo "<td align=center>$dia_actual</td>";
				}
				elseif($dia_actual>=$ultimo_dia_enlace){
					echo "<td align='center'>$dia_actual</td>";
				}
				else
				{
					echo "<td class=dl><input type='submit' name='seleccionado' value='$dia_actual' class=dl></td>";
				}
		}
			$dia_actual++;
		}
	}
	echo "</tr>";
	
	//recorro todos los dem�s d�as hasta el final del mes
	$numero_dia = 0;
	while ($dia_actual <= $ultimo_dia){
		//si estamos a principio de la semana escribo el <TR>
		if ($numero_dia == 0)
			echo "<tr>";
		//si es el u�timo de la semana, me pongo al principio de la semana y escribo el </tr>

			if (($numero_dia == 5) || ($numero_dia == 6))
			{
				if ($dia_actual == $hoy)
				{
					echo "<td class=da><input type='submit' name='seleccionado' value='$dia_actual' class=da></td>";
				}
				elseif ($dia_actual == $dia_seleccionado)
				{
					echo "<td class=ds><input type='submit' name='seleccionado' value='$dia_actual' class=ds></td>";
				}
				elseif($dia_actual>=$ultimo_dia_enlace){
					echo "<td class=fs>$dia_actual</td>";
				}
				elseif($dia_actual<$hoy)
				{
					echo "<td class=fs>$dia_actual</td>";
				}
				else
				{
					echo "<td class=fs ><input type='submit' name='seleccionado' value='$dia_actual' class=fs></td>";
				}
			}
			else
			{		
				if ($dia_actual == $dia_seleccionado)
				{
					echo "<td class=ds><input type='submit' name='seleccionado' value='$dia_actual' class=ds></td>";
				}
				elseif ($dia_actual == $hoy)
				{
					echo "<td class=da><input type='submit' name='seleccionado' value='$dia_actual' class=da></td>";
				}			
				elseif($dia_actual<$hoy)
				{
					echo "<td align=center>$dia_actual</td>";
				}
				elseif($dia_actual>=$ultimo_dia_enlace){
					echo "<td align=center>$dia_actual</td>";
				}				
				else
				{
					echo "<td align=center><input type='submit' name='seleccionado' value='$dia_actual' class=dl></td>";
				}
			}

			$dia_actual++;
			$numero_dia++;
			if ($numero_dia == 7)
			{
				$numero_dia = 0;
				echo "</tr>";
			}

	}
	
	//compruebo que celdas me faltan por escribir vacias de la �ltima semana del mes
	for ($i=$numero_dia;$i<7;$i++){
		echo "<td></td>";
	}
	
	echo "</tr>";
	echo "</table>";
	echo "<input type='hidden' name='mes_actual' value='$mes'>";
	echo "<input type='hidden' name='ano_actual' value='$ano'>";
	echo $pag;
	echo "</form>";

	
}

