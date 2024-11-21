  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sajjayana</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="style.css">

</head>
<body bgcolor="red">
    <section id="header"> 
        <a href="#"><img src="bicons.jpg" class="logo" alt=""></a> 
        <div>
             <ul id="navbar">
                 <li><a   href=" v.offier.php">Home</a></li> 
                <li><a   class="active" href="c.php">Benificary Details</a></li>
                <li><a    href="Upload.php">Upload reprt</a></li>

                  <li><a href="cs.php">Contact</a></li>
             </ul>
        </div>   
    </section>
     

         <section id="page-header" class="about-header">
       
        <h2>#Benificary</h2>
        
        <p>add and view</p>
        
    </section>
    <section id="star">
        <style>
    body {
        font-family: Arial, sans-serif;
        background-color: seagreen;
    }
    h2 {
        text-align: center;
        color: #333;
    }
    form {
        max-width: 500px;
        margin: 0 auto;
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    }
    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }
    input[type="text"],
    input[type="number"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style> 
</head>
<body>
    <h2><br><br>Beneficiary Information <br><br></h2>
    <form method="post">
        <label for="BeneficiaryID">Beneficiary ID:</label><br>
    <input type="text" id="BeneficiaryID" name="BeneficiaryID" required><br><br>

    <label for="BeneficiaryName">Beneficiary Name:</label><br>
    <input type="text" id="BeneficiaryName" name="BeneficiaryName" required><br><br>

    <label for="BeneficiaryLocation">Beneficiary Location:</label><br>
    <input type="text" id="BeneficiaryLocation" name="BeneficiaryLocation" required><br><br>

    <label for="ContactPhone">Contact Phone:</label><br>
    <input type="text" id="ContactPhone" name="ContactPhone" required><br><br>

    <label for="user_id">User ID:</label><br>
    <input type="text" id="user_id" name="user_id" required><br><br>

    <label for="rank">Rank:</label><br>
    <input type="number" id="rank" name="rank" required><br><br>
         <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Your PHP code here to handle form submission
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "temples";
        
        $conn = new mysqli($servername, $username, $password, $database);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        // Ensure all required fields are filled
        if (isset($_POST['BeneficiaryID'], $_POST['BeneficiaryName'], $_POST['BeneficiaryLocation'], $_POST['ContactPhone'], $_POST['user_id'], $_POST['rank'])) {
            $BeneficiaryID = $_POST['BeneficiaryID'];
            $BeneficiaryName = $_POST['BeneficiaryName'];
            $BeneficiaryLocation = $_POST['BeneficiaryLocation'];
            $ContactPhone = $_POST['ContactPhone'];
            $user_id = $_POST['user_id'];
            $rank = $_POST['rank'];
            
            $sql = "INSERT INTO beneficiary (BeneficiaryID, BeneficiaryName, BeneficiaryLocation, ContactPhone, user_id, `rank`)
                    VALUES ('$BeneficiaryID', '$BeneficiaryName', '$BeneficiaryLocation', '$ContactPhone', '$user_id', '$rank')";
            
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Please fill in all required fields.";
        }
        
        $conn->close();
    }
    ?>
     
    <table id="beneficiaryTable">
    <thead>
        <tr>
            <th>Beneficiary ID</th>
            <th>Beneficiary Name</th>
            <th>Beneficiary Location</th>
            <th>Contact Phone</th>
            <th>User ID</th>
            <th>Rank</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <!-- PHP code to fetch and display beneficiary records -->
        <?php
         $servername = "localhost";
$username = "root";
$password = "";
$database = "temples";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch beneficiary records from the database
$sql = "SELECT BeneficiaryID, BeneficiaryName, BeneficiaryLocation, ContactPhone, user_id, `rank` FROM beneficiary";
$result = $conn->query($sql);

// Display fetched records in the HTML table
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["BeneficiaryID"] . "</td>";
        echo "<td>" . $row["BeneficiaryName"] . "</td>";
        echo "<td>" . $row["BeneficiaryLocation"] . "</td>";
        echo "<td>" . $row["ContactPhone"] . "</td>";
        echo "<td>" . $row["user_id"] . "</td>";
        echo "<td>" . $row["rank"] . "</td>";
         
    }
} else {
    echo "<tr><td colspan='7'>No records found</td></tr>";
}

// Close connection
$conn->close();
        ?>
    </tbody>
</table>

<script>
// JavaScript functions to handle update, delete, and view actions
function updateBeneficiary(beneficiaryID) {
    // Send AJAX request to update beneficiary with ID beneficiaryID
    // Handle response appropriately
}

function deleteBeneficiary(beneficiaryID) {
    // Send AJAX request to delete beneficiary with ID beneficiaryID
    // Handle response appropriately
}

function viewBeneficiary(beneficiaryID) {
    // Send AJAX request to view details of beneficiary with ID beneficiaryID
    // Handle response by displaying details in a modal or similar
}
</script>
 
</body>
</section>

    <footer class="section-p1"> 
    <div class="col"> 
        <img class="logo" src="ss.jpg" alt=""> 
        <h4>Contact</h4> 
        <p><strong>Address: </strong> 562 walpala road, Street 32, Imaduwa. </p> <p><strong>Phone:</strong> (+94) 0770891303 / (+91) 01 2345 6789</p> <p> </p> 
        <div class="follow"> 
            <h4>Follow us</h4> 
            <div class="icon"> 
            <i class="fab fa-facebook-f"></i> <i class="fab fa-twitter"></i> 
            <i class="fab fa-instagram"></i>  
             <i class="fab fa-youtube"></i> 
        </div> 
    </div> 
    
     
     
            <div class="copyright"> 
                <p>© 2024, Religious Website</p>  
            </div>
        

</footer>

    <script src="script.js"></script>
</body>
</html>


