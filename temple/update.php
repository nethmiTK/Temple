 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sajjayana</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="style.css">
     <style>
        body {
              
            background-color: rgba(255, 166, 0, 0.5); /* Mango color with 50% opacity */
        }
    </style>
 </head>
<body>
    <section id="header"> 
        <a href="#"><img src="bicons.jpg" class="logo" alt=""></a> 
        <div>
            <ul id="navbar">
                <li><a href="thero.html">Home</a></li> 
                <li><a href="add.php">Festival add</a></li>
                <li><a class="active" href="update.php">Festival update</a></li>
                <li><a href="delete.php">Festival delete</a></li>
                <li><a href="view.php">view seroms</a></li>
                <li><a href="manage.php">Manage donations</a></li>
            </ul>
        </div>   
    </section>

    <section id="page-header" class="about-header">       
        <h2>#Festivals</h2>
        <p>Enjoy and Calm</p>    
    </section>

    <section id="st"><br><br>
        <h5 style="color: green;">Festival Updated data</h5>

         <table>
            <thead>
                <tr>
                    <th>Festival Name</th>
                    <th>Date</th>
                    <th>Month</th>
                    <th>Location</th>
                    <th>Budget</th>
                    <th>Theme</th>
                    <th>Activities</th>
                    <th>User ID</th>
                    <th>Action</th>
                </tr>
            </thead><br>
            <tbody>
                <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "temples";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM festivals";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["FestivalName"] . "</td>";"<br>";
        echo "<td>" . $row["Date"] . "</td>";
        echo "<td>" . $row["Month"] . "</td>";
        echo "<td>" . $row["Location"] . "</td>";
        echo "<td>" . $row["Budget"] . "</td>";
        echo "<td>" . $row["Theme"] . "</td>";
        echo "<td>" . $row["Activities"] . "</td>";
        echo "<td>" . $row["UserID"] . "</td>";
        // Add an "Edit" button/link with the festival ID as a parameter
        echo "<td><a href='form.php?id=" . $row["FestivalID"] . "'>Edit</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='9'>No festivals found</td></tr>";
}

$conn->close();
?>

             </tbody>
        </table>
    </section>

    <footer class="section-p1"> 
        <div class="col"> 
            <img class="logo" src="ss.jpg" alt=""> 
            <h4>Contact</h4> 
            <p><strong>Address: </strong> 562 walpala road, Street 32, Imaduwa. </p>
            <p><strong>Phone:</strong> (+94) 0770891303 / (+91) 01 2345 6789</p>
            <div class="follow"> 
                <h4>Follow us</h4> 
                <div class="icon"> 
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>  
                    <i class="fab fa-youtube"></i> 
                </div> 
            </div> 
            <div class="copyright"> 
                <p>© 2024, Religious Website</p>  
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
