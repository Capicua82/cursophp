<?php
$meses =array(
    'Enero', 'Febrero', 'Marzo', 'Abril', 
    'Mayo', 'Junio', 'Julio', 'Agosto', 
    'Septiembre','Octubre', 'Noviembre', 'Diciembre'
);

/* recorrer con el ciclo for

    for($i = 0; $i <= count ($meses); $i ++ ){
        echo $meses[$i] . '<be />';
    }
*/

$contador = 0;

while ($contador < count ($meses)){
    echo $meses[$contador] . '<br />';

    $contador ++;


}


?>