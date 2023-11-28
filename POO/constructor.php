<?php

class Persona {
    public $nombre;
    public $edad;
    public $pais;

    function __construct($nombre, $edad, $pais){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    public function mostrarinformacion(){
        echo  $this->nombre . ' tiene ' . $this->edad . ' años de edad y es de '  . $this->pais ;

    }
}

$carlos = new Persona('Carlos Arturo' , 23 , 'México');
// $carlos->nombre = 'Carlos Arturo';
// $carlos->edad =23;
// $carlos->pais = 'Mexico';
$carlos->mostrarinformacion();

echo '<br />';

$alejandro = new Persona('Alejandro', 30 , 'España' );
$alejandro->mostrarinformacion();

?>