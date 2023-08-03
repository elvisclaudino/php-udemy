<?php

  $str = "Testando encontrado palavra teste, em uma string que tem teste";

  $palavra = strrpos($str, "teste");

  echo $palavra . "<br>";

  $palavra2 = strpos($str, "teste");

  echo $palavra2 . "<br>";

  if(strrpos($str, "Java") === false) {
    echo "A palavra não existe <br>";
  }

  $p = substr($str, strpos($str, "teste"), 5);
  echo "$p <br>"

?>