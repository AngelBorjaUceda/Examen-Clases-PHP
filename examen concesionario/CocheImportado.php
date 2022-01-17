<?php
include_once("Coche.php");

class CocheImportado extends Coche{

    public function __construct($precioBase, $modelo){
        parent::__construct($precioBase, $modelo);
    }



    public function calcPrecio($precioExtra){
        return parent::getPrecioBase() + $precioExtra;
    }



}

?>