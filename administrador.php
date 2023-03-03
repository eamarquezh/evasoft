<!DOCTYPE html>
<html lang="en">
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
    <div class="accordion m-3" id="accordionExample">
        <!-- acordeon1 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed bg-primary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Subir usuarios
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">

                    <!-- aqui poner el contenido inicio-->
                    
                    <div class="grid">
                        <div class="grid-container">
                            <table>
                            <thead>
                            <tr class="header">
                                <th>id<div>id</div></th>
                                <th>rfc<div>rfc</div></th>
                                <th>pass<div>pass</div></th>
                                <th>estatus<div>estatus</div></th>
                                <th>evaluados<div>evaluados</div></th>
                            </tr>
                            </thead>
                            <tbody id="status">
                            </tbody>
                            </table>
                        </div>
                    </div>

                    <input  id="fileupload" type="file" name="fileupload" /><br>
                    <button class="btn-primary " id="upload-button"> Actualizar usuarios </button><br>
                    <!-- aqui poner el contenido final-->
                    
                    <div class="container text-center p-2">
                        <button id="savedatospersonales" type="button" class="btn btn-success text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Continuar
                        </button>
                    </div>
                    <div id="status_datos"></div>
                </div>
            </div>
        </div>
        <!-- acordeon2 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed bg-secondary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Subir tabulador
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    
                    <!-- aqui poner el contenido inicio-->
                    
                    <div class="grid">
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
                            </tr>
                            </thead>
                            <tbody id="status_2">
                            </tbody>
                            </table>
                        </div>
                    </div>

                    <input  id="fileupload_2" type="file" name="fileupload_2" /><br>
                    <button class="btn-primary " id="upload-button_2"> Actualizar tabulador </button><br>
                    <!-- aqui poner el contenido final-->
                    
                    <div class="container text-center p-2">
                        <button id="savetabuladores" type="button" class="btn btn-success text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Continuar
                        </button>
                    </div>
                    <div id="status_datos_2"></div>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed bg-primary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTre" aria-expanded="false" aria-controls="collapseTre">
                    Fecha limite
                </button>
            </h2>
            <div id="collapseTre" class="accordion-collapse collapse" aria-labelledby="headingTre" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    
                    <!-- aqui poner el contenido inicio-->
                    
                    
                    <div class="container text-center">
                    <label for="flm">Start date:</label>

                        <input type="date" id="flm" name="trip-start"
                            max="2050-12-31" pattern="\d{4}-\d{2}-\d{2}">
                        <button id="savedatemax" type="button" class="btn btn-success text-white">
                            guardar la fecha limite
                        </button>
                    
                    </div>
                    <!-- aqui poner el contenido final-->
                    
                    <div class="container text-center m-5">
                        <button id="saveflm" type="button" class="btn btn-success text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTre" aria-expanded="false" aria-controls="collapseTre">
                            Continuar
                        </button>
                    </div>
                    <div id="status_datos_3"></div>
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

            const txtFile = document.getElementById('fileupload');
            const txtFile_2 = document.getElementById('fileupload_2');
            const btnUpload = document.getElementById('upload-button');
            const status1 = document.getElementById('status_datos');
            const btnUpload_2 = document.getElementById('upload-button_2');
            const status2 = document.getElementById('status_datos_2');
            const saveflm = document.getElementById('savedatemax');
            const flm = document.getElementById('flm');

            saveflm.addEventListener('click',guarda_flm);
            function verfecha(){
                console.log(document.getElementById('flm').Day);
            }


            const cuerpoDelDocumento = document.body;
            btnUpload.addEventListener('click',uploadFile);
            btnUpload_2.addEventListener('click',uploadFile_2);
            cuerpoDelDocumento.onload = inicios;

            function inicios(){
                inicio();
                inicio_2();
                fecha_actual();
                llenar_fecha_actual()
            }

            async function inicio() {
            let formData = new FormData();           
            formData.append("file", fileupload.files[0]);
            await fetch('vertablausuarios.php', {
                method: "POST", 
                body: formData
            })
            .then(x => x.text())
            .then(y => document.getElementById('status').innerHTML=y);    
            }

            async function inicio_2() {
            let formData = new FormData();           
            formData.append("file", fileupload_2.files[0]);
            await fetch('vertablatabulador.php', {
                method: "POST", 
                body: formData
            })
            .then(x => x.text())
            .then(y => document.getElementById('status_2').innerHTML=y);    
            }

        async function uploadFile() {
            let formData = new FormData();           
            formData.append("file", fileupload.files[0]);
            await fetch('import.php', {
                method: "POST", 
                body: formData
            })
            .then(x => x.text())
            .then(y => document.getElementById('status').innerHTML=y);
            
            status1.innerHTML ="procesando...";
            setTimeout((e) => {
                status1.innerHTML ="";
            }, 2000);
            }

        async function uploadFile_2() {
            let formData = new FormData();           
            formData.append("file", fileupload_2.files[0]);
            await fetch('import_metricas.php', {
                method: "POST", 
                body: formData
            })
            .then(x => x.text())
            .then(y => document.getElementById('status_2').innerHTML=y);
            
            status2.innerHTML ="procesando...";
            setTimeout((e) => {
                status1.innerHTML ="";
            }, 2000);
            }


            function guarda_flm() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("status_datos_3").innerHTML = this.responseText;
                setTimeout((e) => {
                    document.getElementById("status_datos_3").innerHTML ="";
                                    }, 2000);
            }
            xhttp.open("GET", "act_fecha_max.php?flm="+flm.value);
            xhttp.send();
            }

            function llenar_fecha_actual() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById('flm').value = this.responseText;
            }
            xhttp.open("GET", "fecha_max_actual.php");
            xhttp.send();
            }

            function fecha_actual(){
                var fecha = new Date(); //Fecha actual
                var mes = fecha.getMonth()+1; //obteniendo mes
                var dia = fecha.getDate(); //obteniendo dia
                var ano = fecha.getFullYear(); //obteniendo año
                if(dia<10)
                    dia='0'+dia; //agrega cero si el menor de 10
                if(mes<10)
                    mes='0'+mes //agrega cero si el menor de 10
                document.getElementById('flm').min=ano+"-"+mes+"-"+dia;
            }


      </script>
      
</body>
</html>