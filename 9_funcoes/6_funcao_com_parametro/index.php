<?php

  function velocidadeMaxima($vel) {

    if(is_int($vel)) {
      echo "O carro atinge a velocidade máxima de $vel km/h <br>";
    } else {
      echo "O parâmetro passado não é um inteiro <br>";
    }

  }

  velocidadeMaxima(60);
  velocidadeMaxima(120);
  velocidadeMaxima(180);

  // Não pode
  // velocidadeMaxima();

  echo "Teste continuando <br>";

  $velocidadede = 125;

  velocidadeMaxima($velocidadede);  

  // PHP ignora parâmetro desnecessário
  velocidadeMaxima(250, "teste");

  velocidadeMaxima("teste");

  // Mais parâmetros
  function descreverAnimal($nome, $raca) {

    echo "O $nome é da raça $raca <br>";

  }

  descreverAnimal("Cachorro", "Pastor Alemão")
?>