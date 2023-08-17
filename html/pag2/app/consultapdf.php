<?php
require 'PDFGenerator.php';

$pdfGenerator = new PDFGenerator();

ob_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Historial y Antecedentes</title>
  <style>
    .content {
      width: 100%;
    }
    
    .row {
      display: flex;
      justify-content: space-between;
    }
    
    .column {
      width: 48%;
    }
    
    h1, h2, h3 {
      margin-bottom: 10px;
    }

    .logo img {
      width: 70px;
      height: auto;
    }
    
    .diag, .trat {
      width: 700px; /* o width: 100%; */
      height: auto;
      word-wrap: break-word;
    }
  </style>
</head>

<body>
  <div class="logo">
    <?php 
      $image = '../img/logo.jpg'; 
      $imageData = base64_encode(file_get_contents($image));
      $src = 'data:'.mime_content_type($image).';base64,'.$imageData;
      echo '<img src="'.$src.'">';
    ?>
  </div>
  <div class="content">
    <h1>Historial y Antecedentes</h1>
    <form action="consultapdf.php" method="POST">
      <div class="row">
        <div class="column">
          <h2>Historial y Antecedentes</h2>
          <div class="mb-3">
            <label for="cefaleas">Cefaleas:</label>
            <?php
            if (isset($_POST['cefaleas']) && $_POST['cefaleas'] === "true") {
              echo '(V)';
            } else {
              echo '(X)';
            }
            ?>
          </div>
          <div class="mb-3">
            <label for="fatigaOcular">Fatiga Ocular:</label>
            <?php
            if (isset($_POST['fatigaOcular']) && $_POST['fatigaOcular'] === "true") {
              echo '(V)';
            } else {
              echo '(X)';
            }
            ?>
          </div>
          <div class="mb-3">
            <label for="ojoRojo">Ojo Rojo:</label>
            <?php
            if (isset($_POST['ojoRojo']) && $_POST['ojoRojo'] === "true") {
              echo '(V)';
            } else {
              echo '(X)';
            }
            ?>
          </div>
          <div class="mb-3">
            <label for="borrosidad">Borrosidad:</label>
            <?php
            if (isset($_POST['borrosidad']) && $_POST['borrosidad'] === "true") {
              echo '(V)';
            } else {
              echo '(X)';
            }
            ?>
          </div>
        </div>
      
        <div class="column">
          <h2>Consulta</h2>
          <div class="mb-3">
            <label for="ta">TA:</label>
            <?php echo $_POST['ta']; ?>
          </div>
          <div class="mb-3">
            <label for="fc">FC:</label>
            <?php echo $_POST['fc']; ?>
          </div>
          <div class="mb-3">
            <label for="satO2">SatO2:</label>
            <?php echo $_POST['sat02']; ?>
          </div>
          <div class="mb-3">
            <label for="glicemia">Glicemia Capilar:</label>
            <?php echo $_POST['glicemia']; ?>
          </div>
      
          <div class="mb-3">
            <label for="dm">DM:</label>
            <?php
            if (isset($_POST['dm']) && $_POST['dm'] === "true") {
              echo '(V)';
            } else {
              echo '(X)';
            }
            ?>
          </div>
          <div class="mb-3">
            <label for="hta">HTA:</label>
            <?php
            if (isset($_POST['hta']) && $_POST['hta'] === "true") {
              echo '(V)';
            } else {
              echo '(X)';
            }
            ?>
          </div>
        </div>
      </div>
      
      <h2>Consulta Salud Ocular</h2>
      <div class="mb-3">
        <label for="avLejosOd">A.V Lejos O.D.:</label>
        <?php echo $_POST['avLejosOd']; ?>
      </div>
      <div class="mb-3">
        <label for="avCercaOd">A.V Cerca O.D.:</label>
        <?php echo $_POST['avCercaOd']; ?>
      </div>
      <div class="mb-3">
        <label for="avCercaOi">A.V Cerca O.I.:</label>
        <?php echo $_POST['avCercaOi']; ?>
      </div>
      <div class="mb-3">
        <label for="avCercaAo">A.V Cerca A.O.:</label>
        <?php echo $_POST['avCercaAo']; ?>
      </div>
      
      <h3>Rx En Uso</h3>
      <div class="mb-3">
        <label for="rxUsoOd">OD:</label>
        <?php echo $_POST['rxUsoOd']; ?>
      </div>
      <div class="mb-3">
        <label for="rxUsoOi">OI:</label>
        <?php echo $_POST['rxUsoOi']; ?>
      </div>
      <div class="mb-3">
        <label for="rxUsoMaterial">Material:</label>
        <?php echo $_POST['rxUsoMaterial']; ?>
      </div>
      
      <h2>Agudeza Visual Con Corrección</h2>
      <div class="mb-3">
        <label for="avEOd">A.V.E O.D.:</label>
        <?php echo $_POST['avEOd']; ?>
      </div>
      <div class="mb-3">
        <label for="avEOi">A.V.E O.I.:</label>
        <?php echo $_POST['avEOi']; ?>
      </div>
      <div class="mb-3">
        <label for="avEAo">A.V.E A.O.:</label>
        <?php echo $_POST['avEAo']; ?>
      </div>
      
      <h2>Diagnóstico</h2>
      <div class="diag">
        <?php echo $_POST['diagnostico']; ?>
      </div>
      
      <h2>Tratamiento</h2>
      <div class="trat">
        <?php echo $_POST['tratamiento']; ?>
      </div>
    </form>
  </div>
</body>
</html>

<?php
$html = ob_get_clean();

// Generar el PDF
$pdfGenerator->generatePDF($html);
?>
