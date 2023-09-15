<?php
  /* 
    Crie uma classe carro
    crie algumas proriedades e também a propriedade velocidade_maxima
    crie o método setVelocidadeMaxima, onde é possível alterar a velocidade máxima do carro
    e também o getVelocidadeMaxima onde é possível imprimir a velocidade do carro
  */

  class Carro {
    public $marca;
    private $velocidade_maxima;

    function setVelocidadeMaxima($velocidade){
      $this->velocidade_maxima = $velocidade;
    }

    function getVelocidadeMaxima(){
      return $this->marca . ' possui uma velocidade máxima de: ' . $this->velocidade_maxima . '<br>';
    }
  }

  $bmw = new Carro();
  $bmw->marca = 'BMW';
  $bmw->setVelocidadeMaxima(300);
  echo $bmw->getVelocidadeMaxima();

  $porsche = new Carro();
  $porsche->marca = 'porsche';
  $porsche->setVelocidadeMaxima(330);
  echo $porsche->getVelocidadeMaxima();
?>