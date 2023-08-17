<!DOCTYPE html>
<html>
<head>
  <title>Agregar Producto</title>
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
  <div class="container-fluid" id="content">
    <h1>Agregar Producto</h1>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Agregar
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Producto</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- Formulario para agregar un nuevo producto -->
            <form id="agregarForm">
              <div class="mb-3">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" required>
              </div>
              <div class="mb-3">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" rows="3" required></textarea>
              </div>
              <div class="mb-3">
                <label for="categoria">Categoría</label>
                <select class="form-control" id="categoria" required>
                  <!-- Las opciones de categoría se cargan dinámicamente con JavaScript -->
                </select>
              </div>
              <div class="mb-3">
                <label for="precio">Precio</label>
                <input type="number" class="form-control" id="precio" required>
              </div>
              <div class="mb-3">
                <label for="imagen">Agregar Imagen</label>
                <input type="file" class="form-control" id="imagen">
              </div>
              <div class="mb-3">
                <label for="cantidad">Cantidad</label>
                <input type="number" class="form-control" id="cantidad" required>
              </div>
              <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <h2>Productos</h2>

    <!-- Tabla de productos -->
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Descripción</th>
          <th>Categoría</th>
          <th>Precio</th>
          <th>Cantidad</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody id="productosTabla">
        <!-- Las filas de productos se agregan dinámicamente con JavaScript -->
      </tbody>
    </table>
  </div>
  <button class="collapse-button hidden" id="collapseButton"><i class="fas fa-bars"></i></button>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Datos de categorías
    var categorias = [
      { id: 1, nombre: 'Adultos', imagen: 'Img1' },
      { id: 2, nombre: 'Niños', imagen: 'Img2' },
      { id: 3, nombre: 'Solares', imagen: 'Img3' }
    ];

    // Función para cargar las opciones de categoría en el formulario
    function cargarCategorias() {
      var select = document.getElementById('categoria');
      categorias.forEach(function (categoria) {
        var option = document.createElement('option');
        option.value = categoria.id;
        option.textContent = categoria.nombre;
        select.appendChild(option);
      });
    }

    // Función para agregar un nuevo producto al formulario
    document.getElementById('agregarForm').addEventListener('submit', function (event) {
      event.preventDefault();

      // Obtener los valores del formulario
      var nombre = document.getElementById('nombre').value;
      var descripcion = document.getElementById('descripcion').value;
      var categoriaId = document.getElementById('categoria').value;
      var precio = document.getElementById('precio').value;
      var cantidad = document.getElementById('cantidad').value;

      // Generar un ID único para el producto
      var id = new Date().getTime();

      // Crear una nueva fila en la tabla de productos
      var productosTabla = document.getElementById('productosTabla');
      var newRow = productosTabla.insertRow();
      newRow.innerHTML = `
        <td>${id}</td>
        <td>${nombre}</td>
        <td>${descripcion}</td>
        <td>${categorias.find(function (categoria) { return categoria.id == categoriaId }).nombre}</td>
        <td>${precio}</td>
        <td>${cantidad}</td>
        <td class="table-actions"><button class="btn btn-danger btn-sm" onclick="eliminarProducto(event)">Eliminar</button></td>
      `;

      // Restablecer los valores del formulario
      document.getElementById('nombre').value = '';
      document.getElementById('descripcion').value = '';
      document.getElementById('categoria').value = '';
      document.getElementById('precio').value = '';
      document.getElementById('cantidad').value = '';
    });

    // Función para eliminar un producto de la tabla
    function eliminarProducto(event) {
      var button = event.target;
      var row = button.closest('tr');
      row.remove();
    }

    // Cargar las opciones de categoría al cargar la página
    cargarCategorias();
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
