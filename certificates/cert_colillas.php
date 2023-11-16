<?php
    // Conection DB
    include('../Conection/main.php');
?>






<!-- Incluir el archivo de encabezado -->
<?php include('../layaouts/header.php'); ?>



    <!-- Contenido de tu página -->
    <div class="primary">

        <h1 class="tittle">Colillas de Pago</h1><br>
          <p class="paragraph">
           Las colillas de pago, también conocidas como recibos de nómina o talones de pago, son documentos que detallan la información salarial de un empleado para un período de pago específico. Estos documentos son esenciales tanto para los empleadores como para los empleados, ya que proporcionan transparencia en cuanto a la compensación y deducciones.</p>

           <form action="../fuction/colillas.php" method="POST">
            <input type="number" name="dni" placeholder="Ingrese su Cedula"><br><br><br>
            <button class="btn btn-primary">Buscar</button>
          </form>
     
    </div>


<!-- Incluir el archivo del pie de página -->
<?php include('../layaouts/footer.php'); ?>
