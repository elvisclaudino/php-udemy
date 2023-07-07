<?php 

  $inicio = 4;
  $final = 30;

  while($inicio <= $final) {
    echo "O número atual é $inicio <br>";

    if($inicio === 24) {
      echo "Encerrando o LOOP no $inicio <br>";
      break;
    }

    $inicio += 2;
  }

  echo "Saiu fora do LOOP <br>";

?>