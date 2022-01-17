<?php

class ConcesionarioIva{
    const COCHES = 5;
    private $arrayCoches = array();
    private $iva;

    public function __construct($iva){
        $this->iva = $iva;
    }

    public function __toString(){
        $coches = "[";
        foreach ($this->arrayCoches as $coche) {
            $coches = $coches . " " ."(" .$coche.")";
        }
        return "Iva(" . $this->iva . "%):". $coches."]"; 
    }

    public function añadir($coche){
        if(count($this->arrayCoches)<5){
            array_push($this->arrayCoches, $coche);
            return "Coche añadido con exito.";
        }
        return "Concesionario lleno.";
    }

    // public function mostrarCoches(){
    //     return var_dump($this->$arrayCoches);
    // }

    public function getArrayCoches()
    {
        return $this->arrayCoches;
    }


    public function setArrayCoches($arrayCoches)
    {
        $this->arrayCoches = $arrayCoches;
    }


    public function getIva()
    {
        return $this->iva;
    }

    public function setIva($iva)
    {
        $this->iva = $iva;
    }
}



?>