<?php

$amigos =array( 
    array('alejandro' ,20), 
    array('carlos' , 30), 
    array('manuel', 30)
);

echo $amigos[0][0] . '<br />';
echo $amigos[1][0] . '<br />';
echo $amigos[2][0] . '<br />';

// conociendo el numero de elementos de un arreglo

$meses =array(
    'Enero', 'Febrero', 'Marzo', 'Abril', 
    'Mayo', 'Junio', 'Julio', 'Agosto', 
    'Septiembre','Octubre', 'Noviembre', 'Diciembre'
);

// este comando nos sive para contar los elementos del arreglo
echo count($meses);

// a continuacion crearemos una variable llamada $ultimo_mes que nos dara el nombre del ultimo mes de arreglo
$ultimo_mes = count($meses) -1;

?>