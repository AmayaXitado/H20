<?php
    // Conection DB
    include('../Conection/main.php');
?>






<!-- Incluir el archivo de encabezado -->
<?php include('../layaouts/header.php'); ?>



    <!-- Contenido de tu página -->
    <div class="primary">

        <h1 class="tittle">Certificado de Funciones</h1><br>
          <p class="paragraph">Un certificado de funciones es un documento oficial emitido por un empleador que detalla las responsabilidades y tareas específicas que un empleado desempeñó durante su periodo de trabajo. Este documento es útil tanto para el empleado como para futuros empleadores, ya que proporciona información detallada sobre las habilidades y experiencias laborales adquiridas.</p>

          <form action="" method="POST">
            <input type="number" name="dni" placeholder="Ingrese su Cedula"><br><br><br>
            <button class="btc">Buscar</button>
          </form>
     
    </div>


<!-- Incluir el archivo del pie de página -->
<?php include('../layaouts/footer.php'); ?>

