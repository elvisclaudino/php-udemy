<?php

  $i = 1;

  while($i <= 10) {

    echo "Loop externo $i <br>";

    // Segundo contador
    $j = 1;

    while($j <= 5) {

      echo "Loop interno $j <br>";

      $j++;
    }

    $i++;
  }

?>