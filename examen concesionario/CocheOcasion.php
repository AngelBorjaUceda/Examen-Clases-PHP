<?php
include_once("Coche.php");

class CocheOcasion extends Coche{

    public function __construct($precioBase, $modelo){
        parent::__construct($precioBase, $modelo);
    }



    public function calcPrecio($porcentaje){
        $decimal = $porcentaje / 100;
        $descuento = parent::getPrecioBase() * $decimal;
        $total = parent::getPrecioBase() - $descuento;
        return $total;
    }



}
