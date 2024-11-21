 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToToo</title>
    <style>
          .grid-container {
            display: grid;
            grid-template-columns: 1fr 1fr; /* Two equal columns */
            gap: 20px; /* Gap between grid items */
        }

        .grid-item {
            text-align: left; /* Align text to the left */
            padding: 10px; /* Add padding */
            border: 1px solid #ccc; /* Add border */
            border-radius: 5px; /* Add border radius */
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: darkblue;
        }
         h2 {
            color: darkorange; /* Set text color to dark orange */
            font-size: 24px; /* Set font size */
            font-family: Arial, sans-serif; /* Specify font family */
            text-align: center; /* Center align the text */
             background-color:  
            border-radius: 10px; /* Add rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
            margin-bottom: 20px; /* Add some space at the bottom */
        }
     </style>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="style.css">
</head>
<body  bgcolor="purple">
     

    <section id="header"> 
        <a href="#"><img src="bicons.jpg" class="logo" alt=""></a> 
        <div>
            <ul id="navbar">
                <li><a href="Devotee.html">Home</a></li> 
                <li><a class="active" href="festival.php">Festival</a></li>
                <li><a   href="book.php">Book sermon</a></li>
                 <li><a   href="contact.php">Contact</a></li>
                            </ul>
        </div>   
    </section>

    <section id="page-header" class="about-header">
       
        <h2>#festivals</h2>
        
        <p>Enjoy and calm</p>
        
    </section>
    <section id="start">

    <h2>Festival Details</h2>
    <table>
        <tr>
            <th>Festival Name</th>
            <th>Date</th>
            <th>Location</th>
            <th>Budget</th>
            <th>Theme</th>
            <th>Activities</th>
        </tr>
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

        $sql = "SELECT FestivalName, Date, Location, Budget, Theme, Activities FROM festivals";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["FestivalName"] . "</td><td>" . $row["Date"] . "</td><td>" . $row["Location"] . "</td><td>" . $row["Budget"] . "</td><td>" . $row["Theme"] . "</td><td>" . $row["Activities"] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </table>
</section>
    
     
    <footer class="section-p1"> 
        <div class="col"> 
        <img class="logo" src="logo.png" alt=""> 
        <h4>Contact</h4> 
        <p><strong>Address: </strong> 64/5 walpala  Road, paragoda Street 32, batemulla</ p> <p><strong>Phone:</strong> (+94) 0770891303 / (+91) 01 2345 6789</p> <p><strong></p> 
         
        

</footer>

    <script src="script.js"></script>
</body>
</html>