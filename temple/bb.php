 <?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $donationAmount = $_POST["donationAmount"];
    $donationDate = $_POST["donationDate"];

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

    // Prepare SQL statement to insert data
    $sql = "INSERT INTO  donationpass (DonationAmount, DonationDate) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ds", $donationAmount, $donationDate);

    // Execute the statement
    if ($stmt->execute() === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
