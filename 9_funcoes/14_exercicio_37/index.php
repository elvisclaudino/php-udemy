<?php

  function defineCorCarro($cor = "Vermelha") {
    return $cor;
  }

  $carro1 = defineCorCarro();
  $carro2 = defineCorCarro("Verde");

  echo "O carro 1 é da cor $carro1 <br>";
  echo "O carro 2 é da cor $carro2 <br>";

?>