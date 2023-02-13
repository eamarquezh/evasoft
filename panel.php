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


        $consulta = "select * from test.usuarios where RFC ='$valbus' and estatus='Evaluador';";
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
                    $consulta = "select evaluados from test.usuarios where RFC ='$valbus' and estatus='Evaluador';";
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

        

        $consulta = "select * from test.usuarios where RFC ='$valbus' and estatus='Administrador';";
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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script type="text/javascript"> 

                $('#inputlicmos').on('click',()=>{vinculares('#inputlicfile','#inputlicfilevinc')})
                $('#inputespmos').on('click',()=>{vinculares('#inputespfile','#inputespfilevinc')})
                $('#inputmaemos').on('click',()=>{vinculares('#inputmaefile','#inputmaefilevinc')})
                $('#inputdocmos').on('click',()=>{vinculares('#inputdocfile','#inputdocfilevinc')})
                $('#inputidiomamos').on('click',()=>{vinculares('#inputidiomafile','#inputidiomafilevinc')})
                $('#inputcermos').on('click',()=>{vinculares('#inputcerfile','#inputcerfilevinc')})
                $('#inputaniomos').on('click',()=>{vinculares('#inputaniofile','#inputaniofilevinc')})

                function test(){alert('test');}
                function regresar(){
                    $.ajax(
                        {
                            url: 'datos.php',
                            type: 'post',
                            dataType: 'json',
                            data: {
                                rfc: $('#rfc').data('nombre'),
                            }
                        }
                    ).done(
                        function(data){
                            $('#inputName').val(data[0][0]);
                            $('#inputApellidoP').val(data[0][1]);
                            $('#inputApellidoM').val(data[0][2]);
                            $('#inputEscuela').val(data[0][3]);
                            $('#inputClaveP').val(data[0][4]);
                            $('#inputCategoria').val(data[0][5]);
                            $('#inputRFC').val(data[0][6]);
                            $('#inputCorreo').val(data[0][7])
                            $('#inputDescripcion').val(data[0][8]);
                        }
                    );
                }

                function regresaracademiaone(){
                    $.ajax(
                        {
                            url: 'datosa.php',
                            type: 'post',
                            dataType: 'json',
                            data: {
                                rfc: $('#rfc').data('nombre'),
                            }
                        }
                    ).done(
                        function(data){
                            $('#inputlic').val(data[0][0]);
                            $('#inputliccombo [ value =' + data[0] [1] + ']').attr("selected",true);
                            $('#inputlicfile').val(data[0][2]);
                            $('#inputesp').val(data[0][3]);
                            $('#inputespcombo [ value =' + data[0] [4] + ']').attr("selected",true);
                            $('#inputespfile').val(data[0][5]);
                            $('#inputmae').val(data[0][6]);
                            $('#inputmaecombo [ value =' + data[0] [7] + ']').attr("selected",true);
                            $('#inputmaefile').val(data[0][8]);
                            $('#inputdoc').val(data[0][9]);
                            $('#inputdoccombo [ value =' + data[0] [10] + ']').attr("selected",true);
                            $('#inputdocfile').val(data[0][11]);
                        }
                    );
                }


                function regresaracademiatwo(){
                    $.ajax(
                        {
                            url: 'datosb.php',
                            type: 'post',
                            dataType: 'json',
                            data: {
                                rfc: $('#rfc').data('nombre'),
                            }
                        }
                    ).done(
                        function(data){
                            $('#inputidioma').val(data[0][0]);
                            $('#inputidiomacombo [ value =' + data[0] [1] + ']').attr("selected",true);
                            $('#inputidiomafile').val(data[0][2]);
                            $('#inputcer').val(data[0][3]);
                            $('#inputcercombo [ value =' + data[0] [4] + ']').attr("selected",true);
                            $('#inputcerfile').val(data[0][5]);
                        }
                    );
                }


                function regresarpermanencia(){
                    $.ajax(
                        {
                            url: 'datospermanencia.php',
                            type: 'post',
                            dataType: 'json',
                            data: {
                                rfc: $('#rfc').data('nombre'),
                            }
                        }
                    ).done(
                        function(data){
                            $('#inputanio').val(data[0][0]);
                            $('#inputaniofile').val(data[0][1]);
                        }
                    );
                }


                function categorias(){
                    $('#inputDescripcion').val('ESCRIBE LA CLAVE DE LA CATEGORIA')
                    $('#inputDescripcion').css({'color':'red'});
                    $.ajax(
                        {
                            url: 'categorias.php',
                            type: 'post',
                            dataType: 'json',
                            data: {
                                categoria: $('#inputCategoria').val(),
                            }
                        }
                    ).done(
                        function(data){
                            $('#inputDescripcion').val(data[0][0]);
                            $('#inputDescripcion').css({'color':'black'});
                        }
                    );
                }

                function guardaracademiaone(){
                    $.ajax(
                        {
                            url: 'guardaracademiaone.php',
                            type: 'post',
                            dataType: 'json',
                            data: {
                                rfc: $('#rfc').data('nombre'),
                                inputlic: $('#inputlic').val(),
                                inputliccombo: $('#inputliccombo').val(),
                                inputlicfilevinc: $('#inputlicfile').val(),
                                inputesp: $('#inputesp').val(),
                                inputespcombo: $('#inputespcombo').val(),
                                inputespfilevinc: $('#inputespfile').val(),
                                inputmae: $('#inputmae').val(),
                                inputmaecombo: $('#inputmaecombo').val(),
                                inputmaefilevinc: $('#inputmaefile').val(),
                                inputdoc: $('#inputdoc').val(),
                                inputdoccombo: $('#inputdoccombo').val(),
                                inputdocfilevinc: $('#inputdocfile').val()
                            }
                        }
                    ).done(
                        function(data){
                            $('#status_datos_2').append(data);

                        }
                    );
                }



                function guardaracademiatwo(){
                    $.ajax(
                        {
                            url: 'guardaracademiatwo.php',
                            type: 'post',
                            dataType: 'json',
                            data: {
                                rfc: $('#rfc').data('nombre'),
                                inputidioma: $('#inputidioma').val(),
                                inputidiomacombo: $('#inputidiomacombo').val(),
                                inputidiomafile: $('#inputidiomafile').val(),
                                inputcer: $('#inputcer').val(),
                                inputcercombo: $('#inputcercombo').val(),
                                inputcerfile: $('#inputcerfile').val()
                            }
                        }
                    ).done(
                        function(data){
                            $('#status_datos_2').append(data);

                        }
                    );
                }

                function guardarpermanencia(){
                    $.ajax(
                        {
                            url: 'guardarpermanencia.php',
                            type: 'post',
                            dataType: 'json',
                            data: {
                                rfc: $('#rfc').data('nombre'),
                                inputanio: $('#inputanio').val(),
                                inputaniofile: $('#inputaniofile').val()
                            }
                        }
                    ).done(
                        
                            alert('Al parecer ha llenado el formulario')

                        
                    );
                }




                function guardardatospersonales(){
                    $.ajax(
                        {
                            url: 'guardardatos.php',
                            type: 'post',
                            dataType: 'json',
                            data: {
                                inputName: $('#inputName').val(),
                                inputApellidoP: $('#inputApellidoP').val(),
                                inputApellidoM: $('#inputApellidoM').val(),
                                inputEscuela: $('#inputEscuela').val(),
                                inputClaveP: $('#inputClaveP').val(),
                                inputCategoria: $('#inputCategoria').val(),
                                inputDescripcion: $('#inputDescripcion').val(),
                                inputRFC: $('#inputRFC').val(),
                                inputCorreo: $('#inputCorreo').val()
                            }
                        }
                    ).done(
                        function(data){
                            $('#status_datos').append(data);

                        }
                    );
                }



                    function vinculares(dataone,datatwo){
                        
                                    $.ajax(
                                        {
                                            url: 'abrir.php',
                                            type: 'post',
                                            dataType: 'json',
                                            data: {
                                                liga: $(dataone).val(),
                                            }
                                        }
                                    ).done(
                                        function(data){
                                            $(datatwo).replaceWith(data);

                                        }
                                    );
                                }


               
                

        </script>
    
</body>
</html>
