<!-- Incluir el archivo de encabezado -->
<?php include('../layaouts/header.php'); ?>



    <!-- Contenido de tu página -->
    <div class="primary">

        <h1 class="tittle">Certificado Laboral</h1><br>
          <p class="paragraph">
           Un certificado laboral es un documento oficial emitido por un empleador que certifica la relación laboral entre un empleado y la empresa. Este documento suele incluir información sobre el periodo de empleo, el cargo ocupado, las responsabilidades del empleado y cualquier otra información relevante. Además, puede utilizarse como prueba de experiencia laboral al buscar empleo en el futuro o para otros fines administrativos.</p>

          <form action="../fuction/laboral.php" method="POST">
            <input type="number" name="dni" placeholder="Ingrese su Cedula"><br><br><br>
            <button class="btc">Buscar</button>
          </form>
     
    </div>


<!-- Incluir el archivo del pie de página -->
<?php include('../layaouts/footer.php'); ?>



