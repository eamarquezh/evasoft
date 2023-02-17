<?php 
include "conector.php";


	
  $filename=$_FILES["file"]["name"];
  $info = new SplFileInfo($filename);
  $extension = pathinfo($info->getFilename(), PATHINFO_EXTENSION);

   if($extension == 'csv')
   {
	$filename = $_FILES['file']['tmp_name'];
	$handle = fopen($filename, "r");

	$p = "drop table if exists usuarios;";
	$conexion->query($p);
	$p = "create table evasoft.usuarios(
									id varchar(250),
									rfc varchar(250),
									pass varchar(250),
									estatus varchar(250),
									evaluados varchar(250)
								);";
	$conexion->query($p);

	while( ($data = fgetcsv($handle, 1000, ",") ) !== FALSE )
	{
	   $q = "INSERT INTO evasoft.usuarios (id, rfc, pass,estatus,evaluados) VALUES (
		'$data[0]', 
		'$data[1]',
		'$data[2]',
		'$data[3]',
		'$data[4]'
	);";

	$conexion->query($q);
   }

      fclose($handle);
   }

	   $consulta = "Select * from evasoft.usuarios;";
	   if (!$resultado = $conexion->query($consulta)) {
		   echo json_encode('Noo');
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