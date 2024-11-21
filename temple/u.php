<?php
$targetDir = "uploads/"; // Directory where uploaded files will be stored
$targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]); // Full path of the uploaded file

// Check if file has been uploaded successfully
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
   echo '<meta http-equiv="refresh" content="3; url=manage.php">';

} else {
    echo "Sorry, there was an error uploading your file.";
}
?>
