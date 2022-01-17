<?php
include_once("Coche.php");

class CocheNacional extends Coche{

    public function __construct($precioBase, $modelo){
        parent::__construct($precioBase, $modelo);
    }



    public function calcPrecio(){
        return parent::getPrecioBase();
    }



}

?>