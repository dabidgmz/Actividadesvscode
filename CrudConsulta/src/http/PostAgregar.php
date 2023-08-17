<?php
use App\Modelos\Conexion;
use App\Modelos\Metodos;

require __DIR__.'/../../vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validar los datos de entrada
    $cefalesias = isset($_POST['cefaleas']) ? 1 : 0;
    $fatigaOcular = isset($_POST['fatigaOcular']) ? 1 : 0;
    $ojoRojo = isset($_POST['ojoRojo']) ? 1 : 0;
    $borrosidad = isset($_POST['borrosidad']) ? 1 : 0;
    $ta = $_POST['ta'];
    $fc = $_POST['fc'];
    $satO2 = $_POST['satO2'];
    $glicemiaCapilar = $_POST['glicemia'];
    $dm = isset($_POST['dm']) ? 1 : 0;
    $hta = isset($_POST['hta']) ? 1 : 0;
    $agudezaVisualScorrecion = $_POST['avEOd'];
    $lejosOD20 = $_POST['avLejosOd'];
    $lejosOI20 = $_POST['avLejosOi'];
    $lejosAO20 = $_POST['avLejosAo'];
    $cercaOD20 = $_POST['avCercaOd'];
    $cercaOI20 = $_POST['avCercaOi'];
    $cercaAO20 = $_POST['avCercaAo'];
    $od = $_POST['rxUsoOd'];
    $oi = $_POST['rxUsoOi'];
    $material = $_POST['rxUsoMaterial'];
    $avclAOD20 = $_POST['avEOd'];
    $avclAOI20 = $_POST['avEOi'];
    $avclAAO20 = $_POST['avEAo'];
    $avOD20 = $_POST['avEOd'];
    $avOI20 = $_POST['avEOi'];
    $avAO20 = $_POST['avEAo'];
    $avscOD20 = $_POST['avEOd'];
    $avscOI20 = $_POST['avEOi'];
    $avscAO20 = $_POST['avEAo'];
    $aveOD20 = $_POST['avEOd'];
    $aveOI20 = $_POST['avEOi'];
    $aveAO20 = $_POST['avEAo'];
    $avccOD20 = $_POST['avEOd'];
    $avccOI20 = $_POST['avEOi'];
    $avccAO20 = $_POST['avEAo'];
    $descripcion = $_POST['diagnostico'];

    // Conexión y operación en la base de datos
    try {
        $conexion = new Conexion();
        $metodos = new Metodos($conexion->obtenerConexion());
        $metodos->agregarReceta(
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
            $descripcion,
            $consulta // Reemplaza con el valor de consulta correspondiente
        );

        // Redirigir a una página de éxito
        header('Location: consulta.php');
        exit;
    } catch (PDOException $e) {
        // Manejar errores de la base de datos
        echo "Error al agregar la consulta: " . $e->getMessage();
        exit;
    }
} else {
    echo "Método no permitido";
    exit;
}
?>
