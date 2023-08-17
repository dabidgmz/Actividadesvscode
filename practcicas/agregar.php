<?php
$productos = [
  ['nombre' => 'Producto 1', 'descripcion' => 'Descripción del producto 1', 'imagen' => 'ruta/imagen-producto-1.jpg'],
  ['nombre' => 'Producto 2', 'descripcion' => 'Descripción del producto 2', 'imagen' => 'ruta/imagen-producto-2.jpg'],
  ['nombre' => 'Producto 3', 'descripcion' => 'Descripción del producto 3', 'imagen' => 'ruta/imagen-producto-3.jpg']
];

foreach ($productos as $producto) {
  echo '
  <div class="col-md-4">
    <div class="card">
      <img src="' . $producto['imagen'] . '" class="card-img-top" alt="' . $producto['nombre'] . '">
      <div class="card-body">
        <h5 class="card-title">' . $producto['nombre'] . '</h5>
        <p class="card-text">' . $producto['descripcion'] . '</p>
        <a href="#" class="btn btn-primary">Comprar</a>
      </div>
    </div>
  </div>
  ';
}
?>
