<!DOCTYPE html>
<html>
    <body>
        <h1>My first PHP page</h1>
        <?php

        //-----------------------------------------------------------------------CLASE 21/10

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

        //-----------------------------------------------------------------------CLASE 25/10

        $num1 = 10;
        $num2 = 5;
        
        echo "\n";
        echo "El resultado de la suma es: " . ($num1 + $num2);
        echo "\n";
        echo "El resultado de la suma es: ", $num1 + $num2;
        // usamos . o , para concatenar en el echo.
        

        //----if
        if($num1 > $num2){
            echo $num1 + $num2;
        }

        //----if else
        if($num1 < $num2){
            echo "\n".$num1." es menor a ".$num2;
        }
        else {
            echo "\n".$num1." es mayor a ".$num2;
        }

        //----for
        for($i = 0; $i <10; $i++){
            echo $i."\n";
        }

        //----while
        $i=0;
        while($i < 10){
            echo $i."\n";
            $i += 1;
        }

        $contador = 0;
        $termino = false;

        //while + if
        while(!$termino){
            if($contador >3){
                $termino = true;
            }
            echo $contador."\n";
            $contador++;
        }
        echo "la condición del while se evaluó ".$contador." veces.\n";

        //----switch
        $variable = 4;
        switch($variable){
            case 1: {
                echo "Rating: 1 estrella.";
            } break;
            case 2: {
                echo "Rating: 2 estrellas.";
            } break;
            case 3: {
                echo "Rating: 3 estrellas.";
            } break;
            case 4: {
                echo "Rating: 4 estrellas.";
            } break;
            case 5: {
                echo "Rating: 5 estrellas.";
            } break;
            default: {
                echo "Esta película no fue puntuada.";
            } break;
        }

        //----switch (otra forma más corta)
        $variable = 4;
        switch($variable){
            case 1: echo "Rating: 1 estrella."; break;
            case 2: echo "Rating: 2 estrellas."; break;
            case 3: echo "Rating: 3 estrellas."; break;
            case 4: echo "Rating: 4 estrellas."; break;
            case 5: echo "Rating: 5 estrellas."; break;
            default: echo "Esta película no fue puntuada."; break;
        }

        //----function
        function suma($numero1, $numero2){
            return $numero1 + $numero2;
        }
        echo "Resultado = ".suma(5,7)."\n";
        
        $resultado = suma(3,8);
        echo "Resultado = $resultado\n"; //puedo poner una variable dentro de las comillas y me lo sigue tomando como la variable.

        function resta($numero1, $numero2){
            return $numero1 - $numero2;
        }

        $resultadoResta = resta(suma(3,5),suma(2,1));
        echo "Resultado resta = $resultadoResta\n";
                
        ?>

        <form action="welcome.php" method="post">
            Name: <input type="text" name="name"><br>
            e-Mail: <input type="text" name="email"><br>
        </form>

    </body>
</html>