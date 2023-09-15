<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    ini_set('display_errors', 1);
    require "require.php";
    
  ?>
  <?php include_once "title.php";?>
  <p>Imprimindo variavel require <?php echo $requirevar;?></p>
  
  <?php
    require "arequire.php";
  ?>
</body>
</html>