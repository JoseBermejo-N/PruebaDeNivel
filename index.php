<?php

declare (strict_types=1);

require_once "Combustible.php";
require_once "Coche.php";
require_once "Concesionario.php";

$concesionario = new Concesionario;

$coche1 = new coche("Audi", "Q3", 150, 6.0, COMBUSTIBLE::G);
$coche2 = new coche("Seat", "Ateca", 150, 6.0, COMBUSTIBLE::D);
$coche3 = new coche("Audi", "S3", 300, 8.0, COMBUSTIBLE::G);
$coche4 = new coche("BMW", "X5", 400, 4.0, COMBUSTIBLE::H);
$coche5 = new coche("Seat", "Ibiza", 90, 4.5, COMBUSTIBLE::D);

$concesionario->addCoche($coche1);
$concesionario->addCoche($coche2);
$concesionario->addCoche($coche3);
$concesionario->addCoche($coche4);
$concesionario->addCoche($coche5);

echo "|||Coche por combustible|||\n";
$cochePorCombustible = $concesionario->getCochePorCombustible(Combustible::G);

if (empty($cochePorCombustible)) {
    echo "No hay coches con ese combustible.\n\n";
} else {
    foreach ($cochePorCombustible as $coche) {
        echo $coche;
    }
}

echo "|||Coche más potente|||\n";
$CocheMaxPotencia=$concesionario->getCocheMasPotente();
    echo $CocheMaxPotencia;

echo "|||Coche menos potente|||\n";
$CocheMinPotencia=$concesionario->getCocheMenosPotente();
    echo $CocheMinPotencia;

