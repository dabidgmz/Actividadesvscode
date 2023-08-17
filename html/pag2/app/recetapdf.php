<?php
require 'PDFGenerator.php';

$pdfGenerator = new PDFGenerator();

ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Receta</title>
  <style>
    body {
      width: 100%;
      height: 100%;
    }

    .modal-title {
      font-size: 24px;
      font-weight: bold;
      text-align: center;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    /* Estilos específicos para el formulario */
    .manejo-recomendaciones {
      margin-top: 50px;
      font-size: 24px;
      font-weight: bold;
      text-align: center;
      margin-bottom: 20px;
    }

    .row {
      width: 100%;
    }

    .row2 {
      margin-bottom: 20px;
      width: 100%;
    }

    .col1{
      margin-top: 50px;
      width: 50%;
      float: left;
    }

    .col2 {
      margin-top: 50px;
      width: 50%;
      margin-left: 100px;
      float: left;
    }

    label {
      font-weight: bold;
      margin-bottom: 10px;
    }
    .logo img {
      width: 70px;
      height: auto;
    }
    #firm{
      margin: center;
      margin-left: 260px;
    }
    #lin{
      margin-top: 70px;
      margin: center;
      margin-left: 220px;
    }
  </style>
</head>
<body>
<div class="logo">
      <?php $image = '../img/logo.jpg'; 
      $imageData = base64_encode(file_get_contents($image));
      $src = 'data:'.mime_content_type($image).';base64,'.$imageData;
      echo '<img src="'.$src.'">';
      ?>
    </div>
  <div class="container-fluid">
    <!-- Modal -->
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="recetaModalLabel">Receta</h5>
        </div>
        <div class="modal-body">

          <div class="row">
            <div class="form-group">
              <label for="nombre">Nombre del paciente:</label>
              <?php echo $_POST['nombre']; ?>
            </div>

            <div class="form-group">
              <label for="edad">Edad:</label>
              <?php echo $_POST['edad']; ?>
            </div>

            <!-- Agrega aquí más campos del formulario si los necesitas -->

            <div class="form-group">
              <label for="plasticos">Plasticos:</label>
              <?php echo $_POST['plasticos']; ?>
            </div>

            <div class="form-group">
              <label for="armazon">Armazón:</label>
              <?php echo $_POST['armazon']; ?>
            </div>

            <div class="form-group">
              <label for="totalPedido">Total de Pedido:</label>
              <?php echo $_POST['totalPedido']; ?>
            </div>
          </div>

          <div class="form-group" id="firm">
              <label for="firma">Firma del Optometrista:</label>
            </div>
            <div id="lin">
              <p>-------------------------------------------------</p>
            </div>
          <div class="manejo-recomendaciones">
            Manejo y Recomendaciones
          </div>
          <div class="row2">
            <div class="col1">
              <div class="form-group">
                <label for="dip">DIP: <span id="dipValue"></span></label>
                <?php echo $_POST['dip']; ?>
              </div>

              <div class="form-group">
                <label for="armazon">ARMAZÓN: <span id="armazonValue"></span></label>
                <?php echo $_POST['armazon']; ?>
              </div>

              <div class="form-group">
                <label for="material">MATERIAL: <span id="materialValue"></span></label>
                <?php echo $_POST['material']; ?>
              </div>

              <div class="form-group">
                <label for="esf">ESF: <span id="esfValue"></span></label>
                <?php echo $_POST['esf']; ?>
              </div>

              <div class="form-group">
                <label for="cil">CIL: <span id="cilValue"></span></label>
                <?php echo $_POST['cil']; ?>
              </div>

              <div class="form-group">
                <label for="eje">EJE: <span id="ejeValue"></span></label>
                <?php echo $_POST['eje']; ?>
              </div>

              <div class="form-group">
                <label for="prisma">PRISMA: <span id="prismaValue"></span></label>
                <?php echo $_POST['prisma']; ?>
              </div>
            </div>

            <div class="col2">
              <div class="form-group">
                <label for="od">O.D: <span id="odValue"></span></label>
                <?php echo $_POST['od']; ?>
              </div>

              <div class="form-group">
                <label for="oi">O.I: <span id="oiValue"></span></label>
                <?php echo $_POST['oi']; ?>
              </div>

              <div class="form-group">
                <label for="add">ADD: <span id="addValue"></span></label>
                <?php echo $_POST['add']; ?>
              </div>

              <div class="form-group">
                <label for="tratamiento">Tratamiento: <span id="tratamientoValue"></span></label>
                <?php echo $_POST['tratamiento']; ?>
              </div>

              <div class="form-group">
                <label for="diagnostico">Diagnóstico: <span id="diagnosticoValue"></span></label>
                <?php echo $_POST['diagnostico']; ?>
              </div>

              <div class="form-group">
                <label for="rxFinal">RX FINAL: <span id="rxFinalValue"></span></label>
                <?php echo $_POST['rxFinal']; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

<?php
$html = ob_get_clean();

// Generar el PDF
$pdfGenerator->generatePDF($html);
?>
