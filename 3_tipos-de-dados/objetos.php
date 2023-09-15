<?php
  class Pessoa {
    function falar(){
      echo 'Olá pessoal!';
    }
  }

  $arthur = new Pessoa();
  $arthur->nome = "Arthur";
  echo $arthur->nome;
  echo '<br>';
  $arthur->falar();
  
?>