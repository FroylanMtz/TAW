<?php

/*

    Practica01
    Desarrollar un script en php o JavaScript básico en donde utilizando un array asociativo se guarde:

    -Persona 1: Nombre.
    -Persona 1: Nombre y Apellido.
    -Persona 2: Nombre y Apellido DE LA PERSONA 1.

    En otro array numérico almacenar 6 números y se imprima el que tiene el valor de 4.

*/

//Entrada de datos, esto se puede remplazar por otro tipo de entrada, como un formulario o una base de datos, etc.

echo '<h4> Primera Parte </h4>';

$persona1 = array('Nombre' => 'Froylan', 'Apellido' => 'Martinez');
$persona2 = array('Nombre' => $persona1['Nombre'], 'Apellido' => $persona1['Apellido']);

//Creacion del arreglo asociativo para almecenar la informacionde las personas
$personas = array('persona1' => $persona1['Nombre'], 'persona1_apellidos' => $persona1['Nombre'].' '.$persona1['Apellido'], 'persona2' => $persona2['Nombre'] .' ' . $persona2['Apellido']);

//Se imprimen los datos almacenados en el arreglo asociativo personas
echo 'Persona 1 (Nombre): ' . $personas['persona1'] . '<br/>';
echo 'Persona 1 (Nombre y Apellido): ' . $personas['persona1_apellidos'] . '<br/>';
echo 'Persona 2 (Nombre y Apellido de la persona 1): ' . $personas['persona2'] . '<br/> <br/>';


//Entrada de datos de los numeros, puede ser remplazado por otro tipo de entrada, como un formulario, una base de datos, sensores, etc.

//Se le asignan numeros random
$numeros = array('Hola',12,589,12,9,-6);

echo '<h4> Segunda Parte </h4>';

//Recorre el arreglo de los numeros para validar que sean enteros
for($i=0; $i<6; $i++){

    if ( gettype($numeros[$i]) !== 'integer' ){
        
        //Si en la posicion no hay un numero lo sobreescribo con un 0
        $numeros[$i] = 0;

    }else{

        //Si es menor a 0 es decir que no es un entero positivo lo sobreescribo con un cero
        if($numeros[$i] < 0){
            $numeros[$i] = 0;
        }
    }

    //Se imprime el valor y tipo de dato en el arreglo numeros que es la entrdad de los datos
    echo 'Tipo: ' . gettype($numeros[$i]) . ' Valor: ' . $numeros[$i] . '<br/>';

}

//Una vez que estan validados, se guardan en un arreglo asociativo

$numerosArray = array('primero' => $numeros[0], 'segundo' => $numeros[1], 'tercero' => $numeros[2], 'cuarto' => $numeros[3], 'quinto' => $numeros[4], 'sexto' => $numeros[5] );

//Se imprime el valor del 4

echo '<br/> valor del numero 4: ' . $numerosArray['cuarto'];