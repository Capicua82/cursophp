<?php

class Usuario{
    public $nombre;
    public $correo;

    function __construct($nombre, $correo){
        $this->nombre = $nombre;
        $this->correo = $correo;        
    }

    public function mostrarinfo(){
        return $this->correo;
    }
}

class Miembro extends Usuario {
    public function mostrarcorreo(){
        return ' Este es el correo: ' . $this->correo;
    }
}

$carlos = new Miembro(' Carlos ', 'moramamba@gmail.com');
echo $carlos->mostrarcorreo();

?>