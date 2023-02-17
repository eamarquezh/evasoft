<?php
    include "conector.php";
	   $consulta = "Select * from evasoft.usuarios;";
	   if (!$resultado = $conexion->query($consulta)) {
		   echo ('Noo');
		   exit;
	   }

	   $cadena="";
		   while ($array_registro = $resultado->fetch_assoc()) {
   
			$dat1=$array_registro['id'];
			$dat2=$array_registro['rfc'];
			$dat3=$array_registro['pass'];
			$dat4=$array_registro['estatus'];
			$dat5=$array_registro['evaluados'];
				   $cadena = $cadena . "<tr>
				   							<td>$dat1</td>
											<td>$dat2</td>
											<td>$dat3</td>
											<td>$dat4</td>
											<td>$dat5</td>
										</tr>";
		  
		   }
   
   
   
	   echo $cadena;
   
	   $resultado->free(); 
	   $conexion->close();
?>