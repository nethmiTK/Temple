<h2>Beneficiary Information Form</h2>
    <form id="beneficiaryForm" method="post" enctype="multipart/form-data">
        

        <label for="file">Upload File:</label><br>
        <input type="file" id="file" name="file"><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $targetDir = "C:/wamp64/www/temple/uploads/";
        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true);
        }
        $targetFile = $targetDir . basename($_FILES["file"]["name"]);
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
            echo "The file " . basename($_FILES["file"]["name"]) . " has been uploaded.";


        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    ?>