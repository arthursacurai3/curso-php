<?php
  ini_set('display_errors', 1);
  class Humano {
    public $idade = 29;

    public function falar(){
      echo "Olá mundo! <br>";
    }

    private function gritar(){
      echo "AHHHHHHHHHH!!!";
    }

    public function acessarGritar(){
      $this->gritar();
    }

    protected function falarIdade(){
      echo "Tenho $this->idade anos." . '<br>';
    }

    public function acessarFalarIdade(){
      $this->falarIdade();
    }
  }

  class Programador extends Humano {
    public function acessarFalarIdadeProgramador(){
      $this->falarIdade(); //function is protected so its possible to access
    }
  }

  $ze = new Humano;
  $ze->falar();
  $ze->acessarGritar();
  $ze->acessarFalarIdade();

  $arthur = new Programador;

  echo $arthur->idade . '<br>';
  
  $arthur->falar();
  $arthur->acessarGritar();
  $arthur->acessarFalarIdade();
  $arthur->acessarFalarIdadeProgramador();

  if($arthur instanceof Humano){
    echo "Arthur é um humano" . '<br>';
  }

  if($arthur instanceof Programador){
    echo "Arthur é um programador" . '<br>';
  }
?>