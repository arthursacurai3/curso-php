<?php
  ini_set('display_errors', 1);
  trait Objeto {
    public function teste(){
      echo "testando traits" . '<br>';
    }
  }

  trait Testando {
    public function traitTestando(){
      echo "método da trait testando" . '<br>';
    }
  }

  class Central {
    use Objeto;
    use Testando;
  }

  $x = new Central;
  $x->teste();
  $x->traitTestando();

?>