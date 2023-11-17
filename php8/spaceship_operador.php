<?php

// echo '<br />';
// echo 10 <=> 8 ;
// echo '<br />';
// echo 4 <=> 34 ;
// echo 5 <=> 5 ;
// echo '<br />';
// echo 15 <=> 17 ;
// echo '<br />';
// echo '<br />';

// 


$arreglo = [3,5,1,2,4];
// sort($arreglo);

/*
function comparar($a , $b){
    if ($a == $b){
    return 0;
}   elseif ($a > $b){
    return 1;    
}    else{
    return -1;
}
       
}
*/

function comparar($a, $b){
    return $a <=> $b;
}
usort($arreglo, 'comparar');
echo implode(' - ' , $arreglo);

?>