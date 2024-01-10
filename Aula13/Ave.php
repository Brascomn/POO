<?php
require_once 'Animal.php';

class Ave extends Animal{
    private $corPena;



    function getCorPena(){
        return $this->corpena;
    }
    function setCorPena($corpena){
         $this->corPena=$corpena;
    }

    //SSOBREPOR  O método correr
    function locomover(){ echo "<p>VOANDO</p>";  }
    function alimentar(){ echo "<p>COMENDO FRUTAS, PÃO E FARRELOS.</p>";  }
    function emitirSom(){ echo "<p>SOM DE AVE.</p>";  }
    function  fazerNinho(){ echo "<p>CONSTRUIR UM NINHO</p>";  }

}
?>