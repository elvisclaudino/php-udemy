<?php

  $a = 10;

  while($a > 0) {

    if($a == 5 || $a == 7) {
      echo "Pulo a execução $a <br>";
      $a--;
      continue;
    }

    if($a == 2) {
      echo "Terminando o LOOP BREAK <br>";
      break;
    }

    echo "Executando o loop $a <br>";
    $a--;
  }

?>