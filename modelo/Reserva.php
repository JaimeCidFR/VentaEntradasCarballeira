<?php

class Reserva{
    private $numReserva;
    private $pena;
    private $nomeCompleto;
    private $email;
    private $telefono;
    private $socio;
    private $numSocio;
    private $numeroMesas;
    private $mesas;
    private $ubicacion;
    private $precio;
    const TABLA = 'clientes';

    public function __construct($numReserva, $pena, $nomeCompleto,$email,$telefono,$socio,$idSocio,$numeroMesas,$mesas,$ubicacion,$observacions,$precio)
    {
        $this->numReserva = $numReserva;
        $this->pena = $pena;
        $this->nomeCompleto = $nomeCompleto;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->socio = $socio;
        $this->idSocio = $idSocio;
        $this->numeroMesas = $numeroMesas;
        $this->mesas = $mesas;
        $this->ubicacion = $ubicacion;
        $this->observacions = $observacions;
        $this->precio = $precio;
    }

}    