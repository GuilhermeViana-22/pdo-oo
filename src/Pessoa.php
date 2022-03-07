<?php
// toda classe começa com letra maiuscula
// toda classe é um codigo php de
// toda class é criada a partir dda palavra reservada class
// todo conteudo da classe começa entre chaves
// classes possuem atributos e comportamentos
 class Pessoa {

    private string $nome;
    private int $idade;
    // endereço é um atributo composto  - usase relacionamento de classes
    private Endereco $endereco;
    private static $numdePessoas = 0;

    public function __construct(string $nome, int $idade){
        
        $this->nome = $nome;        
        $this->idade = $idade;
        $this->validaidade($idade);
        self::$numdePessoas ++;
        // referencia a um atributo static
      
   
    }

    /**
     * Get the value of nome
     */
     
    public function getNome() : string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome) : void
    {
        $this->nome = $nome;
    }

    /**
     * Get the value of idade
     */ 
    public function getIdade() : int
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     *
     * @return  self
     */ 
    public function setIdade($idade) : void
    {
        $this->idade = $idade;
    }

    public static function getNumeroPessoas()
    {
      return self::$numdePessoas;   
    }

    private function validaidade(int $idade){

        if($this->idade > 0 AND $this->idade < 120){
            $this->idade = $idade;
        }else{
            echo "idade invalida";
            exit;
        }
    }



 }

?>