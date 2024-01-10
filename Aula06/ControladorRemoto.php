<?php
require_once 'Controlador.php';

class ControladorRemoto implements Controlador{
    
    private $volume;
    private $ligado;
    private $tocando;
    
    public function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;

    }

    private function getVolume(){
        return $this->volume;
    } 
    private function setVolume($volume){
        $this->volume = $volume;
    }
    private function getLigado(){
        return $this->ligado;
    }
    private function setLigado($ligado){
        $this->ligado = $ligado;
    }
    private function getTocando(){
        return $this->tocando;
    }
    private function setTocando($tocando){
        $this->tocando=$tocando;
    }

    //Implementando todos os métodos abstratos de Controlador
    public function ligar(){
        $this-> setligado(true);
    }
    public function desligar(){
        $this-> setligado(false);
      } 
      public function abrirMenu(){
          
        echo"<P>----------- MENU --------------</P>";
        echo "</br> Esta ligado ? : " . ($this->getLigado()?"Sim":"Não");
        echo "</br> Esta tocando ? : " . ($this->getTocando()?"Sim":"Não");
        echo "</br> Volume:". $this->getVolume() ." ";

        for ($i=0; $i < $this->getVolume(); $i += 10) { 
            echo"I";
        }
        echo"<br>";
    }
    public function fecharMenu(){
        
        echo"<br> Fechando Menu...";
    }
    public function maisVolume(){

        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 1);
            echo"<p>AUMENTAMOS O VOLUME PARA </P>". $this->getVolume();
        }else{
        echo"<p>ERRO, NÃO POSSO AUMENTAR VOLUME PORQUE ESTA DESLIGADO</P>";
    }
}
public function menosVolume(){

        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 1);
            echo"<p>DIMINUIMOS O VOLUME PARA </P>". $this->getVolume();
        }else {
            # code...
            echo"<p>ERRO, NÃO POSSO DIMINUIR O VOLUME.</P>";
        }
    }
    
    public function ligarMudo(){
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
            echo"<p> MODO MUDO LIGADO.</P>";
        }
    }
    public function desligarMudo(){
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
            echo"<p> MODO MUDO DESLIGADO.</P>";
        }
    }
    public function play(){
        if ($this->getLigado() && ! ($this->getTocando())) {
            $this->setTocando(true);
        }
    }
    public function pause(){
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        }
    }
    
}
?>