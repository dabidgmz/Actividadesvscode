<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>Receta</title>
  <style>
    /* Estilos anteriores omitidos por brevedad */

    /* Estilos para el botón de impresión */
    .print-button {
      margin-top: 20px;
      text-align: center;
    }
     /* Estilo personalizado para el sidebar */
     .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      width: 250px;
      height: 100vh;
      background: linear-gradient(to bottom, #d6fcfa, #fff);
      padding: 20px;
    }

    .sidebar a {
      display: block;
      color: #000;
      text-decoration: none;
      margin-bottom: 10px;
    }

    .sidebar a i {
      margin-right: 10px;
    }

    .sidebar a:hover {
      opacity: 0.8;
    }

    .logo {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 20px;
    }

    .logo img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      margin-right: 10px;
    }

    .container-fluid {
      margin-left: 20%;
      width: 80%;
    }
    .container-fluid {
  padding: 20px;
}

.modal-title {
  font-size: 24px;
  font-weight: bold;
  text-align: center;
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 20px;
}

.form-control {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border-radius: 4px;
  border: 1px solid #ccc;
}

.print-button {
  text-align: center;
  margin-top: 20px;
}

.btn-primary {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  border-radius: 4px;
  cursor: pointer;
}

/* Estilos específicos para el formulario */
.manejo-recomendaciones {
  font-size: 18px;
  font-weight: bold;
  text-align: center;
  margin-top: 40px;
  margin-bottom: 20px;
}

.row {
  margin-bottom: 20px;
}

.col {
  padding: 0 10px;
}



label {
  font-weight: bold;
  margin-bottom: 10px;
}

span {
  font-weight: normal;
}

#dipValue,
#armazonValue,
#materialValue,
#esfValue,
#cilValue,
#ejeValue,
#prismaValue,
#rxFinalValue,
#odValue,
#oiValue,
#addValue,
#tratamientoValue,
#diagnosticoValue,
#inicioValue {
  font-weight: bold;
}

@media print {
  /* Ocultar botón de impresión al imprimir */
  .print-button {
    display: none;
  }
}
  </style>
</head>
<body>
  <div class="container-fluid">
    <!-- Modal -->
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="recetaModalLabel">Receta</h5>
          </div>
          <div class="modal-body">
            <form id="recetaForm" action="recetapdf.php" method="post">
              <div class="form-group">
                <label for="nombre">Nombre del paciente:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
              </div>
    
              <div class="form-group">
                <label for="edad">Edad:</label>
                <input type="text" class="form-control" id="edad" name="edad" required>
              </div>
    
              <div class="form-group">
                <label for="tratamiento">Tratamiento:</label>
                <input type="text" class="form-control" id="tratamiento" name="tratamiento" required>
              </div>
    
              <div class="form-group">
                <label for="diagnostico">Diagnóstico:</label>
                <input type="text" class="form-control" id="diagnostico" name="diagnostico" required>
              </div>
    
              <!-- Agrega aquí más campos del formulario si los necesitas -->
    
              <div class="form-group">
                <label for="plasticos">Plasticos:</label>
                <input type="text" class="form-control" id="plasticos" name="plasticos" required>
              </div>
    
              <div class="form-group">
                <label for="armazon">Armazón:</label>
                <input type="text" class="form-control" id="armazon" name="armazon" required>
              </div>
    
              <div class="form-group">
                <label for="totalPedido">Total de Pedido:</label>
                <input type="text" class="form-control" id="totalPedido" name="totalPedido" required>
              </div>
    
              <div class="form-group">
                <label for="firma">Firma del Optometrista / Enfermera:</label>
                <input type="text" class="form-control" id="firma" name="firma" required>
              </div>

              <div class="manejo-recomendaciones">
                Manejo y Recomendaciones
              </div>
      
              <div class="row">
                <div class="col text-center">
                  <div class="form-group">
                    <label for="dip">DIP: <span id="dipValue"></span></label>
                    <input type="text" class="form-control" id="dip" name="dip" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="armazon">ARMAZÓN: <span id="armazonValue"></span></label>
                    <input type="text" class="form-control" id="armazon" name="armazon" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="material">MATERIAL: <span id="materialValue"></span></label>
                    <input type="text" class="form-control" id="material" name="material" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="esf">ESF: <span id="esfValue"></span></label>
                    <input type="text" class="form-control" id="esf" name="esf" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="cil">CIL: <span id="cilValue"></span></label>
                    <input type="text" class="form-control" id="cil" name="cil" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="eje">EJE: <span id="ejeValue"></span></label>
                    <input type="text" class="form-control" id="eje" name="eje" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="prisma">PRISMA: <span id="prismaValue"></span></label>
                    <input type="text" class="form-control" id="prisma" name="prisma" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="rxFinal">RX FINAL: <span id="rxFinalValue"></span></label>
                    <input type="text" class="form-control" id="rxFinal" name="rxFinal" required>
                  </div>
                </div>
                
                <div class="col text-center">
                  <div class="form-group">
                    <label for="od">O.D: <span id="odValue"></span></label>
                    <input type="text" class="form-control" id="od" name="od" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="oi">O.I: <span id="oiValue"></span></label>
                    <input type="text" class="form-control" id="oi" name="oi" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="add">ADD: <span id="addValue"></span></label>
                    <input type="text" class="form-control" id="add" name="add" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="tratamiento">Tratamiento: <span id="tratamientoValue"></span></label>
                    <input type="text" class="form-control" id="tratamiento" name="tratamiento" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="diagnostico">Diagnóstico: <span id="diagnosticoValue"></span></label>
                    <input type="text" class="form-control" id="diagnostico" name="diagnostico" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="inicio">Inicio: <span id="inicioValue"></span></label>
                    <input type="text" class="form-control" id="inicio" name="inicio" required>
                  </div>
                </div>
              </div>
    
              <div class="print-button">
                <a href="dompdf.php" class="btn btn-success" target="_blank">Imprimir Receta</a>
              </div>
            </form>            
          </div>
        </div>
      </div>
  </div>

  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 <!-- Agrega la siguiente línea dentro del <head> de tu documento HTML -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

<!-- Agrega este código después del script anterior -->
<script>
  // Obtener el formulario
  const form = document.getElementById('recetaForm');

  // Escuchar el evento de envío del formulario
  form.addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar que el formulario se envíe

    // Obtener los valores del formulario
    const nombre = document.getElementById('nombre').value;
    const edad = document.getElementById('edad').value;
    const tratamiento = document.getElementById('tratamiento').value;
    const diagnostico = document.getElementById('diagnostico').value;
    const plasticos = document.getElementById('plasticos').value;
    const armazon = document.getElementById('armazon').value;
    const totalPedido = document.getElementById('totalPedido').value;
    const firma = document.getElementById('firma').value;

    // Crear un nuevo documento PDF
    const doc = new jsPDF();

    // Agregar contenido al PDF
    doc.text(`Nombre del paciente: ${nombre}`, 10, 10);
    doc.text(`Edad: ${edad}`, 10, 20);
    doc.text(`Tratamiento: ${tratamiento}`, 10, 30);
    doc.text(`Diagnóstico: ${diagnostico}`, 10, 40);
    // Agregar más contenido según tus necesidades...

    // Guardar o imprimir el PDF
    doc.save('receta.pdf');

    // Cerrar el modal después de generar el PDF
    $('#recetaModal').modal('hide');
  });
</script>
</body>
</html>
