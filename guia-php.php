<?php

//------------------------------ Guía de Ejercicios Básicos: Introducción a PHP ------------------------------

// 1) Se tiene dos variables con valores numéricos, calcular la suma de ellos, la multiplicación y la resta.

$numero1 = 5;
$numero2 = 7;

function sumar($numero1, $numero2){
    return $numero1 + $numero2;
}
function multiplicar($numero1, $numero2){
    return $numero1 * $numero2;
}
function restar($numero1, $numero2){
    return $numero1 - $numero2;
}

echo "suma: ".sumar($numero1, $numero2)."\n";
echo "multiplicación: ".multiplicar($numero1, $numero2)."\n";
echo "resta: ".restar($numero1, $numero2)."\n";

// 2) Se tiene tres variables con valores numéricos, estas representan las notas de un alumno. Se necesita obtener el promedio de un estudiante a partir de sus tres notas parciales.

$nota1 = 7;
$nota2 = 3;
$nota3 = 9;

function promedio($nota1, $nota2, $nota3){
    echo "promedio: ".(($nota1+$nota2+$nota3)/3)."\n";
}

promedio($nota1, $nota2, $nota3);


// 3) Dado un número ingresado en una variable determinar si el mismo es IMPAR.

$numero = 5;

function esImpar($numero){
    if($numero % 2 !== 0)
        echo "Es impar.\n";
    else
        echo "Es par.\n";
}

esImpar(5);

// 4) Dados 10 valores numéricos en variables separadas, informar cual es el mayor. Investigar el concepto de ARRAY, como puede cambiar el ejercicio con la utilización del mismo.

$array1 = [$n1=3,$n2=7,$n3=4,$n4=6,$n5=8,$n6=2,$n7=9,$n8=1,$n9=5,$n10=0];
echo max($array1);

    // Quise hacer la definción de max() pero no me salió.

        // function mayor($numeros){
        //     for($i = 0; $i<=9; $i++){
        //         if($numeros[$i]>$numeros[$i+1])
        //             $mayor = $numeros[$i];
        //         else
        //             $mayor = $numeros[$i+1];
        //     }
        //     echo "El mayor número es el: ".$mayor;
        // }

// 5) Utilizando el concepto de ARRAY, dados 50 números enteros, informar el promedio de los mayores que 100 y la suma de los menores que –10.

$array2 = [];

for($i = 0; $i<50; $i++){
    $array2[$i]=rand(-50,200);
}

echo "Los números generados son: ";

for($i = 0; $i<count($array2); $i++){
    echo $array2[$i].", ";
    if($i === count($array2)/2)
        echo"\n";
}
echo "\n\n";
function promedioMayoresA($array,$mayorA){
    $suma = 0;

    for($i = 0; $i < count($array); $i++){
        if($array[$i] > $mayorA)
            $suma += $array[$i];
    }
    return $suma/count($array);
}
function sumaMenoresA($array,$menorA){
    $suma = 0;

    for($i = 0; $i < count($array); $i++){
        if($array[$i] < $menorA)
            $suma += $array[$i];
    }
    return $suma;
}

echo "El promedio de los números mayores a 100 es: ".promedioMayoresA($array2,100)."\n";
echo "La suma de los números menores a 100 es: ".sumaMenoresA($array2,-10)."\n";


// 6) Dado un valor numérico X, imprimir los X primeros múltiplos de 3 que no sean múltiplos de 5.
$valor = rand(0,20);
$j=0;
$i=0;
echo "X = $valor\n";
echo "Los primeros $valor múltiplos de 3 y no de 5 son: ";
while($i < $valor){
    if($j % 3 === 0 and $j % 5 !== 0){
        echo $j." ";
        $i++;
    }
    $j++; 
}

// 7) Define las variables $tipo, $grosor, $diametro y $marca. Establece que el tipo sea “Rueda de camión”, el grosor 0.23,
// el diámetro 1.35 y la marca “Kimashuki”. Crea el código PHP donde a través de condicionales if realices la siguiente
// comprobación: si el diámetro es superior a 1.4 debe mostrarse por pantalla el mensaje “La rueda es para un vehículo grande”.
// Si es menor o igual a 1.4 debe mostrarse por pantalla el mensaje “La rueda es para un vehículo pequeño”. En otro caso, debe
// mostrarse “No existe un tamaño de rueda válido”. Modifica los valores de diámetro y comprueba que los resultados obtenidos por pantalla sean correctos.

$tipo="Rueda de camion";
$grosor=0.23;
$diametro=1.35;
$marca="Kimashuki";

if($diametro > 1.4)
    echo "La rueda es para un vehículo grande";
else if($diametro <= 1.4)
    echo "La rueda es para un vehículo pequeño";
else
    echo "No existe un tamaño de rueda válido";

?>