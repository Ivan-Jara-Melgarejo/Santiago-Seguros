<?php
$host = 'localhost'; 
$db = 'santiago_seguros';
$user = 'root'; 
$pass = '1234'; 

// Crear conexión
$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
