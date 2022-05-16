<?php
include("../includes.php");
encabezado();
	echo "<link href='../estilos.css' rel='stylesheet' type='text/css' />";
cabecera();
col_izda1();
enlaces_izda();
administrar();
col_izda2();
cuerpo1();

///////////////////////////////////////		AKI COMIENZA LA WEB 		/////////////////////////////
?>

<form action="alta_usuarios2.php" method="post">

<fieldset id="alta_clientes">

	<legend>SOLICITUD DE ALTA</legend>
	
<table border="0">
	
	<tr>
		<td>Nick: </td>
		<td><input name="nickname" /></span></td>
	</tr>
	<tr>
		<td>Nombre:</td><td><input type="text" name="nombre"> *</td>
	</tr>
	<tr>
		<td>Primer apellido:</td><td><input type="text" name="apellido1"> *</td>
	</tr>

	<tr>		
		<td>Segundo apellido:</td><td><input type="text" name="apellido2"></td>
	</tr>
	<tr>
		<td>DNI:</td><td><input type="text" name="dni"> *</td>
	</tr>
	<tr>
		<td>Correo electronico:</td><td><input type="text" name="mail"> *</td>
	</tr>
	<tr>
		<td>M&oacute;vil:</td><td><input type="text" name="telefono1"> *</td>
	</tr>
	<tr>
		<td>Otro n&uacute;mero:</td><td><input type="text" name="telefono2"></td>
	</tr>
	<tr>
		<td>Calle:</td><td colspan="2"><input type="text" name="calle" size="40"> *</td>
	</tr>
	<tr>
		<td>N&uacute;mero:</td><td><input type="text" name="numero" size="5"> *</td>
	</tr>
	<tr>
		<td>Bloque:</td><td><input type="text" name="bloque"></td>
	</tr>
	<tr>
		<td>Puerta:</td><td><input type="text" name="puerta"></td>
	</tr>

	<tr>
		<td colspan="2" align="center">Fecha de nacimiento: 
			<select name="dia"> <?php for ($i=1;$i<32;$i++){
				echo "<option>$i</option>";
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
				?> <option value=<?php echo $i; ?> > <?php echo $j[$i]; ?> </option>;
			<?php 
			}			
	  ?>
			</select>
<?php 
$Fecha=getdate();
$ano=$Fecha["year"]; 

$inicio=$ano-10;
$fin=$ano-80;

?>
			<select name="ano">
				<?php	for ($i=$inicio;$i>$fin;$i--){
				echo "<option value=".$i.">".$i."</option>";
					}
				?>
			</select>
		
		
		</td>
	
	</tr>
	
	<tr>
		<td colspan='2' class='aviso'><br><input type='checkbox' name='aviso'> He leido la <a href='nota.php' target="_blank" onClick="window.open(this.href, this.target, 'width=600,height=600'); return false;">nota legal</a> y acepto las condiciones.</td>
	</tr>

	<tr>
		<td colspan="2" align="right"><br><input type="submit" value="guardar" id="boton"> <input type="reset" value="borrar" id="boton"></td>
	</tr>
	
</table>

</form>
</fieldset>
<br>
<?php
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