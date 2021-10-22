<?php

//comentario

/*comentario
multilinea*/

//luego de una sentencia se pone ";"

$nombre = "Franco"; //asigno el valor "Franco" a la variable $nombre
$apellido = "Parente";

echo $nombre, "\n", $apellido, "\n\n"; // "\n" representa un salto de linea (new line). Se puede poner con alt+92

var_dump($nombre); //devuelve el tipo de dato de una variable y su longitud

echo "\n";

$numero = 2;
$otroNumero = 3;

var_dump($numero);

echo $numero + $otroNumero, "\n";
echo $numero - $otroNumero, "\n";
echo $numero * $otroNumero, "\n";
echo $numero / $otroNumero, "\n"; //como es tipado dinámico, reduce la operación y cambia el tipo de dato automáticamente a float
echo $numero == $otroNumero, "\n"; //no lo puede mostrar entonces hay que almacenar ese valor en otra variable

$sonIguales = $numero == $otroNumero;
$sonDistintos = $numero != $otroNumero;

var_dump($sonIguales);
var_dump($sonDistintos);



?>