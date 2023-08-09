<?php

  $carro = ["Jaguar", 3.0, "Azul", 18, "Teto solar", "Automático"];

  print_r($carro);
  echo "<br>";

  list($marca, $motor, $cor, $ano, $extra, $modelo) = $carro;

  echo "$marca <br>";
  echo "$motor <br>";
  echo "$cor <br>";
  echo "$ano <br>";
  echo "$extra <br>";
  echo "$modelo <br>";
?>