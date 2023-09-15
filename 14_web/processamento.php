<?php
  
  // $nome = $_GET['nome'];
  // $idade = $_GET['idade'];

  if(isset($_GET['nome']) && isset($_GET['idade'])){
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
  } else {
    $nome = 'Fulano';
    $idade = '20';
  }
?>

<h1>O seu nome é <?= $nome;?> e você tem <?= $idade;?> anos</h1>