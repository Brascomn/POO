<?php


class ContaBanco
{
    public $numConta;
    protected $tipo;
    private $nome;
    private $saldo;
    private $status;

    public function abrirConta($tipo)
    {
        $this->setTipo($tipo);
        $this->setStatus(true);
        if ($tipo == "cc"){
            $this->setSaldo(50);
        }else if ($tipo == "cp"){
            $this->setSaldo(150);
        }
    }

    public function fecharConta()
    {
        if ($this->getSaldo() > 0) {
            echo "<p>Conta com dinheiro, você ainda não pode fechá-la</p>";
        } else if ($this->getSaldo() < 0) {
            echo "<p>Conta em debito. Impossível encerrar</p>";
        } else {
            $this->setStatus(false);
            echo "<p>Conta de {$this->getNome()} fechada com sucesso.</p>";
        }
    }

    public function depositar($valor)
    {
        if ($this->getStatus() == true) {
            $this->setSaldo($this->getSaldo()+ $valor);
            echo "<p>Depósito de R$ $valor na conta de {$this->getNome()}</p>";
        } else {
            echo "<p>Conta fechada. Não consigo depositar.</p>";
        }

    }

    public function sacar($valor)
    {
        if ($this->getStatus() == true) {
            if ($this->getSaldo() >= $valor) {
                $this->setSaldo($this->getSaldo()- $valor);
                echo "<p>Saque de R$ $valor autorizado na conta de {$this->getNome()}</p>";
            }
            else {
                echo "<p>Saldo insuficiente.</p>";
            }
        }
        else {
            echo "<p>Impossível sacar.</p>";
        }
    }

    public function pagarMensal()
    {
        if ($this->getTipo() == "cc") {
            $valor = 12;
        } else if ($this->getTipo() == "cp") {
            $valor = 20;
        }
        if ($this->getStatus() == true) {
            if ($this->getSaldo() > $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>Mensalidade de R$ $valor debitada na conta de {$this->getNome()}</p>";
            } else {
                echo "<p>Saldo insuficiente</p>";
            }
        } else {
            echo "<p>Iampossível pagar</p>";
        }

    }

    public function __construct()
    {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso!</p>";
    }

    function getnumConta()
    {
        return $this->numConta;
    }
    function setnumConta($nConta)
    {
        $this->numConta = $nConta;
    }

    function getTipo()
    {
        return $this->tipo;
    }

    function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    function getNome()
    {
        return $this->nome;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function getSaldo()
    {
        return $this->saldo;
    }

    function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    function getStatus()
    {
        return $this->status;
    }
    function setStatus($status)
    {
        $this->status = $status;
    }
}