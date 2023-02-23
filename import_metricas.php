<?php 
include "conector.php";


	
  $filename=$_FILES["file"]["name"];
  $info = new SplFileInfo($filename);
  $extension = pathinfo($info->getFilename(), PATHINFO_EXTENSION);

   if($extension == 'csv')
   {
	$filename = $_FILES['file']['tmp_name'];
	$handle = fopen($filename, "r");

	$d = "drop table if exists tabulador;";
	$c = "create table evasoft.tabulador(
									clave varchar(250),
									actividad varchar(250),
									puntos varchar(250),
									caracteristicas varchar(250),
									condicionantes varchar(250),
									documentos varchar(250)
								);";
	
	$conteo=1;
	while( ($data = fgetcsv($handle, 1000, ",") ) !== FALSE )
	{
	if($conteo>1){
		$q = "INSERT INTO evasoft.tabulador (clave, actividad, puntos,caracteristicas,condicionantes,documentos) VALUES (
			'$data[0]', 
			'$data[1]',
			'$data[2]',
			'$data[3]',
			'$data[4]',
			'$data[4]'
		);";
		$conexion->query($q);
		$conteo++;
	}
	if($conteo==1 && $data[0]=='clave' && $data[1]=='actividad' && $data[2]=='puntos' && $data[3]=='caracteristicas' && $data[4]=='condicionantes' && $data[5]=='documentos'){
		$conexion->query($d);
		$conexion->query($c);
		$conteo++;
	}
   }

      fclose($handle);
   }

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
   
	   if($conteo>1){
		echo $cadena;
	   }else{
		echo "No se ha cargado información revise que los titulos coincidan o haya cargado el archivo correcto";
	   }
		
	   $resultado->free(); 
	   $conexion->close();


?>