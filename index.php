<?php
session_start();
include("includes.php");
include('browser_class_inc.php');
$navegador = new browser();
$ip = $_SERVER['REMOTE_ADDR']; // Recogemos la IP del usuario 
$archivo = 'ip.txt'; // <-- Ingresamos el nombre del archivo. Deafult: ip.txt  
$abrir = fopen($archivo, "a"); 
//set_locale(LC_ALL,"es_ES@euro","es_ES","esp");
$fecha= strftime("%A %d de %B del %Y");
$hora = date("H:i:s");
$escritura = " / $ip --> $fecha ($hora)";// Definimos para que escriba la IP  
$escribir = fputs($abrir, $escritura); 
fclose($abrir); 
/////////////////////////////////////////////////////////////////////////////////////////////////////

// Usamos print_r porque nos devuelve un array, 
// podéis verlo correctamente pulsando en código fuente
encabezado();
?>
	<script language="JavaScript" src="calendario/javascripts.js"></script>
<?php
cabecera();
col_izda1();
enlaces_izda_portada();
administrar_portada();
col_izda2();
cuerpo1();
if (strstr($_SERVER["HTTP_USER_AGENT"], "MSIE")) { 

?>



<div class="pmoabs" id="pmocntr2" style="right: 2px; top: 20px;"> <table border="0"> <tbody><tr> <td colspan="2">  </td> </tr> <tr> <td class="padi" rowspan="2"> <img src="https://www.google.es/images/icons/product/chrome-48.png"> </td> <td class="pads"><b>Una forma m&aacute;s r&aacute;pida de navegar la web.</b> <br />Página optimizada para Google Chrome</td> </tr> <tr> <td class="padt"> <div class="kd-button-submit" id="pmolnk"> <a href="https://www.google.es/chrome/index.html?hl=es&amp;brand=CHNG&amp;utm_source=es-hpp&amp;utm_medium=hpp&amp;utm_campaign=es" onclick="google.promos&amp;&amp;google.promos.toast&amp;&amp; google.promos.toast.cl()">Instala Google Chrome</a> </div> </td> </tr> </tbody></table> </div>


<? } 

if ($ip=='85.62.234.162' and $ip=='66.249.66.69'){
	echo "Usuario baneado.";
}else{
?>


<form action='autenticacion.php' method='POST'>

<div id='autenticacion'>
<div id='titulo'>CENTRO DE RESERVAS</div>
<table border='0' name='autenticacion' id='tabla_autenticacion'>

	<tr>
		<td><div style="font:'Lucida Sans Unicode', 'Lucida Grande', sans-serif">Usuario: </div></td>
		<td align='right'><input type='text' name='nick' id='campo'></td>
	</tr>
	
	<tr>
		<td><div style="font:'Lucida Sans Unicode', 'Lucida Grande', sans-serif">Contrase&ntilde;a: </div></td>
		<td align='right'><input type='password' name='pass' id='campo'></td>
	</tr>
	<tr>
    <td></td>
		<td align='right'><a href="olvido.php" target="_blank" onClick="window.open(this.href, this.target, 'width=600,height=400'); return false;"><div style="font:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; font-size:10px;">Olvidaste tu contrase&ntilde;a</div></a>
        <br />
        </td>
        
	</tr>

	<tr>
		<td colspan='2' align='right'><input type='submit' name='enviar' id='boton_inicio' value='ENTRAR'></td>
	</tr>

</table>
</div>
</form>
<?php
include("alta_usuarios.php");
//altaClientes();
/*
noticias1();
noticias2();
muro1();
muro2();
partidos1();
partidos2();
*/

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
}
?>
