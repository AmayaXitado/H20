<?php
require('../pdf/fpdf.php'); // Ajusta la ruta según la estructura de tu proyecto

$conexion = mysqli_connect("localhost", "root", "", "h2o");

// Obtener la cédula del formulario
$cedula_ingresada = $_POST['dni'];

// Consulta SQL para obtener información basada en la cédula
$consulta = "SELECT * FROM personas WHERE cedula = '$cedula_ingresada'";
$resultado = mysqli_query($conexion, $consulta);

// Verificación y generación del PDF
if ($fila = mysqli_fetch_assoc($resultado)) {
    // Crear instancia de FPDF
    $pdf = new FPDF();
    $pdf->AddPage();

    // Generar contenido del certificado
    $fecha = "Sabaneta, 09 de noviembre de 2023";
    $empresa = "H2O CONTROL INGENIERIA S.A.S";
    $nit = $cedula_ingresada;
    $nombre = "LUZ ESDERYS MUNERA SANCHEZ";
    $fecha_contrato = "16/12/2019";
    $tipo_contrato = "Indefinido";
    $salario = "$1.845.200";
    $cargo = "Analista administrativa";
    $telefonos = "(604) 6074981 – 3146451208 – 3183890548";
    
    // Agregar contenido al PDF
    $pdf->SetFont('Arial', '', 12);
    $pdf->Write(10, "$fecha\n\nCERTIFICADO LABORAL\n\n");
    $pdf->Write(10, "Por medio de la presente, la empresa $empresa, identificada con el NIT $nit,\n");
 

    // Descargar el PDF generado
    $pdf->Output('certificado_ingreso.pdf', 'D');
} else {
    // La cédula no coincide
    echo '<script>';
    echo 'alert("La cédula no fue encontrada en la base de datos.");';
    echo '</script>';
}

// Cierra la conexión a la base de datos
mysqli_close($conexion);
?>
