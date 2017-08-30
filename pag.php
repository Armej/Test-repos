<?php

class Humano(){
    public $nombre = "";
    
    public functiion hablar(){
        $this->$nombre = "Aquí va el nombre";
        echo " " . $this->$nombre;
    }

    $marta = new Humano;
    $marta->hablar;
}

?>