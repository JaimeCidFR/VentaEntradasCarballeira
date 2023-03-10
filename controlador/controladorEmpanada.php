<?php
include_once('../modelo/ReservaModelo.php');
include_once('../modelo/SocioModelo.php');
include_once('../vista/vistaEmpanada.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa Carballeira</title>
    <link rel="stylesheet" href="../style/style.css" />
</head>
<body>
    <?php
mapaMesas();
echo "<div>";
busquedaSocio();
if(isset($_GET['numSocio']) && $_GET['numSocio'] != ""){
    $numero = $_GET['numSocio'];
    $salida = SocioModelo::buscaPorNumSocio($numero);
    $filasArray = $salida->fetchAll(PDO::FETCH_OBJ);
    mostrarSocios($filasArray);

}
if(isset($_GET['nome']) && $_GET['nome'] != ""){
    $nome = $_GET['nome'];
    $salida = SocioModelo::buscaPorNomeCompleto($nome);
    $filasArray = $salida->fetchAll(PDO::FETCH_OBJ);
    mostrarSocios($filasArray);

}
if(isset($_GET['dni']) && $_GET['dni'] != ""){
    $dni = $_GET['dni'];
    $salida = SocioModelo::buscaPorDNI($dni);
    $filasArray = $salida->fetchAll(PDO::FETCH_OBJ);
    mostrarSocios($filasArray);
}
if(isset($_GET['email']) && $_GET['email'] != ""){
    $email = $_GET['email'];
    $salida = SocioModelo::buscaPorEmail($email);
    $filasArray = $salida->fetchAll(PDO::FETCH_OBJ);
    mostrarSocios($filasArray);
}

formulariosBusquedaReservas();
if(isset($_GET['reservar'])){
    $nomeCompleto = $_GET['nomeCompleto'];
    $telefono = $_GET['tlf'];
    $email = $_GET['email'];
    $pena = $_GET['pena'];
    if($_GET['socio'] = "SI"){
        $socio = 1;
    }else{
        $socio = 0;
    }
    $idSocio = $_GET['idSocio'];
    $ubicacion = $_GET['zona'];
    $observacions = $_GET['observacions'];
    $mesasEscogidas = $_GET['mesasEscogidas'];
    $numeroMesas = $_GET['numeroMesas'];
    $precio = $_GET['precio'];

    ReservaModelo::añadirReserva($pena, $nomeCompleto,$email,$telefono,$socio,$idSocio,$numeroMesas,$mesasEscogidas,$ubicacion,$observacions,$precio);
}
echo "</div>";



    ?>
</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="../script/zoom.js"></script>
    <script src="../script/checkmesa.js"></script>
    <script src="../script/copiarForm.js"></script>
</html>