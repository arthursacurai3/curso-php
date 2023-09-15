<?php
  //adicionar valor ao fim do array sem dar push
  $arr = ['a', 'b'];
  print_r($arr);
  echo '<br>';
  
  $arr[] = 'c';
  print_r($arr);
  echo '<br>';
  
  $arr = range(1,10);
  print_r($arr);
  echo '<br>';
  
  $arr = range(0,1000, 100);
  print_r($arr);
  echo '<br>';

  $arrLength = count($arr);
  echo "Tamanho do array: $arrLength" . '<br>';
  
  $pessoa = [
    'nome' => 'Arthur',
    'idade' => 28,
    'profissao' => 'programador'
  ];
  
  list($nome, $idade, $profissao) = $pessoa;
  echo "$nome tem $idade anos e trabalha como $profissao" . '<br>';
  
  $pessoa = ['Arthur', 28, 'Programador'];
  
  list($nome, $idade, $profissao) = $pessoa;
  echo "$nome tem $idade anos e trabalha como $profissao" . '<br>';
  

  //array slice
  echo 'Array slice: ' . '<br>';
  
  $arr = [ 1,2,3,4,5,6,7,8,9];
  print_r( array_slice($arr, 1,4));
  echo '<br>';
  print_r( array_slice($arr,5));
  echo '<br>';
  print_r( array_slice($arr,5, -1));
  echo '<br>';

  //array splice
  echo 'Array splice: ' . '<br>';
  
  print_r($arr);
  echo '<br>';
  
  print_r(array_splice($arr, 2,2));
  echo '<br>';
  

  //divindo arrays
  $arr = range(1,20);

  print_r(array_chunk($arr, 8));
  echo '<br>';
  
  //arrays associaitivos => key e value

  $pessoa = [
    'nome' => 'Arthur',
    'idade' => 28,
    'profissao' => 'programador'
  ];

  print_r(array_keys($pessoa));
  echo '<br>';
  print_r(array_values($pessoa));
  echo '<br>';
  
  if(array_key_exists("nome", $pessoa)){
    echo "A chave existe" . '<br>';
  }
  
  if(isset($pessoa["nome"])){
    echo "A chave existe" . '<br>';
  }

?>