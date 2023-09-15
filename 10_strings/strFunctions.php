<?php
  $txt = ' texto teste slfsdak  ';
  echo trim($txt) . '<br>';
  echo strtoupper($txt) . '<br>';
  echo ucfirst($txt) . '<br>';
  echo ucwords($txt) . '<br>';

  $txtHtml = "<p>Testando parágrafo <div>div interna</div></p><p>outro parágrafo</p>";

  echo $txtHtml . '<br>';
  echo strip_tags($txtHtml) . '<br>';
  
  echo substr($txt, 3) . '<br>';
  echo substr($txt, 3, 7) . '<br>';
  echo substr($txt, 3, -3) . '<br>';
  
  echo strrev($txt) . '<br>';
  
  echo str_repeat($txt, 5) . '<br>';
  
  //string para array
  echo '<br>';
  print_r(explode(" ",$txt));
  echo '<br>';
  
  //array para string
  $arr = ['maça', 'pera', 'banana'];
  echo implode(", ", $arr) . '<br>';
  
  //localizar primeira posição
  echo strpos($txt, "teste") . '<br>';
  $encontrarNome =  strpos($txt, "Nome");
  if(!$encontrarNome){
    echo "Palavra não encontrada" . '<br>';
  }

  //localizar última ocorrencia
  echo strrpos($txt, "e") . '<br>';

  //localizar e retornar resto da string
  $str = "testando o resto da string, pra ver se da certo";
  echo strstr($str, 'resto') . '<br>';
  
?>

