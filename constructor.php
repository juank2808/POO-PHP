<?php

class Persona {
  public $nombre;
  public $edad;
  public $pais;

  function __construct($nombre,$edad,$pais){
    $this->nombre = $nombre;
    $this->edad = $edad;
    $this->pais = $pais;
  }

  public function showInfor(){
    echo 'HELLO '. $this->nombre;
  }
}

$juan = new Persona ('Juan Camilo', 24, 'Colombia');

// $juan->nombre = 'Juan Camilo';
// $juan->edad = 25;
// $juan->pais = 'Colombia';

$juan->showInfor($juan->nombre);

 ?>
