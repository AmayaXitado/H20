<?php
    // Conection DB
    include('../Conection/main.php');
?>






<!-- Incluir el archivo de encabezado -->
<?php include('../layaouts/header.php'); ?>



    <!-- Contenido de tu página -->
    <div class="primary">

        <h1 class="tittle">Certificado de Ingreso</h1><br>
          <p class="paragraph">Un certificado de ingreso es un documento que certifica la entrada o admisión de una persona a cierto lugar, evento o institución. Puede tener diversos propósitos según el contexto en el que se emite</p>

          <form action="" method="POST">
            <input type="number" name="dni" placeholder="Ingrese su Cedula"><br><br><br>
            <button class="btc">Buscar</button>
          </form>
     
    </div>


<!-- Incluir el archivo del pie de página -->
<?php include('../layaouts/footer.php'); ?>
