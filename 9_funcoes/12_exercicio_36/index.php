<?php

  function maiorQueSete($arr) {

    $maioresQue7 = [];

    foreach($arr as $num) {
      if($num > 7) {
        array_push($maioresQue7, $num);
      }
    }

    return $maioresQue7;

  }

  $arr = maiorQueSete([2, 4, 6, 8, 10, 12]);

  print_r($arr)

?>