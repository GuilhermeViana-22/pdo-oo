<?php

     class Endereco
     {
       private string $uf;
       private string $cidade;
       private string $nomeLogradouro;
       private string $numero;
       private string $bairro;
       private string $cep;


     public function __construct(string $uf, string $cidade, string $nomeLogradouro, string $numero, string $bairro, string $cep)
     {
        $this->uf = $uf;
        $this->cidade = $cidade;
        $this->nomeLogradouro = $nomeLogradouro;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->cep = $cep;
     }


       /**
        * Get the value of cep
        */ 
       public function getCep()
       {
              return $this->cep;
       }

       /**
        * Set the value of cep
        *
        * @return  self
        */ 
       public function setCep($cep) : void
       {
              $this->cep = $cep;

       }

       /**
        * Get the value of bairro
        */ 
       public function getBairro()
       {
              return $this->bairro;
       }

       /**
        * Set the value of bairro
        *
        * @return  self
        */ 
       public function setBairro($bairro) : void
       {
              $this->bairro = $bairro;

       }

       /**
        * Get the value of numero
        */ 
       public function getNumero()
       {
              return $this->numero;
       }

       /**
        * Set the value of numero
        *
        * @return  self
        */ 
       public function setNumero($numero) : void
       {
              $this->numero = $numero;

       }

       /**
        * Get the value of nomeLogradouro
        */ 
       public function getNomeLogradouro()
       {
              return $this->nomeLogradouro;
       }

       /**
        * Set the value of nomeLogradouro
        *
        * @return  self
        */ 
       public function setNomeLogradouro($nomeLogradouro) : void
       {
              $this->nomeLogradouro = $nomeLogradouro;


       }

       /**
        * Get the value of cidade
        */ 
       public function getCidade()
       {
              return $this->cidade;
       }

       /**
        * Set the value of cidade
        *
        * @return  self
        */ 
       public function setCidade($cidade) : void
       {
              $this->cidade = $cidade;
       }

       /**
        * Get the value of uf
        */ 
       public function getUf()
       {
              return $this->uf;
       }

       /**
        * Set the value of uf
        *
        * @return  self
        */ 
       public function setUf($uf) : void
       {
              $this->uf = $uf;

       }
    }

?>