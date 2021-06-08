<?php
//with out POO

// $nombre = 'Carlos';
// $edad = 22;
// $pais = 'Colombia';

class Persona {
  public $nombre;
  public $edad;
  public $pais;

  public function showInfor($nombre){
    echo 'HELLO '.$this->nombre;
  }
}

$juan = new Persona;

$juan->nombre = 'Juan Camilo';
$juan->edad = 25;
$juan->pais = 'Colombia';

$juan->showInfor($juan->nombre);

$andres = new Persona;

$andres->nombre = 'Andres Camilo';
$andres->edad = 25;
$andres->pais = 'EEUU';

 ?>
