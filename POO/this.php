<?php

class Persona {
    public $nombre;
    public $edad;
    public $pais;

    public function mostrarinformacion(){
        echo  $this->nombre . ' tiene ' . $this->edad . ' años de edad y es de '  . $this->pais ;

    }
}


$carlos = new Persona;
$carlos->nombre = 'Carlos Arturo';
$carlos->edad =23;
$carlos->pais = 'Mexico';
$carlos->mostrarinformacion();

echo '<br />';

$alejandro = new Persona;
$alejandro = new Persona;
$alejandro->nombre = 'Alejandro';
$alejandro->edad =30;
$alejandro->pais = 'España';
$alejandro->mostrarinformacion();



?>