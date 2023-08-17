<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php
require_once 'src/modelos/DatabaseConnection.php';

use App\Modelos\DatabaseConnection;

try {
    $dbConnection = new DatabaseConnection();
    $pdo = $dbConnection->getConnection();
    echo "Conexión exitosa a la base de datos.";

    // Subconsulta de la tabla "productos"
    $stmt = $pdo->query('SELECT * FROM productos');
    ?>

    <div class="container">
        <p class="h1">Lista de Productos y su Descripccion</p>

        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $stmt->fetch()) { ?>
                    <tr>
                        <td><?php echo isset($row['id']) ? $row['id'] : ''; ?></td>
                        <td><?php echo isset($row['nombre']) ? $row['nombre'] : ''; ?></td>
                        <td><?php echo isset($row['descripcion']) ? $row['descripcion'] : ''; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <?php
    // Cerrar la conexión
    $pdo = null;

} catch (PDOException $e) {
    echo 'Error de conexión: ' . $e->getMessage();
}
?>
