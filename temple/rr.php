<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "temples";

// Establishing connection to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 

// Escape user inputs to prevent SQL injection
$full_name = $conn->real_escape_string($_POST['full_name']);
$email = $conn->real_escape_string($_POST['email']);
$username = $conn->real_escape_string($_POST['user_name']); // corrected
$password = $conn->real_escape_string($_POST['password']);
$gender = $conn->real_escape_string($_POST['gender']);
$role = $conn->real_escape_string($_POST['type']); // corrected

// Insert data into user table
$sql = "INSERT INTO user (Full_Name, Email, user_name, password, gender, type) 
        VALUES ('$full_name', '$email', '$username', '$password', '$gender', '$role')";

if ($conn->query($sql) === TRUE) {
  
    header('Location: rr1.html');
    exit;    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
