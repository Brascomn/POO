<?php

// A CLASS ABSTRACT NÃO PODE SER INSTACIADA.SÓ SERVE COMO PROGENITORA

//this->nome é um atributi
//this->getNome(); é um parametro
abstract class Pessoa{

    protected $nome;
    protected $idade;
    protected $sexo


    
    // QUANDO COLOCAMOS FINAL, FAZEMOS REFERENCIA QUE ESSA FUNCÃO NUNCA SERA SOBREPOSTA EM NENHUMA CONDIÇÃO
    public final function fazerAniversario() {
        return $this->idade ++;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    /**
     * Get the value of sexo
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set the value of sexo
     */
    public function setSexo($sexo): self
    {
        $this->sexo = $sexo;

        return $this;
    }
}

?>