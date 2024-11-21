 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sajjayana</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="style.css">
</head>
<body bgcolor="green">

    <section id="header"> 
        <a href="#"><img src="bicons.jpg" class="logo" alt=""></a> 
        <div>
            <ul id="navbar">
                <li><a   href="Devotee.html">Home</a></li> 
                <li><a href="festivals.php">Festival</a></li>
                <li><a class="active" href="book.php">Book Sermons</a></li>
                 <li><a href="contact.php">Contact</a></li>
                 
            </ul>
        </div>   
    </section>
     
    
    <h2>   <font color="red">                              Sermon Booking </h2></font>  
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="userID">User ID:</label><br>
        <input type="number" id="userID" name="userID" required><br><br>

        <label for="bookingDate">Booking Date:</label><br>
        <input type="date" id="bookingDate" name="bookingDate" required><br><br>

        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address" required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50"></textarea><br><br>

        <label for="totalMembers">Total Members:</label><br>
        <input type="number" id="totalMembers" name="totalMembers" min="1" required><br><br>

        <label for="sermonDateTime">Sermon Date and Time:</label><br>
        <input type="datetime-local" id="sermonDateTime" name="sermonDateTime" required><br><br>

        <input type="submit" value="Submit">
    </form>
 
     
     
            <div class="copyright"> 
                <p>© 2024, Religious Website</p>  
            </div>

</footer>

    <script src="script.js"></script>
</body>
</html>
 
 <?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "temples";

// Establishing connection to the database
$conn = new mysqli($servername, $username, $password, $database);

 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieving form data and ensuring they are safe to use
    $userID = intval($_POST['userID']);
    $bookingDate = $_POST['bookingDate'];
    $address = $conn->real_escape_string($_POST['address']);
    $message = $conn->real_escape_string($_POST['message']);
    $totalMembers = intval($_POST['totalMembers']);
    $sermonDateTime = $_POST['sermonDateTime'];

     $sql = "INSERT INTO SermonBooking (UserID, BookingDate, Address, Message, TotalMembers, SermonDateTime) 
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

     $stmt->bind_param("isssis", $userID, $bookingDate, $address, $message, $totalMembers, $sermonDateTime);
    $stmt->execute();

     if ($stmt->affected_rows > 0) {
        echo "Data inserted successfully.";
    } else {
        echo "Error inserting data: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

 $conn->close();
?>