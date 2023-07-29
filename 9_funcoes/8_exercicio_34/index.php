<?php

  function verificando($num) {

    if($num % 2 === 0) {
      echo "O número informado é par <br>";
    } else {
      echo "O número informado é ímpar <br>";
    }

  }

  verificando(2);
  verificando(3);

?>