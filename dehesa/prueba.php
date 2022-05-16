<?php

include('conexion.php');

$ssql="SELECT * FROM $tabla11 WHERE Id='25125'";
$rs = mysql_query($ssql);
$row = mysql_fetch_object($rs);


echo $row->Nombre;


?>