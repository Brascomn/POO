<?php

 class Lutador {
   //ATRIBUTOS
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
	private $sexo;
    private $categoria;
    private $vitorias; 
    private $derrotas;
    private $empates;

	function getNome(){
		return $this->nome;
		}

	function setNome($nome){
		$this->nome = $nome;
		}
	function getSexo(){
		return $this->sexo;
		}

	function setSexo($sexo){
		$this->sexo = $sexo;
		$this->setCategoria;
		}

	function getNacionalidade(){
		return $this->nacionalidade;
		}

	function setNacionalidade($nacionalidade){
		$this->nacionalidade=$nacionalidade;
		}

	function getIdade(){
		return $this->idade;
		}

	function setIdade($idade){
		$this->idade = $idade;
		}

	function getAltura(){
		return $this->altura;
		}

	function setAltura($altura){
		$this->altura=$altura;
		}

	function getPeso(){	
		return $this->peso;
	}

	function setPeso($peso){
		$this->peso=$peso;
		$this->setCategoria();
		}

	function getCategoria(){
		return $this->categoria;
		}

	function setCategoria(){
		//$this->categoria = $categoria;
		if ($this->peso <52.2) {
			$this->categoria = "INVÁLIDO";
			echo"<p> O LUTADOR ".$this->getNome().", NÃO POSSUI O MINÍMO DO PESADO RECOMENCADO.</p>";
			} elseif($this->peso <= 70.3){
				$this->categoria ="LEVE";
					}elseif ($this->peso<=83.9) {	
						$this->categoria = "MÉDIO";
						}elseif ($this->peso<=120.2) {
							$this->categoria = "PESADO";
						}else{
							$this->categoria = "INVÁLIDADO";
							echo"<p>Estás acima do Peso recomendado.</p>";
						}

			
		}

	function getVitorias(){
		return $this->vitorias;
		}

	function setVitorias($vitorias){
		$this->vitorias=$vitorias;
		}

	function getDerrotas(){
		return $this->derrotas;
		}

	function setDerrotas($derrotas){
		$this->derrotas=$derrotas;
		}

	function getEmpates(){	
		return $this->empates;
		}

	function setEmpates($empates){
		$this->empates=$empates;
		}


   //MÉTODOS
   public function apresentar(){
	echo"<hr>";
	echo"<p> CHEGOU A HORA DE APRESENTAR O LUTADOR " .$this->getNome();
	echo"<p> QUE VEIO DIREITAMENTE DA ".$this->getNacionalidade().
	",E ELE TEM " .$this->getIdade() . " ANOS E PESA ".$this->getPeso() ."KG.";
	echo"<p> ELE TEM " .$this->getVitorias()." VITORIAS. ELE TEM " .$this->getDerrotas() ." DERROTAS E ".$this->getEmpates() ." EMPATES. </p";

   }
   public function status(){
//$va=0;	
	   echo"<p><hr>DADOS DO LUTADOR<hr></p>";
	   echo "<p>". $this->getNome()." É UM LUTADOR(A) DE PESO " .$this->getCategoria() .", DO SEXO " .$this->getSexo() .".</p>";
	   echo"<P>JÁ REALIZOU " .$va = $this->getVitorias()+$this->getDerrotas()+$this->getEmpates()." LUTAS, NAS QUAIS:</p><p>JÁ VENCEU " .$this->getVitorias()." LUTAS, PERDEU " .$this->getDerrotas()." LUTAS E EMPATOU " .$this->getEmpates()." LUTAS. </p>";


   }
   public function ganharLuta(){

	$this->setVitorias($this->getVitorias() +1);
	//$this->Vitorias =$this->getVitorias()+1;
}
	public function perderLuta(){
	
	$this->setDerrotas($this->getDerrotas() + 1);
	
   }
   public function empatarLuta (){
	   $this->setEmpates($this->getEmpates() + 1);

   }

   //MÉTODOS ESPECIAIS

   function __construct($no,$na,$id,$al,$pe,$se,$vi,$de,$em) {
    $this->nome = $no;
    $this->nacionalidade = $na;
    $this->idade = $id;
    $this->altura = $al;
    $this->setPeso($pe);
    $this->sexo=$se;
    $this->vitorias = $vi;
    $this->derrotas = $de;
    $this->empates = $em;
   }

}
?>
