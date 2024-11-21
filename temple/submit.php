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

// Retrieve form data
$festivalName = $_POST['festivalName'];
$date = $_POST['date'];
$month = $_POST['month'];
$location = $_POST['location'];
$budget = $_POST['budget'];
$theme = $_POST['theme'];
$activities = $_POST['activities'];
$userID = $_POST['userID'];

// Prepare and execute SQL statement
$sql = "INSERT INTO festivals (FestivalName, Date, Month, Location, Budget, Theme, Activities, UserID)
        VALUES ('$festivalName', '$date', '$month', '$location', '$budget', '$theme', '$activities', '$userID')";

 if ($conn->query($sql) === TRUE) {
    // PHP code to output "New record created successfully"
     
    // JavaScript code to display an alert box
    echo "<script>alert('New record created successfully');</script>";
} else {
    // PHP code to output the error message
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Close connection
$conn->close();
?>
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sajjayana</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="style.css">
  <style>
    /* Update form styles */
    footer {
  clear: both;
  margin-top: 20px; /* Add some top margin for spacing */
}
form {
  max-width: 500px;
  margin: 20px auto;
  background: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  /* Add a background gradient */
  background: linear-gradient(to bottom right, #eaf2e3, #d5e8d4);
  /* Update form styles */}
form {
  max-width: 500px;
  margin: 20px auto;
  background: #ffcccc; /* Change background color to red */
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);


}
/* Update form styles */
form {
  max-width: 500px;
  margin: 20px 0;
  background: #ffcccc; /* Change background color to red */
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  float: left; /* Attach form to the left */
  margin-right: 20px; /* Add some right margin for spacing */
}
body {
  background-color: #2ecc71; /* Set background color to green */
}

/* Change label color */
label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
  /* Change label color to green */
  color: #2ecc71;
}

/* Change input field border color */
input[type="text"],
input[type="date"],
input[type="number"],
textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #2ecc71; /* Change border color to green */
  border-radius: 5px;
  box-sizing: border-box;
}

/* Change input field focus border color */
input[type="text"]:focus,
input[type="date"]:focus,
input[type="number"]:focus,
textarea:focus {
  border-color: #27ae60; /* Change focus border color to darker green */
  outline: none;
}

/* Change submit button color */
button[type="submit"] {
  background-color: #2ecc71; /* Change button background color to green */
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}

/* Change submit button hover color */
button[type="submit"]:hover {
  background-color: #27ae60; /* Change hover background color to darker green */
}

  </style>
</head>
<body>
  <section id="header"> 
    <a href="#"><img src="bicons.jpg" class="logo" alt=""></a> 
    <div>
      <ul id="navbar">
        <li><a   href="thero.html">Home</a></li> 
        <li><a class="active" href="add.php">Festival add</a></li>
        <li><a href="update.php">Festival update</a></li>
        <li><a href="delete.php">Festival  delete</a></li>
        <li><a href="view.php">view seroms</a></li>
        <li><a href="manage.php">Manage donations</a></li>
      </ul>
    </div>   
  </section>
    <section id="page-header" class="about-header">
       
        <h2>#Fesivals</h2>
        
        <p>Enjoy and Calm</p>
        
    </section>
   
  <section id="st">
    <br><br>
     <form action="submit.php" method="post">
      <div>
        <label for="festivalName">Festival Name:</label>
        <input type="text" id="festivalName" name="festivalName" maxlength="100" required>
      </div>
      <div>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
      </div>
      <div>
        <label for="month">Month:</label>
        <input type="text" id="month" name="month" maxlength="20" required>
      </div>
      <div>
        <label for="location">Location:</label>
        <input type="text" id="location" name="location" maxlength="100" required>
      </div>
      <div>
        <label for="budget">Budget:</label>
        <input type="number" id="budget" name="budget" step="0.01" required>
      </div>
      <div>
        <label for="theme">Theme:</label>
        <input type="text" id="theme" name="theme" maxlength="100" required>
      </div>
      <div>
        <label for="activities">Activities:</label>
        <textarea id="activities" name="activities" rows="4" cols="50" required></textarea>
      </div>
      <div>
        <label for="userID">User ID:</label>
        <input type="number" id="userID" name="userID" required>
      </div>
      <button type="submit">Submit</button>
    </form>
  </section>
  <section id="n">
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
    </div>
  </footer>
</section>
  <script src="script.js"></script>
</body>

</html>

