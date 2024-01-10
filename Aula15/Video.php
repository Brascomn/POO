<?php
include_once 'AcoesVideo.php';

//IMPLEMENTS = SOBREESCREVER
class Video implements AcoesVideo{
   private $titulo;
   private $avaliacao;
   private $views;
   private $curtidas;
   private $reproduzindo;

 public function __construct($ti) {
    $this->titulo = $ti;
    $this->avaliacao = 1;
    $this->views = 1;
    $this->curtidas = 0;
    $this->reproduzindo = false;
 }

        public function getTitulo(){ 
            return $this->titulo;}
        public function getAvaliacao(){
            return $this->avaliacao;}
        public function getViews(){
            return $this->views;}
        public function getCurtidas(){
            return $this->curtidas;}
        public function getReproduzindo(){
            return $this->reproduzindo;}

        public function setTitulo($titulo){
            $this->titulo=$titulo;}
        public function setAvaliacao($avaliacao){
            $media=0;
            $media = ($this->avaliacao + $avaliacao)/$this->views;
            $this->avaliacao=$media;
        }
        public function setViews($views){
            $this->views=$views;}
        public function setCurtidas($curtidas){
            $this->curtidas=$curtidas;}
        public function setReproduzindo($reproduzindo){
            $this->reproduzindo=$reproduzindo;}


            //FALTA AS SOBRESCRIÇÕES
            public function play(){

                $this->reproduzindo = true;
            }
            public function pause(){

                $this->reproduzindo = false;
            }
            public function like(){
                $this->curtidas ++;
            }
}

?>