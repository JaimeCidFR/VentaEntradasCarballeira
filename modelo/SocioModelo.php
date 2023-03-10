<?php
include_once("Conexion.php");
include_once("Socio.php");

class SocioModelo extends Socio{
    public function __construct($titulo, $autor, $ano,$duracion,$imaxe){
        parent::__construct($titulo, $autor, $ano,$duracion,$imaxe);
     }   
/*---------------------POR EMAIL--------------------*/
    public static function buscaPorEmail($email){
        $conexion = new Conexion();
        try {
            
            $pdoStmt = $conexion->prepare("SELECT numSocio, NomeCompleto,email,telefono FROM socios WHERE email like ?");
            $pdoStmt->bindParam(1, $email); 
            $pdoStmt->execute(); 
        
        } catch (PDOException $e) {
            die ("Houbo un erro en buscaPorEmail". $e->getMessage());
        }
        return $pdoStmt; //DEVOLVEMOS TODAS AS FILAS nun PDOStatement
    }
/*--------------------POR NOME COMPLETO-----------------*/
    public static function buscaPorNomeCompleto($nomeCompleto){
        $conexion = new Conexion();
        $nomeBuscar = "%".$nomeCompleto."%";
        try {
            
            $pdoStmt = $conexion->prepare("SELECT numSocio, NomeCompleto,email,telefono FROM socios WHERE nomeCompleto like ?");
            $pdoStmt->bindParam(1, $nomeBuscar); 
            $pdoStmt->execute(); 
        
        } catch (PDOException $e) {
            die ("Houbo un erro en buscaPorNomeCompleto". $e->getMessage());
        }
        return $pdoStmt; //DEVOLVEMOS TODAS AS FILAS nun PDOStatement
    }
/*------------------POR DNI--------------------*/
    public static function buscaPorDNI($dni){
        $conexion = new Conexion();
        $dniBuscar = $dni."%";
        try {
            
            $pdoStmt = $conexion->prepare("SELECT numSocio, NomeCompleto,email,telefono FROM socios WHERE DNI like ?");
            $pdoStmt->bindParam(1, $dniBuscar); 
            $pdoStmt->execute(); 
        
        } catch (PDOException $e) {
            die ("Houbo un erro en buscaPorTelefono". $e->getMessage());
        }
        return $pdoStmt; //DEVOLVEMOS TODAS AS FILAS nun PDOStatement
    }
/*------------------POR NUMERO SOCIO--------------------*/
public static function buscaPorNumSocio($numSocio){
    $conexion = new Conexion();
    try {
        
        $pdoStmt = $conexion->prepare("SELECT numSocio, NomeCompleto,email,telefono FROM socios WHERE numSocio like ?");
        $pdoStmt->bindParam(1, $numSocio); 
        $pdoStmt->execute(); 
    
    } catch (PDOException $e) {
        die ("Houbo un erro en buscaPorTelefono". $e->getMessage());
    }
    return $pdoStmt; //DEVOLVEMOS TODAS AS FILAS nun PDOStatement
}
}