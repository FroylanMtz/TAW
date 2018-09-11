<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Practica01</title>
</head>
<body>

    <h1> Practica 01 </h1>
    <?php

        /*1. Ordenar un array ascendente y descendente.*/
        echo '<h2> Punto 1 </h2>';
        //Definir el arreglo que va almacenar los numeros e inicializarlo
        $numeros = [123,7,23,-34,-5,63,17,83,30,-1];

        echo '<h4> Arreglo sin ordenar </h4>';
        //Imprimir el numero asi nomas
        print_r($numeros);

        //Ordenar los numeros ascendentemente
        asort($numeros);

        echo '<h4> Arrego ordenado Ascendentemente </h4>';
        //Imprimir el array
        print_r($numeros);

        //Ordenar los numeros descendentemente
        arsort($numeros);

        echo '<h4> Arrego ordenado Descendentemente </h4>';
        //Imprimir el array
        print_r($numeros);


        /*2. Hacer un programa en PHP que escriba tu nombre (en negrita) y la ciudad dónde naciste */
        echo '<h2> Punto 2 </h2>';

        //Imprimir mi nombre en negrita y la ciudad en donde naci

        echo '<p> Hola soy <b> <strong> Froylan Melquiades Wbario Martinez </strong> </b> y naci en Ciudad Victoria, Tam. <p>';

        /*3. Llenar un array de 10 posiciones e imprimirlos en un ciclo for. */
        echo '<h2> Punto 3 </h2>';

        //Recorre el arreglo numeros con un for, cuenta las posiciones del arreglo con la funcion count()
        for($i = 0; $i < count($numeros); $i++ ){
            echo $numeros[$i] . ' ';
        }

    ?>
</body>
</html>



