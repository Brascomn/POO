<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa{

    private $matr;
    private $curso;

    function cancelarMatr(){
        $this->matr=false;
        echo"<p>Matricula Cancelada.</p>";

    }
    function getMatr(){
        return $this->matr;
    }
    function setMatr($matr){
        $this->matr=$matr;
    }
    function getCurso(){
        return $this->curso;
    }
    function setCurso($curso){
        $this->curso=$curso;
    }
}

?>