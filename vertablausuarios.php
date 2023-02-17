<?php
    include "conector.php";
	   $consulta = "Select * from evasoft.importacion;";
	   if (!$resultado = $conexion->query($consulta)) {
		   echo json_encode('Noo');
		   exit;
	   }

	   $cadena="";
		   while ($array_registro = $resultado->fetch_assoc()) {
   
			$dat1=$array_registro['nombre'];
			$dat2=$array_registro['apellido'];
			$dat3=$array_registro['correo'];
			$dat4='';
			$dat5='';
				   $cadena = $cadena . "<tr><td>$dat1</td><td>$dat2</td><td>$dat3</td><td>$dat4</td><td>$dat5</td></tr>";
		  
		   }
   
   
   
	   echo $cadena;
   
	   $resultado->free(); 
	   $conexion->close();
?>