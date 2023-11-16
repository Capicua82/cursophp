<?php


$numero =7;

/* para ecceder a una variable creada fuera de una función hay que ponerla como parámetro dentro de la función: ejemplo
function mostrarnumero($numero){
    echo $numero;

}

*/

function mostrarnumero($numero){
    $numero = 10;
// para acceder a una variable creada dentro de una función debemos utilizar el comando retunr
    return $numero;
}
    echo mostrarnumero();

?>