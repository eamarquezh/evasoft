<?php
    include "conector.php";
	$consulta = "Select * from evasoft.tabulador;";
	if (!$resultado = $conexion->query($consulta)) {
		echo ('Noo');
		exit;
	}

	$cadena="";
		while ($array_registro = $resultado->fetch_assoc()) {

		 $dat1=$array_registro['clave'];
		 $dat2=$array_registro['actividad'];
		 $dat3=$array_registro['puntos'];
		 $dat4=$array_registro['caracteristicas'];
		 $dat5=$array_registro['condicionantes'];
		 $dat6=$array_registro['documentos'];
				$cadena = $cadena . "<tr>
											<td>$dat1</td>
										 <td>$dat2</td>
										 <td>$dat3</td>
										 <td>$dat4</td>
										 <td>$dat5</td>
										 <td>$dat6</td>
									 </tr>";

		}
   
   
   
	   echo $cadena;
   
	   $resultado->free(); 
	   $conexion->close();
?>