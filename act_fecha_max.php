<?php
include 'conector.php';

$flm = $_GET['flm'];
    $consulta = "update evasoft.fechas set fecha = '$flm' where tipos = 'fecha_limite';";
    if (!$resultado = $conexion->query($consulta)) {
        echo json_encode('Noo');
        exit;
    }
    
echo 'fecha actualizada';
$conexion->close();
    
?>