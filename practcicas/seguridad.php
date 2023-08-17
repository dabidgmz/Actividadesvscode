<?php
// Sanitizar y validar los datos recibidos del formulario
function sanitizeInput($input) {
  $input = trim($input);
  $input = stripslashes($input);
  $input = htmlspecialchars($input);
  return $input;
}

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los datos del formulario y sanitizarlos
  $nombre = sanitizeInput($_POST["nombre"]);
  $email = sanitizeInput($_POST["email"]);
  $mensaje = sanitizeInput($_POST["mensaje"]);

  // Validar los datos ingresados
  if (empty($nombre) || empty($email) || empty($mensaje)) {
    // Si algún campo está vacío, mostrar un mensaje de error
    $error = "Todos los campos son obligatorios.";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Si el formato del correo electrónico es inválido, mostrar un mensaje de error
    $error = "El correo electrónico ingresado no es válido.";
  } else {
    // Si los datos son válidos, procesar el formulario o enviar un correo electrónico, por ejemplo.
    // Aquí puedes agregar tu lógica de procesamiento o almacenamiento de datos seguros.

    // Limpia los datos antes de mostrarlos en la página
    $nombre = htmlspecialchars($nombre);
    $email = htmlspecialchars($email);
    $mensaje = htmlspecialchars($mensaje);

    // Mostrar un mensaje de éxito
    $success = "¡El formulario ha sido enviado con éxito!";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Ejemplo de seguridad y sanitización en PHP</title>
</head>
<body>
  <h1>Formulario de Contacto</h1>

  <?php if (isset($error)): ?>
    <p style="color: red;"><?php echo $error; ?></p>
  <?php elseif (isset($success)): ?>
    <p style="color: green;"><?php echo $success; ?></p>
  <?php endif; ?>

  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre"><br>

    <label for="email">Correo Electrónico:</label>
    <input type="email" id="email" name="email"><br>

    <label for="mensaje">Mensaje:</label>
    <textarea id="mensaje" name="mensaje"></textarea><br>

    <input type="submit" value="Enviar">
  </form>
</body>
</html>
