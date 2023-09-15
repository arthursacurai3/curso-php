<?php
  
  $dataNascimento = mktime(13,30,0,12,21,1994);
  
  echo $dataNascimento . '<br>';

  $dataNascimentoFormatada = date('d/m/Y', $dataNascimento);

  echo $dataNascimentoFormatada . '<br>';
?>