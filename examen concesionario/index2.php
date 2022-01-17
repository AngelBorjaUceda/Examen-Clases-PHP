<?php 

require_once __DIR__ . '/Coche.php';
require_once __DIR__ . '/CocheOcasion.php';
require_once __DIR__ . '/CocheImportado.php';
require_once __DIR__ . '/CocheNacional.php';
require_once __DIR__ . '/ConcesionarioIva.php';
require_once __DIR__ . '/ConcesionarioOferta.php';

$concesionario = new ConcesionarioIva(10);
$concesionario->añadir(new CocheOcasion("Citroen-Berlingo", 9300, 20));
$concesionario->añadir(new CocheNacional("Ford-Focus", 12000));
$concesionario->añadir(new CocheImportado("Porsche-911", 39000, 1000));
$concesionario->añadir(new CocheImportado("Lamborghini Diablo", 99000, 1000));
$concesionario->añadir(new CocheImportado("Porsche-911_3", 39000, 1000));
$concesionario->añadir(new CocheImportado("Porsche-911_4", 39000, 1000));
$concesionario->añadir(new CocheImportado("Porsche-911_5", 39000, 1000));
echo $concesionario;

$concesionario2 = new ConcesionarioOferta(10, 500, "Seat-Leon");
$concesionario2->añadir(new CocheOcasion("Seat-Marbella", 7000, 20));
$concesionario2->añadir(new CocheImportado("Porsche-911", 39000, 1000));

echo '<br/>';
echo $concesionario2;
?>