<!DOCTYPE html>
<html>

<head>
  <title>Administrador de Trabajadores</title>
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
    <h1 class="mb-4">Agregar Trabajador</h1>
    <form id="agregarForm" class="row g-3 needs-validation">
      <div class="col-md-6">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control form-control-sm" id="nombre" placeholder="Ingresa el nombre" required>
        <div class="invalid-feedback">
          Por favor, ingresa un nombre válido.
        </div>
      </div>
      <div class="col-md-6">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control form-control-sm" id="apellido" placeholder="Ingresa el apellido" required>
        <div class="invalid-feedback">
          Por favor, ingresa un apellido válido.
        </div>
      </div>
      <div class="col-md-6">
        <label for="gmail" class="form-label">Correo electrónico</label>
        <input type="email" class="form-control form-control-sm" id="gmail" placeholder="Ingresa el correo electrónico" required>
        <div class="invalid-feedback">
          Por favor, ingresa un correo electrónico válido.
        </div>
      </div>
      <div class="col-md-6">
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="tel" class="form-control form-control-sm" id="telefono" placeholder="Ingresa el número de teléfono" required>
        <div class="invalid-feedback">
          Por favor, ingresa un número de teléfono válido.
        </div>
      </div>
      <div class="col-md-6">
        <label for="contrasena" class="form-label">Contraseña</label>
        <input type="password" class="form-control form-control-sm" id="contrasena" placeholder="Ingresa una contraseña" required>
        <div class="invalid-feedback">
          Por favor, ingresa una contraseña válida.
        </div>
      </div>
      <div class="col-12">
        <button class="btn btn-primary" type="submit">Agregar</button>
      </div>
    </form>
    <ul id="trabajadoresLista" class="list-group mt-4"></ul>
  </div>

  <button class="collapse-button hidden" id="collapseButton"><i class="fas fa-bars"></i></button>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Función para agregar un nuevo trabajador al formulario
    function agregarTrabajador(event) {
      event.preventDefault();

      // Obtener los valores del formulario
      var nombre = document.getElementById('nombre').value;
      var apellido = document.getElementById('apellido').value;
      var gmail = document.getElementById('gmail').value;
      var telefono = document.getElementById('telefono').value;
      var contrasena = document.getElementById('contrasena').value;

      // Crear un objeto de trabajador
      var trabajador = {
        nombre: nombre,
        apellido: apellido,
        gmail: gmail,
        telefono: telefono,
        contrasena: contrasena
      };

      // Agregar el trabajador a la lista
      var lista = document.getElementById('trabajadoresLista');
      var li = document.createElement('li');
      li.classList.add('list-group-item');
      li.innerHTML = `
        <div class="d-flex justify-content-between">
          <div>${trabajador.nombre} ${trabajador.apellido}</div>
          <div>${trabajador.gmail}</div>
        </div>
      `;
      lista.appendChild(li);

      // Limpiar los campos del formulario
      document.getElementById('agregarForm').reset();
    }

    // Agregar el evento submit al formulario
    document.getElementById('agregarForm').addEventListener('submit', agregarTrabajador);
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