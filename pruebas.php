<?php
$servername = "localhost";
$username = "c13padelmarchena";
$password = "n6ayC#CD";
$dbname = "c13padelmarchena1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die($conn->connect_error);
}else{
    echo "conexion exitosa";
}

$sql = "select * from usuarios where nick = 'gesimar' && pass = '74ffa6c018ae69e491691e363fff05e3'";
$result = $conn->query($sql);
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        var_dump($row);
    }
}





$conn->close();
?>