 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sajjayana</title>
     
    <link rel="stylesheet" href="style.css">

</head>
<body bgcolor="#75081d">
    <section id="header"> 
        <a href="#"><img src="bicons.jpg" class="logo" alt=""></a> 
        <div>
             <ul id="navbar">
                <li><a   href="v.offier.php">Home</a></li> 
                <li><a    href="c.php">Benificary Details</a></li>
                <li><a class="active" href="Upload.php">Upload reprt</a></li>
                 <li><a href="cs.php">Contact</a></li>
             </ul>
        </div>   
    </section>
     <section id="opem"> 
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
     </section>
     

    <footer class="section-p1"> 
    <div class="col"> 
        <img class="logo" src="ss.jpg" alt=""> 
        <h4>Contact</h4> 
        <p><strong>Address: </strong> 562 walpala road, Street 32, Imaduwa. </p> <p><strong>Phone:</strong> (+94) 0770891303 / (+91) 01 2345 6789</p> <p> </p> 
        <div class="follow"> 
            <h4>Follow us</h4> 
            <div class="icon"> 
            <i class="fab fa-facebook-f"></i> <i class="fab fa-twitter"></i> 
            <i class="fab fa-instagram"></i>  
             <i class="fab fa-youtube"></i> 
        </div> 
    </div> 
    
     
     
            <div class="copyright"> 
                <p>© 2024, Religious Website</p>  
            </div>

</footer>

    <script src="script.js"></script>
</body>
</html>


