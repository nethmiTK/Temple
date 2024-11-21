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

// Query to select donation amount and date
$query = "SELECT DonationAmount, DonationDate FROM donation";

// Execute the query using $conn
$result = $conn->query($query);

 $donations = array();

 if ($result) {
     while ($row = $result->fetch_assoc()) {
        $donations[] = array(
            'amount' => $row['DonationAmount'],
            'date' => $row['DonationDate']
        );
    }

    // Close the result set
    $result->close();
} else {
    // Error handling if the query fails
    echo "Error: " . $conn->error;
}

 $conn->close();

 foreach ($donations as $donation) {
    echo "Donation Amount: $" . number_format($donation['amount'], 2) . " - Date: " . $donation['date'] . "<br>";
}
?>
