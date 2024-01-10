<?php
require_once 'Pessoa.php';

class Funcionario extends Pessoa{

    private $setor;
    private $trabalhando;
    
    function mudarTrabalho($nsetor){
        $this->setor=$nsetor;

    }
    function getSetor(){

        return $this->setor;
    }
    function setSetor($setor){
        $this->setor=$setor;
    }
    function getTrabalhando(){
        return $this->trabalhando;
    }
    function setTrabalhando(){
        $this->trabalhando=$trabalhando;
    }
}
?>