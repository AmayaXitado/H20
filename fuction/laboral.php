


<?php

$conexion = mysqli_connect("localhost", "root", "", "h2o");

// Paso 2: Obtener la cédula del formulario
$cedula_ingresada = $_POST['dni'];

// Paso 3: Consulta SQL para obtener información basada en la cédula
$consulta = "SELECT * FROM personas WHERE cedula = '$cedula_ingresada'";
$resultado = mysqli_query($conexion, $consulta);

// Paso 4: Verificación y descarga del PDF
if ($fila = mysqli_fetch_assoc($resultado)) {
    // La cédula coincide, genera el contenido del PDF
    $contenido_pdf = 'Contenido del PDF aquí';

    // Configura las cabeceras para indicar que es un archivo PDF y forzar la descarga
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="documento.pdf"');

    // Imprime el contenido del PDF
    echo $contenido_pdf;
} else {
    // La cédula no coincide
    echo 'La cédula no fue encontrada en la base de datos.';
}

// Paso 5: Cierra la conexión a la base de datos
mysqli_close($conexion);
?>












