<?php

  $arr = ['banana', 'maça', 'batata', 'pera', 'mamão'];

  if(in_array('batata', $arr)) {
    echo "Há batata no array <br>";
  } else {
    echo "Não há batata no array <br>";
  }

  $b = 'banana';

  if(in_array($b, $arr)) {
    echo "Há banana no array <br>";
  } else {
    echo "Não há banana no array <br>";
  }

  if(in_array('teste', $arr)) {
    echo "Há teste no array <br>";
  } else {
    echo "Não há teste no array <br>";
  }

?>