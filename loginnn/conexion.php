<?php

$host = "localhost"; 
$user = "root"; 
$password = ""; 
$database = "ganaderia"; 

// Conexión a la base de datos
$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Error de conexión a la base de datos: " . mysqli_connect_error());
}




?>
