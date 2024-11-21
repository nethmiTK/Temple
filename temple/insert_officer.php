 <?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "temples";

// Establishing connection to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieving data from the form
$BeneficiaryID = $_POST['BeneficiaryID'];
$BeneficiaryName = $_POST['BeneficiaryName'];
$BeneficiaryLocation = $_POST['BeneficiaryLocation'];
$ContactPhone = $_POST['ContactPhone'];
$user_id = $_POST['user_id'];
$rank = $_POST['rank'];

// SQL query to insert data into the database
$sql = "INSERT INTO  beneficiary (BeneficiaryID, BeneficiaryName, BeneficiaryLocation, ContactPhone, user_id, `rank`)
        VALUES ('$BeneficiaryID', '$BeneficiaryName', '$BeneficiaryLocation', '$ContactPhone', '$user_id', '$rank')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Closing the database connection
$conn->close();
?>
