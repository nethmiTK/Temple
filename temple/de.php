<?php
// Define your database connection details
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

// Check if the festival ID is provided in the URL
if (isset($_GET['id'])) {
    $festivalID = $_GET['id'];
    
    // Prepare and execute SQL statement to delete the festival entry
    $sql = "DELETE FROM festivals WHERE FestivalID = $festivalID";
    
    if ($conn->query($sql) === TRUE) {
        // Redirect back to the festival form after deletion
        header("Location: de.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
        echo "<script>alert('New record deleted successfully');</script>";
            header("Location: delete.php");


 }

// Close connection
$conn->close();
?>
