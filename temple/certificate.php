 <!DOCTYPE html>
<html>
<head>
    <title>Display Certificate</title>
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
        #cer {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 2, 0.1);
        margin-bottom: 20px;
        text-align: left; /* Align text to the left */
    }

    #cer p {
        font-family: Arial, sans-serif;
        font-size: 16px;
        line-height: 1.5;
        color: darkblue;
    }

    /* Style for the certificate image */
    #certificate-img {
        float: right; /* Float the image to the right */
        margin-left: 20px; /* Add some margin to the left of the image */
        max-width: 50%; /* Limit the image width to 50% of its container */
        height: auto; /* Maintain aspect ratio */
    }
</style>
</head>
<body bgcolor="red">
    <section id="header"> 
        <a href="#"><img src="bicons.jpg" class="logo" alt=""></a> 
        <div>
            <ul id="navbar">
                 <div>
            <ul id="navbar">
                <li><a  href="Donator.html">Home</a></li> 
                <li><a   href="do.php">Donations</a></li>
                <li><a class="active"  href="certificate.php">Cetificate</a></li>
                 <li><a href="cs.php">Contact</a></li>
             </ul>
        </div>  

             </ul>
        </div>   
    </section>
    <section id="heros">
           
        <h2>#donation</h2>
        
        <p>..........</p>
     </section>
     <section id="j">
         <h2> <font color="darkblue"><font style="viewport"></font> we weave threads of compassion into the fabric of humanity.</h2></font>
       <form action="2.php" method="post">
        <label for="donation_id">Donation ID:</label>
        <input type="text" id="donation_id" name="donation_id">
        <label for="reporting_value">re you need certificte?:</label>
        <select id="reporting_value" name="reporting_value">
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
        <input type="submit" value="Update">
    </form> 
    <section id="new-section">
    <div class="container">
        <div class="content">
            
            <p>  <font color="darkblue"> <h3>Donations are more than just financial transactions; they represent a collective commitment to positive change. Each contribution, regardless of its size, is a testament to the human capacity for empathy and generosity. It's a recognition that together, we can make a difference in the lives of others. Donations not only provide essential resources but also inspire hope, solidarity, and a shared vision for a better world. They serve as a reminder that compassion knows no boundaries and that every act of giving has the power to create ripple effects of kindness and transformation.</h3></font></p>
        </div>
        <div class="image">
            <img src="col.img" alt="New Image">
        </div>
    </div>
</section>


<?php
// Path to your certificate image
$imagePath = "c.jpg.png";

// Check if the file exists
if (file_exists($imagePath)) {

    echo '<img id="certificate-img" src="' . $imagePath . '" alt="Certificate Image">'; // Float the image to the right

    echo '<p>You can download your certificate now.  :</p>';
    // Form to input donation ID
    echo '<form action="download_certificate.php" method="post">';
     echo '  <input type="submit" value="Download Certificate">';
    echo '</form>';
} else {
    echo "Image not found.";
}
?>
</section>
<section id=cer>
    <p>We extend our heartfelt gratitude to all our generous donors whose unwavering support sustains our mission and fuels our efforts. Your contributions are invaluable, making a tangible difference in the lives of those we serve. Each donation signifies not only a financial commitment but also a vote of confidence in our cause. With your continued support, we can amplify our impact and reach even greater heights. Thank you for believing in our vision and for being champions of positive change.</p>
</section>

</body>
</html>
