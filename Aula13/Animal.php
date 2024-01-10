<?php

abstract class Animal{

    protected $peso;
    protected $idade;
    protected $menbro;


    function getPeso(){
        return $this->peso;
    }
    function setPeso($Peso){
         $this->peso=$Peso;
    }
    function getIdade(){
        return $this->idade;
    }
    function setIdade($Idade){
         $this->idade=$Idade;
    }
    function getMenbro(){
        return $this->menbro;
    }
    function setMenbro($Menbro){
         $this->menbro=$Menbro;
    }

//    OS MÉTODOS ABRSTATOS SÃO POR OBRIGRAÇÃO DESENVOLVIDOS NAS SUAS SUBCLASS
    abstract function  locomover();
    abstract function  alimentar();
    //abstract function  emitirSom(); //Aula14
    abstract function emitirSom();

}



?>