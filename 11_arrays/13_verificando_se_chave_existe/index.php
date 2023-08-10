<?php

  $arr = [
    'nome' => 'Elvis',
    'idade' => 19
  ];

  if(array_key_exists('nome', $arr)) {
    
    echo "A chave existe! <br>";

  } else {

    echo "A chave não existe! <br>";

  }

  if(array_key_exists('profissao', $arr)) {
    
    echo "A chave existe! <br>";

  } else {

    echo "A chave não existe! <br>";

  }

  if(isset($arr['nome'])) {
    echo "A chave existe! ISSET <br>";

  } else {

    echo "A chave não existe! ISSET<br>";

  }

  if(isset($arr['profissao'])) {

    echo "A chave existe! ISSET <br>";

  } else {

    echo "A chave não existe! ISSET<br>";

  }

  if(isset($x)) {
    
    echo "A var existe! ISSET <br>";

  } else {

    echo "A var não existe! ISSET<br>";

  }

?>