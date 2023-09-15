<?php
  
  $arr = [
    'porta' => 100,
    'maçaneta'=> 5,
    'motor' => 1000,
    'retrovisor' => 8,
    'parabrisa' => 200,
  ];

  function itensCaros($arr){
    $arrItensCaros = [];
    foreach($arr as $item => $preço){
      if($preço > 10){
        echo $item . ": " . strlen($item) . '<br>';
        array_push($arrItensCaros, $item);
      }
    }
    foreach($arr as $item){
        echo $item . '<br>';
    }

    return $arrItensCaros;
  }

  $novoArr = itensCaros($arr);
  
  var_dump($novoArr);

?>