<?php

  $arr = ["batata", "maça", "pera", "feijão", "arroz"];

  $removidos = array_splice($arr, 2, 2);

  print_r($arr);
  echo "<br>";
  print_r($removidos);

?>