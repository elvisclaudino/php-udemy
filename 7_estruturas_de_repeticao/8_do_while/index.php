<?php

  $j = 0;

  $teste = "elvis";

  do {

    if($j === 2) {
      echo "$teste <br>";
      $j++;
      continue;
    }

    echo "Testando do while $j <br>";

    $j++;

  } while($j < 10);

  $i = 10;

  do {

    if($i === 2) {
      echo "$teste <br>";
      $i--;
      continue;
    }

    echo "Testando do while 2 $i <br>";

    $i--;

  } while($i > 0);

?>