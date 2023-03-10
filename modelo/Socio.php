<?php

class Socio{
    private $numSocio;
    private $nomeCompleto;
    private $DNI;
    private $email;
    private $telefono;
    private $IBAN;
    private $rua;
    private $numeroCasa;
    private $poboacion;
    private $dataAlta;
    private $dataBaixa;
    private $observacions;
    const TABLA = 'clientes';

    public function __construct($numSocio, $nomeCompleto, $DNI,$email,$telefono,$IBAN,$numeroCasa,$poboacion,$dataAlta,$dataBaixa,$observacions)
    {
        $this->numSocio = $numSocio;
        $this->nomeCompleto = $nomeCompleto;
        $this->DNI = $DNI;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->telefono = $IBAN;
        $this->telefono = $numeroCasa;
        $this->telefono = $poboacion;
        $this->telefono = $dataAlta;
        $this->telefono = $dataBaixa;
        $this->telefono = $observacions;
    }

}    