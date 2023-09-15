<?php
  ini_set('display_errors', 1);
  //privado só pode ser acessado pela classe
  //protected pode ser acessado pela herança

  class Car {
    public $rodas = 4;
    private $vidro = 'sem película';
    

    public function trocarPelicula($pelicula){
      $this->vidro = $pelicula;
      echo $this->vidro . '<br>';
    }

    public function showPelicula(){
      echo $this->vidro . '<br>';
    }
  }

  class Mecanico {
    public function alterarRodas($carro, $qtd){
      $carro->rodas = $qtd;
    }

    public function colocarPelicula($carro, $pelicula){
      // impedido de alterar por ser privado
      // $carro->vidro = "com película: $pelicula";
      $carro->showPelicula();
      $carro->trocarPelicula($pelicula);
    }
  }

  $carro = new Car;

  echo $carro->rodas . '<br>';
  
  $arthur = new Mecanico;

  $arthur->alterarRodas($carro, 5);
  echo $carro->rodas . '<br>';


  $arthur->colocarPelicula($carro, 'G20');
  //impedido de exibir dado privado
  // echo $carro->vidro . '<br>';
  
?>