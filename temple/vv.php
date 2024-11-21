 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Festival</title>
    <link rel="stylesheet" href="style.css">

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: darkblue;
        }
    </style>
</head>
<body>

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