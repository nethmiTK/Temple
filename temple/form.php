 <?php
// Define your database connection details
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

// Check if the festival ID is provided in the URL
if (isset($_GET['id'])) {
    $festivalID = $_GET['id'];
    
    // Retrieve festival data from the database based on the provided ID
    $sql = "SELECT * FROM festivals WHERE FestivalID = $festivalID";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // Fetch festival details
        $row = $result->fetch_assoc();
        $festivalName = $row['FestivalName'];
        $date = $row['Date'];
        $month = $row['Month'];
        $location = $row['Location'];
        $budget = $row['Budget'];
        $theme = $row['Theme'];
        $activities = $row['Activities'];
        $userID = $row['UserID'];
        
        // Display festival details in an edit form
        echo "<h2>Edit Festival</h2>";
        echo "<form action='update.php' method='post'>";
        echo "<input type='hidden' name='festivalID' value='$festivalID'>";
        echo "Festival Name: <input type='text' name='festivalName' value='$festivalName'><br>";
        echo "Date: <input type='date' name='date' value='$date'><br>";
        echo "Month: <input type='text' name='month' value='$month'><br>";
        echo "Location: <input type='text' name='location' value='$location'><br>";
        echo "Budget: <input type='number' name='budget' value='$budget'><br>";
        echo "Theme: <input type='text' name='theme' value='$theme'><br>";
        echo "Activities: <textarea name='activities'>$activities</textarea><br>";
        echo "User ID: <input type='number' name='userID' value='$userID'><br>";
        echo "<input type='submit' value='Update'>";
        echo "</form>";
         
     } else {
        echo "No festival found with ID: $festivalID";
    }
} else {
    echo "Festival ID is not provided in the URL";
}
?>
