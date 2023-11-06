<?php

$meses =array(
    'Enero', 'Febrero', 'Marzo', 'Abril', 
    'Mayo', 'Junio', 'Julio', 'Agosto', 
    'Septiembre','Octubre', 'Noviembre', 'Diciembre'
);

$numeros = array (22,15,17,40.75,50,100,80,40);

// en orden ascendente

sort ($numeros);

//en orden descendente

rsort ($numeros);

// este comando nos permite ordenar el arreglo $meses de forma alfabetica
sort ($meses);

// el siguiente comando nos permite ardenar alfabeticamente nuestro arreglo pero de manera invertida
rsort ($meses);

?>

><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del año</title>
</head>
<body>
    <h1>Meses del año</h1>
    <ul>
    
    <?php

    foreach ($mumeros as $numero) {
        echo '<li>' . $numero . '</li>'; 
    }
    
    
    ?>
      
    </ul>

</body>
</html>