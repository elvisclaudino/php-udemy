<?php

  $arr = range(10, 45);

  for($i=0; $i < count($arr); $i++) {
    // $arr[$i]+=6;
    $soma = $arr[$i] + 6;

    if($soma > 30) {
      echo "O número $soma é muito alto <br>";
    } else {
      echo "$soma <br>";
    }
  }

  // foreach ($arr as $number) {
  //   if($number > 30) {
  //     echo "O valor é muito alto <br>";
  //   } else {
  //     echo $number . "<br>";
  //   }
  // }

?>