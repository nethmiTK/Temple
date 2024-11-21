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

// Initialize total donation amount
$totalAmount = 0;

// Check if the query was successful
if ($result) {
    // Loop through the results and sum up the donation amounts
    while ($row = $result->fetch_assoc()) {
        $totalAmount += $row['DonationAmount'];
    }

    // Close the result set
    $result->close();
} else {
    // Error handling if the query fails
    echo "Error: " . $conn->error;
}

// Close the database connection
$conn->close();

// Output the total donation amount
echo "The total donation amount is: $" . number_format($totalAmount, 2);
?>
