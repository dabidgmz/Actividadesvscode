<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nombre = $_POST['nombre'];
  $descripcion = $_POST['descripcion'];
  $imagen = $_FILES['imagen'];

  // Procesar la imagen y guardarla en el servidor
  $rutaImagen = 'ruta/' . basename($imagen['name']);
  move_uploaded_file($imagen['tmp_name'], $rutaImagen);

  // Agregar el nuevo producto al array de productos
  $nuevoProducto = [
    'nombre' => $nombre,
    'descripcion' => $descripcion,
    'imagen' => $rutaImagen
  ];
  $productos[] = $nuevoProducto;

  // Redireccionar a la página principal
  header('Location: index.html');
  exit();
}
?>
