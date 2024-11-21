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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $type = $_POST["roles"];
    


       $fullname = $_POST["fullname"];
    
    // Prepare SQL statement to insert data into Users table
    $sql = "INSERT INTO user (User_name, Password, Email, Full_Name, gender, type) VALUES (?, ?, ?, ?, ?, ?)";
    
    // Prepare and bind parameters to avoid SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $username, $password, $email, $fullname, $gender, $type); // Updated bind parameters
    
    // Execute the statement
    if ($stmt->execute()) {
        // Redirect after successful submission
        header("Location: login.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Close statement and database connection
    $stmt->close();
    $conn->close();
}
?>
