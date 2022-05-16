<?php
include ("../../seguridad.php");
include("../funciones.php");
include("../../conexion.php");
$reserva2='reservas.php';
session_start();
if ($_GET['accion']=="apuntar"){
	apuntar();
	$meapunto=$_GET['id'];
}

if ($_GET['accion']=="anular"){
	$id_anular= $_GET['id'];
	/////////////////////////////		GENERA SI EL JUGADOR ES EL MISMO		///////////////////////////////
	$ssql_comprueba_jugador="SELECT id_cliente FROM $tabla9 WHERE id_cliente_meapunto='$id_anular'";
	$resultado_comprueba_jugador=mysqli_query($conexion, $ssql_comprueba_jugador);
	$row_comprueba_jugador=mysqli_fetch_object($resultado_comprueba_jugador);
	$id_jugador_seguridad=$row_comprueba_jugador->id_cliente;
	//echo $ssql_comprueba_jugador;
	if($id_jugador_seguridad==$_SESSION['id']){	
	$sentencia_borrar="DELETE FROM $tabla9 WHERE id_cliente_meapunto='$id_anular'";
	mysqli_query($conexion, $sentencia_borrar) or die(mysqli_error());
	mysqli_close();
	}

	header ("Location: reservas.php");
	exit;
}
if ($_GET['accion']=="borrar"){
	$id_borrar= $_GET['id'];
	mysqli_query($conexion, "DELETE FROM $tabla13 WHERE id_reserva='$id_borrar'") or die(mysqli_error());
	mysqli_close();
	$pagina=$_GET['pagina'];
	header ("Location: $reserva2");
	exit;
}

include("../../includes.php");
encabezado();
	echo "<link href='../../estilos.css' rel='stylesheet' type='text/css' />";
cabecera();
col_izda1();
enlaces_izda();
administrar();
col_izda2();
cuerpo1();
///////////////////////////////////////		AKI COMIENZA LA WEB 		/////////////////////////////

$confirmado=$_POST['confirmado'];

$usuario=$_POST['usuario'];
$pista=$_POST['pista'];
$horario=$_POST['hora'];
$dia=$_POST['dia'];
$pag=$_POST['pag'];
$fecha_seg=$_POST['fecha_seg'];
$meapunto=$_POST['meapunto'];
$fecha=explode("-",$dia);
$fecha_esp=$fecha[2]."-".$fecha[1]."-".$fecha[0]; 

	/////////////////////  DATOS PISTA   ///////////////////////
	$ssql_pista = "SELECT * FROM `$tabla2` WHERE id_pista=$pista";
	$resultado_pista = mysqli_query($conexion, $ssql_pista);
	/////////////////////////////////////////////////////////////
	
	////////////////////  DATOS CLIENTE  ////////////////////////
	$ssql_usuario = "SELECT * FROM `$tabla1` WHERE id_usuario=$usuario";
	$resultado_usuario = mysqli_query($conexion, $ssql_usuario);
	/////////////////////////////////////////////////////////////
	
	////////////////////  DATOS HORARIO  ////////////////////////
	$ssql_horario = "SELECT * FROM `$tabla3` WHERE id_horario=$horario";
	$resultado_horario = mysqli_query($conexion, $ssql_horario);
	/////////////////////////////////////////////////////////////
	
	////////////////////  HORARIOS FUTUROS DEL USUARIO  ////////////////////////
	$ssql_futuros = "SELECT MAX(hora_inicio) FROM `$tabla5` WHERE usuario=$usuario";
	$resultado_futuros = mysqli_query($conexion, $ssql_futuros);
	$row_futuros = mysqli_fetch_row($resultado_futuros);
	if($_SESSION['privilegios']==1){
		$partidos_futuros=0;
	}else{
		$partidos_futuros=$row_futuros[0];
	}
	$segundos_hoy=time();

	/////////////////////////////////////////////////////////////
	
	$row_pista = mysqli_fetch_object($resultado_pista);
	$nombre_pista=$row_pista->nombre;
	
	$row_usuario = mysqli_fetch_object($resultado_usuario);
	$nombre_usuario=$row_usuario->nombre;
	
	$row_horario = mysqli_fetch_object($resultado_horario);
	$inicio=$row_horario->inicio;
	$fin=$row_horario->fin;
	$hora_inicio=substr($inicio,0,5);
	$hora_fin=substr($fin,0,5);;
	
//////////////////////////////				GENERA LA ULTIMA RESERVA       ///////////////////////////

$nreserva= mysqli_query($conexion, "SELECT MAX(id_reserva) FROM $tabla5");

	while ($registro=mysqli_fetch_row($nreserva)){
	       foreach($registro as $clave){ 
	       //echo $clave;
	 	}
	 }

$id_reserva=$clave+1;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////				SI EN ESE HORARIO HAY ME APUNTO!!       ///////////////////////////

if($meapunto!=''){
//	echo $meapunto;
tabla_apuntados($meapunto);

	echo "<br><br><hr><br>";
	echo "<form action='reservas2.php' method='POST'>";
	echo "<input type='submit' name='hora_actual' value='Tambi&eacute;n puedes reservar la pista completa' id='reservar_completa'>";
	echo "<input type='hidden' name='hora' value='$horario'>";
	echo "<input type='hidden' name='usuario' value='$usuario'>";
	echo "<input type='hidden' name='pista' value='$pista'>";
	echo "<input type='hidden' name='dia' value='$dia'>";
	echo "<input type='hidden' name='pag' value='$pag'>";
	echo "<input type='hidden' name='fecha_seg' value='$fecha_seg'>";
	echo "</form>";
}else{


//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

	if($partidos_futuros>=$segundos_hoy){
		echo "<div id='error'>Solo puede programar un partido al mismo tiempo</div>";
	}else{

		if($confirmado!='si'){
			echo "<div id='mensaje_reserva'>La reserva se har&aacute; a nombre de <b>$nombre_usuario</b> en la pista <b>$nombre_pista</b> el d&iacute;a <b>$fecha_esp</b> desde las <b>$hora_inicio</b> hasta las <b>$hora_fin</b>.<br>
			Si los datos son correctos dele al bot&oacute;n confirmar.
			<br><br>";

			echo "<form action='reservas2.php' method='POST'>";
			echo "<input type='hidden' name='hora' value='$horario'>";
			echo "<input type='hidden' name='usuario' value='$usuario'>";
			echo "<input type='hidden' name='pista' value='$pista'>";
			echo "<input type='hidden' name='dia' value='$dia'>";
			echo "<input type='hidden' name='pag' value='$pag'>";
			echo "<input type='hidden' name='fecha_seg' value='$fecha_seg'>";
			echo "<input type='hidden' name='confirmado' value='si'>";
			echo "<input type='submit' name='confirmar' value='Confirmar' id='boton'>";
			echo "</form>";

		}else{
		$campos="id_reserva,usuario,pista,horario,dia,hora_inicio";
		$datos="'$id_reserva','$usuario','$pista','$horario','$dia','$fecha_seg'";
	
		$sentencia="INSERT INTO $tabla5 ($campos) VALUES ($datos)";
	
		$inserta=mysqli_query($conexion, $sentencia);

			if($inserta==1){

				echo "<div id='mensaje_reserva'>Gracias <b>$nombre_usuario</b>. La reserva se ha realizado con &eacute;xito.<br>
				La p&iacute;sta <b>$nombre_pista</b> estar&aacute; disponible para t&iacute; el d&iacute;a <b>$fecha_esp</b> desde las <b>$hora_inicio</b> hasta las <b>$hora_fin</b>.<br><br>
				<form action='reservas.php' method='POST'>
				<input type='submit' name='volver' value='volver' id='boton'>
				<input type='hidden' name='seleccionado' value='$fecha[2]'>
				<input type='hidden' name='mes_actual' value='$fecha[1]'>
				<input type='hidden' name='ano_actual' value='$fecha[0]'>
				</form> 
				</div>";
			}else{
				echo "<div id='error'>No ha sido posible insertar los datos en la base de datos</div>";
			//echo $sentencia;
			}
		}
	}
}

if($_SESSION['privilegios']==1){

////////////////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla13` WHERE dia='$dia' AND pista='$pista' AND hora='$hora_inicio'";
$resultado= mysqli_query($conexion, $ssql);
$row= mysqli_fetch_object($resultado);
////////////////////////////////////////////////////////////////////////
////// CONSULTA DE RESERVA TEMPORAL, MIRA EL DIA, LA PISTA Y LA HORA ///
////////////////////////////////////////////////////////////////////////

$nombre1=$row->nombre1;
$pagado1=$row->pagado1;
$nombre2=$row->nombre2;
$pagado2=$row->pagado2;
$nombre3=$row->nombre3;
$pagado3=$row->pagado3;
$nombre4=$row->nombre4;
$pagado4=$row->pagado4;
$cervezas=$row->cervezas;
$agua=$row->agua;
$tienda=$row->tienda;

$total=$row->total;


	
	$mes_select=$fecha[1];

////////////////////////////////////////////////////////////////////////
echo "<br><br>";
echo "<fieldset id='reserva_temporal'>";
echo "<legend>Reserva temporal</legend>";	
echo "<table  width='auto' border='3'>";
echo "<br>";
echo "<form action='guardar.php' method='POST'>";
echo "<input name='dia' value='$dia' type='hidden'>";
echo "<input name='pista' value='$pista' type='hidden'>";
echo "<input name='hora_inicio' value='$hora_inicio' type='hidden'>";

echo "<input name='mes_select' value='$mes_select' type='hidden'>";

echo "<input name='id_reserva' value='$id_reserva' type='hidden'>";

echo  "<tr>
    <td align='center'>Pista: ".$pista." | Dia: ".$dia." | Hora: ".$hora_inicio."</td>
   
  </tr>
  <tr>
    <td><br>Nombre:</td>
    <td><br>Pagado:</td>
  </tr>
  
  <tr>
    <td align='center'>1&deg; <input type='text' name='nombre1' value='".$nombre1."' size='15'>
	<br>
	<br>
	</td>
	
    <td><input type='text' name='pagado1' value='".$pagado1."' size='6'>
	<br>
	<br>
	</td>
  </tr>
  <tr>
    <td align='center'>2&deg; <input type='text' name='nombre2' value='".$nombre2."' size='15'>
	<br>
	<br>
	</td>
	
    <td><input type='text' name='pagado2' value='".$pagado2."' size='6'>
	<br>
	<br>
	</td>
  </tr>
  <tr>
    <td align='center'>3&deg; <input type='text' name='nombre3' value='".$nombre3."' size='15'>
	<br>
	<br>
	</td>
	
    <td><input type='text' name='pagado3' value='".$pagado3."' size='6'>
	<br>
	<br>
	</td>
  </tr>
  <tr>
    <td align='center'>4&deg; <input type='text' name='nombre4' value='".$nombre4."' size='15'>
	<br>
	<br>
	</td>
	
    <td><input type='text' name='pagado4' value='".$pagado4."' size='6'>
	<br>
	<br>
	</td>
  </tr>
  <tr>
	<td colspan='10'></td>   
	
  </tr>
  
  <tr>
    
	<td colspan='10' style='margin-top:5px; margin-bottom:5px;'> 
	
	<b>CERVEZAS: </b><input type='text' name='cervezas' value='".$cervezas."' size='3' style='height:22px;'> | <b>AGUA: </b><input type='text' name='agua' value='".$agua."' size='3' style='height:22px;'> | <b>TIENDA: </b><input type='text' name='tienda' value='".$tienda."' size='3' style='height:22px;'>
	
	</td> 
	  
  </tr>
  
  <tr>
   
	<td colspan='10'></td>   
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
	<br>";
	
$tabla12= mysqli_query($conexion, "select total from `$tabla13` WHERE dia='$dia' AND pista='$pista' AND hora='$hora_inicio'");///// CONSULTA DEL TOTAL DEL DIA

while ($registro12 = mysqli_fetch_array($tabla12)) {
	
$suma=$registro12['total'];
	 
		
	}
echo '<b>Total: '.$suma.' &euro;</b>';
	
	echo "<br><br>";
	
	
////////////////////////////////////////////////////////////////////////////////////////////////////////////	
/*	
echo	" Total suma: ";
	$total= $pagado1 + $pagado2 + $pagado3 + $pagado4;
	
	echo  "<b>".$total." &euro; </b>
	*/
echo "<input type='hidden' name='total' value='$total'>
	<br>
	<br>
	
			</td>
  </tr>
 
</table>
				
						<table>
							<td>
								<input type='submit' name='confirmar' value='Guardar' id='boton'>&nbsp;&nbsp;
								
							</td>
</form>

	</td>
									<td>
										<form action='reservas.php' method='POST'>
												<input type='submit' name='volver' value='<-- Volver' id='boton'>
												&nbsp;
												<a href='?accion=borrar&id=$id_reserva'><img src='../../imagenes/delete.gif' name='borrar' alt='borrar' border='0'></a>
												
												<input type='hidden' name='seleccionado' value='$fecha[2]'>
												<input type='hidden' name='mes_actual' value='$fecha[1]'>
												<input type='hidden' name='ano_actual' value='$fecha[0]'>
										</form>
								
						</table>";

echo "<br>
	<br>";
echo "<hr></hr>";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
$dia_actual=date("d");
	
$cons_estipulado= mysqli_query($conexion, "select estipulado from `$tabla26` WHERE pista='$pista' AND horario='$hora_inicio' and fecha='$dia' ");///// 

	while ($regt = mysqli_fetch_array($cons_estipulado)) {
		
	$estipulado=$regt['estipulado'];
	 
		
	}


echo "<br><br>";

echo "<div aling='left'><form action='estipulado.php' method='POST'>";

echo "<b>P.Estipulado:  <input type='text' name='estipulado' value='$estipulado &euro;' style='width:50px; ' />";
	
	echo "<input type='hidden' name='fecha' value='$dia'>";
	echo "<input type='hidden' name='dia_selec' value='$fecha[2]'>";
	
	echo "<input type='hidden' name='hora_inicio' value='$hora_inicio'>";
	echo "<input type='hidden' name='usuario' value='$usuario'>";
	echo "<input type='hidden' name='pista' value='$pista'>";
	
echo "<input type='submit' name='Guardar' value='Guardar' /></form> </b>";
echo "</div>";

echo "<br><br>";

echo "</fieldset>";	



}

///////////////////////////////////////		AKI TERMINA LA WEB 		/////////////////////////////

cuerpo2();
col_derecha1();
eventos1();
eventos2();
saldo1();
saldo2();
torneos1();
torneos2();
actividades1();
actividades2();
col_derecha2();
pie();

?>