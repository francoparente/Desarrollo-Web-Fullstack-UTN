<?php

$mysqli = mysqli_connect(
    "127.0.0.1:3306",
    "root",
    "",
    "curso_utn_neoris_test"
);

$resultado = mysqli_query($mysqli, "SELECT * FROM usuario");

while($unaFila = mysqli_fetch_assoc($resultado)) {
    print_r($unaFila);
    echo "<br>";
}









mysqli_close($mysqli); //hay que cerrar la conexión luego de abrirla. Es una buena práctica.