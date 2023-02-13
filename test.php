<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="myForm" name="formulario" method="post" action="">
  <input type="submit" />
  <button type="button" id="consulta">Consulta</button>
</form>
<script>
    const myForm = document.querySelector('#myForm');

    const btnConsulta = document.querySelector('#consulta');

    myForm.addEventListener('submit', event => {
    event.preventDefault();
    console.log('Envío del formulario');
    });

</script>
</body>
</html>