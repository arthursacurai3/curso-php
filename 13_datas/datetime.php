<?php
  
  $data = new DateTime();
  print_r($data);
  echo '<br>';
  
  echo $data->format('d/m/Y') . '<br>';

  $data->modify('+5 days');
  echo $data->format('d/m/Y') . '<br>';

  $data->modify('+5 months');
  echo $data->format('d/m/Y') . '<br>';

  $data->setDate(1999,12,01);
  print_r($data);
  echo '<br>';
  
?>