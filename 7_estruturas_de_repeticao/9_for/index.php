<?php

  $teste = "Elvis";

  // CONTADOR; CONFIÇÃO; INCREMENTO/DECREMENTO
  for($i = 0; $i < 10; $i++) {
    
    if($i === 4) {
      echo "$teste <br>";
      continue;
    }

    if($i === 8) {
      break;
    }

    echo "Testando for $i <br>";

  }

?>