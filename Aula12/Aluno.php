<?php
require_once 'Pessoa.php';

class Aluno extends Pessoa{
    private $matricula;
    private $curso;


    public function pagarMensalidade(){
        echo "<p>PAGANDO O MANESALIDADE DO ALUNO ".$this->getNome()."</p> ";
        // passando por atributo nome (
           // echo "<p>PAGANDO O MANESALIDADE DO ALUNO <strong>".$this->nome."</p> ";
    }

    public function getMatricula()
    {
        return $this->matricula;
    }

    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }
    public function getCurso()
    {
        return $this->curso;
    }

    public function setCurso($curso)
    {
        $this->curso = $curso;
    }
}


?>