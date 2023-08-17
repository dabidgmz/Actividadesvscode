<?php
require 'vendor/autoload.php'; // Autoload de las dependencias de Composer
require 'src/modelos/Database.php';
require 'src/modelos/CRUD.php';

// Crear una instancia de la base de datos
$db = new Database();

// Crear una instancia del CRUD
$crud = new CRUD($db);

// Verificar si se ha enviado el formulario de creación de usuario
if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Datos del nuevo usuario
    $data = array(
        'name' => $name,
        'email' => $email
    );

    // Crear el usuario
    $result = $crud->create($data);

    if ($result) {
        echo "Usuario creado exitosamente.";
    } else {
        echo "Error al crear el usuario.";
    }
}

// Verificar si se ha enviado el formulario de actualización de usuario
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Datos actualizados del usuario
    $data = array(
        'name' => $name,
        'email' => $email
    );

    // Actualizar el usuario
    $result = $crud->update($id, $data);

    if ($result) {
        echo "Usuario actualizado exitosamente.";
    } else {
        echo "Error al actualizar el usuario.";
    }
}

// Verificar si se ha enviado el formulario de eliminación de usuario
if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    // Eliminar el usuario
    $result = $crud->delete($id);

    if ($result) {
        echo "Usuario eliminado exitosamente.";
    } else {
    
    }
}

// Obtener la lista de usuarios
$users = $crud->read();

?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD de Usuarios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>CRUD de Usuarios</h1>
        
        <!-- Formulario de creación de usuario -->
        <h2>Crear Usuario</h2>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="hidden" name="create" value="true">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>

        <!-- Lista de usuarios -->
        <h2>Usuarios</h2>
        <?php if ($users) : ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Actualizar Datos</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td><?php echo $user['id']; ?></td>
                            <td><?php echo $user['nombre']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td>
                                <!-- Formulario de actualización de usuario -->
                                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <input type="hidden" name="update" value="true">
                                    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" value="<?php echo $user['nombre']; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" value="<?php echo $user['email']; ?>" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                </form>

                                <!-- Formulario de eliminación de usuario -->
                                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <input type="hidden" name="delete" value="true">
                                    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else : ?>
            <p>No se encontraron usuarios.</p>
        <?php endif; ?>
    </div>
</body>
</html>
