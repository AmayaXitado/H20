<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "h2o";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}


// Cerrar conexión
$conn->close();
?>
