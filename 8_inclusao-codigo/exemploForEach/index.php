<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php include_once "backend.php";?>
  <h1><?= $nome;?> veja as nossas ofertas</h1>

  <h2>Confira nossos produtos: </h2>
  <ul>
    <?php foreach($produtos as $produto): ?>
      <li><?= $produto;?></li>
    <?php endforeach;?>
  </ul>
</body>
</html>