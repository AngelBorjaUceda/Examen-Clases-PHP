<?php
include_once("CocheNacional.php");
include_once("CocheImportado.php");
include_once("CocheOcasion.php");
include_once("ConcesionarioOferta.php");

$cochenacional = new CocheNacional(4252, "Pegasus");
echo $cochenacional."<br>";
echo $cochenacional->calcPrecio()."<br>";

$cocheimportado = new CocheImportado(4252, "Citroen");
echo $cocheimportado."<br>";
echo $cocheimportado->calcPrecio(32)."<br>";

$cocheocasion = new CocheOcasion(1000, "Ford");
echo $cocheocasion."<br>";
echo $cocheocasion->calcPrecio(10)."<br>";

$concesionarioiva = new ConcesionarioIva(10);
echo $concesionarioiva->añadir($cochenacional)."<br>";
echo $concesionarioiva->añadir($cochenacional)."<br>";
echo $concesionarioiva->añadir($cochenacional)."<br>";
echo $concesionarioiva->añadir($cochenacional)."<br>";
echo $concesionarioiva->añadir($cochenacional)."<br>";
echo $concesionarioiva->añadir($cochenacional)."<br>";

echo $concesionarioiva;

//Hasta concesionario iva funciona correctamente
?>
