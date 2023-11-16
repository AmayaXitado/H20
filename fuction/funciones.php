<?php
require('../pdf/fpdf.php'); // Ajusta la ruta según la estructura de tu proyecto

$conexion = mysqli_connect("localhost", "root", "", "h2o");

// Obtener la cédula del formulario
$cedula_ingresada = $_POST['dni'];

// Consulta SQL para obtener información basada en la cédula
$consulta = "SELECT * FROM personas WHERE cedula = '$cedula_ingresada'";
$resultado = mysqli_query($conexion, $consulta);

// Verificación y descarga del PDF
if ($fila = mysqli_fetch_assoc($resultado)) {
    // Crear instancia de FPDF
    $pdf = new FPDF();
    $pdf->AddPage();

    // Agregar contenido al PDF
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(40, 10, 'Certificado de Funciones');

    // Configura las cabeceras para indicar que es un archivo PDF y forzar la descarga
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="documento.pdf"');

    // Imprimir el contenido del PDF
    echo $pdf->Output();
} else {
    // La cédula no coincide
    echo 'La cédula no fue encontrada en la base de datos.';
}

// Cierra la conexión a la base de datos
mysqli_close($conexion);
?>
