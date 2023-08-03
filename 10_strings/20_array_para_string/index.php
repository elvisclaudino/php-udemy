<?php

  $arr = ["Maça", "Pera", "Mamão", "Batata"];

  $str = implode(", ", $arr);

  echo $str . "<br>";

  $arr2 = ["Avião",  "Tanque", "Jeep", "Metralhadora"];

  $str2 = implode(" <-> ", $arr2);

  echo $str2 . "<br>";

?>