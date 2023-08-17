<!DOCTYPE html>
<html>
<head>
  <title>Sidebar Bootstrap</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
  <div class="sidebar" class="aco">
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

  <!-- Contenido principal -->
  <div class="container-fluid">
    <h1>Contenido de la página</h1>
    <p>Este es el contenido principal de la página.</p>
  </div>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>


