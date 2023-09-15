<?php
  function numSquare($a){
    return $a ** 2;
  }

  echo numSquare(4);

  function biggerThan($arr){
    $biggerArr = [];
    foreach($arr as $elem){
      if($elem > 7){
        array_push($biggerArr, $elem);
      }
    }
    return $biggerArr;
  }

  print_r(biggerThan([1,2,3,4,5,6,7,8,9,10,11]));
  echo '<br>';
  

  // argumentos das funções

  function soma($a, $b){
    print_r(func_get_args());

    echo '<br>';
    echo func_num_args();
  }

  soma(2,4);

  echo '<br>';
  
  $lista = [ 'arroz', 'feijao', 'cerveja', 'sal', 'carne', 'carvão'];

  function listaParaString($arr){
    $str = 'Você levou estes itens do mercado: ';

    for($i = 0; $i < count($arr); $i++){
      if($i + 1 == count($arr)){
        $str .= "$arr[$i].";
      } else {
        $str .= "$arr[$i], ";
      }
    }

    return $str;
  }

  echo listaParaString($lista);
  
?>