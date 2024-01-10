<?php
//EXTENDES = HERDADR
require_once 'Pessoa.php';
class Professor extends Pessoa{

    private $especialidade;
    private $salario;

        function ReceberAumento($aum){
            $this->salario +=$aum;

        }
        function getEspecialidade(){
            return $this->especialidade;
        }
        function setEspecialidade($especialidade){
            $this->especialidade=$especialidade;
        }
        function getSalario(){
            return $this->salario;
        }
        function setSAlario($salario){
            $this->salario=$salario;
        }
        
    }
?>