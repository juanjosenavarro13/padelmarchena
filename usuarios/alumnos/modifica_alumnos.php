<?php
include ("../seguridad.php");
include("../../conexion.php");
include("../../includes.php");

$nombre=$_GET['nombre'];
$id_alumno=$_GET['id_alumno'];
$pag=$_SERVER['PHP_SELF'];
$fecha=date("Y:m:d");
/////////////////////////////////////////////////////////////
/*$ssql_cuenta = mysql_query("select n_cuenta4 from `$tabla14` WHERE id_alumno='$id_alumno' ");
$resultado_cuenta = mysql_fetch_row($ssql_cuenta);

echo $resultado_cuenta;*/
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla14` WHERE id_alumno='$id_alumno' ";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){
/////////////////////////////////////////////////////////////

$nombre=$row->nombre;
$apellido=$row->apellido;
$telefono=$row->telefono;
$numero_alumno=$row->numero_alumno;
$horas=$row->horas;
$precio=$row->precio;
$f_semana=$row->f_semana;
$pagado=$row->pagado;
$id_alumno=$row->id_alumno;
$n_cuenta=$row->n_cuenta;
$n_cuenta2=$row->n_cuenta2;
$n_cuenta3=$row->n_cuenta3;
$n_cuenta4=$row->n_cuenta4;
$monitor=$row->monitor;
$debaja=$row->debaja;
}

encabezado();
?>
	<link href='../../estilos.css' rel='stylesheet' type='text/css' />
<?php
cabecera();
col_izda1();
enlaces_izda();
administrar();
col_izda2();
cuerpo1();
echo "Fecha: ";
echo $fecha;
echo " ";
$mes=date(m);
echo $mes;
//echo strftime("%d %m %Y");
?>
<div id='boton_nuevo'><a href='lista_alumnos.php'>VER ALUMNOS</a></div>
<br />
<br />
<br />

<form action="modifica_alumnos2.php" method="post" name="fcalen">
<input type='hidden' name='pag' value='<?php echo $pag; ?>'>
<input type='hidden' name='nombre' value='<?php echo $nombre; ?>'>
<input type='hidden' name='id_alumno' value='<?php echo $id_alumno; ?>'>
<input type='hidden' name='mes' value='<?php echo $mes; ?>'>
<input type='hidden' name='fecha' value='<?php echo $fecha; ?>'>
<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////

if ($pagado<1){ ?>
	<input type='hidden' name='fecha' value='<?php echo $fecha; ?>'>
<?php }else{ 

 } ?>

<fieldset id="alta_clientes">

	<legend>MODIFICA USUARIOS</legend>
	
<table border="0" id='tabla_altas'>

	<tr>
		<td>Nombre:</td><td><input type="text" name="nombre" value='<?php echo $nombre; ?>'> *</td>
	</tr>
	<tr>
		<td>Apellido:</td><td><input type="text" name="apellido" value='<?php echo $apellido; ?>'> *</td>
	</tr>
	<tr>
		<td>Telefono:</td><td><input type='text' name='telefono' value='<?php echo $telefono; ?>' /> *</td>
	</tr>
	<tr>
		<td>N&deg; Alumnos:</td><td>
     <select name="alumnos" style="width:130px" >
    		 <option value="2" selected="selected"><?php echo $numero_alumno; ?></option>
			<option value="2" >2</option>
			<option value="3">3</option>
            <option value="4">4</option>
			<option value="4 o 5">4 o 5</option>
			<option value="6 o 8">6 o 8</option>
		</select>
        </td>
	</tr>
	<tr>
		<td>Horas semanales:</td><td>
          <select name="horas"  style="width:130px" >
         	 <option value="1" selected="selected"><?php echo $horas; ?></option>
			<option value="1">1</option>
			<option value="2">2</option>
		</select>     
        </td>
	</tr>
    <tr>
		<td><b>Precio:</b></td><td>
         <select name="precio" style="width:130px" >
         	<option value="<?php echo $precio; ?>" selected="selected"><?php echo $precio; ?></option>
            <option value="15">15</option>
            <option value="10">10</option>
			<option value="20">20</option>
            <option value="25">25</option>
            <option value="30">30</option>
            <option value="35">35</option>
			<option value="40">40</option>
            <option value="50">50</option>
		</select> 
        <b>* 1 PRIMERO</b>      
        </td>
	</tr>
    <tr>
		<td>Partido Fin de semana:</td><td>
        <select name="f_semana"  style="width:130px" >
        	<option value="<?php echo $f_semana; ?>" selected="selected"><?php echo $f_semana; ?></option>
			<option value="SI">SI</option>
			<option value="NO">NO</option>
		</select>  
        
        </td>
        
	</tr>
    <tr>
		<td>
			<br />
    	</td>
    </tr>
    <tr>

		<td>Monitor:</td>
		<td>
        <select name="monitor"  style="width:130px" >
        	<option value="<?php echo $monitor; ?>" selected="selected"><?php echo $monitor; ?></option>
			<option value="Beni">Beni</option>
			<option value="Raul">Raul</option>
		</select>  
        </td>
	</tr>
      <tr>
		<td>
			<br />
    	</td>
    </tr>
	<tr>
   
		<td><b>Pagado:</b></td><td><input type='text' name='pagado' value='<?php echo $pagado; ?> &euro;' size="10px"> <b>* 2 SEGUNDO</b></td>
	</tr>
	
	<tr>
   		
		<td colspan="2" align="right"><br><input type="submit" value="Guardar" id="boton"></td>
	</tr>
  
		<tr>
   		<td colspan="2" align="left">
        
     
        </td>
        </tr>
</table>

</form>
</fieldset>
<br>
   <?php 
		if ($debaja<1){ ?>
        <form action="debaja2.php" method="post" name="fcalen">
        <input type="submit" value="Dar de baja" id="boton">
        <input type='hidden' name='debaja' value='1'>
        <input type='hidden' name='pag' value='<?php echo $pag; ?>'>
		<input type='hidden' name='nombre' value='<?php echo $nombre; ?>'>
		<input type='hidden' name='id_alumno' value='<?php echo $id_alumno; ?>'>
        </form>
         <?php }else{ ?>
        <form action="debaja2.php" method="post" name="fcalen">
        <input type="submit" value="Dar de Alta" id="boton">
        <input type='hidden' name='debaja' value='0'>
        <input type='hidden' name='pag' value='<?php echo $pag; ?>'>
		<input type='hidden' name='nombre' value='<?php echo $nombre; ?>'>
		<input type='hidden' name='id_alumno' value='<?php echo $id_alumno; ?>'>
        </form> 
        <?php } ?>   
         
   		<form action="../facturas_pdf.php" method="post" name="fcalen">
        <input type='hidden' name='id_alumno' value='<?php echo $id_alumno; ?>'>
        <input type='hidden' name='fatura_alumnos' value='factura_alumnos'>
		<br><input type="submit" value="FACTURA" id="boton">
        </form>
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