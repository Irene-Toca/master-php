<?php
/*FOR
for(variable contador, condicioón, incremento contador)
//BLOQUE DE INSTRUCCIONES
*/

// $resultado = 0;
// for($i = 0; $i <= 100; $i++){
//     $resultado = $resultado + $i;
//     echo "<p>$resultado</p>";
// }
// echo "<h1>El resultado es: $resultado</h1>";

//Ejemplo tabla de multiplicar 



if (isset($_GET ['numero'])) {
    $numero = (int)$_GET['numero'];

} else{
    $numero = 1;
}

 echo "<h1>Tabla de multiplicardel del número $numero</h1>";
 
 for($contador = 1;$contador <= 10; $contador++) {

     if ($numero == 45) {
         echo " No se pueden mostrar estas operaciones prohibidas";
         break;
     }
     echo "$numero * $contador = ". ($numero*$contador). "<br/>";
     

 }