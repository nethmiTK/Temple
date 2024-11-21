<?php
 $servername = "localhost";
$username = "root";
$password = "";
$database = "temples";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $sermonDateTime = $_POST["sermonDateTime"];
    // Other form fields can be retrieved similarly

    // SQL query to insert data into your database table
    $sql = "INSERT INTO  sermonbooking (SermonDateTime) 
            VALUES ('$sermonDateTime')";

    if ($conn->query($sql) === TRUE) {
        echo "View added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
