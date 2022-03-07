<?php

class Client extends Pessoa {

    public string $datanascimento;
    public string $renda;

    public function __construct(string $nome, int $idade, Endereco $endereco, string $datanascimento, string $renda){
        //chamar a assosiação pai
        parent::__construct($nome, $idade, $endereco);
        $this->datanascimento = $datanascimento;
        $this->renda = $renda;
    }
    /**
     * Get the value of renda
     */ 
    public function getRenda()
    {
        return $this->renda;
    }
    /**
     * Set the value of renda
     *
     * @return  self
     */ 
    public function setRenda($renda)
    {
        $this->renda = $renda;

    }

    /**
     * Get the value of datanascimento
     */ 
    public function getDatanascimento()
    {
        return $this->datanascimento;
    }

    /**
     * Set the value of datanascimento
     *
     * @return  self
     */ 
    public function setDatanascimento($datanascimento)
    {
        $this->datanascimento = $datanascimento;

    }
}

?>