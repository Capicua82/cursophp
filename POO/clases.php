<?php

// Ejemplo #1 - Como lo hariamos sin Programacion Orientada a Objetos
// $nombre = 'Carlos';
// $edad = 23;
// $pais = 'Mexico';

// $nombre2 = 'Alejandro';
// $edad2 = 30;
// $pais2 = 'España';

// echo $nombre;

class Persona {
    public $nombre;
    public $edad;
    public $pais;

    public function mostrarinformacion(){
        echo 'hola mundo <br />';
    }
}

$carlos = new Persona;
$carlos->nombre = 'Carlos Arturo';
$carlos->edad =23;
$carlos->pais = 'Mexico';

$carlos->mostrarinformacion();

echo $carlos->nombre . ' tiene ' . $carlos->edad . ' años de ead ';

$alejandro = new Persona;
$alejandro->nombre = 'Alejandro';
$alejandro->edad =30;
$alejandro-> pais = 'España';


?>
