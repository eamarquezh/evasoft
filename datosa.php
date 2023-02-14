<?php
include 'conector.php';
$rfc = $_POST['rfc'];
    $consulta = "Select a.* from test.Datos_academia_a a where RFC='$rfc' limit 1;";
    if (!$resultado = $conexion->query($consulta)) {
        echo json_encode('Noo');
        exit;
    }
        while ($array_registro = $resultado->fetch_assoc()) {

                $lic = $array_registro['lic'];
                $g_lic = $array_registro['g_lic'];
                $vinc_lic = $array_registro['vinc_lic'];
                $esp = $array_registro['esp'];
                $g_esp = $array_registro['g_esp'];
                $vinc_esp = $array_registro['vinc_esp'];
                $mae = $array_registro['mae'];
                $g_mae = $array_registro['g_mae'];
                $vinc_mae = $array_registro['vinc_mae'];
                $doc = $array_registro['doc'];
                $g_doc = $array_registro['g_doc'];
                $vinc_doc = $array_registro['vinc_doc'];
       
        }



        $datos[] =[
                $lic,
                $g_lic,
                $vinc_lic,
                $esp,
                $g_esp,
                $vinc_esp,
                $mae,
                $g_mae,
                $vinc_mae,
                $doc,
                $g_doc,
                $vinc_doc
        ]; 


    echo json_encode($datos);

    $resultado->free(); 
    $conexion->close();
    
?>