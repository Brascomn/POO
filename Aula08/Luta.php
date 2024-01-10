<?php

require_once 'C:\xampp\htdocs\poo\Aula07\Lutador.php';
class Luta{

    //ATRIBUTOS
    private $desafiado;
    //= new Lutador();
    private $desafiante;
    // = new Lutador();
    private $round;
    private $aprovada;


    //MÉTODOS
    function marcarLuta($l1, $l2){
        if (($l1->getCategoria() === $l2->getCategoria()) &&  ($l1 != $l2)) {
       if (($l1->getSexo() === $l2->getSexo())) {
           $this->aprovada=true;
           $this->desafiado=$l1;
           $this->desafiante=$l2;
          echo"<p> A LUTA ENTRE O LUTADOR ".$this->desafiado->getNome()." VS ".$this->desafiante->getNome()." FOI APROVADA.</p>";} 
          else{
            echo"<p>A LUTA NÃO PODE SER REALIZADA, POIS, OS LUTADORES NÃO SÃO DO MESMO SEXO. </p>";
            echo "O ".$l1->getNome()." É DO SEXO: ". $l1->getSexo()." VS ".$l2->getNome()." QUE É DO SEXO: ".$l2->getSexo();;
          }
        }else{
            $this->aprovado=false;
            $this->desafiado=null;
            $this->desafiante=null;
            echo"NÃO PODE SER REALIZADA";

          //  
        }

    }
     function lutar(){
        if ($this->aprovada) {
            //$this->getDesafiado().$this-> apresentar($l1);
            //$this->getDesafiante().$this-> apresentar($l2);

            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2); 
            switch ($vencedor) {
                case 0:
                    
                    //$this->getDesafiado() $this->empatarLutar();
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    //$this->getDesafiante() = $this->empatarLutar() ;
                    echo "<p>Empatou</p>";
                    break;
                    
                case 1:
                    //$this->getDesafiado() = $this-> ganharLuta($l1);
                    $this->desafiado->ganharLuta();
                    $this->desafiante-> perderLuta();
                    //$this->getDesafiante() = $this-> perderLuta($l2);
                    echo "<p> O LUTADOR ".$this->desafiado->getNome()." VENCEU .</p>";
                    $this->desafiado->apresentar();
                    break;
                    
                    case 2:
                        //$this->getDesafiado() = $this-> perderLuta($l1);
                        $this->desafiante-> ganharLuta();
                        $this->desafiado-> perderLuta();
                        // $this->getDesafiante() = $this-> ganharLuta($l2);
                        echo "<br><br> <p>O LUTADOR ".$this->desafiante->getNome()." VENCEU.</p>";
                        $this->desafiante->apresentar();
                    break;
                
                }

        }else {
            echo"<p>A LUTA NÃO PODE ACONTECER</p>"; 
        }

        }

    //MÉTODOS ESPECÍAIS

    function getDesafiado(){
        return $this->desafiado;
}
    function setDesafiado($desafiado){
        $this->desafiado=$desafiado;
    }
    function getDesafiante(){
        return $this->Desafiante;

    }
    function setDesafiante($desafiante){
        $this->desafiante=$desafiante;

    }

}
?> 