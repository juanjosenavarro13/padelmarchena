<?php
session_start();
include("Cab1.php");
include("Cuerpo0.php");
include("Basic.php");
if (!isset($_SESSION['codigosocio']) || isset($_POST['autenticarse']))
{
	if ((!isset($_POST['Submit']) ))
	{
//		echo '<div style="position:relative; width:1000px; margin-left:0px; margin-top:0px; text-align:center;">
		echo '    <div style="width:1000px; height:100px;margin-left:0px; margin-top:0px; margin-bottom:0px;text-align:center;"> 
      <form action="reservas.php" method="post" name="autenticarse" style=" border-top:0px;border-bottom:0px; "> 
        <div style="width:1000px; height:70px; margin-left:0px; margin-top:0px; margin-bottom:0px;text-align:center;">  
					<div style="float:left;width:400px; height:70px; margin-left:0px; margin-top:0px; margin-bottom:0px;">  
					</div>
					<div style="float:left;width:60px; height:70px; margin-left:0px; margin-top:0px; margin-bottom:0px;">  
						<p><span class="etiqformulario">Usuario</span>:</p>
						<p><span class="etiqformulario">Clave</span>:</p>
					</div>
					<div style="float:left;width:500px; height:70px; margin-left:0px; margin-top:0px; margin-bottom:0px;text-align:center;">  
  		        <p><span><input name="usuario" type="text" class="casilladeform" size="20" maxlength="20"></span>
	        	  <p><span><input name="clave" type="password" class="casilladeform" size="20" maxlength="20"> </span>
		        </p> 
					</div>
				</div>
        <div style="width:1000px; height:30px;margin-left:0px; margin-top:0px; margin-bottom:0px;text-align:center;">  
          <input type="reset" name="Reset" value="Limpia"> 
          <input type="submit" name="Submit" value="Acepta"> 
        </div> 
      </form> 
    </div> ';
		include("pie.php");
		exit;
	};
};
//-----------------------------------------------------------------------------------
	include("dbconnect.php");
	if (!isset($_POST['diaelegido']) && isset($_POST['Submit']))
	{
		$sql="SELECT codigo, nombre,apellido1,apellido2,cif, passwordweb FROM clientes WHERE cif='".$_POST['usuario']."'";
		$conn=pg_pconnect($strconn);
		if (!$conn)
		{
			die("No se puede conectar a la base de datos.");
		};
 		$result=pg_query($conn,$sql);
	 	$rows=pg_num_rows($result);
  	if ($rows>0)
	  {
 		 for ($i=0;$i<$rows;$i++)
		 {
			 $row=pg_fetch_object($result,$i);
	 		 if (md5($_POST['clave']) === $row->passwordweb)
		 	 {
			 	 $_SESSION['codigosocio']=$row->codigo;
				 $_SESSION['nombresocio']=$row->nombre."  ".$row->apellido1."   ".$row->apellido2;
				 include("insertacal.php");
			 }
			 else
			 {
				 echo "Autenticaci&oacute;n no v&aacute;lida<br>";
				 include("autenticarse.php");
			 };
		 };
	  }
		else
		{
//			echo '<div style="position:relative; width:1000px; margin-left:0px; margin-top:0px;text-align:center;">';
			echo '<div style="width:1000px; margin-left:0px; margin-top:0px;text-align:center;">';
			echo "Autenticaci&oacute;n no v&aacute;lida<br>";
			include("autenticarse.php");
			echo '</div>';
		};
		pg_close($conn);
	}
	else		//si hay un día elegido
	{
		//ahora inserto las pistas y sus horarios libres
		include("insertacal.php");
		if (isset($_SESSION['codigosocio']))
		{
			//la fecha que busco
			$fecha=getdate();
			$mes=$fecha["mon"];
			$year=$fecha["year"];
			$diadelmeshoy=$fecha["mday"];
			$dias_del_mes=cal_days_in_month(CAL_GREGORIAN, $mes, $year);
			//condición para escribir el horario
			if (isset($_POST['diaelegido']))
			{
				$diaelegido=$_POST['diaelegido'];
				if (strlen($diaelegido)==1)
					{$diaelegido="0".$diaelegido;};
				if (strlen($mes)==1)
					{$mes="0".$mes;};
				if ($_POST['diaelegido']>=$diadelmeshoy)
				{
					//día de este mes
					$lafecha=$year.$mes.$diaelegido;
					$fechaelegida=$diaelegido."/".$mes."/".$year;
				}
				else
				{
					//dia del mes siguiente
					if (($mes+1)==13)
					{
						//es enero del año siguiente
						$year++;
						$lafecha=$year.'01'.$diaelegido;
						$fechaelegida=$diaelegido."/".$mes."/".$year;
					}
					else
					{
						$mes++;
						if (strlen($mes)==1)
							{$mes="0".$mes;};
						$lafecha=$year.$mes.$diaelegido;
						$fechaelegida=$diaelegido."/".$mes."/".$year;
					};
				};
				//el día al que pertenezcan los horarios
//				echo '<div style="position:relative; width:1000px; margin-left:0px; margin-top:10px; text-align:center">';
				echo '<div style="width:1000px; margin-left:0px; margin-top:10px; text-align:center">';
					echo '<span class="enverde">Horario perteneciente al d&iacute;a '.$fechaelegida.'</span><BR><BR>';
				echo '</div>';
				//los nombres de las pistas
				$sql="SELECT codigo, nombre from sport_pistas order by codigo";
				$conn1=pg_pconnect($strconn);
				if (!$conn1)
				{
					die("No se puede conectar a la base de datos.");
				};
		 		$result=pg_query($conn1,$sql);
			 	$rows=pg_num_rows($result);
				if ($rows>0)
				{
					//los títulos
//					echo '<div  class="enverde" id="pistas" style="position:relative; width:1000px; height:30px;margin-left:0px; margin-top:0px;text-align:center;border-style:groove; border-width:thin;"> ';
					echo '<div  class="enverde" id="pistas" style="width:1000px; height:30px;margin-left:0px; margin-top:0px;text-align:center;border-style:groove; border-width:thin;"> ';
						$anchocol=1000/($rows+1)-5;
						$pistas=$rows;		//el número de pistas
						$NumPistas=array();
						echo ' <div id="lun1" style="float:left; width:'.$anchocol.'px;">HORA</div>';
						for ($i=0;$i<$rows;$i++)
						{
							$row=pg_fetch_object($result,$i);
							echo ' <div id="lun1" style="float:left; width:'.$anchocol.'px;">'.$row->nombre.'</div>';
							$NumPistas[$i]=$row->codigo;
						};
					echo '</div>';
				};
				//los horarios libres
				//inserto las columnas que serán capas
//				echo '<div id="horarios" style="position:relative; width:1000px; height:30px;margin-left:0px; margin-top:5px; text-align:center">';
				echo '<div id="horarios" style="width:1000px; height:30px;margin-left:0px; margin-top:5px; text-align:center">';
				//$lafecha='20091202';
				//puede causarse problema que se repita el aula para la misma hora. al necesitar el ID no se puede tomar un DISTINCT, luego el generardor de horarios
				//debe comprobar que lo hace bien
//				$sql="SELECT * FROM sport_horarios WHERE (actividad=1 or actividad=2) and fecha='$lafecha' and reservas=0 order by hora_inicio,aula";
				$sql="SELECT * FROM sport_horarios WHERE (actividad=1 or actividad=2) and fecha='$lafecha' order by hora_inicio,aula";
//				echo $sql;
		 		$result=pg_query($conn1,$sql);
			 	$rows=pg_num_rows($result);
				$ultima_pista=0;
				if ($rows>0)
				{
					echo '<form action="haz_reserva.php" method="post" name="reservar" style=" border-bottom:0px; border-top:0px; border-left:0px; border-right:0px; ">';
					$ultima_col_ocupada=-1;	//tantas como pistas, no cuento la hora como columna
					$hora_anterior=NULL;
					for ($i=0;$i<$rows;$i++)
					{
						$row=pg_fetch_object($result,$i);
						$hora_inicio=$row->hora_inicio;
						if ($hora_inicio==$hora_anterior)
						{
							for ($j=0;$j<$pistas;$j++)		//busco la pista
							{
								if ($NumPistas[$j]==$row->aula)
								{
									$poner_en_col=$j+1;
								};
							};		//cierro for $j
							//ahora relleno las columnas que no procedan
							for ($j=0;$j<($poner_en_col-$ultima_col_ocupada-1);$j++)
							{
								echo '<div class="enrojo" style="float:left; width:'.$anchocol.'px;">Reservada</div>';
							};
							if ($row->aula!=$ultima_pista)
							{
								echo '<div style="float:left; width:'.$anchocol.'px;">';
									if ($row->reservas==1)
									{
										echo '<div class="enrojo" style="float:left; width:'.$anchocol.'px;">Reservada</div>';
									}
									else
									{
										echo '<input id="" type="radio" value="'.$row->id.'" name="reservahora">';
									};
								echo '</div>';
							};
							$ultima_pista=$row->aula;
							$ultima_col_ocupada=$poner_en_col;
						}		//comparación hora_incio con hora anterior
						else
						{
							//En el siguiente bloque pongo cuando la hora no es igual, completo fila anterior, abro fila nueva, pongo hora, busco pista y la pongo
							//if ($ultima_col_ocupada!=($pistas-1) && $ultima_col_ocupada!=-1)
							if ($ultima_col_ocupada!=($pistas-1) && $ultima_col_ocupada!=-1)
							{
								for ($j=0;$j<=($pistas-$ultima_col_ocupada-1);$j++)
								{
									echo '<div class="enrojo" style="float:left;width:'.$anchocol.'px;">Reservada</div>';
								};	
							};
							if ($i>0)
							{
								echo "</div>";		//cierro la fila hora y pistas
							};
//							echo '<div id="horario" style="position:relative; width:1000px; height:25px; margin-left:0px; margin-top:5px; text-align:center;border-style:groove; border-width:thin;">';		//inicio fila hora y pistas
							echo '<div id="horario" style="width:1000px; height:25px; margin-left:0px; margin-top:0px; text-align:center;border-style:none; border-width:thin;">';		//inicio fila hora y pistas
							$jjora=substr($row->hora_inicio,11,2);
							$minus=substr($row->hora_inicio,14,2);
							echo '<div class="enverde" style="float:left; width:'.$anchocol.'px;font-size: 11px;">'.$row->actividad.' - '.$jjora.":".$minus.'</div>';
							$ultima_col_ocupada=0;
							$ultima_pista=0;
							//miro qué orden tiene la pista actual
							for ($j=0;$j<=($pistas-1);$j++)
							{
								if ($NumPistas[$j]==$row->aula)
								{	
									$poner_en_col=$j+1;
								};
							};		//cierro for $j
							//ahora relleno las columnas que no procedan
							for ($j=0;$j<($poner_en_col-1);$j++)
							{
								echo '<div class="enrojo" style="float:left; width:'.$anchocol.'px;">Reservada</div>';
							};
							if ($row->aula!=$ultima_pista)
							{
								echo '<div style="float:left; width:'.$anchocol.'px;">';
									if ($row->reservas==1)
									{
										echo '<div class="enrojo" style="float:left; width:'.$anchocol.'px;">Reservada</div>';										
									}
									else
									{
										echo '<input id="" type="radio" value="'.$row->id.'" name="reservahora">';
									};									
								echo '</div>';
							};
							$ultima_pista=$row->aula;
	 						$ultima_col_ocupada=$poner_en_col;
						};		//cierro el else
						$hora_anterior=$hora_inicio;
					};		//cierro for $i
//					echo '<div id="formhorario" style="position:relative; width:1000px; height:25px;margin-left:0px; margin-top:30px; text-align:center;border-style:solid; border-width:thin;">';
					echo '<div id="formhorario" style="float:left;width:1000px; height:50px;margin-left:0px; margin-top:0px; text-align:center;border-style:none; border-width:thin;">';
					echo '<br>';
					echo '<input type="reset" name="Reset" value="Limpia">';
					echo '<input type="submit" name="Submit" value="Reserva">';
					echo '</div>';
					echo '</form>';		//cierro el form reservar
				};	//Cierro el if rows>0
				pg_close($conn1);
				echo '</div>';	//cierro horarios
			};		//cierro el if isset $_post diaelegido
			//hago espacio para el pie
//			echo '<div style="position:relative; width:1000px; height:25px;margin-left:0px; margin-top:30px; text-align:center;border-style:solid; border-width:thin;">';
		};			//si existe session de usuario
	};		//si existe día elegido
include("pie.php");
?>