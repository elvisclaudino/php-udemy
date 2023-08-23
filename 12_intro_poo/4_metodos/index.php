<?php

  class Pessoa {

    function falar() {
      echo "Olá, eu sou um objeto <br>";
    }

    function somar($x, $y) {
      echo $x + $y . "<br>";
    }

  }

  $matheus = new Pessoa;

  $matheus->falar();
  $matheus->falar();
  $matheus->somar(1, 2);

  $joao = new Pessoa;

  $joao->falar();
  $joao->somar(2,2);

?>