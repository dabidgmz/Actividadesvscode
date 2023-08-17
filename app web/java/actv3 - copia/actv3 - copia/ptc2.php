<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css"> 
    <title>pares impares primos</title>
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
    <h1>Organizador de Números</h1>
    <label for="numero">Número:</label>
    <input type="number" id="numero">
    <button type="button" class="btn btn-outline-primary" onclick="agregarNumero()">Agregar</button>
    <button type="button" class="btn btn-outline-primary" onclick="organizarNumeros()">Organizar</button>
    
    <div id="resultados">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script type="text/javascript">
    var numeros = [];
        
        function agregarNumero() {
            var numero = parseInt(document.getElementById("numero").value);
            if (isNaN(numero)) {
                alert("Por favor, introduce un número válido.");
                return;
            }
            numeros.push(numero);
            document.getElementById("numero").value = "";
        }
        function organizarNumeros() {
            var pares = [];
            var impares = [];
            var primos = [];
            
            for (var i = 0; i < numeros.length; i++) {
                var num = numeros[i];
                
                if (num % 2 === 0) {
                    pares.push(num);
                } else {
                    impares.push(num);
                }
                
                if (esPrimo(num)) {
                    primos.push(num);
                }
            }
            var resultado = "<h2>Pares</h2>" + pares.join(", ") + "<br>";
            resultado += "<h2>Impares</h2>" + impares.join(", ") + "<br>";
            resultado += "<h2>Primos</h2>" + primos.join(", ");
            document.getElementById("resultados").innerHTML = resultado;
        }
        
        function esPrimo(numero) {
            if (numero < 2) {
                return false;
            }
            for (var i = 2; i < numero; i++) {
                if (numero % i === 0) {
                    return false;
                }
            }
            
            return true;
        }
    </script>
</body>
</html>