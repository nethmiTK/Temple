 <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "temples";

try {
    // Connect to the database
    $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    // Set PDO to throw exceptions for errors
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare SQL query to retrieve the donation amount for the last ID number
    $sql = "SELECT DonationAmount
            FROM donationpass
            WHERE id = (SELECT MAX(id) FROM donationpass)";

    // Execute the query
    $stmt = $pdo->query($sql);

    // Fetch the result
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        // Retrieve the last donation amount
        $lastDonationAmount = $row['DonationAmount'];
        echo "The donation amount associated with the last ID number is: $lastDonationAmount";
    } else {
        echo "No donation found.";
    }
} catch (PDOException $e) {
    // Handle database connection errors
    echo "Error: " . $e->getMessage();
}
?>
