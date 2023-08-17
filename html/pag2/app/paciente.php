<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Pacientes</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
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
<div class="container-fluid py-5" id="content">
  <h1>Lista de Pacientes</h1>
    <table class="table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Apellidos</th>
          <th>Teléfono</th>
          <th>Email</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John</td>
          <td>Doe</td>
          <td>123456789</td>
          <td>john@example.com</td>
          <td><button class="btn btn-danger btn-sm" onclick="deleteRow(this)">Eliminar</button></td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane</td>
          <td>Smith</td>
          <td>987654321</td>
          <td>jane@example.com</td>
          <td><button class="btn btn-danger btn-sm" onclick="deleteRow(this)">Eliminar</button></td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael</td>
          <td>Johnson</td>
          <td>555555555</td>
          <td>michael@example.com</td>
          <td><button class="btn btn-danger btn-sm" onclick="deleteRow(this)">Eliminar</button></td>
        </tr>
        <tr>
          <td>4</td>
          <td>Sarah</td>
          <td>Williams</td>
          <td>777777777</td>
          <td>sarah@example.com</td>
          <td><button class="btn btn-danger btn-sm" onclick="deleteRow(this)">Eliminar</button></td>
        </tr>
        <tr>
          <td>5</td>
          <td>David</td>
          <td>Brown</td>
          <td>999999999</td>
          <td>david@example.com</td>
          <td><button class="btn btn-danger btn-sm" onclick="deleteRow(this)">Eliminar</button></td>
        </tr>
        <tr>
          <td>6</td>
          <td>Emily</td>
          <td>Anderson</td>
          <td>222222222</td>
          <td>emily@example.com</td>
          <td><button class="btn btn-danger btn-sm" onclick="deleteRow(this)">Eliminar</button></td>
        </tr>
      </tbody>
    </table>
</div>

  <button class="collapse-button hidden" id="collapseButton"><i class="fas fa-bars"></i></button> 
  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
  <script>
    function deleteRow(button) {
      var row = button.parentNode.parentNode;
      row.parentNode.removeChild(row);
    }
  </script>

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
