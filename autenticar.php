<?php
include 'conector.php';
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
    $consulta = "select count(*)as existe from evasoft.usuarios where RFC ='$username' and pass='$password';";
    if (!$resultado = $conexion->query($consulta)) {
        echo json_encode('Noo');
        exit;
    }
    while ($array_registro = $resultado->fetch_assoc()) {
        $existe = $array_registro['existe'];
    }

    if($existe>=1){
        session_start();
        $_SESSION["usuario"] = $username;
        header("Location: panel.php");
    } else {

        $error ='Error usuario o contraseña';
        header("Location: index.php?error=".$error);
    }

$resultado->free(); 
$conexion->close();
    
?>
