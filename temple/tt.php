<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["totalPrice"])) {
    // Retrieve the total price from the POST request
    $totalPrice = $_POST["totalPrice"];

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
    $sql = "INSERT INTO donationpass (DonationAmount) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("d", $totalPrice); // 'd' represents a decimal/float value

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
