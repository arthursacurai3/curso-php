<?php
  class Humano {
    public $idade;
    public $nome;
    public $profissao;

    public function falar(){}
    public function andar(){}
  }

  if(class_exists('Humano')){
    echo 'A classe existe' . '<br>';
  } else {
    echo 'A classe não existe' . '<br>';
  }

  if(class_exists('cachorro')){
    echo 'A classe existe' . '<br>';
  } else {
    echo 'A classe não existe' . '<br>';
  }

  print_r(get_class_vars('Humano'));
  echo '<br>';
  
  print_r(get_class_methods('Humano'));
  echo '<br>';
  
  $arthur = new Humano;
  $teste = 10;

  if(is_object($arthur)){
    echo "é um objeto" . '<br>';
  } else {
    echo "não é um objeto" . '<br>';
  }

  if(is_object($teste)){
    echo "é um objeto" . '<br>';
  } else {
    echo "não é um objeto" . '<br>';
  }

  echo get_class($arthur) . '<br>';
  
  if(method_exists($arthur, "falar")){
    echo "método existe" . '<br>';
  } else {
    echo "método não existe" . '<br>';
  }

  if(method_exists($arthur, "safdsfad")){
    echo "método existe" . '<br>';
  } else {
    echo "método não existe" . '<br>';
  }
?>