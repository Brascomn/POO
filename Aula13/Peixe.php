<?php
require_once 'Animal.php';

class Peixe extends Animal{
    private $corEscama;



    function getCorEscama(){
        return $this->corEscama;
    }
    function setCorEscama($corescama){
         $this->corEscama=$corescama;
    }

    //SobrePor o método correr
    function locomover(){ echo "<p>NADANDO.</p>";  }
    function alimentar(){ echo "<p>COMENDO SUBTANCIAS.</p>";  }
    function emitirSom(){ echo "<p>NÃO EMITI SOM.</p>";  }
    function  soltarBolha(){ echo "<p>SOLTOU UMA BOLHA</p>";  }

}
?>