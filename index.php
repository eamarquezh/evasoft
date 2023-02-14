<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>evasoft</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    
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
                <h1>Secretaria de Educacion Pública de Hidalgo</h1>
            </div>
        </div>
    </nav>
</header>

<main class="">
    <h2 class="text-center text-dark mt-5">SIECEDDEN</h2>
<div class="card text-center mx-auto w-75 mb-3">
    <div class="card-header">
        Inicio de sesión
    </div>
    <div class="card-body">
        <form id="ingreso" action="autenticar.php" method="post">
            <label for="username">Nombre de usuario:</label><br>
            <input type="text" id="username" name="username"><br>
            <label for="password">Contraseña:</label><br>
            <input type="password" id="password" name="password"><br>
            <button id="enviar" class="btn btn-primary">enviar</button>
          </form>
          
    </div>
<div id="estatus">
    <?php 
        if(isset($_GET['error'])){
            $error = $_GET['error'];
            echo '<div class="alert alert-danger">'.$error.'</div>';
        }
    ?>
</div>


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
<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>