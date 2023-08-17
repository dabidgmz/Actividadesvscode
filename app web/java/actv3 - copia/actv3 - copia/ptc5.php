<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>promedio de alumno</title>
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
    <h1>Registro de Alumnos</h1>
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre"><br>
    <label for="matricula">Matrícula:</label>
    <input type="text" id="matricula"><br>
    <label for="materia">Materia:</label>
    <input type="text" id="materia"><br>
    <label for="calificacion">Calificación:</label>
    <input type="number" id="calificacion"><br>
    <button type="button" class="btn btn-outline-success" onclick="agregarMateriaCalificacion()">Agregar</button>
    <button type="button" class="btn btn-outline-success" onclick="guardarRegistro()">Imprimir Tabla</button>
    <table id="tabla" style="display: none;"  class="table table-borderless">
        <tr>
            <th>Nombre</th>
            <th>Matrícula</th>
            <th>Materia</th>
            <th>Calificación</th>
            <th>Promedio</th>
            <th>Aprobado</th>
        </tr>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script type="text/javascript">
        var registros = [];
        var calificaciones = [];
        var materias = [];
        var tablaVisible = false;

        function agregarMateriaCalificacion() {
            var materia = document.getElementById("materia").value;
            var calificacion = parseInt(document.getElementById("calificacion").value);

            materias.push(materia);
            calificaciones.push(calificacion);

            document.getElementById("materia").value = "";
            document.getElementById("calificacion").value = "";

            if (calificaciones.length === 8 && materias.length === 8) {
                document.getElementById("materia").disabled = true;
                document.getElementById("calificacion").disabled = true;
            }
        }

        function guardarRegistro() {
            var nombre = document.getElementById("nombre").value;
            var matricula = document.getElementById("matricula").value;

            if (calificaciones.length !== 8 || materias.length !== 8) {
                alert("Por favor, asegúrate de agregar 8 calificaciones y 8 materias antes de guardar el registro.");
                return;
            }

            registros.push({
                nombre: nombre,
                matricula: matricula,
                materias: materias,
                calificaciones: calificaciones
            });

            resetForm();
            imprimirTabla();
        }

        function calcularPromedio(calificaciones) {
            var sumCalificaciones = 0;
            var countCalificaciones = calificaciones.length;

            for (var i = 0; i < countCalificaciones; i++) {
                sumCalificaciones += calificaciones[i];
            }

            if (countCalificaciones > 0) {
                var promedio = sumCalificaciones / countCalificaciones;
                return promedio.toFixed(2);
            } else {
                return 0;
            }
        }

        function resetForm() {
            document.getElementById("nombre").value = "";
            document.getElementById("matricula").value = "";
            document.getElementById("calificacion").value = "";
            document.getElementById("materia").value = "";
            calificaciones = [];
            materias = [];
            document.getElementById("materia").disabled = false;
            document.getElementById("calificacion").disabled = false;
        }

        function imprimirTabla() {
            var tablaHTML = '<tr><th>Nombre</th><th>Matrícula</th><th>Materias</th><th>Calificaciones</th><th>Promedio</th><th>Aprobado</th></tr>';
            for (var i = 0; i < registros.length; i++) {
                tablaHTML += '<tr>';
                tablaHTML += '<td>' + registros[i].nombre + '</td>';
                tablaHTML += '<td>' + registros[i].matricula + '</td>';
                tablaHTML += '<td>' + registros[i].materias.join("<br>") + '</td>';
                tablaHTML += '<td>' + registros[i].calificaciones.join("<br>") + '</td>';
                tablaHTML += '<td>' + calcularPromedio(registros[i].calificaciones) + '</td>';
                tablaHTML += '<td>' + ((calcularPromedio(registros[i].calificaciones) >= 80) ? "Aprobado" : "Reprobado") + '</td>';
                tablaHTML += '</tr>';
            }
            document.getElementById("tabla").innerHTML = tablaHTML;
            if (!tablaVisible) {
                document.getElementById("tabla").style.display = "table";
                tablaVisible = true;
            }
        }
    </script>
</body>


