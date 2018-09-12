<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Practica05</title>
</head>
<body>
    
<?php
/*Clase que representa un objeto donde se encuentran dos array numericos de dim 25. en los cuales uno tiene valores almacenados y el otro genera la serie fibonacci*/


class array_num{

    public $array;  //Original
    public $array_fibonacci; //Con serie

    //contructor que inicializa los arreglos
    public function __construct(){
        $this->array = array(0,1,1,3,5,2,7,1,34,6,64,2,123,6,74,2,31,231,3,2,61,21,3,123,53);
        $this->array_fibonacci = [];
        for($i=0; $i<25;$i++){

            $this->array_fibonacci[$i] = 0;

        }
    }

    //Funcion que permite generar la serie fibonacci dependiendo de los valores del primer array
    function hacer_fibonacci(){
        //Hacer serie
        $this->array_fibonacci=[];
        $this->array_fibonacci[0] = $this->array[0];
        $this->array_fibonacci[1] = $this->array[1];

        for($i=2; $i<25; $i++){
            $this->array_fibonacci[$i] = $this->array_fibonacci[$i-1] + $this->array_fibonacci[$i-1];
        }
    }

    //Funcion que permite imprimir los dos arreglos
    function imprimir(){
        echo "<br> <strong> Array sin modificar </strong> <br>";
        
        for($i=1; $i<25; $i++){
            if($i<24)
                echo $this->array[$i] . ' , ';
            else
                echo $this->array[$i]. '.<br><br>';
        }

        echo "<br> <strong> Array con serie Fibonacci </strong> <br>";

        for($i=1; $i<25; $i++){
            if($i<24)
                echo $this->array_fibonacci[$i] . ' , ';
            else
                echo $this->array_fibonacci[$i]. '.<br><br>';
        }
    }

}

//Nuevo objeto de tipo array_num representa los dos arreglos:
$a = new array_num();

//Generar la serie fibonacci
$a->hacer_fibonacci();

//Imprimir arreglos
$a->imprimir();

?>

</body>
</html>


