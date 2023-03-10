<?php

// Count total files
$countfiles = count($_FILES['files']['name']);

// Upload directory
$upload_location = "upload/";

$count = 0;
for($i=0;$i < $countfiles;$i++){

   // File name
   $filename = $_FILES['files']['name'][$i];

   // File path
   $parts = explode(".",$filename);
   $path = $upload_location . $_POST['nuevonombre'] .".". end($parts);

   // file extension
   $file_extension = pathinfo($path, PATHINFO_EXTENSION);
   $file_extension = strtolower($file_extension);

   // Valid file extensions
   $valid_ext = array("pdf");

   // Check extension
   if(in_array($file_extension,$valid_ext)){

      // Upload file
      if(move_uploaded_file($_FILES['files']['tmp_name'][$i],$path)){
        $count += 1;
      } 
   }

}

echo $count;
exit;
?>