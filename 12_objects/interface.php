<?php
  ini_set('display_errors', 1);
  interface Caracteristicas {
    const nome = "Arthur";

    public function falar();

  }

  class Humano implements Caracteristicas {
    public $idade = 29;

    public function falar(){
      echo "Olá mundo" . '<br>';
    }

    public function dizerNome(){
      echo "Meu nome é " . self::nome . '<br>';
    }
  }

  $arthur = new Humano;
  $arthur->falar();
  $arthur->dizerNome();

?>