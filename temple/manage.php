   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sajjayana</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="style.css">
    <style>
    #heros {
        background-image: url('donate.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 50px;  
        text-align: center;  
    }
    body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        /* Header styles */
        #header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }

        #header .logo {
            height: 50px;
            margin-left: 20px;
        }

        #navbar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        #navbar li {
            display: inline;
            margin: 0 10px;
        }

        #navbar li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        #navbar li a:hover {
            color: #ff6600;
        }

        /* Hero section styles */
        #heros {
            background-image: url('donate.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 50px;  
            text-align: center;
            color: #fff;
        }

        /* Form section styles */
        #bb {
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            max-width: 600px;
        }

        #bb h1, #bb h2 {
            color: #333;
        }

        #bb label {
            display: block;
            margin-bottom: 10px;
        }

        #bb input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #bb button {
            background-color: #ff6600;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        #bb button:hover {
            background-color: #ff8533;
        }

        /* Footer styles */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        footer p {
            margin: 5px 0;
        }

        .follow {
            margin-top: 20px;
        }

        .follow i {
            font-size: 20px;
            margin: 0 10px;
            color: #fff;
            cursor: pointer;
        }

        .copyright {
            margin-top: 20px;
        }

        /* Responsive styles */
        @media only screen and (max-width: 768px) {
            #header .logo {
                height: 40px;
            }

            #navbar li {
                margin: 0 5px;
            }

            #heros {
                padding: 30px;
            }

            #bb {
                padding: 15px;
            }
        }
</style>
</head>
<body>
    <section id="header"> 
        <a href="#"><img src="bicons.jpg" class="logo" alt=""></a> 
        <div>
            <ul id="navbar">
                 <li><a   href="thero.html">Home</a></li> 
                <li><a   href="add.php">Festival add</a></li>
                <li><a   href="update.php">Festival update</a></li>
                 <li><a  href="delete.php">Festival  delete</a></li>
                <li><a    href="view.php">view seroms</a></li>
                <li><a class="active" href="manage.php">Manage donations</a></li>



             </ul>
        </div>   
    </section>
     <section id="heros">
           
        <h2>#donation</h2>
        
        <p>..........</p>
     </section>
      
     <section id=bb>
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

     </section>
     <section>
         <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Details</title>
</head>
<body bgcolor="darkblue">

    <h1>Donation Details</h1>

    <button onclick="viewDonationDetails()">View Donation Details</button>

    <div id="donationDetails"></div>

    <script>
        function viewDonationDetails() {
            // Make an AJAX request to fetch donation details from the server
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("donationDetails").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "amount.php", true); // Change the URL to match your server-side script
            xhttp.send();
        }
    </script>

 
<body>
     <form action="bb.php" method="post">
        <label for="donationAmount">Get Donation Amount:</label>
        <input type="number" id="donationAmount" name="donationAmount" step="0.01" required>
        <br>
        <label for="donationDate">Donation Date:</label>
        <input type="date" id="donationDate" name="donationDate" required>
        <br>
        <button type="submit">Submit Donation</button>
    </form>
    <section id=n>
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
        echo "The donation amount associated now : $lastDonationAmount";
    } else {
        echo "No donation found.";
    }
} catch (PDOException $e) {
    // Handle database connection errors
    echo "Error: " . $e->getMessage();
}
?>

    </section>
    <form>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" min="1" required>
        <br>
        <label for="unitPrice">Unit Price:</label>
        <input type="number" id="unitPrice" name="unitPrice" min="0.01" step="0.01" required>
        <br>
        <button type="button" onclick="calculateTotal()">Calculate Total</button>
    </form>
    <p id="totalPriceLabel">Total Price: <span id="totalPrice">0.00</span></p>

    <script>
         function calculateTotal() {
    // Get the quantity and unit price input values
    var quantity = parseFloat(document.getElementById('quantity').value);
    var unitPrice = parseFloat(document.getElementById('unitPrice').value);

    // Calculate the total price
    var totalPrice = quantity - unitPrice;

    // Display the total price
    document.getElementById('totalPrice').textContent = totalPrice.toFixed(2);

    // Send the total price to the server
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "tt.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);  
        }
    };
    xhr.send("totalPrice=" + totalPrice);
}
 
    </script>
</body>
</html>

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


