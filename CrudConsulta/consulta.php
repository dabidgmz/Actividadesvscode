<?php
require_once 'src/modelos/Conexion.php';
require_once 'src/modelos/Metodos.php';

$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validar y sanitizar los datos del formulario
    $cefalesias = isset($_POST['cefaleas']) ? 1 : 0;
    $fatigaOcular = isset($_POST['fatigaOcular']) ? 1 : 0;
    $ojoRojo = isset($_POST['ojoRojo']) ? 1 : 0;
    $borrosidad = isset($_POST['borrosidad']) ? 1 : 0;
    $ta = isset($_POST['ta']) ? $_POST['ta'] : null;
    $fc = isset($_POST['fc']) ? $_POST['fc'] : null;
    $satO2 = isset($_POST['satO2']) ? $_POST['satO2'] : null;
    $glicemiaCapilar = isset($_POST['glicemia']) ? $_POST['glicemia'] : null;
    $dm = isset($_POST['dm']) ? 1 : 0;
    $hta = isset($_POST['hta']) ? 1 : 0;
    $agudezaVisualScorrecion = isset($_POST['avEOd']) ? $_POST['avEOd'] : null;
    $lejosOD20 = isset($_POST['avLejosOd']) ? $_POST['avLejosOd'] : null;
    $lejosOI20 = isset($_POST['avLejosOi']) ? $_POST['avLejosOi'] : null;
    $lejosAO20 = isset($_POST['avLejosAo']) ? $_POST['avLejosAo'] : null;
    $cercaOD20 = isset($_POST['avCercaOd']) ? $_POST['avCercaOd'] : null;
    $cercaOI20 = isset($_POST['avCercaOi']) ? $_POST['avCercaOi'] : null;
    $cercaAO20 = isset($_POST['avCercaAo']) ? $_POST['avCercaAo'] : null;
    $od = isset($_POST['rxUsoOd']) ? $_POST['rxUsoOd'] : null;
    $oi = isset($_POST['rxUsoOi']) ? $_POST['rxUsoOi'] : null;
    $material = isset($_POST['rxUsoMaterial']) ? $_POST['rxUsoMaterial'] : null;
    $avclAOD20 = isset($_POST['avEOd']) ? $_POST['avEOd'] : null;
    $avclAOI20 = isset($_POST['avEOi']) ? $_POST['avEOi'] : null;
    $avclAAO20 = isset($_POST['avEAo']) ? $_POST['avEAo'] : null;
    $avOD20 = isset($_POST['avEOd']) ? $_POST['avEOd'] : null;
    $avOI20 = isset($_POST['avEOi']) ? $_POST['avEOi'] : null;
    $avAO20 = isset($_POST['avEAo']) ? $_POST['avEAo'] : null;
    $avscOD20 = isset($_POST['avEOd']) ? $_POST['avEOd'] : null;
    $avscOI20 = isset($_POST['avEOi']) ? $_POST['avEOi'] : null;
    $avscAO20 = isset($_POST['avEAo']) ? $_POST['avEAo'] : null;
    $aveOD20 = isset($_POST['avEOd']) ? $_POST['avEOd'] : null;
    $aveOI20 = isset($_POST['avEOi']) ? $_POST['avEOi'] : null;
    $aveAO20 = isset($_POST['avEAo']) ? $_POST['avEAo'] : null;
    $avccOD20 = isset($_POST['avEOd']) ? $_POST['avEOd'] : null;
    $avccOI20 = isset($_POST['avEOi']) ? $_POST['avEOi'] : null;
    $avccAO20 = isset($_POST['avEAo']) ? $_POST['avEAo'] : null;
    $descripcion = isset($_POST['diagnostico']) ? $_POST['diagnostico'] : null;
    // Crear una instancia de la clase Conexion
    $conexion = new App\Modelos\Conexion();

    // Obtener la conexión a la base de datos
    $db = $conexion->obtenerConexion();

    // Crear una instancia de la clase Metodos
    $metodos = new App\Modelos\Metodos($db);

    // Agregar la consulta en la base de datos
    $metodos->agregarConsulta(
        $cefalesias,
        $fatigaOcular,
        $ojoRojo,
        $borrosidad,
        $ta,
        $fc,
        $satO2,
        $glicemiaCapilar,
        $dm,
        $hta,
        $agudezaVisualScorrecion,
        $lejosOD20,
        $lejosOI20,
        $lejosAO20,
        $cercaOD20,
        $cercaOI20,
        $cercaAO20,
        $od,
        $oi,
        $material,
        $avclAOD20,
        $avclAOI20,
        $avclAAO20,
        $avOD20,
        $avOI20,
        $avAO20,
        $avscOD20,
        $avscOI20,
        $avscAO20,
        $aveOD20,
        $aveOI20,
        $aveAO20,
        $avccOD20,
        $avccOI20,
        $avccAO20,
        $descripcion
    );

    $success = true;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial y Antecedentes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="src/public/css/consulta.css">
</head>
<body>
    <div class="sidebar" id="sidebar">
        <div class="logo">
            <img src="src/public/images/logo.jpg" alt="Logo">
        </div>
        <a class="nav-link" href="aggimg.php"><i class="fas fa-box"></i><span>Gestionar Producto</span></a>
        <a class="nav-link" href="trabaj.php"><i class="fas fa-users"></i><span>Gestionar Trabajadores</span></a>
        <a class="nav-link" href="agenda.php"><i class="fas fa-calendar-alt"></i><span>Gestionar Agenda</span></a>
        <a class="nav-link" href="consulta.php"><i class="fas fa-stethoscope"></i><span>Realizar Consulta</span></a>
        <a class="nav-link" href="receta.php"><i class="fas fa-prescription"></i><span>Generar Receta</span></a>
        <a class="nav-link" href="../index.php"><i class="fas fa-sign-out-alt"></i><span>Cerrar Sesión</span></a>
    </div>

    <div class="container-fluid" id="content">
        <h1>Historial y Antecedentes</h1>

        <?php if ($success) : ?>
            <div class="alert alert-success" role="alert">
                Consulta agregada correctamente.
            </div>
        <?php endif; ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="row">
                <div class="col-md-3">
                    <label for="cefaleas">Cefaleas:</label>
                    <input type="checkbox" id="cefaleas" name="cefaleas" value="1">
                </div>
                <div class="col-md-3">
                    <label for="fatigaOcular">Fatiga Ocular:</label>
                    <input type="checkbox" id="fatigaOcular" name="fatigaOcular" value="1">
                </div>
                <div class="col-md-3">
                    <label for="ojoRojo">Ojo Rojo:</label>
                    <input type="checkbox" id="ojoRojo" name="ojoRojo" value="1">
                </div>
                <div class="col-md-3">
                    <label for="borrosidad">Borrosidad:</label>
                    <input type="checkbox" id="borrosidad" name="borrosidad" value="1">
                </div>
            </div>

            <h2>Consulta</h2>
            <div class="row">
                <div class="col-md-6">
                    <label for="ta">TA:</label>
                    <input type="text" class="form-control" id="ta" name="ta">
                </div>
                <div class="col-md-6">
                    <label for="fc">FC:</label>
                    <input type="text" class="form-control" id="fc" name="fc">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="satO2">SatO2:</label>
                    <input type="text" class="form-control" id="satO2" name="satO2">
                </div>
                <div class="col-md-6">
                    <label for="glicemia">Glicemia Capilar:</label>
                    <input type="text" class="form-control" id="glicemia" name="glicemia">
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <label for="dm">DM:</label>
                    <input type="checkbox" id="dm" name="dm" value="1">
                </div>
                <div class="col-md-3">
                    <label for="hta">HTA:</label>
                    <input type="checkbox" id="hta" name="hta" value="1">
                </div>
            </div>

            <h2>Consulta Salud Ocular</h2>
            <div class="row">
                <div class="col-md-3">
                    <label for="avLejosOd">A.V Lejos O.D.:</label>
                    <input type="text" class="form-control" id="avLejosOd" name="avLejosOd">
                </div>
                <div class="col-md-3">
                    <label for="avLejosOi">A.V Lejos O.I.:</label>
                    <input type="text" class="form-control" id="avLejosOi" name="avLejosOi">
                </div>
                <div class="col-md-3">
                    <label for="avLejosAo">A.V Lejos A.O.:</label>
                    <input type="text" class="form-control" id="avLejosAo" name="avLejosAo">
                </div>
                <div class="col-md-3">
                    <label for="avCercaOd">A.V Cerca O.D.:</label>
                    <input type="text" class="form-control" id="avCercaOd" name="avCercaOd">
                </div>
            </div>

            <h3>Rx En Uso</h3>
            <div class="row">
                <div class="col-md-4">
                    <label for="rxUsoOd">OD:</label>
                    <input type="text" class="form-control" id="rxUsoOd" name="rxUsoOd">
                </div>
                <div class="col-md-4">
                    <label for="rxUsoOi">OI:</label>
                    <input type="text" class="form-control" id="rxUsoOi" name="rxUsoOi">
                </div>
                <div class="col-md-4">
                    <label for="rxUsoMaterial">Material:</label>
                    <input type="text" class="form-control" id="rxUsoMaterial" name="rxUsoMaterial">
                </div>
            </div>

            <h2>Agudeza Visual Con Corrección</h2>
            <div class="row">
                <div class="col-md-4">
                    <label for="avEOd">A.V.E O.D.:</label>
                    <input type="text" class="form-control" id="avEOd" name="avEOd">
                </div>
                <div class="col-md-4">
                    <label for="avEOi">A.V.E O.I.:</label>
                    <input type="text" class="form-control" id="avEOi" name="avEOi">
                </div>
                <div class="col-md-4">
                    <label for="avEAo">A.V.E A.O.:</label>
                    <input type="text" class="form-control" id="avEAo" name="avEAo">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="descripcion">Descripcion:</label>
                        <textarea class="form-control" id="descripcion" rows="5" name="descripcion"></textarea>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>

        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="src/public/js/boton.js"></script>
</body>
</html>
