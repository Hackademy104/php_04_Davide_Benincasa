<?php 

class Batmobile {
    public $ParteAnteriore;
    public $PartePosteriore;

    public function __construct(ParteAnteriore $_ParteAnteriore, PartePosteriore $_PartePosteriore) {

        $this-> ParteAnteriore = $_ParteAnteriore;
        $this-> PartePosteriore = $_PartePosteriore;
    }

    public function pulsanteAttacca(){
        $this -> ParteAnteriore -> attacca();
    }

    public function pulsanteDifendi(){
        $this -> PartePosteriore -> Difendi();
    }

}

abstract class ParteAnteriore {
    abstract public function attacca();

}
    class Razzi extends ParteAnteriore {
        public function attacca(){
            echo "razzo fa boom boom \n";}
    }

    class Laser extends ParteAnteriore {
        public function attacca(){
            echo "laser fa pew pew \n";}
    }

    class Mitragliatrice extends ParteAnteriore {
        public function attacca(){
            echo "mitragliatrice fa ratata \n";}
    }

    class Lanciafiamme extends ParteAnteriore {
        public function attacca(){
            echo "lancuiafiamme fa pufffff \n";}
    }

abstract class PartePosteriore{
    abstract public function difendi();
}

    class Scudi extends PartePosteriore {
        public function difendi(){
            echo "scudo para tutto \n";
        }
    }

    class Turbo extends PartePosteriore {
        public function difendi(){
            echo "brum brumm \n";
        }
    }

    class Molle extends PartePosteriore {
        public function difendi(){
            echo "boing boing \n";
        }
    }

    class Rampino extends PartePosteriore {
        public function difendi(){
            echo "guarda mamma come spiderman \n";
        }
    }

    //object composition

    $macchina1 = new Batmobile(new Laser, new Scudi); 
    $macchina2 = new Batmobile(new Lanciafiamme, new Molle);

    $macchina1 -> pulsanteAttacca();
    $macchina2 -> pulsanteDifendi();

