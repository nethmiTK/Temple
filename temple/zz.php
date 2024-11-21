<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Details</title>
</head>
<body>

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

</body>
</html>
