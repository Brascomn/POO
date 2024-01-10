<?php
require_once 'Animal.php';

class Reptil extends Animal{
    private $corEscama;



    function getCorEscama(){
        return $this->corescama;
    }
    function setCorEscama($corescama){
         $this->corEscama=$corescama;
    }

    //SobrePor o método correr
    function locomover(){ echo "<p>RASTEJANDO.</p>";  }
    function alimentar(){ echo "<p>COMENDO VEGETAIS.</p>";  }
    function emitirSom(){ echo "<p>SOM DE RÉPTIL.</p>";  }

}
?>