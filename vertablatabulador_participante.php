<?php
    include "conector.php";
	$consulta = "Select * from evasoft.tabulador;";
	if (!$resultado = $conexion->query($consulta)) {
		echo ('Noo');
		exit;
	}

	$elrfc = $_POST['elrfc'];
	$cadena="";
		while ($array_registro = $resultado->fetch_assoc()) {

		 $dat1=$array_registro['clave'];
		 $dat2=$array_registro['actividad'];
		 $dat3=$array_registro['puntos'];
		 $dat4=$array_registro['caracteristicas'];
		 $dat5=$array_registro['condicionantes'];
		 $dat6=$array_registro['documentos'];

		 $valor = $dat1."_".$elrfc;

		 $dat7="
		 <input type='file' name='files' id='files'>
         <input type='hidden' id='nuevonombre' value='$valor'>
         <input type='button' id='btn_uploadfile' value='Upload' onclick='uploadFile();' >
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