<?php

  class Cachorro {
    function andar($m) {
      echo "O cachorro andou $m metros <br>";
    }

    function latir() {
      echo "AU AU AU <br>";
    }
  }

  $pastorAlemao = new Cachorro;
  
  $pastorAlemao->andar(10);
  $pastorAlemao->latir();

?>