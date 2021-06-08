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
    return 'HELLO '. $this->nombre;
  }
}
class Estudiante extends Persona{
  function __construct($nombre,$edad,$pais,$carrera){
    /*New form to inherit and edit __construct method*/
    parent::__construct($nombre,$edad,$pais);
    $this->carrera = $carrera;
  }
}

$antonio = new Estudiante ('Antonio', 34, 'Belgium', 'Dev');

echo $antonio->nombre .' '.  $antonio->carrera;

 ?>
