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
    .about-header {
        background-image: url('s.jpg');
         background-size: 100% 100%;
         background-position: center
   width: 100%;
  height: 40vh;
  background-size: cover;
  display: flex;
  justify-content: center;
  text-align: center;
  flex-direction: column;
  padding: 14px;  
    }
     #l {
        background-color: brown; /* Set the background color to brown */
        padding: 20px; /* Optional: Add padding for better readability */
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
                <li><a href="update.php">Festival update</a></li>
                <li><a href="delete.php">Festival delete</a></li>
                <li><a class="active" href="view.php">View sermons</a></li>
                <li><a href="manage.php">Manage donations</a></li>
            </ul>
        </div>   
    </section>
    <section id="page-head" class="about-header">
       
        <h2>#Booking</h2>
        
        <p>Book sermons</p>
        
    </section>
    <section id="l">
        <table>
            <thead>
                <tr>
                    <th>BookingID</th>
                    <th>UserID</th>
                    <th>Booking Date</th>
                    <th>Address</th>
                    <th>Message</th>
                    <th>Total Members</th>
                    <th>Sermon Date Time</th>
                </tr>
            </thead>
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

                // SQL query to fetch all data from the sermonbooking table
                $sql = "SELECT * FROM sermonbooking";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["BookingID"] . "</td>";
                        echo "<td>" . $row["UserID"] . "</td>";
                        echo "<td>" . $row["BookingDate"] . "</td>";
                        echo "<td>" . $row["Address"] . "</td>";
                        echo "<td>" . $row["Message"] . "</td>";
                        echo "<td>" . $row["TotalMembers"] . "</td>";
                        echo "<td>" . $row["SermonDateTime"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>0 results</td></tr>";
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
                    <i class="fab fa-facebook-f"></i> <i class="fab fa-twitter"></i> 
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
