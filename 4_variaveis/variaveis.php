<?php
  $a = 11;
  $b = 89.5;

  $c = $a + $b;
  echo $c;
  echo '<br>';
  
  // variável de variável
  $x = "teste";
  $$x = "arthur";

  echo $teste;
  echo '<br>';
  
  //variável por referência, variaveis estão olhando para o mesmo valor, se mudar uma muda a outra
  $y =& $x;
  echo $y;
  echo '<br>';
  $y = 'variavel alterada';
  echo "varx = $x | vary = $y";
  
?>