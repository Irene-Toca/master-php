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

// $nombre = "David extremadura ";
// $ciudad = "MADRID";
// $continente = "Europa";
// $edad = 49;
//     $mayoria_edad = 18;

// if ($edad >= $mayoria_edad) {
//     echo "<h1>$nombre es mayor de edad</h1>";
//     if ($continente == "Europa") {
//         echo "<h2>Y es de $ciudad</h2>";
//     } else {
//         echo "No es Europeo";
//     }
// } else {
//     echo "<h2>$nombre no es mayor de edad</h2>";
// }

//Ejemplo 4
// $dia = 7;

// if ($dia == 1) {
//     echo "Es Lunes";
// }else{
//     if ($dia == 2){
//         echo "Es Martes";
//     }else{
//         if($dia == 3){
//             echo "Es Miercoles";
//         }else{
//             if($dia == 4){
//                 echo "Es Jueves";
//             }else{
//                 if($dia == 5){
//                     echo "Es Viernes";
//                 }else{
//                     echo "Es fin de semana";
//                 }
//             }
//         }
//     }
// }


$dia = 2;
if ($dia == 1){
    echo "Lunes";
}elseif ($dia == 2){
    echo "Martes";
}elseif ($dia == 3){
    echo "Miercoles";
}elseif ($dia == 4){
    echo "Jueves";
}elseif ($dia == 5){
    echo "Viernes";
}else{
    echo "Es fin de semana";
}