<?php
  
  $a = 5;
  $b = 5;
  echo $a . $b; // . é um operador de concatenação
  echo '<br>';
  
  $nome = 'Arthur';
  $sobrenome = 'Sacurai';
  
  $nomeCompleto = $nome . " " . $sobrenome;

  echo $nomeCompleto;
  echo '<br>';
  
  $operacao = '5' * 12;

  echo $operacao . '<br>';
  echo gettype($operacao) . '<br>';
  echo gettype([]) . '<br>';
  
  echo 'operador não identico ' . '<br>';
  echo 5 !== 4;
  echo '<br>';
  
  echo 3 !== 3;
  echo '<br>';
  
  echo 3 !== '3';
  echo '<br>';

  echo 'operador de conversão' . '<br>';
  $teste = (float) '5.123';
  echo $teste;
  echo '<br>';
  echo gettype($teste);
  echo '<br>';
  
  $teste = (int) '5.123';
  echo $teste;
  echo '<br>';
  echo gettype($teste);

  echo 'operadores de atribuiçao' . '<br>';
  $a = 5;
  $a /= 2;
  echo $a . '<br>';

  $a = 8;
  $a %= 3;
  echo $a . '<br>';
  
?>