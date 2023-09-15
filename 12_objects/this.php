<?php
  class Animal {
    public $nome;

    function escolherNome($nome){
      $this->nome = $nome;
    }

    function latir(){
      return "$this->nome está latindo: Au au!" . '<br>';
    }
  }  

  $toto = new Animal;
  $frida = new Animal;

  echo "nome do animal é: $toto->nome" . '<br>';
  $toto->escolherNome('Toto');
  $frida->escolherNome('frida');
  echo "nome do animal é: $toto->nome" . '<br>';
  echo($toto->latir());
  echo($frida->latir());
  
?>