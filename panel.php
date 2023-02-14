<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <title>Software evaluador</title>
</head>
<body>
    

    <header class="bg-secondary text-white" height="240">
        <nav class="navbar">
            <div class="container-fluid">
                <div>
                    <a href="#">
                        <img src="http://cdn.hidalgo.gob.mx/logo_gobhidalgo.svg" alt="" width="203"  height="123" class="">
                    </a>
                </div>
                <div class="nav navbar-nav text-center">
                    <h1>Secretaría de educación Pública de Hidalgo</h1>
                </div>
            </div>
        </nav>
    </header>
    <main class="bg-light"> 
    <div class="h3 m-2">
        <div class="d-flex flex-row mb-3 justify-content-between">
            <div class="p-2" id="name-init">
            <?php 
                session_start();
                echo '<div id="rfc" data-nombre="">'.$_SESSION['usuario'].'</div>';
            ?>
            </div>
            <div class="p-2">
                <a href="logout.php" class="btn btn-success text-white">cerrar sesión</a>
            </div>
          </div>
        
    </div>
    
    <p></p>
    <p class="h1 col-auto text-center">SIECEDDEN</p>
    <p></p>
    <p class="h2 col-auto text-center">Sistema Informático para la Evaluación y el Control del Estímulo al Desempeño Docente en las Escuelas Normales</p>

    
        <div class="row mx-auto">

        <?php
        include 'conector.php';
        $valbus = $_SESSION['usuario'];

        $consulta = "select * from evasoft.usuarios where RFC ='$valbus' and estatus='Docente';";
        if (!$resultado = $conexion->query($consulta)) {
            echo '<div>Nooo</div>';
            exit;
        }
        while ($array_registro = $resultado->fetch_assoc()) {
            $estatus1 = $array_registro['estatus'];
            $rfc = $array_registro['RFC'];
        }
        if(isset($estatus1)){
            if($estatus1='Docente'){
            echo '<div class="col-sm-4">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Participante</h5>
                        <p class="card-text">Actualiza tus datos y sube tus documentos.</p>';
                        echo'<form action="participante.php" method="post">';
                        echo '<input type="submit" name="evaluando" class="btn btn-primary" value="'.$rfc.'">';
                        echo '</form>';
                        echo '<p></p>';
                        
                    echo'</div>
                    </div>
                </div>';
            }
        }


        $consulta = "select * from evasoft.usuarios where RFC ='$valbus' and estatus='Evaluador';";
        if (!$resultado = $conexion->query($consulta)) {
            echo json_encode('Noo');
            exit;
        }
        while ($array_registro = $resultado->fetch_assoc()) {
            $estatus2 = $array_registro['estatus'];
        }
        if(isset($estatus2)){
            if($estatus2='Evaluador'){
            echo '<div class="col-sm-4" >
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Evaluador</h5>
                    <p class="card-text">Evaluar a los participantes.</p>';
                    $consulta = "select evaluados from evasoft.usuarios where RFC ='$valbus' and estatus='Evaluador';";
                    if (!$resultado = $conexion->query($consulta)) {
                        echo json_encode('Noo');
                        exit;
                    }
                    while ($array_registro = $resultado->fetch_assoc()) {
                        echo'<form id="fom2" action="evaluador.php" method="post">';
                        echo '<input type="submit" name="evaluando" class="btn btn-primary" value="'.$array_registro['evaluados'].'">';
                        echo'<p></p>';
                        echo '</form>';
                        

                    }
                    echo '</div>
                </div>
            </div>';
            }
        }

        

        $consulta = "select * from evasoft.usuarios where RFC ='$valbus' and estatus='Administrador';";
        if (!$resultado = $conexion->query($consulta)) {
            echo json_encode('Noo');
            exit;
        }
        while ($array_registro = $resultado->fetch_assoc()) {
            $estatus3 = $array_registro['estatus'];
        }
        if(isset($estatus3)){
            if($estatus3='Administrador'){
            echo '<div class="col-sm-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Administrador</h5>
                    <p class="card-text">Administración de sitio.</p>
                    <a href="#" class="btn btn-primary">Entrar</a>
                </div>
                </div>
            </div>';
            }
        }

        ?>

        </div>

    <p></p>
    </main>
    <footer class="bg-secondary text-white text-center text-lg-start bottom">
        <div class="container p-4">
          <div class="row">
            <div class="col-lg-4 col-md-3 mb-3 mb-md-0">
                <img src="https://cdn.hidalgo.gob.mx/logo_hgo_2019.png" alt="" width="100"  height="70" class="">
            </div>
            <div class="col-lg-4 col-md-3 mb-3 mb-md-0">
              <h5 class="text-center">Contacto</h5>
                <div class="text-center">
                <p>Blvd. Felipe Ángeles s/n C.P. 42083,Pachuca de Soto, Hidalgo, México</p> 
                <p>Horario de atención: 09:00 a 16:30</p>
                
                <p>Dirección General de Formación y Superación Docente  Tel. 771 791 42 73 y 771 791 45 13</p>
                <p>Departamento de Educación Normal Tel. 771 710 05 84</p>
                </div>       
            </div>
            <div class="col-lg-4 col-md-3 mb-3 mb-md-0">
                <div class="text-end">
                    <a href="#">
                        <img src="http://cdn.hidalgo.gob.mx/escudo_blanco.svg" alt="" width="200"  height="160" class="">
                    </a>
                </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
