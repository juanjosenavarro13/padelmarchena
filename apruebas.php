<?php
$servername = "localhost";
$username = "c13padelmarchena";
$password = "n6ayC#CD";
$dbname = "c13padelmarchena1";

$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "select * from usuarios";
$result = $conn->query($sql);

if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        var_dump($row);
    }
}





$conn->close();
?>