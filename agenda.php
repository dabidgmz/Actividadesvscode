<!DOCTYPE html>
<html>
<head>
  <title>Agenda del Administrador</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    
    .header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
    
    .container {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
    }
    
    h1 {
      font-size: 24px;
      margin: 0;
    }
    
    .agenda-item {
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 10px;
      margin-bottom: 10px;
    }
    
    .agenda-item .title {
      font-weight: bold;
      margin-bottom: 5px;
    }
    
    .agenda-item .details {
      margin-bottom: 5px;
    }
    
    .agenda-item .description {
      color: #666;
    }
    
    .button {
      padding: 8px 12px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    .button.cancel {
      background-color: #f44336;
      color: #fff;
    }
    
    .form-group {
      margin-bottom: 10px;
    }
    
    .form-group label {
      display: block;
      margin-bottom: 5px;
    }
    
    .form-group input[type="text"],
    .form-group input[type="datetime-local"] {
      width: 100%;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    
    .form-group textarea {
      width: 100%;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }
    
    .form-group .button.submit {
      background-color: #4CAF50;
      color: #fff;
    }
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
  </style>
</head>
<body>
  <div class="sidebar">
    <div class="logo">
      <img src="logo.jpg" alt="Logo">
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
  <div class="container-fluid">
    <?php
    // Establecer la conexión con la base de datos
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "optica_bd_borrador1";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error al conectar con la base de datos: " . $conn->connect_error);
    }

    // Consulta para obtener las citas agendadas con el nombre del usuario que agendó
    $sql = "SELECT citas.*, usuarios.nombre AS agendado_por_nombre FROM citas INNER JOIN usuarios ON citas.usuario = usuarios.id";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        // Iterar sobre los resultados y generar los elementos div
        while ($row = $result->fetch_assoc()) {
            $fecha = $row["fecha"];
            $hora = $row["hora"];
            $agendadoPor = $row["agendado_por_nombre"];
            $motivo = $row["Descripcion"];

            // Generar el elemento div
            echo '<div class="agenda-item mt-2">
                    <div class="title">Cita</div>
                    <div class="details">
                      <span>Fecha: ' . $fecha . '</span> |
                      <span>Hora: ' . $hora . '</span> |
                      <span>Agendado por: ' . $agendadoPor . '</span>
                    </div>
                    <div class="description">' . $motivo . '</div>
                    <button class="button cancel" onclick="cancelarCita(this)">Cancelar</button>
                  </div>';
        }
    } else {
        echo "No se encontraron citas agendadas.";
    }

    // Cerrar la conexión
    $conn->close();
    ?>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    // Función para cancelar una cita
    function cancelarCita(button) {
      var agendaItem = button.parentNode;
      agendaItem.parentNode.removeChild(agendaItem);
    }
  </script>
</body>
</html>

