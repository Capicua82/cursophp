<?php

class Persona {
    public static $dia = ' 7 de Septiembre';

    public static function saludo($nombre = null){
        if($nombre){
            return ' Hola, Buen dia ' . $nombre;
        } else {
            return ' Hola, Buen dia';

        }
        

    }
}

// $carlos = new Persona;
echo Persona::saludo('Carlos');

?>