<?php
    //tomar cuidado com acentuações José < João
    $arr = ['banana', 'maça', 'abacaxi', 'morango'];
    sort($arr);
    print_r($arr);
    echo '<br>';

    rsort($arr);
    print_r($arr);
    echo '<br>';
    
    $arr = [ 1,2,3,4,5,6,7,8,9];
    rsort($arr);
    print_r($arr);
    echo '<br>';

    $pessoa = [
      'nome' => 'Arthur',
      'idade' => 28,
      'profissao' => 'programador'
    ];

    asort($pessoa);
    print_r($pessoa);
    echo '<br>';

    arsort($pessoa);
    print_r($pessoa);
    echo '<br>';
    
    ksort($pessoa);
    print_r($pessoa);
    echo '<br>';
    
    krsort($pessoa);
    print_r($pessoa);
    echo '<br>';

    //ordem aleatória
    print_r(shuffle($arr));
    print_r($arr);
    echo '<br>';
    
    
?>