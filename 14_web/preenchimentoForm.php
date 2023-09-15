<?php
  ini_set('display_errors', 1);
  $usuario = [ 
    'nome' => 'Arthur',
    'idade' => 28,
    'profissao' => 'Programador'
  ];

  if($usuario){
    $nome = $usuario['nome'];
    $idade = $usuario['idade'];
    $profissao = $usuario['profissao'];
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="">
    <div>
      <input type="text" name="nome "placeholder="Digite seu nome" value="<?= $nome;?>">
    </div>
    <div>
      <input type="text" name="idade "placeholder="Digite seu idade" value="<?= $idade;?>">
    </div>
    <div>
      <input type="text" name="profissao "placeholder="Digite seu profissao" value="<?= $profissao;?>">
    </div>
  </form>
</body>
</html>