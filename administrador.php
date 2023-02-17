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
                echo '<div id="rfc" data-nombre="">'.$_SESSION['usuario'].'</div>';
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
                    Cargar usuarios
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
                    Preparación Académica 1
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <!-- aqui poner el contenido -->
                    <div class="row mb-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputlic" class="col-form-label">Licenciatura:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" id="inputlic" class="form-control" aria-describedby="passwordHelpInline"  readonly>
                        </div>
                        
                        <div class="col-auto">
                            <select class="form-select" aria-label="Default select example" id="inputliccombo"  disabled>
                                <option selected>Seleccionar</option>
                                <option value="1">Constancia</option>
                                <option value="2">Certificado</option>
                                <option value="3">Titulo y Cedula</option>
                              </select>
                          </div>


                          <div class="col-auto">
                            <input type="text" id="inputlicfile" class="form-control" aria-describedby="passwordHelpInline" readonly>
                          </div>
                          <div class="col-auto">
                            <button type="button" class="btn btn-success text-white" id="inputlicmos">mostrar vinculo</button>
                            <div id="inputlicfilevinc"></div>
                          </div>
                          <div class="col-auto">
                          <input class="form-check-input" type="checkbox" id="checklic" name="option1">
                          </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputesp" class="col-form-label">Especialidad:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" id="inputesp" class="form-control" aria-describedby="passwordHelpInline" readonly>
                        </div>
                        
                        <div class="col-auto">
                            <select class="form-select" aria-label="Default select example" id="inputespcombo" disabled>
                                <option selected>Seleccionar</option>
                                <option value="1">Constancia</option>
                                <option value="2">Certificado</option>
                                <option value="3">Titulo y Cedula</option>
                              </select>
                          </div>

                          <div class="col-auto">
                            <input type="text" id="inputespfile" class="form-control" aria-describedby="passwordHelpInline" readonly>
                          </div>
                          <div class="col-auto">
                            <button type="button" class="btn btn-success text-white" id="inputespmos">mostrar vinculo</button>
                            <div id="inputespfilevinc"></div>
                          </div>
                          <div class="col-auto">
                          <input class="form-check-input" type="checkbox" id="checkesp" name="option1" value="something">
                          </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputmae" class="col-form-label">Maestría:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" id="inputmae" class="form-control" aria-describedby="passwordHelpInline" readonly>
                        </div>
                        
                        <div class="col-auto">
                            <select class="form-select" aria-label="Default select example" id="inputmaecombo" disabled>
                                <option selected>Seleccionar</option>
                                <option value="1">Constancia</option>
                                <option value="2">Certificado</option>
                                <option value="3">Titulo y Cedula</option>
                              </select>
                          </div>

                          <div class="col-auto">
                            <input type="text" id="inputmaefile" class="form-control" aria-describedby="passwordHelpInline" readonly>
                          </div>
                          <div class="col-auto">
                            <button type="button" class="btn btn-success text-white" id="inputmaemos">mostrar vinculo</button>
                            <div id="inputmaefilevinc"></div>
                          </div>
                          <div class="col-auto">
                          <input class="form-check-input" type="checkbox" id="checkmae" name="option1" value="something">
                          </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputdoc" class="col-form-label">Doctorado:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" id="inputdoc" class="form-control" aria-describedby="passwordHelpInline" readonly>
                        </div>
                        
                        <div class="col-auto">
                            <select class="form-select" aria-label="Default select example" id="inputdoccombo" disabled>
                                <option selected>Seleccionar</option>
                                <option value="1">Constancia</option>
                                <option value="2">Certificado</option>
                                <option value="3">Titulo y Cedula</option>
                              </select>
                          </div>


                          <div class="col-auto">
                            <input type="text" id="inputdocfile" class="form-control" aria-describedby="passwordHelpInline" readonly>
                          </div>
                          <div class="col-auto">
                            <button type="button" class="btn btn-success text-white" id="inputdocmos">mostrar vinculo</button>
                            <div id="inputdocfilevinc"></div>
                          </div>
                          <div class="col-auto">
                          <input class="form-check-input" type="checkbox" id="checkdoc" name="option1" value="something">
                          </div>
                    </div>
                    <div class="container text-center p-2">
                        <div class="col-auto">
                            <button id="saveacademia" type="button" class="btn btn-success text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Continuar
                            </button>
                        </div>
                    </div>
                    <div id="status_datos_2"></div>
                </div>
            </div>
        </div>
        <!-- acordeon3 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed bg-primary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Preparación Académica 2
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <!-- aqui poner el contenido -->
                    <div class="row p-2 align-items-center">
                        <div class="col-auto">
                            <label for="inputidioma" class="col-form-label">Idioma:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" id="inputidioma" class="form-control" aria-describedby="passwordHelpInline" readonly>
                        </div>
                        
                        <div class="col-auto">
                            <select class="form-select" aria-label="Default select example" id="inputidiomacombo" disabled>
                                <option selected>Seleccionar</option>
                                <option value="1">Habla y lee</option>
                                <option value="2">Habla, lee y escribe</option>
                                <option value="3">Dominio total</option>
                              </select>
                          </div>


                          <div class="col-auto">
                            <input type="text" id="inputidiomafile" class="form-control" aria-describedby="passwordHelpInline" readonly>
                          </div>
                          <div class="col-auto">
                            <button type="button" class="btn btn-success text-white" id="inputidiomamos">mostrar vinculo</button>
                            <div id="inputidiomafilevinc"></div>
                          </div>
                          <div class="col-auto">
                          <input class="form-check-input" type="checkbox" id="checkidioma" name="option1" value="something">
                          </div>
                    </div>
                    <div class="row p-2 align-items-center">
                        <div class="col-auto">
                            <label for="inputcer" class="col-form-label">Certificacion:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" id="inputcer" class="form-control" aria-describedby="passwordHelpInline" readonly>
                        </div>

                        <div class="col-auto">
                            <select class="form-select" aria-label="Default select example" id="inputcercombo" disabled>
                                <option selected>Seleccionar</option>
                                <option value="1">Incompleto</option>
                                <option value="2">Terminado</option>
                              </select>
                          </div>


                          <div class="col-auto">
                            <input type="text" id="inputcerfile" class="form-control" aria-describedby="passwordHelpInline" readonly>
                          </div>
                          <div class="col-auto">
                            <button type="button" class="btn btn-success text-white" id="inputcermos">mostrar vinculo</button>
                            <div id="inputcerfilevinc"></div>
                          </div>
                          <div class="col-auto">
                          <input class="form-check-input" type="checkbox" id="checkcer" name="option1" value="something">
                          </div>
                    </div>

                    <div class="container text-center p-2">
                        <div class="col-auto">
                            <button type="button" id="saveacademiatwo" class="btn btn-success text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                Continuar
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- acordeon4 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingfour">
                <button class="accordion-button collapsed bg-secondary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                    Permanencia en el subsistema
                </button>
            </h2>
            <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <!-- aqui poner el contenido -->
                    <div class="row mb-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputEspe" class="col-form-label">Años de Servicio en el Subsistema:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" id="inputanio" class="form-control" aria-describedby="passwordHelpInline" readonly>
                        </div>

                        <div class="col-auto">
                            <input type="text" id="inputaniofile" class="form-control" aria-describedby="passwordHelpInline" readonly>
                          </div>
                          <div class="col-auto">
                            <button type="button" class="btn btn-success text-white" id="inputaniomos">mostrar vinculo</button>
                            <div id="inputaniofilevinc"></div>
                          </div>
                          <div class="col-auto">
                          <input class="form-check-input" type="checkbox" id="checkanio" name="option1" value="something">
                          </div>
                    </div>
                    

                    <div class="container text-center p-2">
                        <div class="col-auto">
                            <label for="inputEspe" class="col-form-label"><b>El documento comprobatorio para este rubro debe ser el F.U.P. expedido por la SEP.</b></label>
                        </div>
                        
                        <div class="col-auto">
                            <button type="button" id="saveall" class="btn btn-success text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                Guardar y finalizar
                            </button>
                        </div>
                    </div>
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

            var txtFile = document.getElementById('file');
            var btnUpload = document.getElementById('upload-button');
            btnUpload.addEventListener('click',uploadFile);
            const cuerpoDelDocumento = document.body;
            cuerpoDelDocumento.onload = inicio;

            
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

        async function uploadFile() {
            let formData = new FormData();           
            formData.append("file", fileupload.files[0]);
            await fetch('import.php', {
                method: "POST", 
                body: formData
            })
            .then(x => x.text())
            .then(y => document.getElementById('status').innerHTML=y);    
            }


      </script>
      
</body>
</html>