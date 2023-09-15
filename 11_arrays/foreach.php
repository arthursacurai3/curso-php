<?php
    $pessoa = [
      'nome' => 'Arthur',
      'idade' => 28,
      'profissao' => 'programador'
    ];

    foreach($pessoa as $carac => $value){
      echo "$carac => $value" . '<br>';
      
    }

?>