<?php
  
  $cincodias = strtotime('5 days');
  
  echo $cincodias . '<br>';

  $dataAtualMais5 = date('d/m/y', $cincodias);
  
  echo $dataAtualMais5 . '<br>';

  $twoMonths = strtotime('2 months');
  
  $dataAtualMais2meses = date('d/m/y', $twoMonths);
  
  echo $dataAtualMais2meses . '<br>';

?>