<?php
  $a = 10;
  if(is_int(5)){
    echo "É inteiro <br>";
  }
  if(is_int($a)){
    echo "é um inteiro <br>";
  }

  $b = 10.5;

  if(is_float($b)){
    echo "é float <br>a";
  }

  echo "o valor da variavel é: $b <br>";

  $c = "Arthur";

  if(is_string($c)){
    echo "$c é uma string <br>";
  }

  
  $d = true;
  echo " $d <br>";

  if(is_bool($d)){
    echo "$d é booleano <br>";
  }

  if(0.0 == false ){
    echo "0.0 é falso <br>";
  }

  $e = [1, 2, 3, 'a', $d];

  print_r($e);
  echo '<br>';
  echo $e[2];

  echo '<br>';
  echo '<br>';
  echo 'Array associativos: <br>';

  $arr = ['nome' => 'arthur', 'idade' => 28];

  print_r($arr);
  echo '<br>';
  echo $arr['nome'];
  echo '<br>';
  echo $arr['idade'];

  $carro = [
    'marca' => 'BMW',
    'potencia' => '500cv',
    'peso' => '1800kg'
  ];
  $marca = $carro['marca'];
  $potencia = $carro['potencia'];

  echo '<br>';
  echo "O $marca, tem $potencia";
  echo "teste";
  
?>