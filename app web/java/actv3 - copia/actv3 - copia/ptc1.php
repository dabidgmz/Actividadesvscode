<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css"> 
    <title>tablas de multiplicar</title>
    
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
    <h1>Generador de Tablas de Multiplicar</h1>
    <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Número de inicio:</label>
    <input type="number" class="form-control" id="numeroInicio" placeholder="Ingrese el número de inicio">
    </div>
    <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Número final:</label>
    <input type="number" class="form-control" id="numeroFin" placeholder="Ingrese el número final">
    </div>
    <button class="btn btn-primary" onclick="generarTablas()">Generar</button>
    
    <div id="resultados"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function generarTablas() {
            var numInicio = parseInt(document.getElementById("numeroInicio").value);
            var numFin = parseInt(document.getElementById("numeroFin").value);
            
            if (isNaN(numInicio) || isNaN(numFin)) {
                alert("Por favor, introduce números válidos.");
                return;
            }
            
            if (numInicio > numFin) {
                alert("El número de inicio debe ser menor o igual que el número final.");
                return;
            }
            
            var resultado = "";
            
            for (var i = numInicio; i <= numFin; i++) {
                resultado += "<h2>Tabla del " + i + "</h2>";
                resultado += "<table>";
                
                for (var j = 1; j <= 10; j++) {
                    resultado += "<tr>";
                    resultado += "<td>" + i + " x " + j + "</td>";
                    resultado += "<td>=</td>";
                    resultado += "<td>" + (i * j) + "</td>";
                    resultado += "</tr>";
                }
                
                resultado += "</table>";
            }
            
            document.getElementById("resultados").innerHTML = resultado;
        }
    </script>
</body>
</html>