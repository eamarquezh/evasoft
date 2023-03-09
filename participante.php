<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/soloscroll.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <title>evasoft</title>
</head>
<body>

    <header class="bg-secondary text-white" height="240">
        <nav class="navbar">
            <div class="container-fluid">
                <div>
                    <a href="#">
                        <img src="http://cdn.hidalgo.gob.mx/logo_gobhidalgo.svg" alt="" width="200"  height="160" class="">
                    </a>
                </div>
                <div class="nav navbar-nav text-center">
                    <h1>Secretaría de educación Pública de Hidalgo</h1>
                </div>
            </div>
        </nav>
    </header>
    <main class="bg-light"> 
    <!-- aqui datos de autenticacion -->

    <div class="h3 m-2">
        <div class="d-flex flex-row mb-3 justify-content-between">
            <div class="p-2" id="name-init">
            <?php 
            include 'fecha_max.php';
                session_start();
                if (isset($_SESSION['usuario'])) {
                    echo '<div id="rfc" data-nombre="">'.$_SESSION['usuario'].'</div>';
                }else{
                    header("Location: index.php");
                    die();
                }
            ?>
            </div>
            <div class="p-2">
                <a href="logout.php" class="btn btn-success text-white">cerrar sesión</a>
            </div>
          </div>
        
    </div>
    <!-- acordeon -->
        <!-- acordeon1 -->
        <div class="accordion-item m-3">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed bg-primary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    pagina_test
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">

                    <!-- aqui poner el contenido inicio-->
                    <div class="grid align-baseline">
                        <div class="grid-container">
                            <table>
                            <thead>
                            <tr class="header">
                                <th>clave<div>clave</div></th>
                                <th>actividad<div>actividad</div></th>
                                <th>puntos<div>puntos</div></th>
                                <th>caracteristicas<div>caracteristicas</div></th>
                                <th>condicionantes<div>condicionantes</div></th>
                                <th>documentos<div>documentos</div></th>
                                <th>subir<div>subir</div></th>
                            </tr>
                            </thead>
                            <tbody id="status_2">
                            </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <!-- aqui poner el contenido final-->
                </div>
            </div>
        </div>

        <p></p>
            <div class="container text-center p-2">
                <a href="panel.php" id="savedatospersonales" class="btn btn-primary">
                    Regresar al panel
                </a>
            </div>
        <p></p>
    </main>
    <footer class="bg-secondary text-white text-center text-lg-start bottom">
        <div class="container p-4">
          <div class="row">
            <div class="col-lg-4 col-md-3 mb-3 mb-md-0">
                <img src="https://cdn.hidalgo.gob.mx/logo_hgo_2019.png" alt="" width="203"  height="123" class="">
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
        <div class="col-auto">
            <input class="form-control" type="file" id="formFiletest">
        </div>
      
      <div id="salida"></div>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script>
            const cuerpoDelDocumento = document.body;
            cuerpoDelDocumento.onload = inicio_2;

            async function inicio_2() {

            await fetch('vertablatabulador_participante.php', {
                method: "POST", 
                body: status_2
            })
            .then(x => x.text())
            .then(y => document.getElementById('status_2').innerHTML=y);    
            }
            
      </script>
      
</body>
</html>