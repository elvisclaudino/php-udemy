<?php

  $valores = ["elvis", 2, 3, "aula", 5, true, 7, "PHP", 9, false, "aaaaa"];
  $indice = 0;

  while($indice < count($valores)) {
    if(is_string($valores[$indice])) {
      echo "$valores[$indice] <br>";
    }

    $indice++;
  }

?>