    <?php
// Database connection parameters
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

// Retrieve username and password from the POST request
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

 


// Query the database to check if the provided credentials are valid
$sql = "SELECT * FROM user WHERE user_name = '$username' AND password = '$password'  AND type='$role' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Valid credentials
    echo json_encode(array("success" => true));
} else {
    // Invalid credentials
    echo json_encode(array("success" => false));
}

$conn->close();

?>