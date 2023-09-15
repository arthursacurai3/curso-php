<?php
  // constantes tem nome em uppercase

  class Humano {
    private const OLHOS = 2;
    private const PERNAS = 2;
    private const BRACOS = 2;

    function getQtdOlhos(){
      return "Os humanos possuem: " . self::OLHOS . '<br>';
    }
  }

  $arthur = new Humano;
  echo $arthur->getQtdOlhos();
  $arthur->OLHOS = 3;
  echo $arthur->getQtdOlhos();
?>