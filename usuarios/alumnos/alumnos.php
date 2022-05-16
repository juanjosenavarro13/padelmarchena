<?php
session_start();
include("../../conexion.php");
include("../../seguridad.php");
include("../../includes.php");

encabezado();
	echo "<link href='../../estilos.css' rel='stylesheet' type='text/css' />";
cabecera();
col_izda1();
enlaces_izda();
administrar();
col_izda2();
cuerpo1();
$mes=date(m);
///////////////////////////////////////		AKI COMIENZA LA WEB 		/////////////////////////////
?>

<div id="cabecera_alumnos">ALTA DE NUEVOS ALUMNOS</div>
<br />
<div id="tabla_alumnos">
<form action='guardar.php' method='POST'>
<table>

<tr>
<div id="nombre_alumno"> 

1&deg; Nombre del Alumno: <input type='text' name='nombre' value=''  id="alumno_nombre">
</div>
</tr>
<tr>
<div id="nombre_alumno"> 

2&deg; Apellidos: <input type='text' name='apellido' value=''  id="alumno_nombre">
</div>
</tr>
<tr>
<div id="nombre_alumno"> 

3&deg; Telefono: <input type='text' name='telefono' value=''  id="alumno_tlfn" maxlength='9'>
</div>

</tr>
<tr>
<!--<div id="nombre_alumno"> 

4&deg; N&deg; Cuenta: <input type='text' name='n_cuenta' value=''  id="n_cuenta" maxlength='4' > 
<input type='text' name='n_cuenta2' value=''  id="n_cuenta2" maxlength='4'> 
<input type='text' name='n_cuenta3' value=''  id="n_cuenta3" maxlength='2'>
<input type='text' name='n_cuenta4' value=''  id="n_cuenta4" maxlength='10'>
<input type='hidden' name='mes' value='<?php echo $mes; ?>'>
</div>
</tr>-->
<!--<tr>
<div id="opciones"> 
5&deg; Selecione tipo de clase:
</div>
</tr>

	<tr>
    <br />
    <br />
     <b>N&deg; ALUMNO| HORAS SEMANALES |  &nbsp;&nbsp;PRECIO&nbsp;&nbsp;  | PARTIDO FIN DE SEMANA </b>
    <br />
    <br />
    </tr>
	<tr>
    <input type='submit' name='id1' value='     2     |         1           |  30&euro;     |           NO  ' id='boton_alumnos'>
    <br />
    <br />
    </tr>
    
    <tr>
    <input type='submit' name='id2' value='     3     |         1           |  20&euro;     |           NO  ' id='boton_alumnos'>
    <br />
    <br />
    </tr>
    
    <tr>
    <input type='submit' name='id3' value='     3     |         2           |  40&euro;     |           SI  ' id='boton_alumnos'>
    <br />
    <br />
    </tr>
    
    <tr>
    <input type='submit' name='id4' value='  4 o 5  |         1           |  15&euro;     |           NO  ' id='boton_alumnos'>
    <br />
    <br />
    </tr>
    
    <tr>
    <input type='submit' name='id5' value='  4 o 5  |         1           |  20&euro;     |           SI  ' id='boton_alumnos'>
    <br />
    <br />
    </tr>
    
    <tr>
    <input type='submit' name='id6' value='  4 o 5  |         2           |  30&euro;     |           SI  ' id='boton_alumnos'>
    <br />
    <br />
    </tr>
    
    <tr>
    <input type='submit' name='id7' value='  6 a 8  |         1           |  10&euro;     |           NO  ' id='boton_alumnos'>
    <br />
    <br />
    </tr>
    
    <tr>
    <input type='submit' name='id8' value='  6 a 8  |         2           |  20&euro;     |           SI  ' id='boton_alumnos'>
    <br />
    <br />
    </tr>
    
    <tr>
    
    <br />
    <br />
    <b>ADULTOS </b>
    <br />
    <br />
    </tr>
    <tr>
    <input type='submit' name='id9' value='     4    |         1           |  20&euro;     |           NO  ' id='boton_alumnos_adulto'>
    <br />
    <br />
    </tr>
    <tr>
    <input type='submit' name='id10' value='     3    |         1           |  25&euro;     |           NO  ' id='boton_alumnos_adulto'>
    <br />
    <br />
    </tr>
    <tr>
    <input type='submit' name='id11' value='     3    |         1           |  50&euro;     |           SI  ' id='boton_alumnos_adulto'>
    <br />
    <br />
    </tr>-->
    
    <tr>
     <br />
    <br />
    
    <br />
    <br />
     
    <div id='boton_personalizada' align="center"><a >Precio:
<input type='text' name='p_personalizada' value=''  id="p_personalizada" maxlength='10'>
<input type='submit' name='id12' value='GUARDAR' >
</a>
</div>

    </tr>

</table>
 <br />
</form>
 <br />
    
</div>
<?php
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