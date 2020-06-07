<?php
//CONDICIONALES

// if(condicion) {
//     instrucciones
// } else {
//     otras instrucciones
// }

// $color = "verde";

// if($color == "rojo") {
//     echo "el color es rojo";

// }else {
//     echo "el color no es rojo";
// }
 

// Ejemplo 3

$nombre = "David extremadura ";
$ciudad = "MADRID";
$continente = "Europa";
$edad = 49;
$mayoria_edad = 18;

if($edad >= $mayoria_edad) {
    echo "<h1>$nombre es mayor de edad</h1>";
    if($continente == "Europa"){
        echo "<h2>Y es de $ciudad</h2>";
    }else{

        echo "No es Europeo";
    }


} else{
    echo "<h2>$nombre no es mayor de edad</h2>";
}

