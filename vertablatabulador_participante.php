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
		 $dat7="
		 <input type='file' /><br>
		 <button class='btn-primary'> Actualizar tabulador </button><br>
		 ";
				$cadena = $cadena . "<tr>
										<td class='align-baseline'>$dat1</td>
										 <td class='align-baseline'>$dat2</td>
										 <td class='align-baseline'>$dat3</td>
										 <td class='align-baseline'>$dat4</td>
										 <td class='align-baseline'>$dat5</td>
										 <td class='align-baseline'>$dat6</td>
										 <td class='align-baseline'>$dat7</td>	
									 </tr>";

		}
   
   
   
	   echo $cadena;
   
	   $resultado->free(); 
	   $conexion->close();
?>