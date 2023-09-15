<?php
  ini_set('display_errors', 1);
  
  class Car {
    public $portas;
    public $cor;
    public $marca;

    function __construct($portas, $cor, $marca){
      $this->portas = $portas;
      $this->cor = $cor;
      $this->marca =  $marca;
    }
  }

  $ferrari = new Car(2,'vermelha','ferrari' );

  echo "O carro é da marca $ferrari->marca e tem a cor $ferrari->cor" . '<br>';
  
?>