<?php

  $arr = [2,1,334,32,123,65,38,9999,12,4];

  sort($arr);

  print_r($arr);
  echo "<br>";

  $arr2 = [2,1,334,32,123,65,38,9999,12,4];

  rsort($arr2);

  print_r($arr2);
  echo "<br>";

  $nomes = ['Elvis', 'Gabriel', 'Murilo', 'Felipe', 'Bruno'];

  sort($nomes);

  print_r($nomes);
  echo "<br>";

  $nomes2 = ['Elvis', 'Gabriel', 'Murilo', 'Felipe', 'Bruno'];

  rsort($nomes2);

  print_r($nomes2);
  echo "<br>";

?>