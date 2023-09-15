<?php
  $arr = [
    'cor' => 'vermelho',
    'forma' => 'retangular',
    'material' => 'aço'
  ];

  extract($arr);
  echo "$cor" . '<br>';
  echo "$forma" . '<br>';
  echo "$material" . '<br>';
  
  $cor = "azul";
  $arr2 = [
    'cor' => 'vermelho',
    'forma' => 'retangular',
    'material' => 'aço'
  ];

  extract($arr2);
  echo "$cor" . '<br>'; //sobrescreveu o azul pelo vermelho
  echo "$forma" . '<br>';
  echo "$material" . '<br>';
  
  echo teste();

?>