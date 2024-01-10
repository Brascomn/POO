<?php


class ContaBanco{

	public $numConta;
	protected $tipoConta;
	private $dono;
	private $saldo;
	private $status;


	function __construct() {
		$this->setSaldo(0);
		$this->setStatus(false);
		echo "<p>Conta Criada com sucesso!</p>";
	}


	public function abrirConta($ac){
		$this->setTipoConta = $ac;
		$this->status = (true);

		if ($ac == "CC") {
			$this->setSaldo(50);
		} else if($ac == "CP") {
			$this->setSaldo(150);
		}
		

	}
	public function fecharConta(){

		if ($this->getSaldo()>0) {
			echo "<p> A conta, ainda tem dinheiro, não pode fechar sem sacar todo o dinheiro.</p>"
			 ;
		} elseif ($this->getSaldo()<0) {
			echo "<p> A conta está em débito. Impossível Encerrar</p>";
		}else{
			$this->setStatus(false);
			echo "<p> A conta Fechada.!</p>";
		}

	}
	public function depositar($depo){

		if ($this->getStatus() == true) {
			//Minha versão $this->setSaldo(getSaldo()+ $depo)
			
			// $this-> saldo = $this->saldo + $depo;

			$this->setSaldo($this->getSaldo() + $depo);
			echo "<p> Deposito de $depo kzs autorizado, na conta de ".$this->getDono()." </p>";

		} else {
			echo "<p>Impossível Depositar!</p>";
		}

	}

	public function sacar( $saca){

		if ($this->getStatus()) {
			if ($this->getSaldo() >= $saca) {
				$this->setSaldo($this->getSaldo() - $saca); 
				 //chat
				//$this->setSaldo($this->getSaldo() - $saca);
				echo "<p> Saque de $saca kzs autorizado, na conta de".$this->getDono()." </p>";
			} else{
				echo "Saldo Insuficiente, a conta contem apenas {$this->getSaldo()} dos $saca desejado.</p>";
			}
		}else{
			echo "<p>Impossível Sacar de uma conta fechada ou inexistente.</p>";
		}

	}
	public function pagarMensal(){
		if ($this->getTipoConta() == "CC") {
		$z = 12;

		} else if ($this->getTipoConta() == "CP") {
		$z = 20;
		}

		if ($this->getStatus()) {
			$this->setSaldo($this->getSaldo() - $z);


			echo "<p> Taxa de manuntenção de $z kzs, na conta de ".$this->getDono()." </p>";
			}else{
				echo "<p> Problemas com a conta. Não é possivel cobrar a taxa de manuntenção</p>";
			}
	}
	

	public function getNumConta()
	{
		return $this->numConta;
	}

	public function setNumConta($nc)
	{

		$this->numConta = $nc;
	}

	public function getTipoConta()
	{
		return $this->tipoConta;
	}

	public function setTipoConta($tp)
	{
		$this->tipoConta = $tp;
	}

	public function getDono()
	{
		return $this->dono;
	}

	public function setDono($d)
	{
		$this->dono = $d;
	}

	public function getSaldo()
	{
		return $this->saldo;
	}

	public function setSaldo($s)
	{
		$this->saldo = $s;
	}
	public function getStatus()
	{
		return $this->status;
	}

	public function setStatus($x)
	{
		$this->status = $x;
	}

}

?>