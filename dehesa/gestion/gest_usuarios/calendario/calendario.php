<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Funci�n que escribe en la p�gina un fomrulario preparado para introducir una fecha y enlazado con el calendario para seleccionarla comodamente
////////////////////////////////////////////////////////////////////////////////////////////////////////////
function escribe_formulario_fecha_vacio($nombrecampo,$nombreformulario){
	global $raiz;
	echo '<tr><td>Nick: </td>
	<td><INPUT name="'.$nombrecampo.'" readonly onclick="muestraCalendario(\''. $raiz.'\',\''. $nombreformulario .'\',\''.$nombrecampo.'\')"></td></tr>
	<tr><td></td><td><input type=button value="Busca un nick disponible" onclick="muestraCalendario(\''. $raiz.'\',\''. $nombreformulario .'\',\''.$nombrecampo.'\')"></td></tr>
	';	
}

?>