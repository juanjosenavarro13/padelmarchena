<?php
function factura_general_tarifa_plana(){
include("../conexion.php");
require_once('class.ezpdf.php');
$pdf =& new Cezpdf('a4');
$pdf->selectFont('../fonts/courier.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);


$queEmp = "SELECT nombre, apellido, telefono, precio, fecha FROM `$tabla22` WHERE debaja='' ORDER BY nombre ASC";
$resEmp = mysql_query($queEmp) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);

$ixx = 0;
while($datatmp = mysql_fetch_assoc($resEmp)) { 
	$ixx = $ixx+1;
	$data[] = array_merge($datatmp, array('num'=>$ixx));
}
$titles = array(
				'num'=>'<b>Num Cl.</b>',
				'nombre'=>'<b>Nombre</b>',
				'apellido'=>'<b>Apellido</b>',
				'telefono'=>'<b>Telefono</b>',
				'precio'=>'<b>Pagado</b>',
				'fecha'=>'<b>Fecha</b>',
			);
$options = array(
				'shadeCol'=>array(0.9,0.9,0.9),
				'xOrientation'=>'center',
				'width'=>500
			);
$txttit = "<b>PADEL MARCHENA</b>\n";
$txttit.= "Factura tarifa plana \n";

$pdf->ezText($txttit, 12);
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezStream();
}
/* /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// */
$factura_alumnos=$_POST['factura_alumnos'];
if ($factura_alumnos = factura_alumnos){
include("../conexion.php");
require_once('class.ezpdf.php');
$id_alumno=$_POST['id_alumno'];
$pdf =& new Cezpdf('a4');
$pdf->selectFont('../fonts/courier.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);


$queEmp = "SELECT nombre, apellido, telefono, numero_alumno, horas, precio, f_semana, fecha FROM `$tabla14` WHERE id_alumno='$id_alumno' ORDER BY nombre ASC";
$resEmp = mysql_query($queEmp) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);

$ixx = 0;
while($datatmp = mysql_fetch_assoc($resEmp)) { 
	$ixx = $ixx+1;
	$data[] = array_merge($datatmp, array('num'=>$ixx));
}
$titles = array(
				
				'nombre'=>'<b>Nombre</b>',
				'apellido'=>'<b>Apellido</b>',
				'telefono'=>'<b>Telefono</b>',
				'precio'=>'<b>Pagado</b>',
				'fecha'=>'<b>Fecha del pago</b>',
			);
$options = array(
				'shadeCol'=>array(0.9,0.9,0.9),
				'xOrientation'=>'center',
				'width'=>500
			);
$txttit = "<b>PADEL MARCHENA</b>\n";
$txttit_tipo= "Factura tarifa plana \n";

$pdf->ezText($txttit, 15);
$pdf->ezText($txttit_tipo, 15);
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha facturacion:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora facturacion:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezStream();
}
?>