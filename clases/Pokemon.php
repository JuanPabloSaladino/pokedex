<?php

class Pokemon
{
    public $nombre;
    public $tipo;
    public $numero;
    public $imagen;
    public $descripcion;

    public function __construct($nombre, $tipo, $numero, $descripcion, $imagen)
    {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->numero = $numero;
        $this->descripcion = $descripcion;
        $this->imagen = $imagen;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

}