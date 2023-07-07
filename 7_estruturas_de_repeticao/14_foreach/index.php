<?php

  $nomes = ["Elvis", "Matheus", "João", "Pedro"];

  foreach($nomes as $nome) {
    if($nome == "João") {
      echo "Eae $nome <br>";
      continue;
    }
    
    echo "O nome do índice atual é $nome <br>";
  }

?>