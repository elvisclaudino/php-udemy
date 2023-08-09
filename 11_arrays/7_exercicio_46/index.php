<?php

  $arr = [
    [1,2,3,4],
    [5,6,7,8],
    [9,10,11,12]
  ];

  // Loop no array externo
  for($i=0;$i<count($arr);$i++) {

    // Imprimindo array externo
    echo "Imprimindo array externo: " . ($i + 1) . "<br>";

    // Imprimindo array interno
    for($j = 0; $j < count($arr[$i]); $j++ ) {

      echo $arr[$i][$j] . "<br>";

    }
  }

?>