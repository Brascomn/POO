<?php

class pessoa{
    private $nome;
    private $idade;
    private $sexo; 

	function getNome() {
		return $this->nome;
	}

	function setNome( $nome) {
		$this->nome = $nome;
	}

	function  getIdade() {
		return $this->idade;
	}

	function setIdade( $idade) {
		$this->idade = $idade;
	}

	function getSexo() {
		return $this->sexo;
	}

	function setSexo($sexo ) {
		$this->sexo=$sexo;
	}


public function fazerAniver(){
    $this->idade++;
} 

public function __construct($no,$id,$se) {
    $this->nome = $no;
    $this->idade = $id;
    $this->sexo = $se;
}

}
?>