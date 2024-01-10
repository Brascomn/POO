<?php


class ContaBanco{

	public $numConta;
	protected $tipoConta;
	private $dono;
	private $saldo;
	private $status;

	public function abrirConta($ac){
		$this->setTipoConta = $ac;
		$this->status = (true);

		if ($ac == "CC") {
			$this->setSaldo(50);
		} else if($ac == "CP") {
			$this->setSaldo(150);
		}
		

	}
	public function fecharConta($fc){

		if ($this->getSaldo()>0) {
			echo "<p> A conta, ainda tem dinheiro, não pode fechar sem sacar todo o dinheiro.</p>"
			 ;
		} elseif ($this->getSaldo()<0) {
			echo "<p> A conta está em débito. Impossível Encerrar</p>";
		}else{
			$this->setStatus(false);
		}

	}
	public function depositar($depo){

		if ($this->getStatus() == true) 			
			$this->setSaldo($this->getSaldo() + $depo);
		} else {
			echo "<p>Impossível Depositar!</p>";
		}

	

	public function sacar( $saca){

		if ($this->getStatus == true) {
			if ($this->getSaldo() >$saca) {
				$this->setSaldo(getSaldo() - $saca); 
			} else{
				echo "<p>Saldo Insuficiente!</p>";
			}
		}else{
			echo "<p>Impossível Sacar de uma conta fechada ou inexistente.</p>";
		}

	}
	public function pagarMensal(){

		

		if ($this->getTipoConta() == "CC") {
		$Manunt = 12;

		} else if ($this->getTipoConta() == "CP") {
					$Manunt =20;
		}

		if ($this->getStatus()) {
			$this->setSaldo($this->getSaldo()-$Manun);
			}else{
				echo "<p> Saldo Insuficiente</p>";
			}
	}
	
	function __construct() {
		$this->setSaldo(0);
		$this->setStatus(false);
		echo "<p>Conta Criada com sucesso!</p>";
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