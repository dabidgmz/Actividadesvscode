<?php

namespace App\Eje1;

class Persona {
    private $nombre = null;

    public function __construct() {
    }

    public function getnombre() {
        return $this->nombre;
    }

    public function setnombre($nombre) {
        $this->nombre = $nombre; // Corregir la asignación de valor aquí
    }
}
Class Animal
{
public function getnombre(){
return "Chucho...";
}
}
class OperacionesBasicas {
    public function sumar($a, $b) {
        return $a + $b;
    }

    public function restar($a, $b) {
        return $a - $b;
    }

    public function dividir($a, $b) {
        return $a / $b;
    }

    public function multiplicar($a, $b) {
        return $a * $b;
    }

    public function potencia($base, $exponente) {
        return pow($base, $exponente);
    }
}

class TablaMultiplicar {
    public function imprimirTabla($numero) {
        echo "Tabla de multiplicar del $numero:\n <br>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "$numero x $i = $resultado\n <br>";
        }
    }
}

class OrdenamientoNumeros {
    public function ordenarMayorMenor($numeros) {
        rsort($numeros);
        return $numeros;
    }
    
    public function ordenarMenorMayor($numeros) {
        sort($numeros);
        return $numeros;
    }
}

class FiguraGeometrica {
    protected $lado1;
    protected $lado2;

    public function __construct($lado1, $lado2) {
        $this->lado1 = $lado1;
        $this->lado2 = $lado2;
    }
}

class Cuadrado extends FiguraGeometrica {
    public function calcularArea() {
        return $this->lado1 * $this->lado1;
    }

    public function calcularPerimetro() {
        return 4 * $this->lado1;
    }
}

class Rectangulo extends FiguraGeometrica {
    public function calcularArea() {
        return $this->lado1 * $this->lado2;
    }

    public function calcularPerimetro() {
        return 2 * ($this->lado1 + $this->lado2);
    }
}

class TrianguloIsoceles extends FiguraGeometrica {
    public function calcularArea() {
        $base = $this->lado1;
        $altura = sqrt(pow($this->lado2, 2) - pow($base / 2, 2));
        return ($base * $altura) / 2;
    }

    public function calcularPerimetro() {
        return 2 * $this->lado2 + $this->lado1;
    }
}
?>