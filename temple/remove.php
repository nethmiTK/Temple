 <!DOCTYPE html>
<html>
<head>
    <title>Display Certificate</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }
        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
     <section id="header"> 
        <a href="#"><img src="bicons.jpg" class="logo" alt=""></a> 
        <div>
             <ul id="navbar">
                <li><a class="active" href="Donator.html">Home</a></li> 
                <li><a    href="do.php">Donations</a></li>
                <li><a href="certificate.php">Cetificate</a></li>
                 <li><a href="cs.php">Contact</a></li>
             </ul>
        </div>   
    </section>
    <section id="hero">
        <h1>Welcome</h1>
        <h2>This is a official website of Sajjayana</h2>
         <p> Embark on a sacred digital journey within the temple website<br> where every detail is meticulously preserved to enlighten and inspire</p>
     </section>

<?php
// Path to your certificate image
$imagePath = "certificate.jpg";

// Check if the file exists
if (file_exists($imagePath)) {
    // Display the image
    echo '<img src="' . $imagePath . '" alt="Certificate Image">';
    // Prompt to download the certificate
    echo '<p>You can download your certificate now.  :</p>';
    // Form to input donation ID
    echo '<form action="download_certificate.php" method="post">';
     echo '  <input type="submit" value="Download Certificate">';
    echo '</form>';
} else {
    echo "Image not found.";
}
?>

</body>
</html>
