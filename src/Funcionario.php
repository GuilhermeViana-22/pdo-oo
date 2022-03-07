<?php
    class Funcionario extends Pessoa {
       
      public string $cargo;
      public float $salario;
        // precisa passar os parametros da classe pessoa e da relaçao endereço
      public function __construct(string $nome, int $idade, Endereco $endereco, string $cargo, float $salario){

        //chama o metodo construtor da classe pessoa
        parent::__construct($nome, $idade, $endereco);
        $this->cargo = $cargo;
        $this->salario = $salario;

      }

      /**
       * Get the value of cargo
       */ 
      public function getCargo()
      {
            return $this->cargo;
      }

      /**
       * Set the value of cargo
       *
       * @return  self
       */ 
      public function setCargo($cargo)
      {
            $this->cargo = $cargo;

            return $this;
      }

      /**
       * Get the value of salario
       */ 
      public function getSalario()
      {
            return $this->salario;
      }

      /**
       * Set the value of salario
       *
       * @return  self
       */ 
      public function setSalario($salario)
      {
            $this->salario = $salario;

            return $this;
      }
    }

?>