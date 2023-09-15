<?php
  $pessoa = new class(){
    public $nome = 'Arthur';
    
    public function dizerNome(){
      echo "Meu nome é $this->nome" . '<br>';
      
    }
  }; // classe anonima como ta definida dentro da variável precisa do ;

  echo $pessoa->nome . '<br>';
  
  $pessoa->dizerNome();

?>