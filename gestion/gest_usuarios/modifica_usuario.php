<?php
include ("../seguridad.php");
include("../../conexion.php");
$id_usuario=$_GET['id_usuario'];
$pag=$_SERVER['PHP_SELF'];
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla1` WHERE id_usuario=$id_usuario";
$resultado = mysql_query($ssql);
$row=mysql_fetch_object($resultado);
/////////////////////////////////////////////////////////////

$cod_usuario=$row->id_usuario;
$mail=$row->mail;
$nick=$row->nick;
$pass=$row->pass;
$nombre=$row->nombre;
$apellido1=$row->apellido1;
$apellido2=$row->apellido2;
$dni=$row->dni;
$telefono1=$row->telefono1;
$telefono2=$row->telefono2;
$calle=$row->calle;
$numero=$row->numero;
$bloque=$row->bloque;
$puerta=$row->puerta;
$fnacimiento=$row->fecha_nacimiento;
$fecha=explode("-",$fnacimiento);
$fecha_nacimiento=$fecha[2]."-".$fecha[1]."-".$fecha[0];
$dia_nac=$fecha[2];
$mes_nac=$fecha[1];
$ano_nac=$fecha[0]; 
$dia_alta=$row->dia_alta;
$hora_alta=$row->hora_alta;
include("../../includes.php");
encabezado();
?>
	<script language="JavaScript" src="calendario/javascripts.js"></script>
	<link href='../../estilos.css' rel='stylesheet' type='text/css' />
<?php
cabecera();
col_izda1();
enlaces_izda();
administrar();
col_izda2();
cuerpo1();

?>
<form action="modifica_usuario2.php" method="post" name="fcalen">
<input type='hidden' name='pag' value='<?php echo $pag; ?>'>
<input type='hidden' name='id_usuario' value='<?php echo $cod_usuario; ?>'>
<fieldset id="alta_clientes">

	<legend>MODIFICA USUARIOS</legend>
	
<table border="0" id='tabla_altas'>

	<tr>
		<td>Nick:</td><td><input type='text' name='nick' value='<?php echo $nick; ?>' readonly></td>
	</tr>
	<tr>
		<td>Nombre:</td><td><input type="text" name="nombre" value='<?php echo $nombre; ?>'> *</td>
	</tr>
	<tr>
		<td>Primer apellido:</td><td><input type="text" name="apellido1" value='<?php echo $apellido1; ?>'> *</td>
	</tr>
	<tr>		
		<td>Segundo apellido:</td><td><input type="text" name="apellido2" value='<?php echo $apellido2; ?>'></td>
	</tr>
	<tr>
		<td>DNI:</td><td><input type='text' name='dni' value='<?php echo $dni; ?>'</td>
	</tr>
	<tr>
		<td>Correo electronico:</td><td><input type="text" name="mail" value='<?php echo $mail; ?>'> *</td>
	</tr>
	<tr>
		<td>M&oacute;vil:</td><td><input type="text" name="telefono1" value='<?php echo $telefono1; ?>'> *</td>
	</tr>

	<tr>
		<td colspan="2" align="center">Fecha de nacimiento: 
			<select name="dia"> <?php for ($i=1;$i<32;$i++){
				echo "<option value='$i'";
					if($i==$dia_nac){
						echo "selected";
					}
				echo ">$i</option>";
				} ?>		
			</select>
		<select name="mes">
		
		<?php 
		
			$j[1]="Enero";
			$j[2]="Febrero";
			$j[3]="Marzo";
			$j[4]="Abril";
			$j[5]="Mayo";
			$j[6]="Junio";
			$j[7]="Julio";
			$j[8]="Agosto";
			$j[9]="Septiembre";
			$j[10]="Octubre";
			$j[11]="Noviembre";
			$j[12]="Diciembre";

			for ($i=1;$i<13;$i++){
				echo "<option value='$i'";
					if($i==$mes_nac){
						echo "selected";
					}
				echo "> $j[$i] </option>";
			
			}			

			echo "</select>";
			

$Fecha=getdate();
$ano=$Fecha["year"]; 

$inicio=$ano-10;
$fin=$ano-80;

			echo "<select name='ano'>";
				for ($i=$inicio;$i>$fin;$i--){
				echo "<option value=$i ";
					if($i==$ano_nac){
						echo "selected";
					}
				echo ">".$i."</option>";
				}
			echo "</select>";

		?>
		</td>
	
	</tr>

	<tr>
		<td colspan="2" align="right"><br><input type="submit" value="modificar" id="boton"> <input type="reset" value="borrar" id="boton"></td>
	</tr>
	
</table>

</form>
</fieldset>
<br>



<?php
if($_GET['msj']==1){
	echo "<div id='bien'>DATOS MODIFICADOS CON &Eacute;XITO</div>";
}
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