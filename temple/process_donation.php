 <?php
// Database connection details
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

// Retrieve form data
$donor_id = $_POST['donor_id'];

$donor_name = $_POST['donor_name'];
$donor_email = $_POST['donor_email'];
$donation_purpose = $_POST['donation_purpose'];
$donation_amount = $_POST['donation_amount'];
$donation_date = $_POST['donation_date'];
$reporting = $_POST['reporting'];

// SQL query to insert data into the donations table
$sql = "INSERT INTO donation (DonorID,DonorName, DonorEmail, DonationPurpose, DonationAmount, DonationDate, Reporting) 
        VALUES ('$donor_id','$donor_name', '$donor_email', '$donation_purpose', '$donation_amount', '$donation_date', '$reporting')";

// Execute the query and check for success
  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Donation submitted successfully!And end the  report to  your email address later');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Close the database connection
$conn->close();
?>
