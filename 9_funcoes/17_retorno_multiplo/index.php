<?php

  function alteraDados($nome, $idade) {
    $nome = "Sr. $nome";
    $idade = "$idade anos";

    return [$nome, $idade];
  }

  $dados = alteraDados("Elvis", "19");

  print_r($dados);
  echo "<br>";
  echo "O $dados[0] tem $dados[1]";

?>