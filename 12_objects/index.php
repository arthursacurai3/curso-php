<?php
  class Pessoa {
    public $nome = '';
    private $idade = 0;

    function falar(){
      echo "Olá eu sou uma pessoa!" . '<br>';
    }
  }

  $arthur = new Pessoa();
  $arthur->falar();
  $arthur->nome = 'Arthur';
  echo $arthur->nome . '<br>';

?>