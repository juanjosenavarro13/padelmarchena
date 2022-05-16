<?php
include("includes.php");

encabezado();
cabecera();
col_izda1();
enlaces_izda();
administrar();
col_izda2();
cuerpo1();
?>
<form action='altas2.php' method='post'>
<table border='0' id='altas'>

<tr>
	<td colspan='2' id='titulo'>DATOS PARA EL ALTA</td>
</tr>

<tr>
	<td>
		NOMBRE:
	</td>
	<td>
		<input type='text' name='nombre' id='campo'>
	</td>
</tr>

<tr>
	<td>
		APELLIDOS:
	</td>
	<td>
		<input type='text' name='nombre' id='campo'>
	</td>
</tr>

<tr>
	<td>
		CORREO ELECTR&Oacute;NICO:
	</td>
	<td>
		<input type='text' name='nombre' id='campo'>
	</td>
</tr>

<tr>
	<td>
		REPITE EL CORREO ELECTR&Oacute;NICO:
	</td>
	<td>
		<input type='text' name='nombre' id='campo'>
	</td>
</tr>

<tr>
	<td>
		FECHA DE NACIMIENTO:
	</td>
	<td>
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
	<td>
		SEXO:
	</td>
	<td>
		<select name='sexo' id='campos'>
			<option value='1' name='sexo'>HOMBRE</option>
			<option value='2' name='sexo'>MUJER</option>
		</select>
	</td>
</tr>

<tr>
	<td>
		NIVEL:
	</td>
	<td>
		<select name='niveles' id='campos'>
			<option value='1' name='nivel'>1</option>
			<option value='1.5' name='nivel'>1.5</option>
			<option value='2' name='nivel'>2</option>
			<option value='2.5' name='nivel'>2.5</option>
			<option value='3' name='nivel'>3</option>
			<option value='3.5' name='nivel'>3.5</option>
			<option value='4' name='nivel'>4</option>
			<option value='4.5' name='nivel'>4.5</option>
			<option value='5' name='nivel'>5</option>
			<option value='5.5' name='nivel'>5.5</option>
		</select>
		
	</td>
</tr>

<tr>
	<td colspan='2' align='center'><input type='submit' value='Enviar' id='boton'></td>
</tr>

</table>
</form>


<?php
cuerpo2();
col_derecha1();
eventos1();
?>
texto
<?php
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