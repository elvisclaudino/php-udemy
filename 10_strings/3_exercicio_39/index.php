<?php

  function price($arr) {
    $retorno = [];

    foreach($arr as $item => $preco) {
      if($preco > 10) {
        array_push($retorno, $item);
      }
    }

    return $retorno;
  }

  $arr = [
    'carro' => 10000,
    'mesa' => 200,
    'bala' => 1,
    'cola' => 7,
    'bola' => 50
  ];

  print_r(price($arr))

?>