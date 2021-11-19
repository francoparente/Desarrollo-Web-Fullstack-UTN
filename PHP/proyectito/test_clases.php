<?php

require_once 'Persona.php';
require_once 'Hogar.php';

$unaPersona = new Persona('Franco','Parente');
//$unaPersona->setNombre('Franco'); //no hace falta ya que en la línea de arriba se asignan esos valores.
$otraPersona = new Persona("Lionel","Messi");

// echo $unaPersona->getNombre();

$unHogar = new Hogar("Callecita 1234");

$unHogar->agregarHabitante($unaPersona);
$unHogar->agregarHabitante($otraPersona);

echo $unHogar->cantidadHabitantes();

$unHogar->setPropietario($otraPersona);