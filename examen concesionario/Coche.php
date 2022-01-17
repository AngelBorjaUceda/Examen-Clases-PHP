<?php

abstract class Coche{
    protected $precioBase;
    protected $modelo;

    public function __construct($precioBase, $modelo){
        $this->precioBase = $precioBase;
        $this->modelo = $modelo;
    }

    public function __toString(){
        return $this->modelo . ", " . $this->precioBase;
    }


    //Getters y Setters
    public function getPrecioBase()
    {
        return $this->precioBase;
    }

    public function setPrecioBase($precioBase)
    {
        $this->precioBase = $precioBase;
    }

    public function getModelo()
    {
        return $this->modelo;
    }


    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
}


?>