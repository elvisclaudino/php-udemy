<?php

  $url = "https://www.google.com.br";

  $arrayUrl = parse_url($url);

  print_r($arrayUrl);
  echo "<br>";
  echo $arrayUrl["host"] . "<br>";

  $url2 = "http://www.horadecodar.com.br/?busca=php";
  
  $arrayUrl2 = parse_url($url2);
  print_r($arrayUrl2);
  echo "<br>";
  echo $arrayUrl2["query"] . "<br>";

  $url3 = "http://www.horadecodar.com.br/usuarios/elvisclaudino?id=06&nome=Elvis";
  
  $arrayUrl3 = parse_url($url3);
  print_r($arrayUrl3);
  echo "<br>";
  echo $arrayUrl3["query"] . "<br>";

?>