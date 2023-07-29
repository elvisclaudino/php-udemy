<?php

  function teste($a = "teste") {

    echo "O valor de A é: $a <br>";

  }

  teste();
  teste(30);

  function testando($b, $a = "x") {

    echo "O valor de A é: $a, e o valor de B é: $b <br>";

  }

  testando(12);
  testando(12, 24);

?>