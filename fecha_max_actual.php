<?php
include 'conector.php';

    $consulta = "select fecha from evasoft.fechas where tipos='fecha_limite';";
    if (!$resultado = $conexion->query($consulta)) {
        echo json_encode('Noo');
        exit;
    }
    while ($array_registro = $resultado->fetch_assoc()) {
        $fecha = $array_registro['fecha'];
    }

    echo $fecha;


$resultado->free(); 
$conexion->close();
    
?>