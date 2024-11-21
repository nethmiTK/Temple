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
    body {
  background-color: #2ecc71; /* Set background color to green */
}

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
#pages {
  padding: 50px;
  background-color: #f9f9f9;
}

.content {
  max-width: 800px;
  margin: 0 auto;
}

h5 {
  font-size: 1.5em;
  color: #333;
  margin-bottom: 10px;
}

p {
  font-size: 1em;
  line-height: 1.6;
  color: darkblue;
  justify-content: left;

}


/* Additional styling for an attractive design */
#pages {
  border-radius: 10px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

h5 {
  font-weight: bold;
  animation-fill-mode: forwards;
 }
 @keyframes example {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

.element {
  width: 100px;
  height: 100px;
  background-color: red;
  animation-name: example;
  animation-duration: 20s;
  animation-fill-mode: both; /* Retains styles from last keyframe after animation */
}


p {
  margin-top: 20px;

}

/* Responsive design for smaller screens */
@media only screen and (max-width: 768px) {
  #pages {
    padding: 30px;
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
  <select id="month" name="month" required>
    <option value="">Select Month</option>
    <option value="January">January</option>
    <option value="February">February</option>
    <option value="March">March</option>
    <option value="April">April</option>
    <option value="May">May</option>
    <option value="June">June</option>
    <option value="July">July</option>
    <option value="August">August</option>
    <option value="September">September</option>
    <option value="October">October</option>
    <option value="November">November</option>
    <option value="December">December</option>
  </select>
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
   <section id="pages" class="about">
       
         
        <p style="float: left;"><h5>Enjoy and Calm </h5>The Harvest Festival is a time-honored tradition celebrated in rural communities around the world. It marks the culmination of months of hard work in the fields, as farmers gather to give thanks for the bounty of the land. In villages across the countryside, families come together to share in the abundance of freshly harvested crops. The air is filled with the scent of ripe fruits and vegetables, and colorful decorations adorn the streets. It's a time for feasting, laughter, and gratitude for nature's generosity. As the sun sets on the horizon, bonfires are lit, and folk songs are sung, creating a warm and joyful atmosphere that encapsulates the spirit of the harvest season.
        </p>  
        
    </section>
    <section id="view">
        
<h2>Festivals</h2>

 <form action="" method="GET">
    <label for="month">Select Month:</label>
    <select id="month" name="month">
        <option value="January">January</option>
        <option value="February">February</option>
        <option value="March">March</option>
        <option value="April">April</option>
        <option value="May">May</option>
        <option value="June">June</option>
        <option value="July">July</option>
        <option value="August">August</option>
        <option value="September">September</option>
        <option value="October">October</option>
        <option value="November">November</option>
        <option value="December">December</option>
    </select>
    <button type="submit">Search</button>
</form>
<table>
    <thead>
    <tr>
        <th>Festival ID</th>
        <th>Festival Name</th>
        <th>Date</th>
        <th>Month</th>
        <th>Location</th>
        <th>Budget</th>
        <th>Theme</th>
        <th>Activities</th>
        <th>User ID</th>
    </tr>
    </thead>
    <tbody>
</body>
</html>
<?php
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "temples";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if month is selected
    if(isset($_GET['month'])) {
        $selected_month = $_GET['month'];
        // Fetch data from database based on selected month
        $sql = "SELECT * FROM  festivals WHERE Month = '$selected_month'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["FestivalID"]."</td>";
                echo "<td>".$row["FestivalName"]."</td>";
                echo "<td>".$row["Date"]."</td>";
                echo "<td>".$row["Month"]."</td>";
                echo "<td>".$row["Location"]."</td>";
                echo "<td>".$row["Budget"]."</td>";
                echo "<td>".$row["Theme"]."</td>";
                echo "<td>".$row["Activities"]."</td>";
                echo "<td>".$row["UserID"]."</td>";
                echo "</tr>";
             }
        } else {
            echo "0 results";
        }
    }
?>
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

