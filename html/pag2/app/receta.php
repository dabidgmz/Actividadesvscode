<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>Receta</title>
  <style>
    /* Estilo personalizado para el sidebar */
    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      width: 250px;
      height: 100vh;
      background: linear-gradient(to bottom, #d6fcfa, #fff);
      padding: 20px;
      z-index: 1;
      transition: all 0.3s;
    }

    .sidebar a {
      display: block;
      color: #000;
      text-decoration: none;
      margin-bottom: 10px;
      padding: 10px;
      border-radius: 5px;
    }

    .sidebar a i {
      margin-right: 10px;
    }

    .sidebar a:hover {
      background-color: #d6fcfa;
      color: #000;
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
      margin-left: 250px;
      padding: 20px;
      transition: all 0.3s;
    }

    @media (max-width: 767px) {
      /* Estilos para pantallas más pequeñas */
      .sidebar {
        transform: translateX(-100%);
      }

      .container-fluid {
        margin-left: 0;
        padding-left: 10px;
        padding-right: 10px;
      }

      .sidebar.active {
        transform: translateX(0);
      }

      .container-fluid.active {
        margin-left: 0;
      }

      /* Estilos para el navbar en pantallas pequeñas */
      .collapse-button {
        display: block;
        position: fixed;
        top: 20px;
        right: 20px; /* Cambiado de 'left' a 'right' */
        z-index: 1;
        color: #000;
        background-color: #fff;
        border: none;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        text-align: center;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        transition: all 0.3s;
      }

      .collapse-button i {
        line-height: 40px;
      }
    }

    /* Estilo personalizado para el botón de colapso */
    .collapse-button.hidden {
      display: none;
    }

    /* Estilos adicionales */
    h1 {
      color: #333;
      font-size: 24px;
      margin-bottom: 20px;
    }

    p {
      color: #777;
      font-size: 16px;
      line-height: 1.5;
    }

    #content a.logout-link {
      background-color: #ff5f5f;
      color: #fff;
    }

    #content a.logout-link:hover {
      background-color: #e53e3e;
    }

    #content {
      max-width: calc(100% - 250px); /* Agrega esta línea */
    }

    @media (max-width: 767px) {
      #content:not(.active) {
        max-width: none; /* Cancela la regla anterior */
      }
    }
  </style>
</head>
<body>
  <div class="sidebar" id="sidebar">
    <div class="logo">
      <img src="../img/logo.jpg" alt="Logo">
    </div>
    <a class="nav-link" href="aggimg.php"><i class="fas fa-box"></i><span>Gestionar Producto</span></a>
    <a class="nav-link" href="trabaj.php"><i class="fas fa-users"></i><span>Gestionar Trabajadores</span></a>
    <a class="nav-link" href="paciente.php"><i class="fas fa-user"></i><span>Gestionar Pacientes</span></a>
    <a class="nav-link" href="agenda.php"><i class="fas fa-calendar-alt"></i><span>Gestionar Agenda</span></a>
    <a class="nav-link" href="consulta.php"><i class="fas fa-stethoscope"></i><span>Realizar Consulta</span></a>
    <a class="nav-link" href="receta.php"><i class="fas fa-prescription"></i><span>Generar Receta</span></a>
    <br><br><br><br><br><br><br><br>
    <a class="nav-link" href="log.php"><i class="fas fa-sign-out-alt"></i><span>Cerrar Sesión</span></a>
  </div>
  <div class="container-fluid" id="content">
    <!-- Modal -->
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="recetaModalLabel">Receta</h5>
          </div>
          <div class="modal-body">
            <form action="recetapdf.php" method="POST">
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="nombre">Nombre del paciente:</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
      
                <div class="mb-3">
                  <label for="edad">Edad:</label>
                  <input type="text" class="form-control" id="edad" name="edad" required>
                </div>
      
                <!-- Agrega aquí más campos del formulario si los necesitas -->
      
                <div class="col-md-6">
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
                </div>
              </div>
            </div>
              <div class="manejo-recomendaciones">
                Manejo y Recomendaciones
              </div>
      
              <div class="row">
                  <div class="col-md-2">
                    <div class="mb-3">
                      <label for="dip">DIP: <span id="dipValue"></span></label>
                      <input type="text" class="form-control" id="dip" name="dip" required>
                    </div>
                  </div>
                  
                  <div class="col-md-2">
                    <div class="mb-3">
                      <label for="armazon">ARMAZÓN: <span id="armazonValue"></span></label>
                      <input type="text" class="form-control" id="armazon" name="armazon" required>
                    </div>
                  </div>
                  
                  <div class="col-md-2">
                    <div class="mb-3">
                      <label for="material">MATERIAL: <span id="materialValue"></span></label>
                      <input type="text" class="form-control" id="material" name="material" required>
                    </div>
                  </div>
                  
                  <div class="col-md-2">
                    <div class="mb-3">
                      <label for="esf">ESF: <span id="esfValue"></span></label>
                      <input type="text" class="form-control" id="esf" name="esf" required>
                    </div>
                  </div>
                  
                  <div class="col-md-2">
                    <div class="mb-3">
                      <label for="cil">CIL: <span id="cilValue"></span></label>
                      <input type="text" class="form-control" id="cil" name="cil" required>
                    </div>
                  </div>
                  
                  <div class="col-md-2">
                    <div class="mb-3">
                      <label for="eje">EJE: <span id="ejeValue"></span></label>
                      <input type="text" class="form-control" id="eje" name="eje" required>
                    </div>
                  </div>
                  
                  <div class="col-md-2">
                    <div class="mb-3">
                      <label for="prisma">PRISMA: <span id="prismaValue"></span></label>
                      <input type="text" class="form-control" id="prisma" name="prisma" required>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="mb-3">
                      <label for="rxFinal">RX FINAL: <span id="rxFinalValue"></span></label>
                      <input type="text" class="form-control" id="rxFinal" name="rxFinal" required>
                    </div>
                  </div>
                
                  <div class="col-md-2">
                    <div class="mb-3">
                      <label for="od">O.D: <span id="odValue"></span></label>
                      <input type="text" class="form-control" id="od" name="od" required>
                    </div>
                  </div>
                  
                  <div class="col-md-2">
                    <div class="mb-3">
                      <label for="oi">O.I: <span id="oiValue"></span></label>
                      <input type="text" class="form-control" id="oi" name="oi" required>
                    </div>
                  </div>
                  
                  <div class="col-md-2">
                    <div class="mb-3">
                      <label for="add">ADD: <span id="addValue"></span></label>
                      <input type="text" class="form-control" id="add" name="add" required>
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="tratamiento">Tratamiento: <span id="tratamientoValue"></span></label>
                      <textarea class="form-control" id="tratamiento" name="tratamiento" rows="5" required></textarea>
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="diagnostico">Diagnóstico: <span id="diagnosticoValue"></span></label>
                      <textarea class="form-control" id="diagnostico" name="diagnostico" rows="5" required></textarea>
                    </div>
                  </div>
                  
              </div>
    
              <div class="print-button">
                <button type="submit" class="btn btn-success">Imprimir Receta</button>
              </div>
            </form>            
          </div>
        </div>
      </div>
  </div>

  </div>
  <button class="collapse-button hidden" id="collapseButton"><i class="fas fa-bars"></i></button>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const collapseButton = document.getElementById('collapseButton');
    const sidebar = document.getElementById('sidebar');
    const content = document.getElementById('content');

    collapseButton.addEventListener('click', () => {
      sidebar.classList.toggle('active');
      content.classList.toggle('active');
    });

    function checkWidth() {
      if (window.innerWidth <= 767) {
        collapseButton.classList.remove('hidden');
      } else {
        collapseButton.classList.add('hidden');
        sidebar.classList.remove('active');
        content.classList.remove('active');
      }
    }

    window.addEventListener('resize', checkWidth);
    checkWidth();
  </script>
</body>
</html>
