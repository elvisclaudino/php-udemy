<?php

  class Pessoa {
    public $nome;
    public $idade;

    function andar($m) {
      echo "O $this->nome andou $m metros. <br>";
    }
  }

  $elvis = new Pessoa;
  $elvis->nome = "Elvis";
  $elvis->idade = 19;

  echo "O $elvis->nome tem $elvis->idade anos. <br>";
  $elvis->andar(100);

?>