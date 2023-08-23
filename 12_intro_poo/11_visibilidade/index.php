<?php

  class Car {
    public $rodas = 4;
    // public $vidro = "Sem película";

    private $vidro = "Sem película";
    protected $portas = 4;

    public function peliculaDeFabrica($pelicula) {
      $this->vidro = $pelicula;
    }

    public function getVidro() {
      return $this->vidro;
    }

    public function getPortas() {
      return $this->portas;
    }
  }

  class Mecanico {
    public function alterarRodas($carro) {
      $carro->rodas = 10;
    }

    public function colocarPelicula($carro, $pelicula) {
      $carro->vidro = $pelicula;
    }
  }

  $carro = new Car;
  echo $carro->rodas . "<br>";

  $elvis = new Mecanico;
  $elvis->alterarRodas($carro);

  echo $carro->rodas . "<br>";

  // Não pode alterar porque é privado
  // $elvis->colocarPelicula($carro, "G20");

  $carro->peliculaDeFabrica("G10");

  echo $carro->getVidro() . "<br>";

  // echo $carro->portas . "<br>";

  echo $carro->getPortas() . "<br>";

?>