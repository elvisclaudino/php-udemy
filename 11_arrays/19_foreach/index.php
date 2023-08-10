<?php

  $elvis = [
    'nome' => 'Elvis',
    'idade' => 19,
    'profissao' => 'Programador'
  ];

  $alexia = [
    'nome' => 'Alexia',
    'idade' => 19,
    'profissao' => 'Eng. Civil'
  ];

  foreach($elvis as $carac => $value) {
    echo "$carac => $value <br>";
  }

  foreach($alexia as $value) {
    echo "$value <br>";
  }


?>