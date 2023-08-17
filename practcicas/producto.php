<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda de productos</title>
  <!-- Enlaces a los archivos CSS de Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Tienda de productos</h1>
    <div class="row">
      <?php include 'productos.php'; ?>
    </div>
    <hr>
    <h2>Agregar producto</h2>
    <form action="agregar_producto.php" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del producto:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
      </div>
      <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción:</label>
        <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
      </div>
      <div class="mb-3">
        <label for="imagen" class="form-label">Imagen:</label>
        <input type="file" class="form-control" id="imagen" name="imagen" required>
      </div>
      <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
  </div>

  <!-- Enlaces a los archivos JavaScript de Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
