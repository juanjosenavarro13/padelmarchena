<?php
//Inicio la sesión
session_start();
//COMPRUEBA QUE EL USUARIO ESTA AUTENTICADO
if ($_SESSION["privilegios"] == "1") {
}else{
header("Location: ../index.php?error='3'");
//salimos de este script
exit();
}?>