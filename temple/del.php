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
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
            height: 100px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <section id="header"> 
        <a href="#"><img src="bicons.jpg" class="logo" alt=""></a> 
        <div>
            <ul id="navbar">
                <li><a  href="Devotee.html">Home</a></li> 
                <li><a class="active"  href="do.php">Donations</a></li>
                <li><a href="book.php">Book Sermons</a></li>
                 <li><a href="contact.php">Contact</a></li>
             </ul>
        </div>   
    </section>
    
    <section id="page-header" class="about-header">
       
        <h2>#festivals</h2>
        
        <p>Enjoy and calm</p>
        
    </section>
    <section id="start">
        <div class="container">
        <h2>Donation Form</h2>
        <form action="process_donation.php" method="post">
            <!-- DonorID field -->
            <label for="donor_id">Donor ID:</label>
            <input type="text" id="donor_id" name="donor_id" required>

            <label for="donor_name">Your Name:</label>
            <input type="text" id="donor_name" name="donor_name" required>

            <label for="donor_email">Your Email:</label>
            <input type="email" id="donor_email" name="donor_email" required>

            <label for="donation_purpose">Donation Purpose:</label>
            <input type="text" id="donation_purpose" name="donation_purpose" required>

            <label for="donation_amount">Donation Amount:</label>
            <input type="number" id="donation_amount" name="donation_amount" min="0.01" step="0.01" required>

            <label for="donation_date">Donation Date:</label>
            <input type="date" id="donation_date" name="donation_date" required>

            <label for="reporting">Reporting:</label>
            <select id="reporting" name="reporting" required>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>

            <input type="submit" value="Submit Donation">
        </form>
    </div>
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


