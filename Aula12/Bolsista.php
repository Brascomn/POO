<?php 
    require_once 'Aluno.php';
    
    class Bolsista extends Aluno{

        private $bolsa;


        function renovarBolsa(){
            echo "<p>Bolsa Renovada.</p>";
        }

        function getBolsa(){
            return $this->bolsa;
        }
        function setBolsa($bolsa){
            $this->bolsa=$bolsa;
        }

        //QUANDO TEMOS UMA FUNCOES/MÉTODOS QUE VEM DA SUPER CLASSE, A QUE ESTA A NA SUBCLASS IRÁ SUBMETER-SE COM A SUPER CLASSE  
        public function pagarMensalidade(){
            echo "<p>O ".$this->getNome()." é BOLSISTA, ENTÃO PAGA COM DESCONTO.</p> ";
            // passando por atributo nome (
    }
    }
    ?>
