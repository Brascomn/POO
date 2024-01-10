<?php
require_once 'Animal.php';

class Mamifero extends Animal{
    private $corPelo;

    // Aula 14, Sobre Posicao



    function getCorPelo(){
        return $this->corPelo;
    }
    function setCorPelo($corpelo){
         $this->corPelo=$corpelo;
    }

    //SOBREPOR O METODO DA SUPERCLASS
    //
    function  locomover(){ 
        echo "<p>CORRENDO.</p>";
      }
    function  alimentar(){ echo "<p>MAMANDO.</p>";  }
    function  emitirSom(){ echo "<p>SOM DE MAMIFERO.</p>";  }
}
?>