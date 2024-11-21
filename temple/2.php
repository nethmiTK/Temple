 <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sajjayana";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $donation_id = $_POST['donation_id'];
    $reporting_value = $_POST['reporting_value'];

    // Perform the update in the database
    $sql = "UPDATE donations SET Reporting = ? WHERE DonationID = ?";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param('ii', $reporting_value, $donation_id);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Reporting attribute updated successfully.";
    } else {
        echo "Error updating reporting attribute: " . $conn->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
