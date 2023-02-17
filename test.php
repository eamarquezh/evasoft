

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Importación</title>
   <link rel="stylesheet" href="css/soloscroll.css">
   <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body onload="inicio()">
	
<input id="fileupload" type="file" name="fileupload" /><br>
<button id="upload-button"> Upload </button><br>



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



<script>
    var txtFile = document.getElementById('file');
    var btnUpload = document.getElementById('upload-button');
    btnUpload.addEventListener('click',uploadFile);

    
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