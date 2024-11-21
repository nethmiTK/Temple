 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Form</title>
</head>
<body>
    <h1>Donation Form</h1>
    <form action="bb.php" method="post">
        <label for="donationAmount">Donation Amount:</label>
        <input type="number" id="donationAmount" name="donationAmount" step="0.01" required>
        <br>
        <label for="donationDate">Donation Date:</label>
        <input type="date" id="donationDate" name="donationDate" required>
        <br>
        <button type="submit">Submit Donation</button>
    </form>
</body>
</html>
