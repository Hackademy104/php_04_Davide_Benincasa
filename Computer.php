<?php

// Creare un Computer con Dependency Injection e Object Composition, composto da
// RAM
// Scheda Madre
// Scheda Video
// altroo

class Computer {
    public $Ram;
    public $SchedaMadre;
    public $SchedaVideo;

    public function __construct(Ram $_Ram, SchedaMadre $_SchedaMadre, SchedaVideo $_SchedaVideo){
        $this-> Ram = $_Ram; 
        $this-> SchedaMadre = $_SchedaMadre; 
        $this-> SchedaVideo = $_SchedaVideo; 
    }

    public function mypc(){
        echo "il mio pc è composto da: \n";
        echo $this->Ram->Modello . " " .  $this->Ram->Quantità . "\n";
        echo $this->SchedaVideo->Marca . " " .  $this->SchedaVideo->QuantitàMemoria . "\n"; 
        echo $this->SchedaMadre->Model . " " . $this->SchedaMadre->Socket . "\n";
    }

}


class Ram {
    public $Modello;
    public $Quantità;

    public function __construct(string $_Modello, string $_Quantità){
        $this-> Modello = $_Modello; 
        $this-> Quantità = $_Quantità;
    }
}

class  SchedaVideo {
    public $Marca;
    public $QuantitàMemoria;

    public function __construct( string $_Marca, string $_QuantitàMemoria){
        $this -> Marca = $_Marca;
        $this -> QuantitàMemoria = $_QuantitàMemoria;
    }
}

class SchedaMadre {
    public $Model;
    public $Socket;

    public function __construct(string $_Model, string $_Socket ){
        $this -> Model = $_Model;
        $this -> Socket = $_Socket;
    }
}

$MyPc = new Computer (
    new Ram("DDR4", "8 GB"),
    new SchedaMadre("DA0Z8EMB8C0", "AM3"),
    new SchedaVideo("Nvidia GeForce MX350", "8GB")
);

$MyPc -> mypc();



