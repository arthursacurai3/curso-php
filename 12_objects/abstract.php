<?php
  ini_set('display_errors', 1);
  //conseguir executar métodos de uma class sem instanciar
  abstract class Teste {
    public static function testandoClasse(){
      echo "Este método é de uma classe abstrata" . '<br>';
    }

    abstract public function testeAbs();
  }

  // $t = new Teste;
  Teste::testandoClasse();

  class Nova extends Teste {
    public function testeAbs(){
      echo "Teste método abstrado" . '<br>';
    }
  }

  $n = new Nova;
  $n->testeAbs();
?>