<?php

  $arr = [
    'Elvis' => 19,
    'Gabriel' => 19,
    'Felipe' => 20,
    'Murilo' => 24
  ];

  asort($arr);

  print_r($arr);
  echo "<br>";

  $arr2 = [
    'Elvis' => 19,
    'Gabriel' => 19,
    'Felipe' => 20,
    'Murilo' => 24
  ];

  arsort($arr2);

  print_r($arr2);
  echo "<br>";

  ksort($arr);

  print_r($arr);
  echo "<br>";

  krsort($arr2);

  print_r($arr2);
  echo "<br>";

?>