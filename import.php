<?php 
include "conector.php";


	
  $filename=$_FILES["file"]["name"];
  $info = new SplFileInfo($filename);
  $extension = pathinfo($info->getFilename(), PATHINFO_EXTENSION);

   if($extension == 'csv')
   {
	$filename = $_FILES['file']['tmp_name'];
	$handle = fopen($filename, "r");

	while( ($data = fgetcsv($handle, 1000, ",") ) !== FALSE )
	{
	   $q = "INSERT INTO importacion (nombre, apellido, correo) VALUES (
		'$data[0]', 
		'$data[1]',
		'$data[2]'
	)";

	$conexion->query($q);
   }

      fclose($handle);
   }

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