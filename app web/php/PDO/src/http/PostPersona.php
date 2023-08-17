<?php

use App\Modelos\Persona;

require __DIR__ . '/../bootstrap.php';

extract($_POST);

$persona = new Persona();

$persona->setNombre($nombre);
$persona->setApPaterno($ap_paterno);

echo "<h1>" . $persona->getNombre() . "<br>" . "Su apellido es: " . $persona->getApPaterno() . "</h1>";