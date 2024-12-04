<?php
$servername = "https://auth-db1212.hstgr.io/";  
$username = "u117281852_w24021201";
$password = "Quintana1201$";
$dbname = "u117281852_w24021201";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

?>