<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>mes y dia</title>
</head>
<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <nav>
        <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="ptc1.php">Tablas de Multiplicar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ptc2.php">Pares Impares Primos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="ptc3.php">Mayor que y menor que</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ptc4.php">Dia y mes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ptc5.php">promedio de alumno</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    <h1>Meses y días</h1>

    <label for="numeroMes">Ingresa un número del 1 al 12:</label>
    <br>
    <input type="number" id="numeroMes" min="1" max="12">
    <br>
    <button class="btn btn-outline-warning" onclick="imprimirMes()">Imprimir</button>
    <div id="resultado"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
    function imprimirMes() {
        var numeroMesInput = document.getElementById("numeroMes");
        var numeroMes = parseInt(numeroMesInput.value);
        var meses = [
        { nombre: "Enero", dias: 31 },
        { nombre: "Febrero", dias: 28 },
        { nombre: "Marzo", dias: 31 },
        { nombre: "Abril", dias: 30 },
        { nombre: "Mayo", dias: 31 },
        { nombre: "Junio", dias: 30 },
        { nombre: "Julio", dias: 31 },
        { nombre: "Agosto", dias: 31 },
        { nombre: "Septiembre", dias: 30 },
        { nombre: "Octubre", dias: 31 },
        { nombre: "Noviembre", dias: 30 },
        { nombre: "Diciembre", dias: 31 }
        ];
        var resultadoDiv = document.getElementById("resultado");
        resultadoDiv.innerHTML = "";
        if (numeroMes >= 1 && numeroMes <= 12) {
        var mes = meses[numeroMes - 1];
        resultadoDiv.innerHTML = "<p>" + mes.nombre + " tiene : " + mes.dias + " días</p>";
        } else {
        resultadoDiv.innerHTML = "<p>Ingresa un número válido del 1 al 12</p>";
        }
    }
    </script>
</body>
</html>