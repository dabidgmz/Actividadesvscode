<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>mayor que y menor que</title>
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

    <h1>Compara los numeros</h1>
    
    <label for="numero1">Número 1:</label>
    <input type="number" id="numero1">
    
    <label for="numero2">Número 2:</label>
    <input type="number" id="numero2">
    <button type="button" class="btn btn-dark" onclick="compararNumeros()">Imprimir</button>
    <div id="resultados"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function compararNumeros() {
            var num1 = parseFloat(document.getElementById("numero1").value);
            var num2 = parseFloat(document.getElementById("numero2").value);
            
            if (isNaN(num1) || isNaN(num2)) {
                alert("Por favor, introduce números válidos.");
                return;
            }
            
            var mayor = Math.max(num1, num2);
            var menor = Math.min(num1, num2);
            
            var resultado = "El número mayor es: " + mayor + "<br>";
            resultado += "El número menor es: " + menor;
            
            document.getElementById("resultados").innerHTML = resultado;
        }
    </script>
</body>
</html>