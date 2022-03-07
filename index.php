<?php

    require_once "src/Pessoa.php";
    //necessario fazer require de enredeco
    require_once "src/Endereco.php";
    require_once "src/Funcionario.php";
    require_once "src/Cliente.php";

    $endereco = new Endereco("AP", "Macapa", "Rua antonio francisco soares", 3941, "jardim são jorge", "055680");
    $pessoa = new Pessoa("edison maioa", 39, $endereco);

    $funcionairo = new Funcionario("Guilherme", 39 ,$endereco, "desenvolvedor", 1.0);
    var_dump($funcionairo);


    echo "<p>Número de pessoas :" . Pessoa::getNumeroPessoas() . "</p>";
    
?>

