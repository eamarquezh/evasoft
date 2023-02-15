

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Importación</title>
</head>
<body>
	
<input id="fileupload" type="file" name="fileupload" />
<button id="upload-button" onclick="uploadFile()"> Upload </button>

<script>
    var txtFile = document.getElementById('file');
    var btnEnviar = document.getElementById('enviar');

    

  async function uploadFile() {
      let formData = new FormData();           
      formData.append("file", fileupload.files[0]);
      await fetch('upload.php', {
        method: "POST", 
        body: formData
      });    
      console.log('The file has been uploaded successfully.');
  }


</script>

</body>
</html>