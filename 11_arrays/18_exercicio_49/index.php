<?php

  $nome = "Bob";
  $raca = "Vila-lata";
  $idade = 3;
  $peso = 10.12;
  $comportado = true;

  $cachorro = compact("nome", "raca", "idade", "peso", "comportado");

  foreach ($cachorro as $caracteristica => $value) {
    echo "$caracteristica: $value <br>";
  }

?>