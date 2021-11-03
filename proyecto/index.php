<?php

//acá creo una variable donde voy a guardar la conexión con la que voy a trabajar
$mysqli = mysqli_connect(
    "127.0.0.1:3306",
    "root",
    "",
    "tolkien"
);

//hago una query que apunta a la conexión que guardé en la variable anterior
$resultado = mysqli_query($mysqli, "SELECT name FROM human");

//con el while, printeo una por una cada fila del select que guardé en la variable $resultado
while($unaFila = mysqli_fetch_assoc($resultado)) {
    print_r($unaFila);
    echo "<br>";
};

//Acá inserto un registro a la tabla. Cada vez que le doy F5 en el navegador, se inserta uno nuevo.
$pudoInsertar = mysqli_query($mysqli, "INSERT INTO human (name) VALUES ('Isildur')");
if($pudoInsertar){
    echo "Se insertó un registro.";
    echo "<br>";
    echo "El ID del último registro insertado es: ".mysqli_insert_id($mysqli), "<br>";
}
else{
    echo "No se pudo insertar registro.", "<br>";
}



//hay que cerrar la conexión luego de abrirla. Es una buena práctica.
mysqli_close($mysqli);


// ----------------- Arrays

//Puedo meter lo que quiera dentro de un mismo array en php, ya que es débilmente tipado.

/*Hay dos formas distintas de inicializar un array (a continuación los inicializo vacíos)

$nombres1 = [];
$nombres2 = array();
*/

//Array simple:
$races = ["Elf", "Dwarve", "Human", "Maiar"];

//Array asociativo:
$hobbit = [
    "Name" => "Frodo",
    "Last Name" => "Baggins",
];

//Agrego un valor al final de un array:
array_push($races, "Hobbit");

//Agrego una nueva clave con un nuevo valor a un array asociativo:
$hobbit["Birth Year"] = "2968";

//Imprimo cosas (mirar lo que devuelve en http://localhost/curso-neoris-utn/proyecto/):
print_r ($races);
echo "<br>";
print_r ($hobbit);
echo "<br>";
print_r ($races[2]);
echo "<br>";
print_r ($hobbit["Last Name"]);
echo "<br>";

foreach($races as $race) {
    echo $race;
    echo "<br>";
}

foreach($hobbit as $key => $value) {
    echo $key.": ".$value;
    echo "<br>";
}

