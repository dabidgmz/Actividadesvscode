<?php
include '..\app\persona.php';
use App\Eje1\Persona;
use App\Eje1\Animal;
use App\Eje1\OperacionesBasicas;
use App\Eje1\TablaMultiplicar;
use App\Eje1\OrdenamientoNumeros;
use App\Eje1\FiguraGeometrica;
use App\Eje1\Cuadrado;
use App\Eje1\Rectangulo;
use App\Eje1\TrianguloIsoceles;

$animal = new Animal();
$persona = new Persona();
$persona->setnombre("David");
echo $persona->getnombre() . " tiene un " . $animal->getnombre() . "<br>"; // Agrega <br> aquí

echo("Operadores Basicos");
echo("<br>");
$operaciones = new OperacionesBasicas();
printf("Suma: %d<br>", $operaciones->sumar(5, 3));  
printf("Resta: %d<br>", $operaciones->restar(5, 3));  
printf("División: %.2f<br>", $operaciones->dividir(5, 3)); 
printf("Multiplicación: %d<br>", $operaciones->multiplicar(5, 3));  
printf("Potencia: %d<br>", $operaciones->potencia(5, 3));  
echo("<br>");
echo("Tablas de Multiplicar");
echo("<br>");
$tablaMultiplicar = new TablaMultiplicar();
$numeroTabla = 2; 
$tablaMultiplicar->imprimirTabla($numeroTabla);
echo "<br>"; 
echo("<br>");
echo("Ordenamiento de numeros");
echo("<br>");
$ordenamiento = new OrdenamientoNumeros();
$numeros = [12,10,9, 2, 5, 1, 7, 3];
$numerosOrdenadosMayorMenor = $ordenamiento->ordenarMayorMenor($numeros);
$numerosOrdenadosMenorMayor = $ordenamiento->ordenarMenorMayor($numeros);

echo "Lista original: " . implode(", ", $numeros) . "<br>";
echo "Ordenado de mayor a menor: " . implode(", ", $numerosOrdenadosMayorMenor) . "<br>";
echo "Ordenado de menor a mayor: " . implode(", ", $numerosOrdenadosMenorMayor) . "<br>";
echo "<br>"; // Agrega <br> aquí

echo("Area y perimetros de las sig. Figuras");
echo("<br>");
$cuadrado = new Cuadrado(5, 5);
echo "Cuadrado:<br>";
echo "Área: " . $cuadrado->calcularArea() . "<br>";
echo "Perímetro: " . $cuadrado->calcularPerimetro() . "<br>";
echo "<br>"; // Agrega <br> aquí

$rectangulo = new Rectangulo(4, 6);
echo "Rectángulo:<br>";
echo "Área: " . $rectangulo->calcularArea() . "<br>";
echo "Perímetro: " . $rectangulo->calcularPerimetro() . "<br>";
echo "<br>"; // Agrega <br> aquí

$triangulo = new TrianguloIsoceles(4, 6);
echo "Triángulo Isósceles:<br>";
echo "Área: " . $triangulo->calcularArea() . "<br>";
echo "Perímetro: " . $triangulo->calcularPerimetro() . "<br>";
?>
