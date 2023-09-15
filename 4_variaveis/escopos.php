<?php
  // variaveis de escopo global, diferente do javascript não é acessível dentro da função 
  // (obs se o if, etc estiver no escopo global será acessível),
  // caso seja necessário acessar devemos utilizar a palavra global para isso

  $a = 10;
  
  function funcao(){
    $a = "abc";
    echo $a;
    echo '<br>';
    
  }
  funcao();

  function testandoGlobal(){
    global $a;
    echo $a;
    echo '<br>';
  }

  testandoGlobal();

  function testandoGlobal2(){
    global $a;
    $a = 11;
  }
  
  testandoGlobal2();
  echo $a;
  echo '<br>';

  // variaveis locais sempre serão resetadas, mas é possível manter o valor final tornando-as estáticas,
  // dessa forma se a funcao for chamada novamente ela vai iniciar com o último valor salvo
  

  function teste(){
    $a = 0;
    $a++;
    echo "$a <br>";
  }

  teste();
  teste();
  teste();
  echo 'Static <br>';
  function testeStatic(){
    static $a = 0;
    $a++;
    echo "$a <br>";
  }

  testeStatic();
  testeStatic();
  testeStatic();

  echo '<br>';
  function soma($a, $b){
    echo $a + $b;
    echo '<br>';
    
  }
  soma(2,4);
  soma(5,8);
?>