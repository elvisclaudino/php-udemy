<?php

  function percorrendoString($frase) {
    $contadorDeA = 0;

    for($i = 0; $i < strlen($frase); $i++) {
      if($frase[$i] == "a") {
        $contadorDeA++;
      }
    }

    return $contadorDeA;
  }

  $frase = "O rato roeu a roupa do rei de Roma";
  $contadorDeA = percorrendoString($frase);

  echo $contadorDeA;

?>