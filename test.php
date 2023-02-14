

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Importación</title>
</head>
<body>
	
<form id="myForm" enctype="multipart/form-data" method="post" action="">
   CSV File:<input type="file" name="file" id="file">
   <input id="enviar" type="submit" value="Enviar" name="enviar">
</form>

<script>
    var txtFile = document.getElementById('file');
    var btnEnviar = document.getElementById('enviar');

    
    btnEnviar.addEventListener('click',alert);
    myForm.addEventListener('submit', event => {
    event.preventDefault();
    });
    
    function autenticar() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        document.getElementById("estatus").innerHTML = this.responseText;
    }
    xhttp.open("GET", "autenticar.php?username="+txtUsr.value+"&password="+txtPas.value+"");
    xhttp.send();
    }

    function alert(){
      console.log('Ready: '+ txtFile.value)
    }

</script>

</body>
</html>