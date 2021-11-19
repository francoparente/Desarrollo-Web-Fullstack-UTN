<?php

class Persona{
    /**
     * @var string
     */
    private $nombre; // atributo (puede ser private, public o protected)
    /**
     * @var string
     */
    private $apellido;


    public function __construct($nombre, $apellido) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    
    public function getNombre(): string {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }
}