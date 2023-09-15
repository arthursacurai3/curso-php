<?php
  ini_set('display_errors', 1);
  print_r($_SERVER);
  echo '<br>';
  echo "#######################" . '<br>';
  
if($_SERVER['SERVER_NAME'] == 'localhost'){
  echo "Está acessando o localhost" . '<br>';
}

?>