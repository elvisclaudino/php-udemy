<?php

  class Carro {
    public $cor;
    public $marca;
    public $velocidadeMaxima;

    function setVelocidadeMaxima($vel) {
      $this->velocidadeMaxima = $vel;
    }
  
    function getVelocidadeMaxima() {
      echo "A velocidade máxima desse carro é $this->velocidadeMaxima km/h";
    }
  }

  $ford = new Carro;

  $ford->cor = "Azul";
  $ford->marca = "Ford";

  $ford->setVelocidadeMaxima(200);

  echo "O carro é um $ford->marca de cor $ford->cor. <br>";
  $ford->getVelocidadeMaxima();

?>