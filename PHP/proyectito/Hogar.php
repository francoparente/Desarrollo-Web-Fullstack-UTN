<?php

class Hogar{
    private Persona $propietario;
    /**
     * @var string
     */
    private $direccion; // atributo (puede ser private, public o protected)
    /**
     * @var Persona[]
     */
    private $habitantes;

    public function __construct(string $direccion) {
        $this->direccion = $direccion;
        $this->habitantes = [];
    }

    public function setPropietario(Persona $propietario) {
        $this->propietario = $propietario;
    }
    public function getPropietario() {
        return $this->propietario;
    }
   
    public function agregarHabitante(Persona $persona) {
        array_push($this->habitantes, $persona);
    }
    public function cantidadHabitantes() {
        return count($this->habitantes);
    }
    public function cambiarPropietario() {
        $this->propietario = $this->habitantes[0];
    }
}