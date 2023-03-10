<?php
include_once("Conexion.php");
include_once("Reserva.php");


class ReservaModelo extends Reserva{

public function __construct($titulo, $autor, $ano,$duracion,$imaxe){
        parent::__construct($titulo, $autor, $ano,$duracion,$imaxe);
     }   
/*-------------------BUSCAR RESERVA POR PEÑA---------------------*/
     public static function verReservaPena($pena){
            $conexion = new Conexion();
            try {
                
                $pdoStmt = $conexion->prepare("SELECT * FROM reservas WHERE pena like $?$");
                $pdoStmt->bindParam(1, $numSocio); 
                $pdoStmt->execute(); 
            
            } catch (PDOException $e) {
                die ("Houbo un erro en verReservaPena". $e->getMessage());
            }
            return $pdoStmt; //DEVOLVEMOS TODAS AS FILAS nun PDOStatement
     }
/*-------------------BUSCAR RESERVA POR NOME---------------------*/
public static function verReservaNome($nomeCompleto){
    $conexion = new Conexion();
    try {
        
        $pdoStmt = $conexion->prepare("SELECT * FROM reservas WHERE pena like $?$");
        $pdoStmt->bindParam(1, $nomeCompleto); 
        $pdoStmt->execute(); 
    
    } catch (PDOException $e) {
        die ("Houbo un erro en verReservaNome". $e->getMessage());
    }
    return $pdoStmt; //DEVOLVEMOS TODAS AS FILAS nun PDOStatement
}
/*-------------------BUSCAR RESERVA POR NUMERO RESERVA---------------------*/
public static function verReservaNumeReserva($numeroReserva){
    $conexion = new Conexion();
    try {
        
        $pdoStmt = $conexion->prepare("SELECT * FROM reservas WHERE pena like ?");
        $pdoStmt->bindParam(1, $numeroReserva); 
        $pdoStmt->execute(); 
    
    } catch (PDOException $e) {
        die ("Houbo un erro en verReservaNumeReserva". $e->getMessage());
    }
    return $pdoStmt; //DEVOLVEMOS TODAS AS FILAS nun PDOStatement
}
/*-------------------BUSCAR RESERVA POR TELEFONO---------------------*/
public static function verReservaTelefono($telefono){
    $conexion = new Conexion();
    try {
        
        $pdoStmt = $conexion->prepare("SELECT * FROM reservas WHERE pena like ?");
        $pdoStmt->bindParam(1, $telefono); 
        $pdoStmt->execute(); 
    
    } catch (PDOException $e) {
        die ("Houbo un erro en verReservaTelefono". $e->getMessage());
    }
    return $pdoStmt; //DEVOLVEMOS TODAS AS FILAS nun PDOStatement
}
/*-------------------BUSCAR RESERVA POR EMAIL---------------------*/
public static function verReservaEmail($email){
    $conexion = new Conexion();
    try {
        
        $pdoStmt = $conexion->prepare("SELECT * FROM reservas WHERE pena like ?");
        $pdoStmt->bindParam(1, $email); 
        $pdoStmt->execute(); 
    
    } catch (PDOException $e) {
        die ("Houbo un erro en verReservaEmail". $e->getMessage());
    }
    return $pdoStmt; //DEVOLVEMOS TODAS AS FILAS nun PDOStatement
}
/*-------------------BUSCAR RESERVA MESAS---------------------*/
public static function verReservaMesa($mesa){
    $conexion = new Conexion();
    try {
        
        $pdoStmt = $conexion->prepare("SELECT * FROM reservas WHERE pena like ?");
        $pdoStmt->bindParam(1, $mesa); 
        $pdoStmt->execute(); 
    
    } catch (PDOException $e) {
        die ("Houbo un erro en verReservaMesa". $e->getMessage());
    }
    return $pdoStmt; //DEVOLVEMOS TODAS AS FILAS nun PDOStatement
}
/*----------------------ELIMINAR RESERVA-----------------------*/
public static function eliminarReserva($numeroReserva){
    $conexion = new Conexion();
    try {
        
        $pdoStmt = $conexion->prepare("DELETE FROM reservas WHERE numReserva like ?");
        $pdoStmt->bindParam(1, $numeroReserva); 
        $pdoStmt->execute(); 
    
    } catch (PDOException $e) {
        die ("Houbo un erro en eliminarReserva". $e->getMessage());
    }
    return $pdoStmt; //DEVOLVEMOS TODAS AS FILAS nun PDOStatement
}
/*------------------AÑADIR RESERVA----------------------------*/
public static function añadirReserva($pena, $nomeCompleto,$email,$telefono,$socio,$idSocio,$numeroMesas,$mesas,$ubicacion,$observacions,$precio){
    $conexion = new Conexion();
    try {
        
        $pdoStmt = $conexion->prepare("INSERT INTO reservas(pena, nomeCompleto, email, telefono, socio, numSocio, mesas,numeroMesas, ubicacion,observacions, precio) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
        $pdoStmt->bindParam(1, $pena); 
        $pdoStmt->bindParam(2, $nomeCompleto); 
        $pdoStmt->bindParam(3, $email); 
        $pdoStmt->bindParam(4, $telefono); 
        $pdoStmt->bindParam(5, $socio); 
        $pdoStmt->bindParam(6, $idSocio); 
        $pdoStmt->bindParam(7, $numeroMesas); 
        $pdoStmt->bindParam(8, $mesas); 
        $pdoStmt->bindParam(9, $ubicacion); 
        $pdoStmt->bindParam(10, $observacions); 
        $pdoStmt->bindParam(11, $precio); 
        $pdoStmt->execute(); 
        
        if($pdoStmt->execute()){
            reservaRealizada();
        }
    } catch (PDOException $e) {
        die ("Houbo un erro en añadirReserva". $e->getMessage());
    }
    return $pdoStmt; //DEVOLVEMOS TODAS AS FILAS nun PDOStatement
}

}