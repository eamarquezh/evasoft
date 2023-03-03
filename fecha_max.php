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

    $dia_lim = date("d",strtotime($fecha));
    $mes_lim = date("m",strtotime($fecha));
    $ani_lim = date("Y",strtotime($fecha));

    date_default_timezone_set('America/Mexico_City');

    $fecha_actual = date("Y-m-d");


    if(date("Y-m-d",strtotime($fecha_actual))<=date("Y-m-d",strtotime($fecha))){
        #ok   
    }else{
        session_start();
        session_destroy();
    }


$resultado->free(); 
$conexion->close();
    
?>