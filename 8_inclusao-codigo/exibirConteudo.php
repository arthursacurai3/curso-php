<?php
  $nome = "Arthur";

?>

<form action="">
  <div>
    <input type="text" value="<?php echo $nome;?>">
  </div>
  <div>
    <input type="submit" value="Enviar">
  </div>
</form>

<form action="">
  <div>
    <input type="text" value="<?= $nome;?>">
  </div>
  <div>
    <input type="submit" value="Enviar">
  </div>
</form>