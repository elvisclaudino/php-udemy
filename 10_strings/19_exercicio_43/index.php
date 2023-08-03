<?php

  $frase = "carro - navio - helicóptero - barco - jangada";

  $fraseArray = explode("-", $frase);

  print_r($fraseArray);
  echo "<br>";

  for($i=0;$i<count($fraseArray);$i++) {
    echo "$fraseArray[$i] <br>";
  }

?>